<?php

namespace yethrong\core {

	if (! defined ( 'DIR_FRAM' ))
		die ( HACK_ATTEMPT );

	if (is_file ( DIR_FRAM . 'config' . DEL_SEPARATOR . 'yethrong_config.conf.php' ))
		yethrong_urlspath::$configs = include DIR_FRAM . 'config' . DEL_SEPARATOR . 'yethrong_config.conf.php';
	
	class yethrong_command extends yethrong_base {

		/**
		 *
		 * 框架入口
		 *
		 * @param string $contro
		 * @param string $model
		 * @param boolean $cache
		 */
		public static function init(string $control = null, string $model = null , string $views = null, ...$param) {
			if ($return = self::P ( DIR_FRAM, $control, $model ))
				return $return;
			else
				return self::display ($control, $model , $views, ...$param );
		}
	}
}