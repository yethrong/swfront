<?php

namespace yethrong\library {

	if (! defined ( 'DIR_FRAM' ))
		die ( HACK_ATTEMPT );
	
	/**
	 *
	 * @author 周立志
	 *        
	 */
	class yethrong_address {
		/**
		 *
		 * @var string
		 */
		public static $appsName = APPS_PATCH;

		/**
		 *
		 * @var string
		 */
		public static $subPath = 'index';

		/**
		 *
		 * @var string
		 */
		public static $control = 'index';

		/**
		 *
		 * @var string
		 */
		public static $models = 'index';

		/**
		 *
		 * @var string
		 */
		public static $views = 'index';

		/**
		 *
		 * @var string
		 */
		public static $param = array ();

		/**
		 *
		 * @var http://web/index.php?y=/index/demo
		 * @return mixed
		 */
		private static function getDefault(string $REQUEST_URI = null) {
			$getarray = self::daddslashes ( filter_input ( INPUT_GET, 'Y' ) ?? (filter_input ( INPUT_GET, 'y' ) ?? null));

			// if ($getarray) {
			/*
			 * $getarray = ltrim ( $getarray, '/' );
			 * $getarray = explode ( '/', $getarray );
			 */
			$getarray = self::setStatic ( $getarray );
			// }

			return $getarray;
		}

		/**
		 *
		 * @var http://web/index.php?c=index&m=demo
		 * @return mixed
		 */
		private static function getDyname(string $REQUEST_URI = null) {
			$getarray = array ();
			if ($getA = self::daddslashes ( filter_input ( INPUT_GET, 'A' ) ?? (filter_input ( INPUT_GET, 'a' ) ?? false)))
				$getarray ['a'] = $getA;
			if ($getC = self::daddslashes ( filter_input ( INPUT_GET, 'C' ) ?? (filter_input ( INPUT_GET, 'c' ) ?? null)))
				$getarray ['c'] = $getC;
			if ($getM = self::daddslashes ( filter_input ( INPUT_GET, 'M' ) ?? (filter_input ( INPUT_GET, 'm' ) ?? null)))
				$getarray ['m'] = $getM;

			self::checkEmpty ( $getarray );
			return $getarray;
		}

		/**
		 *
		 * @var http://web/index/demo/das/234/345/423.html
		 * @return mixed
		 */
		private static function getStatic(string $REQUEST_URI = null) {		 
			if (empty ( $REQUEST_URI )) {
				$PHP_SELF = filter_input ( INPUT_SERVER, 'PHP_SELF' );
				$REQUEST_URI = filter_input ( INPUT_SERVER, 'REQUEST_URI' );
				$getarray =  (strlen($REQUEST_URI) > strlen($PHP_SELF)) ? $REQUEST_URI : $PHP_SELF;
			} else { $getarray = $REQUEST_URI;}
			if(strstr($getarray,'-') || strstr($getarray,'XDEBUG')) return NULL;
			if ($getarray && filter_input ( INPUT_SERVER, 'REQUEST_URI' ) != filter_input ( INPUT_SERVER, 'SCRIPT_NAME' )) {
				$check_reader = str_replace ( '.php', '', filter_input ( INPUT_SERVER, 'SCRIPT_NAME' ) );
				$getarray = str_replace ( $check_reader, '', $getarray );
				$getarray = str_replace ( array ('.php','.html','.htm'), NULL, $getarray );
				$getarray = explode ( DEL_SEPARATOR , ltrim ( $getarray, DEL_SEPARATOR ) ); // array_reverse ( );
				$getvalue = array ();
				if(count($getarray) > 2){
					$getvalue['v']  = $getarray[count ( $getarray ) - 1];
					$getvalue['m'] = $getarray[count ( $getarray ) -2];
					unset( $getarray[count ( $getarray ) - 1]);
					unset( $getarray[count ( $getarray ) - 1]);
					$getvalue['c'] = implode(DEL_SEPARATOR,$getarray);
				}
				elseif(count($getarray) > 1){
					$getvalue['m'] = $getarray[count ( $getarray ) - 1];
					unset( $getarray[count ( $getarray ) - 1]);
					$getvalue['c'] = implode(DEL_SEPARATOR,$getarray);
				}
				else $getvalue['c'] = $getarray[0];
				$getarray = $getvalue;
			} else {
				$getarray = NULL;
			}
			self::checkEmpty ( $getarray );
			return $getarray;
		}

		/**
		 * 判断客户请求连续次数
		 */
		private static function reQuest(string $clientIP) {
			// 此处写计数器代码
			// \SeasLog::setLogger ( 'SYSLog' );
			// \SeasLog::log ( 'links', $clientIP );
			return APPS_DEBUG;
		}
		private static function checkEmpty(&$getarray) {
			if (empty ( $getarray ))         $getarray = array ();
			if (! isset ( $getarray ['c'] ) || $getarray ['c'] == '') $getarray ['c'] = self::$control;
			if (! isset ( $getarray ['m'] ) || $getarray ['m'] == '') $getarray ['m'] = self::$models;
			if (! isset ( $getarray ['v'] ) || $getarray ['v'] == '') $getarray ['v'] = self::$views;
		}
		public static function getAppsPath(int $urls_type = 3, $default = NULL) {
			if (self::reQuest ( $_SERVER ['HTTP_HOST'] )) {
				// 判断客户端连续访问次数，如超过限制，使用浏览器缓存
				header ( 'Cache-Control: public, max-age=' . CACHE_NUMS );
				header ( 'Expires: ' . gmdate ( 'D, d M Y H:i:s', time () + CACHE_TIME ) . ' GMT' ); // 设置页面缓存时间
				header ( 'Last-Modified: ' . gmdate ( 'D, d M Y H:i:s', time () ) . ' GMT' ); // 返回最后修改时间
				header ( 'Pragma: public' );
				header ( 'Etag:yethrong' ); // 返回标识，用于标识上次的确访问过(浏览器中存在缓存)
			}
			if ($urls_type == 1)        $getarray = self::getDefault ( $default );
			elseif ($urls_type == 2)    $getarray = self::getDyname ( $default );
			elseif ($urls_type == 3)    $getarray = self::getStatic ( $default );
			return $getarray;
		}

		/**
		 * 检查字符串安全
		 */
		public static function daddslashes($str) {
			 if (is_array ( $str )) return $str;
			else return ! get_magic_quotes_gpc () ? addslashes ( $str ) : $str;
		}
	}
}