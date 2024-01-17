<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:48
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\slip\_display_voucher_link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f381940a7_79674988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbe349fc6754268025a5ecd97d21aa7df67c2c3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\slip\\_display_voucher_link.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f381940a7_79674988 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="btn btn-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCartRules'), ENT_QUOTES, 'UTF-8', true);?>
&updatecart_rule&id_cart_rule=<?php echo $_smarty_tpl->tpl_vars['id_cart_rule']->value;?>
" target="_blank">
    #<?php echo $_smarty_tpl->tpl_vars['id_cart_rule']->value;?>

</a>
<?php }
}
