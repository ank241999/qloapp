<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:44
  from 'C:\xampp\htdocs\cslhotel\cslhotel\themes\hotel-reservation-theme\modules\loyalty\views\templates\hook\shopping-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f344c4155_87631460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9b5194b126120fa689b6a7b8bcd937dbc8cbc90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\themes\\hotel-reservation-theme\\modules\\loyalty\\views\\templates\\hook\\shopping-cart.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f344c4155_87631460 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- MODULE Loyalty -->
<p id="loyalty">
	<i class="icon-flag"></i>
	<?php if ($_smarty_tpl->tpl_vars['points']->value > 0) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By checking out this shopping cart you can collect up to','mod'=>'loyalty'),$_smarty_tpl ) );?>
 <b>
		<?php if ($_smarty_tpl->tpl_vars['points']->value > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d loyalty points','sprintf'=>$_smarty_tpl->tpl_vars['points']->value,'mod'=>'loyalty'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d loyalty point','sprintf'=>$_smarty_tpl->tpl_vars['points']->value,'mod'=>'loyalty'),$_smarty_tpl ) );
}?></b>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'that can be converted into a voucher of','mod'=>'loyalty'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['voucher']->value),$_smarty_tpl ) );
if ((isset($_smarty_tpl->tpl_vars['guest_checkout']->value)) && $_smarty_tpl->tpl_vars['guest_checkout']->value) {?><sup>*</sup><?php }?>.<br />
		<?php if ((isset($_smarty_tpl->tpl_vars['guest_checkout']->value)) && $_smarty_tpl->tpl_vars['guest_checkout']->value) {?><sup>*</sup> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Not available for Instant checkout order','mod'=>'loyalty'),$_smarty_tpl ) );
}?>
	<?php } else { ?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add some products to your shopping cart to collect some loyalty points.','mod'=>'loyalty'),$_smarty_tpl ) );?>

	<?php }?>
</p>
<!-- END : MODULE Loyalty --><?php }
}
