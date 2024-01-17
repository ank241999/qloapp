<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:48
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\slip\_redeem_status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f381e3704_84347862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5d3bbc368f8ef03fc29ceaf40e38460bc27d8c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\slip\\_redeem_status.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f381e3704_84347862 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['redeem_status']->value == OrderSlip::REDEEM_STATUS_REDEEMED) {?>
    <span class="badge badge-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Redeemed'),$_smarty_tpl ) );?>
</span>
<?php } else { ?>
    <span class="badge badge-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active'),$_smarty_tpl ) );?>
</span>
<?php }
}
}
