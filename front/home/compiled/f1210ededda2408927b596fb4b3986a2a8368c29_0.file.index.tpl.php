<?php
/* Smarty version 3.1.33, created on 2019-09-29 04:39:09
  from '/usr/WebSites/front/home/template/formvalidatesignup/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d90194dc69135_30279647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1210ededda2408927b596fb4b3986a2a8368c29' => 
    array (
      0 => '/usr/WebSites/front/home/template/formvalidatesignup/index.tpl',
      1 => 1569724749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tplmode/head.tpl' => 1,
    'file:tplmode/menu.tpl' => 1,
    'file:./content.tpl' => 1,
  ),
),false)) {
function content_5d90194dc69135_30279647 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="cn">
<head>
<?php $_smarty_tpl->_subTemplateRender('file:tplmode/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body class=" ">
    <div>
		<?php $_smarty_tpl->_subTemplateRender('file:tplmode/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender('file:./content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</body>
</html><?php }
}
