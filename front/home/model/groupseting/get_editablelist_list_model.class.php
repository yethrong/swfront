<?php
/**
 * 
 * @author 周立志
 * 数据模块处理类
 * 继承主控制器类 \model
 */
class get_editablelist_list_model extends model{
	
	/**
	 *
	 * @var index_views
	 */
    protected $view;
    protected $controlid     = '';
    protected $issub         = false;
    protected $group         = array();
    protected $keyppo        = array();
    protected $listcontent   = array();
    protected $subcontent    = array();
    protected $controlseting = array(
        'selectlist'         => array('','selectpicker' => 'selectpicker','select2-multi-value' => 'select2multi'),
	    'hascolors'          => array('','has-success' => 'has-success','has-warning' => 'has-warning','has-error' => 'has-error'),
	    'colmdlist'          => array('','col-md-1','col-md-2','col-md-3','col-md-4','col-md-5','col-md-6','col-md-7','col-md-8','col-md-9','col-md-10','col-md-11','col-md-12'),
	    'labelcolorlist'     => array('','label-default','label-primary','label-red','label-orange','label-green','label-yellow','label-blue','label-violet','label-pink','label-grey','label-dark','label-success','label-warning','label-danger','label-info',),
	    'textscolorlist'     => array('','caption-default' => 'caption-default','caption-primary' => 'caption-primary','caption-red' => 'caption-red','caption-orange' => 'caption-orange','caption-green' => 'caption-green','caption-yellow' => 'caption-yellow','caption-blue' => 'caption-blue','caption-pink' => 'caption-pink','caption-default' => 'caption-pink','caption-grey' => 'caption-grey','caption-dark' => 'caption-dark','caption-success' => 'caption-success','caption-warning' => 'caption-warning','caption-danger' => 'caption-danger','caption-info' => 'caption-info',),
	    'btncolorlist'       => array('','btn-default' => 'btn-default','btn-primary' => 'btn-primary','btn-success' => 'btn-success','btn-info' => 'btn-info','btn-warning' => 'btn-warning','btn-danger' => 'btn-danger','btn-red' => 'btn-red','btn-orange' => 'btn-orange','btn-green' => 'btn-green','btn-yellow' => 'btn-yellow','btn-default' => 'btn-default','btn-blue' => 'btn-blue','btn-violet' => 'btn-violet','btn-pink' => 'btn-pink','btn-grey' => 'btn-grey','btn-dark' => 'btn-dark','btn-white' => 'btn-white'),
	);
	/**
	 * 数据模块构造函数
	 * @param string $table       数据表名
	 * @param string $primary_id  字段主键ID
	 */
	public function __construct($viewobj, string $table = null, int $primaryid = 0){
		//$this->view = $viewobj;
	}
	public function get_tablelist() {
	    return (json_encode (array("0" =>"", "1"=>"SSBelgium", "2"=>"Burkina Faso", "3"=>"Bulgaria", "4"=>"Bosnia and Herzegovina", "5"=>"Barbados")));
	}
	public function get_fieldelist() {
	    return (json_encode (array("0" =>"", "1"=>"SSBelgium", "2"=>"Burkina Faso", "3"=>"Bulgaria", "4"=>"Bosnia and Herzegovina", "5"=>"Barbados")));
	}
	public function get_hascolors() {
	    return (json_encode ($this->controlseting['hascolors']));
	}
	public function get_colmdlist() {
	    return (json_encode ($this->controlseting['colmdlist']));
	}
	public function get_selectlist() {
	    return (json_encode ($this->controlseting['selectlist']));
	}
	public function get_btncolorlist() {
	    return (json_encode ($this->controlseting['btncolorlist']));
	}
	public function get_labelcolorlist() {
	    return (json_encode ($this->controlseting['labelcolorlist']));
	}
	public function get_textlcolorlist() {
	    return (json_encode ($this->controlseting['textscolorlist']));
	}
	public function get_fieldetypelist() {
	    return (json_encode (array('字符','布尔','整型','长整型','单精度浮点','双精度浮点','小数值','日期','时间','年份','日期时间','短文本 ','长文本','极大文本','二进制数据','二进制大数据')));
	}
	public function get_edittypelist() {//email,password,url,number
	    return (json_encode (array('','url' => 'url','email' => 'email','password' => 'password','number' => 'number','color' => 'color','file' => 'file','submit' => 'submit','hidden' => 'hidden')));
	}
	public function get_attrietypelist() {
	    return (json_encode (array("0" =>"", "1"=>"SSBelgium", "2"=>"Burkina Faso", "3"=>"Bulgaria", "4"=>"Bosnia and Herzegovina", "5"=>"Barbados")));
	}
	public function get_hcontroldatas(string $controlname) {
	    if(!is_file(DIR_CONFIG . 'controll/' . $controlname . '_conf.php')) return'正在等待...';
	    $contrpanel =  include DIR_CONFIG . 'controll/' . $controlname . '_conf.php';
	    return $this->get_control_attribute($contrpanel,0,$this->keyppo);
	}
	//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	public function get_controllerhtml(string $controlname,string $postdata) {
	    if(!is_file(DIR_CONFIG . 'controll/' . $controlname . '_conf.php')) return'正在等待...';
	    $contrpanel =  include DIR_CONFIG . 'controll/' . $controlname . '_conf.php';
	    if (!empty($postdata)) {
	            $matches = array();
        	    $postdata= str_replace('\"', '', $postdata);
        	    preg_match_all('/(\d{1,}),(.+?)\]/', $postdata,$matches); 
        	    if(is_array($matches)){
        	        unset($matches[0]);
        	        $this->get_contrpanel($contrpanel, $matches);
        	    }
	    }
	    return $this->get_control_html($contrpanel,'',$this->group,$this->issub,$this->subcontent,$this->listcontent);
	}
	//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	private function get_contrpanel(array &$contrpanel, array &$matches) {
	    foreach ($contrpanel AS &$var){
            if(is_array($var)){
                if(isset($var['controlid']) && array_search($var['controlid'], $matches[1]) > -1){
                    $index = array_search($var['controlid'], $matches[1]);
                    if(isset($var['value'])) {
                        $var['value'] = $matches[2][$index];
                        if($var['fixed']  < 2) $var['fixed']  = $matches[2][$index] == '0' ? 0 : 1;
                    }
                    elseif($var['fixed']  < 2) $var['fixed']  = $matches[2][$index] == '0' ? 0 : 1;
                }
                $this->get_contrpanel($var, $matches);
	        }
	    }
	}
	//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	private function get_control_attribute(array $param, int $step = 0, array &$keylist = array(),  string $content  = '') {
	    $initset = 0;
	    if($step == 0){$content .= "<table id='usercontrol' targettable='' class='table table-bordered table-striped' style='margin-bottom: 5px;'><tbody>";}
	    foreach ($param as $key => $var){
	        $initset++;
	        if(!is_array($var)) continue;
	        if(!isset($keylist[$key]))  $keylist[$key] = array();
	        if($var['controltype'] == 'subcontrol' || $var['controltype'] == 'class') {
	            if(isset($var['subtitle']))
	                if($var['fixed'] < 2) $content .= "\r\n<tr id= '" . $var['controlid'] . "'><th colspan='2'>" . $var['subtitle'] . "&nbsp;&nbsp;&nbsp;&nbsp;<a id='" . $var['controlid'] . "'controlname='id" . $var['controlid'] . "' controlvale='" . $var['controltype'] . "' href='#' data-type='select' data-value='" . $var['fixed'] . "' data-title='设置' class='editable editable-click editsubcontrol' style='float: right;'></a></th> </tr>";
	                else                           $content .= "\r\n<tr id= '" . $var['controlid'] . "'><th colspan='2'>" . $var['subtitle'] . "&nbsp;&nbsp;&nbsp;&nbsp;</th> </tr>";
	            $content .= $this->get_control_attribute($var, $var['controlid']??$step+1 , $keylist[$key]);
	        }
	        else{
	            if(isset($var['caption']) ){
	                $content .= "\r\n<tr><td width='35%'>" . $var['caption'] . "</td> ";
	                if($var['controltype'] == 'text')          $content .= "<td><a id='" . $var['controlid'] . "' parentid= '" . (string) $step . "'controlname='" . $key . "' controlvale='" . $var['controltype'] . "' href='#' data-type='text'     data-value='" . $var['value'] . "'  data-title='设置 " . $var['caption'] . "' class='editable editable-click editabletextdata'>". $var['value'] . "</a></td>";
	                elseif($var['controltype'] == 'empt')      $content .= "<td><a id='" . $var['controlid'] . "' parentid= '" . (string) $step . "'controlname='" . $key . "' controlvale='" . $var['controltype'] . "' href='#' data-type='text' data-value='" . $var['value'] . "'  data-title='设置 " . $var['caption'] . "' class='editable editable-click editableemptdata'>". $var['value'] . "</a></td>";
	                elseif($var['controltype'] == 'bool')      $content .= "<td><a id='" . $var['controlid'] . "' parentid= '" . (string) $step . "'controlname='" . $key . "' controlvale='" . $var['controltype'] . "' href='#' data-type='select' data-value='" . $var['value'] . "'  data-title='设置 " . $var['caption'] . "' class='editable editable-click editablebooldata'>". $var['value'] . "</a></td>";
	                elseif($var['controltype'] == 'icon')      $content .= "<td><a id='" . $var['controlid'] . "' parentid= '" . (string) $step . "'controlname='" . $key . "' controlvale='" . $var['controltype'] . "' href='#' data-value='" . $var['value'] . "' class='selecticonlist' data-toggle='modal' data-target='#modal-wide-icon' >请点击更换&nbsp;&nbsp;<i class='fa " . $var['value'] . "'></i></a></td>";
	                elseif($var['controltype'] == 'name')      $content .= "<td><a id='" . $var['controlid'] . "' parentid= '" . (string) $step . "'controlname='" . $key . "' controlvale='" . $var['controltype'] . "' href='#' data-type='text'     data-value='" . $var['value'] . "'  data-title='设置 " . $var['caption'] . "' class='editable editable-click editabletextdata'>". $var['value'] . "</a></td>";
	                elseif($var['controltype'] == 'numb')      $content .= "<td><a id='" . $var['controlid'] . "' parentid= '" . (string) $step . "'controlname='" . $key . "' controlvale='" . $var['controltype'] . "' href='#' data-type='text'    data-value='" . $var['value'] . "'  data-title='设置 " . $var['caption'] . "' class='editable editable-click editabletextdata'>". $var['value'] . "</a></td>";
	                elseif($var['controltype'] == 'cusetlist'){
	                    if((bool)$var['fixed'])                $content .= "<td><a id='" . $var['controlid'] . "' parentid= '" . (string) $step . "'controlname='" . $key . "' controlvale='" . $var['controltype'] . "' href='#' data-type='select' data-value='" . $var['value'] . "'  cusetlist = '". $var['value'] . "' data-title='设置 " . $var['caption'] . "' class='editable editable-click editablefixedata'>". $var['value'] . "</a></td>";
	                    else                                   $content .= "<td><a id='" . $var['controlid'] . "' parentid= '" . (string) $step . "'controlname='" . $key . "' controlvale='" . $var['controltype'] . "' href='#' data-type='select' data-value='" . $var['value'] . "'  cusetlist = '". $var['value'] . "' data-title='设置 " . $var['caption'] . "' class='editable editable-click editablecusedata'>". $var['value'] . "</a></td>";
	                }
	                else                                       $content .= "<td><a id='" . $var['controlid'] . "' parentid= '" . (string) $step . "'controlname='" . $key . "' controlvale='" . $var['controltype'] . "' href='#' data-type='select' data-value='" . $var['value'] . "'  data-title='设置 " . $var['caption'] . "' class='editable editable-click editablelistdata'>". $var['value'] . "</a></td>";
	                $content .= "</tr>";
	            }
	        }
	    }
	    if($step == 0){
	        $content .= '</tbody></table>';
	    }
	    return $content;
	}
	//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	private function get_control_html (array $param, string $parentkey = '',  array &$group  ,  bool &$issub , array &$subcontent, array &$listcontent ,string $content  = ''){
	    foreach ($param AS $key => $var){
	        if(is_array($var)) {
	            if(isset($var['end'])){
	                if($issub) {
	                    $sublastname = array_flip($group);
	                    $sublastname = end($sublastname);
	                    if($listcontent[$var['end']])
	                        $subcontent[$sublastname] .= "</$var[end]> ";
	                }
	                else{
	                    if(array_key_exists($var['end'],$group)){
	                        if($group[$var['end']]) {
	                            $content = str_replace("{" . $var['end'] . "}", $subcontent[$var['end']], $content);
	                            $content .= "</$var[end]> ";
	                        }
	                        else {
	                            unset($group[$var['end']]);
	                            unset($listcontent[$var['end']]);
	                            unset($subcontent[$var['end']]);
	                            $content = str_replace("{" . $var['end'] . "}", '', $content);
	                        }
	                    }
	                    else $content .= "</$var[end]> ";
	                }
	            }
	            else if($issub && isset($var['groupend'])){
	                $issub =  false;
	            }elseif(isset($var['controltype']) && $var['controltype'] === 'subcontrol'){
	                $thecontent = $this->get_control_html($var,$var['subname'],$group,$issub,$subcontent,$listcontent);
	                if($var['subname'] === 'class'){ // 'format' => 'fa {fa}',
	                    if(isset($var['format']))  {
	                        $content .= str_replace("{".$this->controlid."}",$thecontent, $var['format']);
	                    }
	                    else $content .= " class = '" . $thecontent . "'";
	                }
	                else{
	                    if(!$issub) {
	                        $issub = isset($var['groupstart']);
	                        if($issub && !isset($group[$var['subname']])) {
	                            $subcontent[$var['subname']] = '';
	                            $content .=  "{" . $var['subname'] . "}";
	                            $group[$var['subname']] = $var['fixed'];
	                        }
	                    }
	                    $listcontent[$var['subname']] = $var['fixed'];
	                    if($var['fixed']){
	                        if($issub) {
	                            $sublastname = array_flip($group);
	                            $sublastname = end($sublastname);
	                            if(!isset($subcontent[$sublastname])) $subcontent[$sublastname] = '';
	                            $subcontent[$sublastname]  .=  "<$var[subname] id = '$var[controlid]-" . md5(time() . mt_rand(1,1000000)) . "' id$var[controlid]= '$var[fixed]' ".  $thecontent . ">";
	                        }
	                        else{
	                            $content .=  "<$var[subname] id = '$var[controlid]-" . md5(time() . mt_rand(1,1000000))  . "' id$var[controlid]= '$var[fixed]' ".  $thecontent . ">";
	                        }
	                    }
	                }
	            }elseif(isset($var['fixed']) && $var['fixed']){
	                $this->controlid = $key;
	                $sublastname = array_flip($group);
	                $sublastname = end($sublastname);
	                if($parentkey === 'class')  {
	                    $content .=  ' <!--' . $var['controlid']  . '--> ' . $var['value'];
	                }
	                elseif($var['fixed'] === 3 )  {
	                    if($issub)  $subcontent[$sublastname]  .= '<!--' . $var['controlid']  . '--> ' . $var['value'];
	                    else                          $content .= '<!--' . $var['controlid']  . '--> ' . $var['value'];
	                }
	                elseif(isset($var['value']) && $var['value'] != '0' && !empty($var['value']) && $var['value'] != ' ') {
	                    $content .= " $key = '$var[value]'";
	                }
	            }
	        }
	    }
	    return  $content;
	}
	//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	private function unset_array(&$param) {
	    $is_frist = true;
	    foreach (array_reverse($param) as $key=> &$val) {
	        if($is_frist) {$this->unset_array($val);}
	        else{
	            unset($param[$key]);
	        }
	        $is_frist = false;
	    }
	}
	//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	private function get_control_keylist(array $param, &$keylist ) {
	    //$keylist = array();
	    //echo get_control_attribute($combox,$keylist);
	    //print_r ($keylist);
	    foreach ($param as $key => $var){
	        if(is_array($var)) {
	            if(!isset($keylist[$key]))  $keylist[$key] = array();
	            get_control_attribute($var, $keylist[$key]);
	        }
	    }
	}
}