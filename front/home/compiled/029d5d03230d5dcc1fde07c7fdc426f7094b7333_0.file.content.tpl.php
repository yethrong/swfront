<?php
/* Smarty version 3.1.33, created on 2019-10-09 10:36:05
  from '/usr/WebSites/front/home/template/formvalidateupdate/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9d9bf5ca1e05_45706258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '029d5d03230d5dcc1fde07c7fdc426f7094b7333' => 
    array (
      0 => '/usr/WebSites/front/home/template/formvalidateupdate/content.tpl',
      1 => 1570610165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tplmode/meta.tpl' => 1,
  ),
),false)) {
function content_5d9d9bf5ca1e05_45706258 (Smarty_Internal_Template $_smarty_tpl) {
?>        <div id="wrapper">
			<?php $_smarty_tpl->_subTemplateRender('file:tplmode/meta.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">应用模块</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['URLS_PATH']->value;?>
">首页</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><a href="#">UI</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Portlets</li>
                    </ol>
                    <div class="btn btn-blue reportrange hide"><i class="fa fa-calendar"></i>&nbsp;<span></span>&nbsp;report&nbsp;<i class="fa fa-angle-down"></i>
                        <input type="hidden" name="datestart" />
                        <input type="hidden" name="endstart" />
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                
                <!--END CONTENT-->
            </div>
            <!--END PAGE WRAPPER-->
        </div><?php }
}
