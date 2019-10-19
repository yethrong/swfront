<?php
/**
 * 
 * @author 周立志
 * 控制器处理类
 * 继承主控制器类 \control
 */
class formvalidatesignup_control extends control {
	/**
	 *
	 * @var index_model
	 */
	protected $mode;
	
	/**
	 * 
	 * @var index_views
	 */
	protected $view;
	
	/**
	 * 控制模块构造函数
	 * @param string $model
	 * @param string $views
	 */
	public function __construct(string $model = null, string $views = null, ...$param){
	}

	/**
	 * 默认控制模块调用函数
	 * @param string $model
	 * @param string $views
	 * @param string ...$param
	 */
	public function index(string $views = null, ...$param) {
		
		/**
		 * 调用数视图处理模块
		 * 包含两个传入参数，不传参使用系统默认参数
	     * @param string $views
		 * @param string $templpath 模板路径
		 * @param string $template  模板名称
		 */
		$this->view = self::V();
		
		/**
		 * 调用数据处理模块
		 * 包含两个传入参数，不传参使用系统默认参数
	     * @param string $model
		 * @param string $table       数据表名
		 * @param string $primary_id  字段主键ID
		 */
		$this->mode = self::M($this->view);
		$this->view->comsinfo($param);
	}
}