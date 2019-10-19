<?php
/* Smarty version 3.1.33, created on 2019-10-09 10:36:05
  from '/usr/WebSites/front/home/template/formvalidateupdate/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9d9bf5c8a467_41854622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e59aecd963439b3f76f86c3f596610b3b566e88' => 
    array (
      0 => '/usr/WebSites/front/home/template/formvalidateupdate/index.tpl',
      1 => 1570610165,
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
function content_5d9d9bf5c8a467_41854622 (Smarty_Internal_Template $_smarty_tpl) {
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
