<?php
/* Smarty version 3.1.33, created on 2019-10-22 23:59:46
  from '/var/www/html/front/home/template/appseting/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5daf27729af065_19654554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43fd55562f3646cd209e2eec1062836a0fcde13f' => 
    array (
      0 => '/var/www/html/front/home/template/appseting/index.tpl',
      1 => 1568785628,
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
function content_5daf27729af065_19654554 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="cn">
<head>
<?php $_smarty_tpl->_subTemplateRender('file:frontseting/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
