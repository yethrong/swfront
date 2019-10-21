<?php
namespace yethrong\plugins{
    class yethrong_loging{
        private static $config = array(
            'path' => '',
            'time' => '',
            'type' => array('TRACE','DEBUG','FATAL','ERROR','WARNING','INFO','VERBOSE',),
            'format' => '[%datetime{%Y-%M-%d %H:%m:%s}] %logger.%level | %msg',
        );
		public static function index(){
			var_dump('yethrong_loging');

			return TRUE;
		}
	}
}
