<?php

namespace yethrong\includes {

	/**
	 *
	 * @author 周立志
	 *        
	 */
	class yethrong_cache {
		/**
		 *
		 * @var integer
		 */
		public const DB_AUTO = 0;
		/**
		 *
		 * @var integer
		 */
		public const DB_PDO = 1;
		/**
		 *
		 * @var integer
		 */
		public  const DB_MYSQLI = 2;
		
		/**
		 *
		 * @var array
		 */
		const expstring = array (
			'eq' => '=',
			'neq' => '<>',
			'gt' => '>',
			'egt' => '>=',
			'lt' => '<',
			'elt' => '<=',
			'notlike' => 'NOT LIKE',
			'like' => 'LIKE',
			'in' => 'IN',
			'notin' => 'NOT IN',
			'not in' => 'NOT IN',
			'between' => 'BETWEEN',
	        'notbetween' => 'NOT BETWEEN',
			'not between' => 'NOT BETWEEN',
		);
		/**
		 *
		 * @var string
		 */
		const selectSql = 'SELECT %s %s FROM %s %s %s %s %s %s %s %s %s %s %s';
		/**
		 *
		 * @var string
		 */
		private static $cache_dir = DIR_CACHE . DEL_SEPARATOR . 'Cached';
		/**
		 *
		 * @var string
		 */
		private static $cache_extension = '.cache.php';
		/**
		 *
		 * @param string $name
		 * @param string $value
		 * @return boolean
		 */
		public static function setCache(string $name, $value) {

			// return $value;
			$pre = "< ?\n//Cache Created at: " . date ( 'Y-m-d H:i:s' ) . "\n";
			if (! is_array ( $value )) {
				$value = $value;
				$str = "\$$name = '$value';";
			} else {
				$str = "\$$name = " . self::arrayeval ( $value ) . ';';
			}
			$end = "\n?>";
			echo $cache = $pre . $str . $end;
			$cache_file = self::cache_dir . '/' . $name . self::cache_extension;

			if ($fp = @fopen ( $cache_file, 'wb' )) {
				fwrite ( $fp, $cache );
				fclose ( $fp );
				return $value;
			} else {
				echo $cache_file;
				exit ( 'Can not write to cache files, please check cache directory ' );
				return false;
			}
		}
		/**
		 *
		 * @param string $name
		 * @param string $value
		 * @return boolean
		 */
		public static function getCache(string $name, bool $tablecached = false) {
			return false;
		}

		// 将array变成字符串
		private static function arrayeval($array, int $level = 0) {
			if (! is_array ( $array )) {
				return "'" . $array . "'";
			}

			$space = '';
			for($i = 0; $i <= $level; $i ++) {
				$space .= "\t";
			}
			$evaluate = "Array\n$space(\n";
			$comma = $space;
			if (is_array ( $array )) {
				foreach ( $array as $key => $val ) {
					$key = is_string ( $key ) ? '\'' . addcslashes ( $key, '\'\\' ) . '\'' : $key;
					$val = ! is_array ( $val ) && (! preg_match ( "/^\-?[1-9]\d*$/", $val ) || strlen ( $val ) > 12) ? '\'' . addcslashes ( $val, '\'\\' ) . '\'' : $val;
					if (is_array ( $val )) {
						$evaluate .= "$comma$key => " . arrayeval ( $val, $level + 1 );
					} else {
						$evaluate .= "$comma$key => $val";
					}
					$comma = ",\n$space";
				}
			}
			$evaluate .= "\n$space)";
			return $evaluate;
		}
	}
}