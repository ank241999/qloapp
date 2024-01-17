<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:50
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f3a594a00_92753459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81bed568a3b44c04cac6998516ee3756b6451351' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\layout.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./alerts.tpl' => 1,
  ),
),false)) {
function content_659e3f3a594a00_92753459 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['header']->value;?>

<?php $_smarty_tpl->_subTemplateRender('file:./alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo $_smarty_tpl->tpl_vars['page']->value;?>

<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

<?php }
}
