<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:46
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\orders\_service_products_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f3691d907_88131781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85a1b98aa549492589776ce4af8dedc3e3690413' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\orders\\_service_products_table.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/orders/_service_product_line.tpl' => 1,
    'file:controllers/orders/_new_service_product.tpl' => 1,
  ),
),false)) {
function content_659e3f3691d907_88131781 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-lg-12">
        <table class="table" id="customer_products_details" <?php if (!$_smarty_tpl->tpl_vars['order_service_products']->value) {?>style="display:none"<?php }?>>
            <thead>
                <tr>
                    <?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
                        <th class="standard_refund_fields" style="display:none"></th>
                    <?php }?>
                                        <th class="text-center"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image'),$_smarty_tpl ) );?>
</th>
                    <th class="text-center"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name'),$_smarty_tpl ) );?>
</span></th>
                    <th class="text-center"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unit Price (Tax excl.)'),$_smarty_tpl ) );?>
</span></th>
                    <th class="text-center"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity'),$_smarty_tpl ) );?>
</span></th>
                    <th class="text-center"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Price (Tax incl.)'),$_smarty_tpl ) );?>
</span></th>
                                                            <?php if (($_smarty_tpl->tpl_vars['can_edit']->value && !$_smarty_tpl->tpl_vars['order']->value->hasBeenDelivered())) {?>
                        <th class="text-right"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit Order'),$_smarty_tpl ) );?>
</th>
                    <?php }?>
                </tr>
            </thead>
            <tbody>
            <?php if ($_smarty_tpl->tpl_vars['order_service_products']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_service_products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:controllers/orders/_service_product_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                            <?php }?>
                        <?php $_smarty_tpl->_subTemplateRender('file:controllers/orders/_new_service_product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </tbody>
        </table>
    </div>
</div><?php }
}
