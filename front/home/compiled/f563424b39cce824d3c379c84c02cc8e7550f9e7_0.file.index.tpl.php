<?php
/* Smarty version 3.1.33, created on 2019-09-29 16:04:55
  from '/usr/WebSites/front/home/template/dataseting/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d90ba0733b2c5_08425393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f563424b39cce824d3c379c84c02cc8e7550f9e7' => 
    array (
      0 => '/usr/WebSites/front/home/template/dataseting/index.tpl',
      1 => 1568857229,
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
function content_5d90ba0733b2c5_08425393 (Smarty_Internal_Template $_smarty_tpl) {
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
