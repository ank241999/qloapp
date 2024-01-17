<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:44
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\logs\employee_field.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f349643e4_07354090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a11b4ab9a1d000d173d43d95f496c34f70c900a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\logs\\employee_field.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f349643e4_07354090 (Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['employee_name']->value, ENT_QUOTES, 'UTF-8', true);?>

<br />
(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['employee_email']->value, ENT_QUOTES, 'UTF-8', true);?>
)
<?php }
}
