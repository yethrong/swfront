<?php
namespace yethrong\includes\interfaces{

	if (! defined ( 'DIR_BASE' ))
		die ( 'Hacking attempt' );
	/**
	 * @author 周立志
	 *
	 */
	interface yethrong_idecorator{
		/**
		 * @param array $param
		 */
		public function beforRequest ($value, array $param = null);
		/**
		 * @param array $param
		 */
		public function afterRequest ($value, array $param = null);
	}
}