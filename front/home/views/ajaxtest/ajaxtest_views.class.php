<?php
/**
 * 
 * @author 周立志
 * 视图模块处理类
 * 继承主控制器类 \views
 */
class ajaxtest_views extends views {

	/**
	 * 视图模块构造函数
	 * @param string $templpath 模板路径
	 * @param string $templates 模板名称
	 */
	public function __construct(string $templpath = null, string $templates = null){
	}
	public function comsinfo() {
	    $this->display();
	}
}