<?php
/* Smarty version 3.1.33, created on 2019-10-19 00:28:07
  from '/var/www/html/front/home/template/groupseting/meta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da9e817008821_14418580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c03280ed2eda9e92c79a7e2f380d2c74307b0f5d' => 
    array (
      0 => '/var/www/html/front/home/template/groupseting/meta.tpl',
      1 => 1570876337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da9e817008821_14418580 (Smarty_Internal_Template $_smarty_tpl) {
?>            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side" >
               <div id="form-layouts" class="sidebar-collapse menu-scroll " style="height: auto;margin-top: -50px;">
                            <ul class="nav ul-edit nav-tabs responsive">
                                <li id = 'form-layouts-sub1'  iscloed =0  class="active"><a href="#tab-form-actions" data-toggle="tab">组件管理</a> </li>
                                <li id = 'form-layouts-sub2'  ><a href="#tab-two-columns" data-toggle="tab">表单管理</a> </li>
                            </ul>
                    <div class="clearfix"></div>
                    <input id='selectframcolor' type='color' value='#0a819c' style='height:10px; width:0px;border: 1px solid; visibility:hidden;' conname="">
	                <div style="background: transparent; border: 0; box-shadow: none !important; margin: 5px;margin-top: -12px !important;" class="tab-content pan mtl mbn responsive">
		                    <div id="tab-form-actions" class="tab-pane fade active in">
		                       	<ul id="side-menu" class="nav " style="list-style-type:none;"><li></li>
			                        <li><a href="#"><i class="fa fa-desktop fa-fw"><div class="icon-bg bg-pink"></div></i><span class="menu-title">基本元件</span><span class="fa arrow"></span></a>
			                            <ul class="nav nav-second-level in">
			                                <li><a href="#" class = "controlmang" controlvale="progress"><i class="fa fa-columns"></i><span class="submenu-title">进  度  条</span></a>  </li>
			                                <li><a href="#" class = "controlmang" controlvale="delimiter"><i class="fa fa-link"></i><span class="submenu-title">分  隔  符</span></a> </li>
			                                <li><a href="#" class = "controlmang" controlvale="edittext"><i class="fa fa-angle-double-left"></i><span class="submenu-title">文本输入</span></a> </li>
			                                <li ><a href="#" class ="controlmang" controlvale="combox"><i class="fa fa-align-right"></i><span class="submenu-title">下拉列表</span></a> </li>
			                                <li><a href="#" class = "controlmang" controlvale="checkbox"><i class="fa fa-header"></i><span class="submenu-title">单复选框</span></a> </li>
			                                <li><a href="#" class = "controlmang" controlvale="buttons"><i class="fa fa-h-square"></i><span class="submenu-title">按钮元件</span></a>  </li>
			                                <li><a href="#" class = "controlmang" controlvale="datetime"><i class="fa fa-magnet"></i><span class="submenu-title">日期时间</span></a> </li>
			                                <li><a href="#" class = "controlmang" controlvale="cursorbox"><i class="fa fa-eye-slash"></i><span class="submenu-title">滑标元件</span></a> </li>
			                                <li><a href="#" class = "controlmang" controlvale="labelbox"><i class="fa fa-paperclip"></i><span class="submenu-title">标签元件</span></a>  </li>
			                                <li><a href="#" class = "controlmang" controlvale="treebox"><i class="fa fa-align-left"></i><span class="submenu-title">树形列表</span></a> </li>
			                            </ul>
			                        </li>
			                        <li><a href="#"><i class="fa fa-send-o fa-fw"><div class="icon-bg bg-green"></div></i><span class="menu-title">表单组件</span><span class="fa arrow"></span></a>
			                            <ul class="nav nav-second-level" >
			                                <li><a href="ui-buttons.html"><i class="fa fa-hand-o-up"></i><span class="submenu-title">Buttons</span></a>
			                                </li>
			                                <li><a href="ui-tabs.html"><i class="fa fa-trello"></i><span class="submenu-title">Tabs</span></a>
			                                </li>
			                                <li><a href="ui-progressbars.html"><i class="fa fa-ellipsis-h"></i><span class="submenu-title">Progress Bars</span></a>
			                                </li>
			                                <li><a href="ui-typography.html"><i class="fa fa-font"></i><span class="submenu-title">Typography</span></a>
			                                </li>
			                                <li><a href="ui-modals.html"><i class="fa fa-list-alt"></i><span class="submenu-title">Modals</span></a>
			                                </li>
			                                <li><a href="ui-sliders.html"><i class="fa fa-arrows-h"></i><span class="submenu-title">Sliders</span></a>
			                                </li>
			                                <li><a href="ui-icons.html"><i class="fa fa-tint"></i><span class="submenu-title">Icons</span></a>
			                                </li>
			                                <li><a href="ui-checkbox-radio.html"><i class="fa fa-dot-circle-o"></i><span class="submenu-title">Checkbox & Radio</span></a>
			                                </li>
			                                <li><a href="ui-panels.html"><i class="fa fa-th-large"></i><span class="submenu-title">Panels</span></a>
			                                </li>
			                            </ul>
			                        </li>
			                        <li><a href="#"><i class="fa fa-edit fa-fw"><div class="icon-bg bg-violet"></div></i><span class="menu-title">图形组件</span><span class="fa arrow"></span></a>
			                            <ul class="nav nav-second-level">
			                                <li><a href="form-layouts.html"><i class="fa fa-columns"></i><span class="submenu-title">Form Layouts</span></a>
			                                </li>
			                                <li><a href="form-basic.html"><i class="fa fa-file-text-o"></i><span class="submenu-title">Form Basics</span></a>
			                                </li>
			                                <li><a href="form-components.html"><i class="fa fa-cube"></i><span class="submenu-title">Form Components</span></a>
			                                </li>
			                                <li><a href="form-xeditable.html"><i class="fa fa-edit"></i><span class="submenu-title">Form X-editable</span></a>
			                                </li>
			                                <li><a href="form-wizard.html"><i class="fa fa-magic"></i><span class="submenu-title">Form Wizard</span></a>
			                                </li>
			                                <li><a href="form-validation.html"><i class="fa fa-exclamation"></i><span class="submenu-title">Form Validation</span></a>
			                                </li>
			                                <li><a href="form-multiple-file-upload.html"><i class="fa fa-upload"></i><span class="submenu-title">Multiple File Upload</span></a>
			                                </li>
			                                <li><a href="form-dropzone-file-upload.html"><i class="fa fa-cloud-upload"></i><span class="submenu-title">Dropzone File Upload</span></a>
			                                </li>
			                            </ul>
			                        </li>
			                        <li><a href="#"><i class="fa fa-th-list fa-fw"><div class="icon-bg bg-blue"></div></i><span class="menu-title">表格组件</span><span class="fa arrow"></span></a>
			                            <ul class="nav nav-second-level">
			                                <li><a href="table-basic.html"><i class="fa fa-th-large"></i><span class="submenu-title">Basic Tables</span></a>
			                                </li>
			                                <li><a href="table-responsive.html"><i class="fa fa-tablet"></i><span class="submenu-title">Responsive Tables</span></a>
			                                </li>
			                                <li><a href="table-action.html"><i class="fa fa-tencent-weibo"></i><span class="submenu-title">Action Tables</span></a>
			                                </li>
			                                <li><a href="table-filter.html"><i class="fa fa-filter"></i><span class="submenu-title">Filter Tables</span></a>
			                                </li>
			                                <li><a href="table-advanced.html"><i class="fa fa-indent"></i><span class="submenu-title">Advanced Tables</span></a>
			                                </li>
			                                <li><a href="table-export.html"><i class="fa fa-paperclip"></i><span class="submenu-title">Table Export</span><span class="label label-yellow">v2.1</span></a>
			                                </li>
			                                <li></li>
			                                <li><a href="table-editable.html"><i class="fa fa-edit"></i><span class="submenu-title">Jeditable</span><span class="label label-blue">v2.0        </span></a>
			                                </li>
			                                <li><a href="table-datatables.html"><i class="fa fa-list-alt"></i><span class="submenu-title">DataTables</span><span class="label label-pink">v2.0</span></a>
			                                </li>
			                                <li><a href="table-sample.html"><i class="fa fa-table"></i><span class="submenu-title">Sample Tables</span></a>
			                                </li>
			                            </ul>
			                        </li>
			                        <li><a href="#"><i class="fa fa-rocket fa-fw"><div class="icon-bg bg-green"></div></i><span class="menu-title">自定组件</span><span class="fa arrow"></span></a>
			                            <ul class="nav nav-second-level">
			                                <li><a href="ui-preloader.html"><i class="fa fa-spinner"></i><span class="submenu-title">Preloader</span><span class="label label-yellow">v4.1</span></a>
			                                </li>
			                                <li><a href="ui-editors.html"><i class="fa fa-edit"></i><span class="submenu-title">Editors</span></a>
			                                </li>
			                                <li><a href="ui-nestable-list.html"><i class="fa fa-list-ol"></i><span class="submenu-title">Nestable List</span></a>
			                                </li>
			                                <li><a href="ui-dropdown-select.html"><i class="fa fa-level-down"></i><span class="submenu-title">Dropdown Select</span><span class="label label-yellow">v2.1</span></a>
			                                </li>
			                                <li><a href="ui-notific8-notifications.html"><i class="fa fa-exclamation-circle"></i><span class="submenu-title">Notific8 & Message</span><span class="label label-blue">v2.1</span></a>
			                                </li>
			                                <li><a href="ui-toastr-notifications.html"><i class="fa fa-exclamation-triangle"></i><span class="submenu-title">Toastr Notifications</span></a>
			                                </li>
			                                <li><a href="ui-treeview.html"><i class="fa fa-tasks"></i><span class="submenu-title">Tree View</span></a>
			                                </li>
			                            </ul>
		                        	</li>
		                        </ul> 
		                     </div>
		                     <div id="tab-two-columns" class="tab-pane fade ">
									<div class="portlet box portlet-wite small" controlvale = "panel" >
		                                <div class="portlet-body" style="padding: 2px;">
			                                <div id="accordion1" class="panel-body pan panel-group ">
			                                <div class="panel panel-default">
			                                    <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">表单属性</a>
		                                                <div style="float: right;margin: -1px;">
		                                                   <button type="button"  class="btn"   style="padding: 1px 6px;font-size: 12px;">恢复</button>
		                                                   <button type="button" class="btn btn-violet" style="padding: 1px 6px;font-size: 12px;">保存</button>
                                        				</div>
			                                    </div>
			                                    <div id="collapseOne1" class="panel panel-collapse collapse in" style="margin-bottom: -12px;">
			                                        <div class="panel-body" style="padding: 4px;">
														<table id="user" class="table table-bordered table-striped" style="margin-bottom: 5px;">
					                                        <tbody>
																<tr>
					                                                <td width="35%">表单名称</td>
					                                                 <td><a id='selframname' href="#" data-type="text" data-title="请输入新的表单名" class="editable editable-click editabletextdata"></a></td>
					                                            </tr>
					                                            <tr>
					                                                <td data-target="#modal-wide-width" data-toggle="modal">表单图标</td>
					                                                 <td><a id="eff688a6117506c7b1e2a1b3a56c1dda" class="selecticonlist" href="#" data-toggle="modal" data-target="#modal-wide-icon" >请点击更换&nbsp;&nbsp;<i class="fa fa-credit-card"></i></a></td>
					                                            </tr>
					                                            <tr>
					                                                <td>表单类型</td>
					                                                 <td><a id="selframtype" href="#" data-type="select"  data-value="" data-title="设置按钮状态" class="editable editable-click" data-original-title=""  title="请选择表单类型">模板表单</a></td>
					                                            </tr>
					                                            <tr id = "selframdata_tr">
					                                                <td>数据绑定</td>
					                                                 <td><a id="selframdata" href="#" class="editable editable-click" data-toggle="modal" data-target="#modal-sql-config">无</a></td>
					                                            </tr>
					                                            <tr id = "selframaling_tr">
					                                                <td>排列设置</td>
					                                                <td><a id="selframaling" href="#" data-type="select" data-value=""  data-title="设置按钮状态" class="editable editable-click editselframaling" data-original-title="" title=""></a>&nbsp;&nbsp;
		                                                   					<button type="button"  class="btn btn-primary"  title="清理无效控件面板..."  style="padding: 1px 6px;font-size: 12px; ">清理</button>
					                                                </td>
					                                            </tr>
																<tr>
																	<th colspan="2">表头设置</th>
																 </tr>
					                                            <tr>
					                                                <td>表单页头</td>
					                                                 <td><a id="selframhead" href="#" data-type="select" data-value="1" data-title="设置表单页头" class="editable editable-click workselfram" data-original-title="" title=""></a></td>
					                                            </tr>
					                                            <tr id = "selframcolor_tr">
					                                                <td>标题颜色</td>
					                                                 <td><a id="selframcolor" class='selectframcolorclick' href='#' style='color:#0a819c;'>颜色</a></td>
					                                            </tr>
																<tr id = "selframanert_tr">
																	<th colspan="2">按钮设置</th>
																 </tr>
					                                            <tr id = "selframmin_tr">
					                                                <td>缩小按钮</td>
					                                                <td><a id="selframmin" href="#" data-type="select" data-value="1" data-title="设置按钮状态" class="editable editable-click workselfram" data-original-title="" title=""></a></td>
					                                            </tr>
					                                            <tr id = "selframclose_tr">
					                                                <td>关闭按钮</td>
					                                                <td><a id="selframclose" href="#" data-type="select" data-value="1"  data-title="设置按钮状态" class="editable editable-click workselfram" data-original-title="" title=""></a></td>
					                                            </tr>
					                                            <tr id = "selframbtnlist_tr">
					                                                <td>设置按钮</td>
					                                                <td><a id="selframbtnlist" href="#" data-type="select" controlvale="attrietypelist" data-value=""  data-title="选择设置按钮弹出窗体" class="editable editable-click editablelistdata" data-original-title="" title=""></a></td>
					                                            </tr>
					                                            <tr id = "selframreflash_tr">
					                                                <td>刷新按钮</td>
					                                                <td><a id ="selframreflash" href="#" data-type="select" data-value="0"  data-title="设置按钮状态" class="editable editable-click" data-original-title="" title=""></a></td>
					                                            </tr>
					                                            <tr id = "selframfullScreen_tr">
					                                                <td>全屏按钮</td>
					                                                <td><a id="selframfullScreen" href="#" data-type="select" data-value="0" data-title="设置按钮状态" class="editable editable-click workselfram" data-original-title="" title=""></a></td>
					                                            </tr>
					                                        </tbody>
					                                    </table>
													</div>
			                                </div>
			                                </div>
			                                <div class="panel panel-default">
			                                    <div class="panel-heading"> <a  id = 'control-attri'  getcontrol = "columns-1" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">控件属性</a>
		                                                <div style="float: right; margin: -1px;">
		                                                   <button type="button" class="btn btn-green" disabled="disabled" style="padding: 1px 6px;font-size: 12px;" title="新建数据表..."  >建表</button>
		                                                   <button type="button" class="btn btn-red" disabled="disabled" style="padding: 1px 6px;font-size: 12px;" title="删除该控件后不可恢复..."  >删除</button>
                                        				</div> </div>
			                                    <div id="collapseTwo1" class="panel panel-collapse collapse" style="margin-bottom: -12px;">
			                                        <div class="panel-body" style="padding: 4px;">
			                                     
													</div>
			                                   </div>
	                    				</div>
			                                <div class="panel panel-default">
			                                    <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">表单列表</a>
			                                    </div>
			                                    <div id="collapseThree1"  class="panel panel-collapse collapse" style="margin-bottom: -12px;">
			                                        <div class="panel-body" style="padding: 4px;">
			                                        		
													</div>
			                                    </div>
			                                </div>
			                          </div>
								</div> 
					         </div>
				          </div>
                    </div>
               </div>
           </nav>
            <!--END SIDEBAR MENU-->
            <!--BEGIN MODAL CONFIG PORTLET-->
            <div id="modal-sql-config" class="modal fade">
          		 <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                               <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                               <h4 id="modal-prompt-label" class="modal-title">请设置MYSQL数据源</h4>
                           </div>
                           <div class="modal-body sql_list">
                                   <form action="#" class="form-group"  >
                                       <div class="form-group" style="display:none;">
                                           <label for="" class="control-label">服务器地址 <span class='require'>*</span> </label>
                                           <input id = "selframsername" type="text" name="username1" minlength="2" maxlength="30" placeholder="请输入服务器名称或IP地址" class="form-control required" />
                                       </div>
                                       <div class="form-group" style="display:none;"> 
                                           <label for="" class="control-label">数据库名称<span class='require'>*</span>
                                           </label> <input type="email" name="email1" placeholder="该服务器的数据库名称" class="form-control required email" />
                                       </div>
                                       <div class="form-group" style="display:none;">
                                           <label for="" class="control-label">登陆名称 <span class='require'>*</span> </label>
                                           <input id="password1" type="password" name="password1" minlength="4" placeholder="数据库登陆名称" class="form-control required password" />
                                       </div>
                                       <div class="form-group" style="display:none;">
                                           <label for="" class="control-label">登陆密码<span class='require'>*</span> </label>
                                           <input type="text" name="age" placeholder="数据库登陆密码" class="form-control number" />
                                       </div>
									  <div class="form-group"  id = "selframdatatable" >
                                               <label class="control-label caption">关联数据表<span class='require'>*</span> </label>
                                                   <select id = "selframdatatable" data-style="btn-white" data-selected-text-format="count"  data-live-search="true" class="selectpicker form-control required">
                                               </select>
                                           </div>
                                       <div class="form-group text-right">
	                                        <button type="submit" class="btn btn-success" disabled = "disabled">保存/提交</button>
			                               <button type="button" data-dismiss="modal" class="btn btn-default">取  消</button>
                                       </div>
                                   </form>
                           </div>
                       </div>
                   </div>
            </div>
            <!--END MODAL CONFIG PORTLET--><?php }
}
