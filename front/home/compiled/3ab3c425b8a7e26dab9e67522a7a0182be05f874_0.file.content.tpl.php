<?php
/* Smarty version 3.1.33, created on 2019-10-23 10:29:31
  from '/var/www/html/front/home/template/frontseting/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dafbb0b320477_90070978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ab3c425b8a7e26dab9e67522a7a0182be05f874' => 
    array (
      0 => '/var/www/html/front/home/template/frontseting/content.tpl',
      1 => 1570891020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./meta.tpl' => 1,
  ),
),false)) {
function content_5dafbb0b320477_90070978 (Smarty_Internal_Template $_smarty_tpl) {
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
                <div class="clearfix" style="height:8px;">&nbsp;</div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <div class="page-content"  id = "pageContent">
	                <div id="formvalidatesignup" class="row">
						<!--BEGIN CONTENT-->

						<!--END CONTENT-->
	                </div>
					<div class="clearfix"></div>
                </div>
            </div>
            <!--END PAGE WRAPPER-->
            <div id = "tempContent" style="display:none"></div>
        </div><?php }
}
