<?php
/**
 * 
 * @author 周立志
 * 控制器处理类
 * 继承主控制器类 \control
 */
class groupseting_control extends control {
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
	public function index(string $views = null, ...$param) {
		$this->view = self::V();
		$this->mode = self::M($this->view);
		$this->view->comsinfo($param);
	}
	public function get_datatable_list(string $views = null, ...$param) {
	    if(!$this->mode) $this->mode = self::M($this->view);
	    echo $this->mode->get_tableList();
	}
	public function get_editablelist_list(string $views = null, ...$param) {
	    if(!$this->mode) $this->mode = self::M($this->view);
	    $getcunction = $this->G('controlvale');
	    if($this->G('data-type') == 'getcontrol')     echo $this->mode->get_controllerhtml($getcunction,$this->G('postdata'));
	    else if($this->G('data-type') == 'attribute') echo $this->mode->get_hcontroldatas($getcunction);
	    else if($this->G('data-type') == 'select'){
	        $getcunction = 'get_'. $getcunction;
	        echo $this->mode->$getcunction();
	    }
	}
	public function put_editablelist_list(string $views = null, ...$param) {
	    if(!$this->mode) $this->mode = self::M($this->view);
	    $filedata = "就这么几句话，就将图片以二进制流的形式输出到客户端了，和打开一张图片没有任何区别，需要注意的是，发送的header要根据具体情况而定，不一定都是image/jpeg。JPG的是它，但PNG的就是image/png.不同的图片输出不同的头部。 ";
	    file_put_contents ( "/usr/WebSites/front/ss.txt", self::StrToBin(self::encrypt($filedata) ));
	}
	public function fieldetype(string $views = null, ...$param) {

	}
}