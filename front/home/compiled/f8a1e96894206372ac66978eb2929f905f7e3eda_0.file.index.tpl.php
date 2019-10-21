<?php
/* Smarty version 3.1.33, created on 2019-10-25 22:08:52
  from '/var/www/html/front/home/template/groupseting/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db301f462bb89_63781574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8a1e96894206372ac66978eb2929f905f7e3eda' => 
    array (
      0 => '/var/www/html/front/home/template/groupseting/index.tpl',
      1 => 1572005403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:frontseting/head.tpl' => 1,
    'file:frontseting/menu.tpl' => 1,
    'file:./content.tpl' => 1,
    'file:frontseting/floot.tpl' => 1,
  ),
),false)) {
function content_5db301f462bb89_63781574 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="cn">
<head>
<?php $_smarty_tpl->_subTemplateRender('file:frontseting/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<style>
.pic_list .sql_list{display:block;width:100%;overflow:auto;}
.pic_list li{width:160px;height:10px;margin:3px;display:inline-block;cursor:pointer;}
.sql_list li{width:240px;height:10px;margin:3px;margin-top:10px;display:inline-block;cursor:pointer;}
.setnavleve{border-bottom: 0px solid;}
.panel table{table-layout: fixed;}
.panel table tr {height: 30px;}
.columnpanel{background-color: #fff;border:1px dashed #A9A9A9;min-height:38px;}
</style>
</head>
<body class=" ">
    <div>
		<?php $_smarty_tpl->_subTemplateRender('file:frontseting/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender('file:./content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
	<?php $_smarty_tpl->_subTemplateRender('file:frontseting/floot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
