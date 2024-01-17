<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:44
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\localization\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f348bf785_37184897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43facc4d94033d7fcee9107e28a7473bb86a76d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\localization\\content.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f348bf785_37184897 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['localization_form']->value))) {
echo $_smarty_tpl->tpl_vars['localization_form']->value;
}
if ((isset($_smarty_tpl->tpl_vars['localization_options']->value))) {
echo $_smarty_tpl->tpl_vars['localization_options']->value;
}
echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing default currency, we strongly recommend that you enable maintenance mode from Preferences > Maintenance page because any change in default currency requires manual adjustment of price of each room type.');
		});
	});
<?php echo '</script'; ?>
><?php }
}
