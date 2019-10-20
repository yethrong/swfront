<?php

namespace yethrong {

	use yethrong\core\yethrong_command;

	/**
	 *
	 * @var 调试开关
	 */
	if (! defined ( 'APPS_DEBUG' )) define ( 'APPS_DEBUG', TRUE );

	/**
	 *
	 * @var 应用目录名称
	 */
	if (! defined ( 'APPS_PATCH' )) define ( 'APPS_PATCH', 'home/' );

	/**
	 *
	 * @var 模板文件及数据表前缀
	 */
	if (! defined ( 'APPS_PREFIXES' )) define ( 'APPS_PREFIXES', '' );

	/**
	 *
	 * @var 路径分隔符
	 */
	if (! defined ( 'DEL_SEPARATOR' )) define ( 'DEL_SEPARATOR', '/' );

	/**
	 *
	 * @var 程序框架目录
	 *
	 */
	define ( 'DIR_FRAM', str_replace ( '\\', DEL_SEPARATOR, __DIR__ ) . DEL_SEPARATOR );

	/**
	 *
	 * @var 程序根目录
	 *
	 */
	define ( 'DIR_PATH', str_replace ( '\\', DEL_SEPARATOR, dirname ( DIR_FRAM ) ) . DEL_SEPARATOR );

	/**
	 *
	 * @var 应用程序目录
	 */
	define ( 'DIR_FRONT', DIR_PATH . APPS_PATCH );

	/**
	 *
	 * @var 自动模板类
	 *
	 */
	if (! class_exists ( 'yethrong_autoload' )) {
		include DIR_FRAM . 'library/yethrong_autoload.class.php';
		\yethrong\library\yethrong_autoload::register ();
	}
	
	/**
	 * 
	 * @author 周立志
	 *
	 */
	class yethrong extends yethrong_command {
		/**
		 *
		 * @var yethrong
		 */
		private static $yethrong;
		private function __construct() {}

		/**
		 *
		 * @return yethrong
		 */
		public static function run(string $control = null, string $model = null, string $views = null, ...$param) {
			if (! self::$yethrong) {
				self::$yethrong = new self ();
			}
			self::$yethrong::init ( $control, $model, $views );
		}
	}
}