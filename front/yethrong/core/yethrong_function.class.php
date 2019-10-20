<?php

namespace yethrong\core {

	if (! defined ( 'DIR_FRAM' )) die ( HACK_ATTEMPT );
	
	/**
	 *
	 * @var 响应缓存时间
	 */
	if (! defined ( 'CACHE_NUMS' ))
		define ( 'CACHE_NUMS', 5 );
	/**
	 *
	 * @var 响应缓存时间
	 */
	if (! defined ( 'CACHE_TIME' ))
	    define ( 'CACHE_TIME', self::$configs ['EG_SYSTEM'] ['Cache_Time'] ?? 3600);
	/**
	 *
	 * @var 应用缓存开关
	 */
	if (! defined ( 'CACHE_APPS' ))
	    define ( 'CACHE_APPS', self::$configs ['EG_SYSTEM'] ['SmartyCaching'] ?? FALSE);
	/**
	 *
	 * @var 文件缓存开关
	 */
	if (! defined ( 'CACHE_FILE' ))
	    define ( 'CACHE_FILE', self::$configs ['EG_SYSTEM'] ['FilesCaching'] ?? FALSE);

	/**
	 *
	 * @var 数据缓存FALSE
	 */
	if (! defined ( 'CACHE_TABLE' ))
	    define ( 'CACHE_TABLE', self::$configs ['EG_SYSTEM'] ['DatasCaching'] ?? FALSE);

	/**
	 *
	 * @var COOKIE有效时间
	 *
	 */
	if (! defined ( 'COOKIE_TIME' ))
	    define ( 'COOKIE_TIME', self::$configs ['EG_SYSTEM'] ['Cookie_Time'] ?? 3600);
	/**
	 *
	 * @var 文件编码模式
	 *
	 */
	if (! defined ( 'CODE_MODE' ))
	    define ( 'CODE_MODE', self::$configs ['EG_SYSTEM'] ['Code_mode'] ?? yethrong_urlspath::CODE_UTF8);
	header ( 'Content-Type:text/html;charset=' . CODE_MODE );

	/**
	 *
	 * @var 程序路径模式
	 *
	 */
	if (! defined ( 'URLS_TYPE' ))
	    define ( 'URLS_TYPE', self::$configs ['EG_SYSTEM'] ['Urls_Type'] ?? yethrong_urlspath::URLS_STATIC);
	/**
	 *
	 * @var 数据库链接方式
	 *
	 */
	if (! defined ( 'LINK_DATA' ))
	    define ( 'LINK_DATA', self::$configs ['EG_SYSTEM'] ['Link_Data'] ?? yethrong_urlspath::DATA_PDO);

	/**
	 *
	 * @var 程序语言模式
	 *
	 */
	if (! defined ( 'LANG_MODE' ))
	    define ( 'LANG_MODE', self::$configs ['EG_SYSTEM'] ['Lang_Mode'] ?? yethrong_urlspath::LANG_CN);
		
	/**
	 *
	 * @author 周立志
	 *        
	 */
	class yethrong_function extends yethrong_core {

		/**
		 *
		 * @var \control
		 */
		protected static $controlThis = null;

		/**
		 *
		 * @var \model
		 */
		protected static $modelThis = null;

		/**
		 *
		 * @var \views
		 */
		protected static $viewsThis = null;

		/**
		 *
		 * @param string $contro
		 * @param string $model
		 * @param bool $enginecache
		 * @param bool $filecache
		 * @param ...$param
		 * @return \control
		 */
		public static function C(string $control = null, string $model = null, string $views = null, ...$param) {
			self::getUrls ( $control, $model, $views );
			if (! empty ( $param ))  self::$param = array_merge ( self::$param, $param );

			$fengechar = '_';
			$controller = self::$control;
			if (strstr ( $controller, '\\' )) $fengechar = '\\';
			else if (strstr ( $controller, DEL_SEPARATOR )) $fengechar = DEL_SEPARATOR;
			$controlobj = explode ( $fengechar, $controller );
			 self::$control = $controlobj[0];
			if (count ( $controlobj ) > 0) {
				self::$control = $controlobj [count ( $controlobj ) - 1];
				unset ( $controlobj [count ( $controlobj ) - 1] );
			}
			self::$subPath = str_replace ( $fengechar, DEL_SEPARATOR, implode ( $fengechar, $controlobj ) );
			
			self::checkpath ( 'control', self::$subPath, self::$control );
			
			if (APPS_DEBUG  && CACHE_APPS) { ob_start ();  ob_end_clean (); }
			
			$controllerclass = self::$control . '_control';
			self::$controlThis = new $controllerclass ( self::$models  , self::$views , self::$param );

			self::$controlThis->init ( self::$models  , self::$views , self::$param );
			self::$controlThis->coms (self::$models  ,  self::$views , self::$param );

			if (method_exists ( self::$controlThis, self::$models )) {
				$model =  self::$models;
				self::$controlThis->$model ( self::$views  , self::$param );
			}

			if (APPS_DEBUG  && CACHE_APPS) { $controlobj = ob_get_contents (); ob_end_flush(); ob_implicit_flush(1); }
			// \SeasLog::setLogger ( 'FUNLog' );
			// \SeasLog::log ( 'funcs', 'controller:' . $controller . ' model:' . $model . ' cache:' . ($cache ? 'true' : 'false') . ' filecache:' . ($filecache ? 'true' : 'false') );
			return self::$controlThis;
		}

		/**
		 *
		 * @param string $model
		 * @param string $table
		 * @param int $primary_id
		 * @return \model
		 */
		public static function M($viewobj, string $table = null, int $primaryid = 0) {
		    
			$table = $table ?? self::$models;
			$modelclass = self::$models . '_model';
			self::checkpath ( 'model', self::$control . DEL_SEPARATOR . self::$subPath, self::$models );

			self::$modelThis = new $modelclass ($viewobj, $table, $primaryid );
			self::$modelThis->init (self::$views, $table, $primaryid );
			self::$modelThis->coms (self::$views , $table, $primaryid );

			return self::$modelThis;
		}

		/**
		 *
		 * @param string $view
		 * @param string $templ
		 * @return \views
		 */
		public static function V(string $templpath = null, string $templates = null) {

		    $templpath = $templpath ?? self::$control . DEL_SEPARATOR .  self::$subPath;
		    $templates = $templates ?? self::$views;

			self::checkpath ( 'views', $templpath, $templates);
			self::checkpath ( 'template', $templpath , 'content');
			self::checkpath ( 'content', $templpath, $templates );
			
			$viewsclass = $templates . '_views';
			self::$viewsThis = new $viewsclass ($templpath, $templates);
			self::$viewsThis->init ( $templpath, $templates );
			self::$viewsThis->coms( $templpath, $templates );

			return self::$viewsThis;
		}

		/**
		 * 输入获取
		 *
		 * @param string $name
		 * @param bool $post
		 * @return string
		 */
		public static function G(string $name, bool $post = TRUE) {
			if ($post) {
				return self::daddslashes ( $_POST [$name] ?? ''); // yethrong_address::daddslashes ( filter_input ( INPUT_POST, $name ) );
			} else {
			    return self::daddslashes ( $_GET [$name] ?? ''); // filter_input ( INPUT_GET, $name );//yethrong_address::daddslashes ( );
			}
		}

		/**
		 * 插件调用
		 *
		 * @param string $dirpath
		 * @param string $clasname
		 * @param string $function
		 * @param mixed ...$param
		 */
		public static function P(string $dirpath = DIR_FRAM, string $clasname = null, string $function = null) {
			$controller = '\yethrong\plugins\yethrong_' . $clasname;
			if (is_file ( $dirpath . 'plugins' . DEL_SEPARATOR . $clasname . '_plugins' . '.class.php' ))
				return $controller::index ();
			else
				return false;
		}
	}
}