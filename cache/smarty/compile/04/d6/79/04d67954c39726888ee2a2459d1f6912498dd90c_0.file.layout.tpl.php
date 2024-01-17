<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:43
  from 'C:\xampp\htdocs\cslhotel\cslhotel\themes\hotel-reservation-theme\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f33b41d20_49694970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04d67954c39726888ee2a2459d1f6912498dd90c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\themes\\hotel-reservation-theme\\layout.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f33b41d20_49694970 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('left_column_size', 0);
$_smarty_tpl->_assignInScope('right_column_size', 0);
if ((isset($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)) && trim($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value) && !$_smarty_tpl->tpl_vars['hide_left_column']->value) {
$_smarty_tpl->_assignInScope('left_column_size', 3);
}
if ((isset($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)) && trim($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value) && !$_smarty_tpl->tpl_vars['hide_right_column']->value) {
$_smarty_tpl->_assignInScope('right_column_size', 3);
}
if (!empty($_smarty_tpl->tpl_vars['display_header']->value)) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('HOOK_HEADER'=>$_smarty_tpl->tpl_vars['HOOK_HEADER']->value), 0, true);
}
if (!empty($_smarty_tpl->tpl_vars['template']->value)) {
echo $_smarty_tpl->tpl_vars['template']->value;
}
if (!empty($_smarty_tpl->tpl_vars['display_footer']->value)) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
if (!empty($_smarty_tpl->tpl_vars['live_edit']->value)) {
echo $_smarty_tpl->tpl_vars['live_edit']->value;
}
}
}
