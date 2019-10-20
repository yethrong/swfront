<?php
/* Smarty version 3.1.33, created on 2019-10-20 22:32:26
  from '/var/www/html/front/home/template/index/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dac6ffa4b0ce9_46209511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a8d994b6caa0f210f7f18ad0ccffedfee9c4e02' => 
    array (
      0 => '/var/www/html/front/home/template/index/index.tpl',
      1 => 1568700252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tplmode/head.tpl' => 1,
    'file:tplmode/menu.tpl' => 1,
    'file:index/content.tpl' => 1,
    'file:tplmode/floot.tpl' => 1,
  ),
),false)) {
function content_5dac6ffa4b0ce9_46209511 (Smarty_Internal_Template $_smarty_tpl) {
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
		<?php $_smarty_tpl->_subTemplateRender('file:index/content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    
			<?php $_smarty_tpl->_subTemplateRender('file:tplmode/floot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
