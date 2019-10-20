<?php
/**
 * 
 * @author 周立志
 * 数据模块处理类
 * 继承主控制器类 \model
 */
class get_datatable_list_model extends model{
	
	/**
	 *
	 * @var index_views
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
	public function get_tableList() {
	   $sdss='';
	   $result = array();
	   $this->stateMent = $this->prepare ( 'SHOW TABLES' );
	   $redata = $this->stateMent->fetchAll(PDO::FETCH_COLUMN);
	   $result ['rec_object'] = $_POST['rec_object'];
	   $result ['get_query'] = $_POST['get_query'];
	   $result ['content'][0] = " <label class='control-label caption'>关联数据表<span class='require'>*</span> </label>";
	   $result ['content'][0] .= " <select id ='selframdatatable' data-style='btn-white' data-selected-text-format='count'  data-live-search='true' class='selectpicker form-control required'>";
	   foreach ($redata as $var){
	       $sdss .= '<option data-icon="fa-list-alt"  value="none">' . $var . '</option> ';
	   }
	   $result ['content'][0] .= $sdss;
	   $result ['content'][0] .= " </select>";
	   if (empty ($result ['rec_object'] )) {
	       return $result ['content'];
	   } else {
	       return (json_encode ( $result ));
	   }
	}
}