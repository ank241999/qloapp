<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:43
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\carts\_orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f33958b47_58609178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3365a8965d68994dbb3c1ea6f3187ed8270d9000' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\carts\\_orders.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f33958b47_58609178 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['type']->value == 'orders' && (isset($_smarty_tpl->tpl_vars['ids_order']->value))) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ids_order']->value, 'id_order', false, NULL, 'orders', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['id_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_order']->value) {
$_smarty_tpl->tpl_vars['id_order']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['total'];
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders');?>
&vieworder&id_order=<?php echo $_smarty_tpl->tpl_vars['id_order']->value;?>
" style="margin: 1px 0;" target="_blank">#<?php echo $_smarty_tpl->tpl_vars['id_order']->value;?>
</a><?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['last'] : null)) {?>,<?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} elseif ($_smarty_tpl->tpl_vars['type']->value == 'abandoned') {?>
    <span class="badge badge-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Abandoned cart'),$_smarty_tpl ) );?>
</span>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'non_orderd') {?>
    <span class="badge badge-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Non-orderd cart'),$_smarty_tpl ) );?>
</span>
<?php }
}
}
