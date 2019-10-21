<?php
// php >= 7
// PHP 标准错误处理 捕获级别
error_reporting(E_ALL);
// 是否将 标准错误处理 捕获的错误回显在 stdout 上
ini_set('display_errors', false);
// 开启错误日志
ini_set('log_errors', true);
// 如果错误日志路径无效 display_errors 依然会强制打开
ini_set('error_log', __DIR__ . '/php-errors.log');

/**
 * set_error_handler 用户自定义错误 handler
 * 能够捕获 E_WARNING E_NOTICE E_DEPRECATED E_USER_* E_STRICT 级的错误
 * 无法捕获 E_ERROR E_PARSE E_CORE_* E_COMPILE_* [DivisionByZeroError TypeError] 级的错误
 */
set_error_handler(function ($error_no, $error_msg, $error_file, $error_line) {
    switch ($error_no) {
        case E_WARNING:
            // x / 0 错误 PHP7 依然不能很友好的自动捕获 只会产生 E_WARNING 级的错误
            // 捕获判断后 throw new DivisionByZeroError($error_msg)
            // 或者使用 intdiv(x, 0) 方法 会自动抛出 DivisionByZeroError 的错误
            if (strcmp('Division by zero', $error_msg) == 0) {
                throw new \DivisionByZeroError($error_msg);
            }

            $level_tips = 'PHP Warning: ';
            break;
        case E_NOTICE:
            $level_tips = 'PHP Notice: ';
            break;
        case E_DEPRECATED:
            $level_tips = 'PHP Deprecated: ';
            break;
        case E_USER_ERROR:
            $level_tips = 'User Error: ';
            break;
        case E_USER_WARNING:
            $level_tips = 'User Warning: ';
            break;
        case E_USER_NOTICE:
            $level_tips = 'User Notice: ';
            break;
        case E_USER_DEPRECATED:
            $level_tips = 'User Deprecated: ';
            break;
        case E_STRICT:
            $level_tips = 'PHP Strict: ';
            break;
        default:
            $level_tips = 'Unkonw Type Error: ';
            break;
    }

    // do some handle
    $error = $level_tips . $error_msg . ' in ' . $error_file . ' on ' . $error_line;
    echo $error . PHP_EOL;

    // or throw a ErrorException back to try ... catch block
    // throw new \ErrorException($error);

    // 如果 return false 则错误会继续递交给 PHP 标准错误处理
    // return false;
}, E_ALL | E_STRICT);

/**
 * set_exception_handler 用户自定义捕获异常 handler
 * 异常没有被 try ...
 * catch ... 捕获处理的话会被抛出
 * 此时系统会检查上下文是否注册了 set_exception_handler
 * 如果未注册 则进入 PHP 标准异常处理 致命错误退出执行
 * 如果已注册 则进入 set_exception_handler 处理 程序依然会退出执行
 * 而 try ... catch ... 捕获异常后仍不会退出执行
 * 故强烈建议将有异常的执行逻辑放入 try ... catch 中
 */
set_exception_handler(function ($exception) {
    echo $exception;
    // 此处程序会退出执行 异常到此结束 并不会交给 PHP 标准异常处理
});

// type error demo
function foo(): int
{
    return 'result type error';
}

// 捕获 E_ERROR E_PARSE 级的 Error
// 捕获 Exception
try {
    // 加载外部文件的正确写法
    $file = __DIR__ . '/bar.inc.php';
    if (file_exists($file)) {
        require_once $file;
    } else {
        throw new Exception($file . ' not exists!');
    }

    // ParseError 解析错误
    // bar.inc.php 的内容要有基本的语法错误: <?php echo 'some syntax error'

    // ArgumentCountError extends TypeError PHP >= 7.1.0
    // strlen 参数错误
    echo strlen('hello world', 4);

    // TypeError 类型错误
    // foo 要求的返回类型为 int 但 return 了 string 类型错误
    foo();

    // DivisionByZeroError extends ArithmeticError
    // x / 0 会抛出 E_WARNING 的异常 但不会自动抛出 DivisionByZeroError
    // 我们可以使用 set_error_handler 进行捕获然后手动抛出 DivisionByZeroError
    1 / 0;
    // Integer Divison 等同于 1 / 0 可以直接抛出 DivisionByZeroError
    intdiv(1, 0);
    // 除 0 取余 可以直接抛出 DivisionByZeroError
    1 % 0;

    // ArithmeticError 错误
    intdiv(PHP_INT_MIN, - 1);

    // AssertionError 断言错误
    assert('1 != 1');

    // 调用未定义的函数 错误级别：E_ERROR
    bar();
} catch (\ErrorException $errorException) {
    // 错误异常
    // 最常用的就是将那几个非致命的错误捕获后 ErrorException 回抛到 try ... catch 中
    echo 'ErrorException: ' . $errorException . PHP_EOL;
} catch (\Exception $exception) {
    // 异常
    echo 'Exception: ' . $exception . PHP_EOL;
} catch (\ParseError $parseError) {
    // 解析错误 语法错误
    echo 'Parse Error: ' . $parseError . PHP_EOL;
} catch (\ArgumentCountError $argumentCountError) {
    // 传参非法错误 php >= 7.1.0
    echo 'Argument Count Error: ' . $argumentCountError . PHP_EOL;
} catch (\TypeError $typeError) {
    // 类型错误 返回值
    echo 'Type Error: ' . $typeError . PHP_EOL;
} catch (\DivisionByZeroError $divisionByZeroError) {
    // x / 0 不抛出 x % 0 可以抛出
    // x / 0 可以用 intdiv(x, 0) 代替 会抛出
    echo 'Division By Zero Error: ' . $divisionByZeroError . PHP_EOL;
} catch (\ArithmeticError $arithmeticError) {
    // 算数运算错误 intdiv(PHP_INT_MIN, -1) 触发
    echo 'Arithmetic Error: ' . $arithmeticError . PHP_EOL;
} catch (\AssertionError $assertionError) {
    // 断言错误
    echo 'Assertion Error: ' . $assertionError . PHP_EOL;
} catch (\Error $error) {
    // 基本错误
    echo 'Error: ' . $error . PHP_EOL;
}

echo "run finished!" . PHP_EOL;