<?php
/**
 * 
 * @author 周立志
 * 数据模块处理类
 * 继承主控制器类 \model
 */
class ajaxtest_model extends model{
	
	/**
	 *
	 * @var ajaxtest_views
	 */
	protected $view;
	
	/**
	 * 数据模块构造函数
	 * @param string $table       数据表名
	 * @param string $primary_id  字段主键ID
	 */
	public function __construct($viewobj, string $table = null, int $primaryid = 0){
		$this->view = $viewobj;
	}
}