<?php

namespace yethrong\core {

	if (! defined ( 'DIR_FRAM' ))
		die ( HACK_ATTEMPT );

	/**
	 *
	 * @var 模板文件及数据表前缀
	 */
	if (! defined ( 'APPS_PREFIXES' ))
		define ( 'APPS_PREFIXES', NULL );

	/**
	 *
	 * @var 应用程序根目录
	 */
	if (! defined ( 'WEBS_ROOT' )) {
		$scriptarr = explode ( '/', filter_input ( INPUT_SERVER, 'SCRIPT_NAME' ) );
		define ( 'WEBS_ROOT', DEL_SEPARATOR . (isset ( $scriptarr [2] ) ? $scriptarr [1] . DEL_SEPARATOR : '') );
	}

	/**
	 *
	 * @var 应用程序主目录
	 */
	if (! defined ( 'WEBS_APPS' )) define ( 'WEBS_APPS', WEBS_ROOT . APPS_PATCH );
	
	/**
	 */
	if (! defined ( 'WEBS_DATA' ))
		define ( 'WEBS_DATA', WEBS_APPS . yethrong_urlspath::$configs ['EG_SYSTEM'] ['Data_Dir'] . DEL_SEPARATOR );

	/**
	 */
	if (! defined ( 'WEBS_CONFIG' ))
		define ( 'WEBS_CONFIG', WEBS_APPS . yethrong_urlspath::$configs ['EG_SYSTEM'] ['Config_Dir'] . DEL_SEPARATOR );

	/**
	 */
	if (! defined ( 'WEBS_PLUGINS' ))
		define ( 'WEBS_PLUGINS', WEBS_APPS . yethrong_urlspath::$configs ['EG_SYSTEM'] ['Plugins_Dir'] . DEL_SEPARATOR );

	/**
	 */
	if (! defined ( 'WEBS_TEMPLATE' ))
		define ( 'WEBS_TEMPLATE', WEBS_APPS . yethrong_urlspath::$configs ['EG_SYSTEM'] ['Template_Dir'] . DEL_SEPARATOR );

	/**
	 */
	if (! defined ( 'WEBS_RESOURES' ))
		define ( 'WEBS_RESOURES', WEBS_APPS . yethrong_urlspath::$configs ['EG_SYSTEM'] ['Resoure_Dir'] . DEL_SEPARATOR );
	/**
	 *
	 * @var 应用根目录
	 */
	if (! defined ( 'DIR_ROOT' ))
		define ( 'DIR_ROOT', str_replace ( WEBS_ROOT . FRAM_NAME, DEL_SEPARATOR, DIR_FRAM ) );

	/**
	 *
	 * @var 应用数据目录
	 */
	if (! defined ( 'DIR_DATA' ))
		define ( 'DIR_DATA', dirname ( DIR_PATH ) . WEBS_DATA );

	/**
	 *
	 * @var 应用配置目录
	 */
	if (! defined ( 'DIR_CONFIG' ))
		define ( 'DIR_CONFIG', dirname ( DIR_PATH ) . WEBS_CONFIG );

	/**
	 *
	 * @var 应用插件目录
	 */
	if (! defined ( 'DIR_PLUGINS' ))
		define ( 'DIR_PLUGINS', dirname ( DIR_PATH ) . WEBS_PLUGINS );

	/**
	 *
	 * @var 应用模板目录
	 */
	if (! defined ( 'DIR_TEMPLATE' ))
		define ( 'DIR_TEMPLATE', dirname ( DIR_PATH ) . WEBS_TEMPLATE );
	/**
	 *
	 * @var 应用资源目录
	 */
	if (! defined ( 'DIR_RESOURES' ))
		define ( 'DIR_RESOURES', dirname ( DIR_PATH ) . WEBS_RESOURES );

	/**
	 *
	 * @var 应用控制器目录
	 */
	define ( 'DIR_CONTROLL', DIR_FRONT . 'control' . DEL_SEPARATOR );

	/**
	 *
	 * @var 应用模型目录
	 */
	define ( 'DIR_MODEL', DIR_FRONT . 'model' . DEL_SEPARATOR );

	/**
	 *
	 * @var 应用模型目录
	 */
	define ( 'DIR_VIEWS', DIR_FRONT . 'views' . DEL_SEPARATOR );

	/**
	 *
	 * @var 应用日志目录
	 */
	if (! defined ( 'DIR_LOGS' ))  define ( 'DIR_LOGS', DIR_FRONT . 'Logs' . DEL_SEPARATOR );

	/**
	 *
	 * @var 应用缓存目录
	 */
	if (! defined ( 'DIR_CACHE' ))
		define ( 'DIR_CACHE', DIR_FRONT . yethrong_urlspath::$configs ['EG_SYSTEM'] ['Cache_Dir'] . DEL_SEPARATOR );

	/**
	 *
	 * @var 应用编译目录
	 */
	if (! defined ( 'DIR_COMPILED' ))
		define ( 'DIR_COMPILED', DIR_FRONT . yethrong_urlspath::$configs ['EG_SYSTEM'] ['Compiled_Dir'] . DEL_SEPARATOR );

	/**
	 *
	 * @var 调试模式
	 */
	if (! defined ( '_DEBUG' ))
		define ( '_DEBUG', (in_array ( strtolower ( $_SERVER ['SERVER_NAME'] ), array (
				'localhost'
		), true )) && (defined ( 'APPS_DEBUG' )) ? true : false );
	/**
	 *
	 * @author 周立志
	 * @var self
	 */
	class yethrong_core extends yethrong_urlspath {
	    
	    /**
	     * 
	     * 缓存文件列表
	     * @var array;
	     */
	    public static $cacheFile = array();
	    
		/**
		 * 数据回传预留变量
		 *
		 * @var mixed
		 */
	    
		public $return;

		/**
		 * 数据回传预留静态变量
		 *
		 * @var mixed
		 */
		public static $returnStatic;

		/**
		 * 判断数据表是否修改
		 */
		public static function dataModify(array $DBconfig) {
			return false;
		}

		/**
		 * 返回默认回调数据
		 */
		private static function cachedCallback($matcd) {
			return $matcd [0];
		}
		protected function dirListTree( &$arr_file, $directory, $isFiled = FALSE, $dir_name = '') {
			$mydir = dir ( $directory );
			while ( $file = $mydir->read () ) {
				if ((is_dir ( "$directory/$file" )) and ($file != ".") and ($file != "..")) {
					$arr_file [] = "$dir_name/$file";
					$this->dirListTree ($arr_file, $directory . DEL_SEPARATOR . $file, $isFiled, $dir_name . DEL_SEPARATOR . $file );
				} else if ($isFiled && ($file != ".") & ($file != "..")) {
					$arr_file [] = "$dir_name/$file";
				}
			}
			$mydir->close ();
		}
		/**
		 * 应用程序文件及路径检查
		 *
		 * @param string $moudetype
		 * @param string $filepath
		 * @param string $filename
		 * @return boolean
		 */
		public static function checkpath(string $moudetype, string $filepath, string $filename) {
			$return = FALSE;

			$dirsty = DIR_FRONT . $moudetype . DEL_SEPARATOR . $filepath;
			$dested = $dirsty . DEL_SEPARATOR . $filename . '_' . $moudetype . '.class.php';
			if($moudetype == 'template' || $moudetype == 'content') {
			    $dirsty = DIR_FRONT . 'template' . DEL_SEPARATOR . $filepath;
			    $dested = $dirsty . DEL_SEPARATOR . $filename . '.tpl';
			}
			$source = DIR_FRAM . 'core' . DEL_SEPARATOR . 'modular' . DEL_SEPARATOR . 'template' . DEL_SEPARATOR . 'index_' . $moudetype . '.dwt';

			if (! is_file ( $source )) return $return;
			if (! is_dir ( $dirsty )) self::creatPath ( DIR_FRONT . $moudetype . DEL_SEPARATOR . $filepath );

			if (! is_file ( $dested )) {
				$filedata = file_get_contents ( $source );
				$filedata = str_replace ( '@classname_control', self::$control . '_control', $filedata );
				$filedata = str_replace ( '@classname_model', self::$models . '_model', $filedata );
				$filedata = str_replace ( '@classname_views', self::$views . '_views', $filedata );
				$filedata = str_replace ( '@model', self::$models, $filedata );
				if(file_put_contents ( $dested, $filedata )) {
					@chmod($dested,0777);
					$return = true;
				}
			}
			return $return;
		}

		/**
		 * 文件路径构造函数
		 *
		 * @param string $dir
		 */
		private static function creatPath(string $dir) {
			if (is_dir ( $dir ) || @mkdir ( $dir )) {
				@chmod($dir,0777);
			} else {
				$dirArr = explode ( '/', $dir );
				array_pop ( $dirArr );
				$newDir = implode ( '/', $dirArr );
				self::creatPath ( $newDir );
				if (@mkdir ( $dir )) {
					@chmod($dir,0777);
				}
			}
		}
		/**
		 * 搜索文件内容并且使用一个回调进行替换
		 */
		public static function unidCached($cachedfile, $pattern, $cachedcall = 'cachedcallback') {
			if (is_file ( $cachedfile )) {
				$filedata = file_get_contents ( $cachedfile );
				$filedata = preg_replace_callback ( $pattern, array (__CLASS__,$cachedcall), $filedata );
				file_put_contents ( $cachedfile, $filedata );
			}
		}

		/**
		 * 数据加密程序
		 *
		 * @param string $data
		 * @param string $key
		 * @return string
		 */
		public static function encrypt($string = '', $skey = null) {
			$skey = $skey ?? self::$configs ['FM_SYSTEM'] ['Secret_Key'];
			$strArr = str_split ( base64_encode ( $string ) );
			$strCount = count ( $strArr );
			foreach ( str_split ( $skey ) as $key => $value )
				$key < $strCount && $strArr [$key] .= $value;
			return str_replace ( array ('=','+','/'), array ('x58rtxctfv','x3bg235hj3','ft85hux'), join ( '', $strArr ) );
		}
		/**
		 * 数据解密程序
		 *
		 * @param string $str
		 * @param string $key
		 */
		public static function decrypt($string = '', $skey = null) {
			$skey = $skey ?? self::$configs ['FM_SYSTEM'] ['Secret_Key'];
			$strArr = str_split ( str_replace ( array ('x58rtxctfv','x3bg235hj3','ft85hux'), array ('=','+','/'), $string ), 2 );
			$strCount = count ( $strArr );
			foreach ( str_split ( $skey ) as $key => $value )
				$key <= $strCount && isset ( $strArr [$key] ) && $strArr [$key] [1] === $value && $strArr [$key] = $strArr [$key] [0];
			return base64_decode ( join ( '', $strArr ) );
		}
		
		/**
		 *
		 * @param string $controller
		 * @param string $models
		 */
		public static function getUrls($controller = null, $models = null, $views = null) {
			self::appsInit();
			return self::readUrls ( $controller, $models, $views );
		}
		
		public static function StrToBin($str){
		    //1.列出每个字符
		    $arr = preg_split('/(?<!^)(?!$)/u', $str);
		    //2.unpack字符
		    foreach($arr as &$v){
		        $temp = unpack('H*', $v);
		        $v = base_convert($temp[1], 16, 2);
		        unset($temp);
		    }
		    
		    return join(' ',$arr);
		}
		public static function BinToStr($str){
		    $arr = explode(' ', $str);
		    foreach($arr as &$v){
		        $v = pack("H".strlen(base_convert($v, 2, 16)), base_convert($v, 2, 16));
		    }
		    return join('', $arr);
		}
		private static function appsInit(){
			if (! is_dir ( DIR_CONTROLL )){
				var_dump(DIR_CONTROLL);
			}
		}
	}
}