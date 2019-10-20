<?php
/* Smarty version 3.1.33, created on 2019-10-20 22:32:45
  from '/var/www/html/front/home/template/frontseting/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dac700d84a593_38015909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91deda05f09a9e6ca56511b4768f166b2b593669' => 
    array (
      0 => '/var/www/html/front/home/template/frontseting/index.tpl',
      1 => 1570419008,
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
function content_5dac700d84a593_38015909 (Smarty_Internal_Template $_smarty_tpl) {
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
