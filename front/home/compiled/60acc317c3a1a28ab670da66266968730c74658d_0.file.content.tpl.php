<?php
/* Smarty version 3.1.33, created on 2019-09-29 16:04:55
  from '/usr/WebSites/front/home/template/dataseting/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d90ba073453e0_47504834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60acc317c3a1a28ab670da66266968730c74658d' => 
    array (
      0 => '/usr/WebSites/front/home/template/dataseting/content.tpl',
      1 => 1568857060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./meta.tpl' => 1,
  ),
),false)) {
function content_5d90ba073453e0_47504834 (Smarty_Internal_Template $_smarty_tpl) {
?>        <div id="wrapper" class="right-sidebar">
			<?php $_smarty_tpl->_subTemplateRender('file:./meta.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">数据管理<span style="font-size:14px;"> - 应用名称：<智慧灯杆云管理平台>"></span></li>
                    </div>
                    <ol class="breadcrumb page-breadcrumb">
                        <li><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['URLS_PATH']->value;?>
">首页</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                        <li><li class="iconlist">UI</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                        <li class="active">Portlets</li>
                    </ol>
                    <div class="btn btn-blue reportrange hide"><i class="fa fa-calendar"></i>&nbsp;&nbsp;&nbsp;<span></span>&nbsp;report&nbsp;<i class="fa fa-angle-down"></i>&nbsp;&nbsp;
                        <input type="hidden" name="datestart" />
                        <input type="hidden" name="endstart" />
                    </div>
                </div>
                <div class="clearfix" style="height:8px;">&nbsp;</div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div class="row">
							<div class="fontawesome-icon-list pic_list">
							<button type="button" data-target="#modal-wide-width" data-toggle="modal" class="btn btn-primary">View Demo</button>
							
								
					
							</div>
						
                     </div>
                </div>
                <!--END CONTENT-->
            </div>
            <!--END PAGE WRAPPER-->
        </div><?php }
}
