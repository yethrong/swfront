<?php

namespace yethrong\core {

	if (! defined ( 'DIR_FRAM' ))
		die ( HACK_ATTEMPT );
	
	use yethrong\library\yethrong_address;
	
	/**
	 *
	 * @author 周立志
	 *        
	 */
	class yethrong_urlspath extends yethrong_address {
		
		/**
		 *
		 * @var 默认URLS http://web/index.php?y=/index/demo
		 */
		const URLS_DEFAULT = 1;
		
		/**
		 *
		 * @var 动态URLS http://web/index.php?c=index&m=demo
		 */
		const URLS_DYNAME = 2;
		
		/**
		 *
		 * @var 静态URLS http://web/index/demo.html
		 */
		const URLS_STATIC = 3;
		
		/**
		 *
		 * @var \PDO
		 */
		const DATA_PDO = 1;
		
		/**
		 *
		 * @var \mysqli
		 */
		const DATA_MYSQLI = 2;
		
		/**
		 *
		 * @var 语言模式：中文
		 */
		const LANG_CN = 'CN';
		
		/**
		 *
		 * @var 语言模式：英语
		 */
		const LANG_EN = 'EN';
		
		/**
		 *
		 * @var GB2312编码模式
		 */
		const CODE_GB2312 = 'gb2312';
		
		/**
		 *
		 * @var GBK编码模式
		 */
		const CODE_GBK = 'gbk';
		
		/**
		 *
		 * @var UTF8编码模式
		 */
		const CODE_UTF8 = 'utf-8';
		
		/**
		 *
		 * @param string $controller
		 * @param string $models
		 */
		private static $temp;
		
		/**
		 *
		 * @var string
		 */
		public static $configs = array ();
		
		/**
		 * 获取Session值 
		 *
		 * @param string $name
		 */
		public static function sessionGet(string $name) {
			return $_SESSION [$name] ?? false; // filter_input ( INPUT_SESSION, $name );
		}
		
		/**
		 * 设置Session的值 
		 *
		 * @param string $name
		 * @param string $value
		 */
		public static function sessionSet(string $name, string $value) {
			return $_SESSION [$name] = $value;
		}
		
		/**
		 * 检查 Session的值是否设置 
		 *
		 * @param string $name
		 */
		public static function sessionIsSet(string $name) {
			return isset ( $_SESSION [$name] );
		}
		
		/**
		 * 清空Session 
		 */
		public static function sessionClear() {
			return session_unset ();
		}
		
		/**
		 * 销毁 Session 
		 */
		public static function sessionDestroy() {
			return session_destroy ();
		}
		
		/**
		 * 判断 Cookie是否存在 静态方法 
		 *
		 * @param string $name
		 */
		public static function cookieIsSet(string $name) {
			return isset ( $_COOKIE [$name] );
		}
		
		/**
		 * 获取 Cookie的值 静态方法 
		 *
		 * @param string $name
		 */
		public static function cookieGet(string $name) {
			return $_COOKIE [$name] ?? false;
		}
		
		/**
		 * 设置 Cookie的值 静态方法 
		 *
		 * @param string $name
		 * @param string $value
		 * @param int $expire
		 * @param string $path
		 * @param string $domain
		 */
		public static function cookieSet(string $name, string $value, int $expire = COOKIE_TIME, string $path = "/", string $domain = null) {
			ob_init ();
			return setcookie ( $name, $value, ($expire == 0) ? null : time () + $expire, $path, $domain ?? $_SERVER ['HTTP_HOST']);
		}
		
		/**
		 * 删除 Cookie的值 静态方
		 *
		 * @param string $name
		 */
		public static function cookieDelete(string $name) {
			return setcookie ( $name );
		}
		
		/**
		 */
		protected static function readUrls($controller = null, $models = null, $views = null) {
			self::$temp = self::getAppsPath( URLS_TYPE );
			return self::getLocal ( $controller, $models, $views );
		}
		
		/**
		 */
		private static function getLocal($controller = null, $models = null, $views = null) {
			if (! defined ( 'HTTP_TYPE' ))  define('HTTP_TYPE', self::$configs['FM_SYSTEM']['Http_Type'] . '://' . (array_key_exists('DOMAIN', self::$configs) ? self::$configs['DOMAIN'] : filter_input(INPUT_SERVER, 'HTTP_HOST')) . DEL_SEPARATOR);
			self::$views = $views ?? ( self::$temp ['v'] ?? 'index');
			self::$models = $models ?? (self::$temp ['m']  ?? 'index');
			self::$control = $controller ?? (self::$temp ['c'] ?? 'index');
			//if (isset ( self::$temp ['param'] )) self::$param = self::$temp ['param'];
			self::$temp = NULL;
			return TRUE;
		}
	}
}