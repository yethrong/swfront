<?php

namespace yethrong\core {

	if (! defined ( 'DIR_FRAM' ))
		die ( HACK_ATTEMPT );
		
	if (is_file ( DIR_FRONT . 'config' . DEL_SEPARATOR . 'config.conf.php' ))
		yethrong_urlspath::$configs = array_merge ( yethrong_urlspath::$configs, include DIR_FRONT . 'config' . DEL_SEPARATOR . 'config.conf.php' );

	class yethrong_base extends yethrong_function {

		/**
		 * 入口函数
		 *
		 * @param string $contro
		 * @param string $model
		 * @param boolean $cache
		 * @return
		 */
		public static function display(string $contro = null, string $model = null, string $views = null, ...$param) {
			if ($return = self::P ( DIR_FRONT, $contro, $model )) return $return;
			else return self::C ( $contro, $model, $views, ...$param );
		}
	}
}