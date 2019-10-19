<?php
/* Smarty version 3.1.33, created on 2019-10-19 00:28:07
  from '/var/www/html/front/home/template/groupseting/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da9e817005261_39830218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1beef1ec80f97d7c9183dc858ec9724dfb41681' => 
    array (
      0 => '/var/www/html/front/home/template/groupseting/content.tpl',
      1 => 1571219800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./meta.tpl' => 1,
  ),
),false)) {
function content_5da9e817005261_39830218 (Smarty_Internal_Template $_smarty_tpl) {
?>        <div id="wrapper" class="right-sidebar">
			<?php $_smarty_tpl->_subTemplateRender('file:./meta.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">模块管理<span style="font-size:14px;"> - 应用名称：智慧灯杆云管理平台</span></div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['URLS_PATH']->value;?>
">首页</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><a href="#">UI</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Portlets</li>
                    </ol>
                    <div class="btn btn-blue reportrange hide"><i class="fa fa-calendar"></i>&nbsp;<span></span>&nbsp;report&nbsp;<i class="fa fa-angle-down"></i>
                        <input id="URLS_ROOT" type="hidden" name="datestart" value="<?php echo $_smarty_tpl->tpl_vars['URLS_ROOT']->value;?>
" />
                        <input type="hidden" name="endstart" />
                    </div>
                </div>
                <div class="col-md-12">
                     <ul id="myTab" class="nav nav-tabs">
                         <li id = "tehformedit" class="active"><a href="#home" data-toggle="tab">表单编辑</a></li>
                         <li id = "tehformlist" class="" style="display:none;"><a href="#profile" data-toggle="tab">字段编辑</a></li>
                     </ul>
                     <div id="myTabContent" class="tab-content" style="background-color: #ffffff54;padding: 5px;">
                         <div id="home" class="tab-pane fade in active">
                             <!--END TITLE & BREADCRUMB PAGE-->
			                <div class="clearfix page-content"  id = "pageContent">
				                <div class="row" id = "rowContent">
									<!--BEGIN CONTENT-->
									<div id = "controlpanel" class="portlet box portlet-blue ">
										<div id = "controlpanelhead" class="portlet-header small">
											<div class="caption">表单名称</div>
											<div class="tools">
												<i id="controltoolsdatabase" class="fa"></i>&nbsp;
												<i id="controltoolsmodal" data-toggle="modal" data-target="#modal-sql-config" class="fa"></i>
												<i id="controltoolsfresh" class="fa"></i>
												<i id="controltoolsScreen" onclick="return winFullScreen()" class="fa"></i>
												<i id="controltoolschevron" class="fa"></i>
												<i id="controltoolsclose" class="fa"></i>
											</div>
										</div>
										<div id="formvalidatesignup" class="portlet-body">
											<!-- <form action="formvalidateupdate.html" class="form-validate"> </form> -->
										</div>
										<div class="clearfix"></div>
									</div>
									<!--END CONTENT-->
				                </div>
			                  </div>           
                         </div>
                         <div id="profile" class="tab-pane fade">
                            <!--BEGIN FORM-->
							<div class="clearfix table-responsive">
								<table id="example1" class="table table-hover table-advanced table-bordered">
                                    <thead class="blue">
                                        <tr>
                                            <th style="text-align: center;">字段标题</th>
                                            <th style="text-align: center;">字段名称</th>
                                            <th style="text-align: center;">字段类型</th>
                                            <th style="text-align: center;">是否必填</th>
                                            <th style="text-align: center;">主键索引</th>
                                            <th style="text-align: center;">编辑</th>
                                        </tr>
                                    </thead>
                                    <tbody id = "tabletbody"></tbody>
                                </table>
							</div>
							<!--BEGIN FORM-->
                         </div>
                     </div>
                 </div>
			</div>
            <div id = "tempContent" style="display:none"></div>
        </div><?php }
}
