<?php

namespace yethrong\library {

	use yethrong\core\yethrong_urlspath;

	if (! defined ( 'HACK_ATTEMPT' ))
		define ( 'HACK_ATTEMPT', json_decode ( '{"str":"' . "&#34429;&#28982;&#22269;&#38469;&#31354;&#38388;&#31449;&#26377;&#32593;&#32476;&#36830;&#25509;&#65292;&#20294;&#24037;&#20316;&#20154;&#21592;&#38750;&#24120;&#25285;&#24515;&#36825;&#26679;&#20250;&#25307;&#33268;&#20005;&#37325;&#30340;&#20449;&#24687;&#20002;&#22833;&#44;&#35831;&#25353;&#27491;&#24120;&#30340;&#25805;&#20316;&#37325;&#35797;&#65292;&#35874;&#35874;&#65281;" . '"}', true ) ['str'] );
	
	if (! defined ( 'DIR_FRAM' ))
		die ( HACK_ATTEMPT );
	
	/**
	 *
	 * @var 框架目录名称
	 *
	 */
	define ( 'FRAM_NAME', str_replace ( DIR_PATH, '', DIR_FRAM ) );
	/**
	 *
	 * @var 定义引擎目录名称
	 *
	 */
	if (! defined ( 'ENGINE_NAME' ))
		define ( 'ENGINE_NAME', 'Smarty' . DEL_SEPARATOR );
	
	/**
	 *
	 * @author 周立志
	 *        
	 */
	class yethrong_autoload {
		
		/**
		 *
		 * @var array
		 */
		private static $rootpath = array (
				DIR_FRAM 
		);
		
		/**
		 *
		 * @var array
		 */
		private static $rootfile = array ();
		
		/**
		 *
		 * @var array
		 */
		private static $rootplugins = array ();
		
		/**
		 */
		private static $unkonw = array ();
		static function setAppsPath($AppsPath) {
			self::$rootfile = array (
					$AppsPath . 'core' . DEL_SEPARATOR,
					$AppsPath . 'config' . DEL_SEPARATOR,
					$AppsPath . 'library' . DEL_SEPARATOR,
					$AppsPath . 'plugins' . DEL_SEPARATOR,
					$AppsPath . 'includes' . DEL_SEPARATOR,
					$AppsPath . 'includes' . DEL_SEPARATOR . 'error' . DEL_SEPARATOR ,
					$AppsPath . 'includes' . DEL_SEPARATOR. 'interface' . DEL_SEPARATOR ,
					DIR_FRONT . 'model' . DEL_SEPARATOR,
					DIR_FRONT . 'views' . DEL_SEPARATOR,
					DIR_FRONT . 'config' . DEL_SEPARATOR,
					DIR_FRONT . 'control' . DEL_SEPARATOR 
			);
		}
		
		/**
		 * 注册入口函数
		 *
		 * @param boolean $append
		 */
		static function register($append = false) {
			
			/**
			 * register the class autoloader
			 */
			if (! defined ( 'ENGINE_YET_AUTOLOAD' )) {
				define ( 'ENGINE_ET_AUTOLOAD', 0 );
			}
			if (ENGINE_ET_AUTOLOAD && set_include_path ( get_include_path () ) !== false) {
				$registeredAutoLoadEngine = spl_autoload_functions ();
				if (! isset ( $registeredAutoLoadEngine ['spl_autoload'] )) {
					spl_autoload_register ();
				}
			} else {
				
				if (version_compare ( phpversion (), '5.3.0', '>=' ))
					spl_autoload_register ( array (
							__CLASS__,
							'yethrong_autold' 
					), true, $append );
				else
					spl_autoload_register ( array (
							__CLASS__,
							'yethrong_autold' 
					) );
			}
		}
		
		/**
		 *
		 * @param string $class
		 */
		static private function yethrong_autold($class) {
			if (in_array ( $class, self::$unkonw, true ) || strpos ( DEL_SEPARATOR . $class, 'smarty_' )) {
				return;
			} else {
				self::$unkonw [] = $class;
			}
			$class = str_replace ( '\\', DEL_SEPARATOR, $class );
			if (is_file ( DIR_PATH . $class . '.class.php' )) {
				include_once DIR_PATH . $class . '.class.php';
				return;
			} elseif (is_file ( DIR_FRAM . 'engine' . DEL_SEPARATOR . ENGINE_NAME . DEL_SEPARATOR . $class . '.class.php' )) {
				include_once DIR_FRAM . 'engine' . DEL_SEPARATOR . ENGINE_NAME . $class . '.class.php';
				return;
			} else {
				self::setAppsPath ( self::$rootpath [0] );
				$path = array_merge_recursive ( self::$rootpath, self::$rootfile, array (
						DIR_FRONT 
				) );
				foreach ( $path as $value ) {
					if (is_file ( $value . $class . '.class.php' )) {
						include_once $value . $class . '.class.php';
						return;
					} elseif (is_file ( $value . yethrong_urlspath::$subPath . DEL_SEPARATOR . $class . '.class.php' )) {
						include_once $value . yethrong_urlspath::$subPath . DEL_SEPARATOR . $class . '.class.php';
						return;
					} elseif (is_file ( $value . yethrong_urlspath::$control . DEL_SEPARATOR .  yethrong_urlspath::$subPath . DEL_SEPARATOR . $class . '.class.php' )) {
					    include_once $value . yethrong_urlspath::$control . DEL_SEPARATOR .  yethrong_urlspath::$subPath . DEL_SEPARATOR . $class . '.class.php';
					    return;
					}
				}
			}
		}
	}
}