<?php
namespace yethrong\core\modular{

	use yethrong\includes\yethrong_pdodata;
		
	class yethrong_model extends yethrong_pdodata{
		/**
		 * 模板初始化程序
		 */
		public function init(string $views = null, string $table = null, int $primaryid = 0){
			self::connect();
		}
	}
}