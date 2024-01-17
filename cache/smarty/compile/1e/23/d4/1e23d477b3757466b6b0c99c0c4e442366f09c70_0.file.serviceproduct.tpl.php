<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:47
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\products\serviceproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f37954166_44928655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e23d477b3757466b6b0c99c0c4e442366f09c70' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\products\\serviceproduct.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f37954166_44928655 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['product']->value->id))) {?>
    <div id="product-configuration" class="panel product-tab">
		<input type="hidden" name="submitted_tabs[]" value="ServiceProduct" />
		<h3 class="tab"> <i class="icon-AdminAdmin"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Service Products'),$_smarty_tpl ) );?>
</h3>

        <?php if ((isset($_smarty_tpl->tpl_vars['service_products']->value)) && $_smarty_tpl->tpl_vars['service_products']->value) {?>
            <div class="from-group table-responsive-row clearfix">
                <table class="table tableDnD hotel-roomtype-link-table">
                    <thead>
                        <tr class="nodrag nodrop">
                            <th class="col-sm-1">
                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Id Product'),$_smarty_tpl ) );?>
</span>
                            </th>
                            <th class="col-sm-3">
                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'name'),$_smarty_tpl ) );?>
</span>
                            </th>
                            <th class="">
                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Auto add to cart'),$_smarty_tpl ) );?>
</span>
                            </th>
                            <th>
                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Position'),$_smarty_tpl ) );?>
</span>
                            </th>
                            <th class="">
                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price'),$_smarty_tpl ) );?>
</span>
                            </th>
                            <th class="">
                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax'),$_smarty_tpl ) );?>
</span>
                            </th>
                            <th class="text-right">
                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Action'),$_smarty_tpl ) );?>
</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['service_products']->value, 'service_product', false, 'key');
$_smarty_tpl->tpl_vars['service_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['service_product']->value) {
$_smarty_tpl->tpl_vars['service_product']->do_else = false;
?>
                            <tr id='room_type_service_product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['service_product']->value['id_room_type_service_product'], ENT_QUOTES, 'UTF-8', true);?>
' position='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['service_product']->value['position'], ENT_QUOTES, 'UTF-8', true);?>
' id_product='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['service_product']->value['id_product'], ENT_QUOTES, 'UTF-8', true);?>
' id_element="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" data-roomtype_url="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts',true));?>
">
                                <td class="col-sm-1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['service_product']->value['id_product'], ENT_QUOTES, 'UTF-8', true);?>
 <a target="blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminNormalProducts'), ENT_QUOTES, 'UTF-8', true);?>
&amp;id_product=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['service_product']->value['id_product'], ENT_QUOTES, 'UTF-8', true);?>
&amp;updateproduct"><i class="icon-external-link-sign"></i></a></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['service_product']->value['name'];?>
</td>
                                <td><span <?php if ($_smarty_tpl->tpl_vars['service_product']->value['auto_add_to_cart']) {?>class="badge badge-success"<?php }?>><?php if ($_smarty_tpl->tpl_vars['service_product']->value['auto_add_to_cart']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );
}?></span></td>
                                <td class="pointer dragHandle center positionImage">
                                    <div class="dragGroup">
                                        <div class="positions">
                                            <?php echo $_smarty_tpl->tpl_vars['service_product']->value['position']+1;?>

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="field-view service-product-price-text"><?php if ((isset($_smarty_tpl->tpl_vars['service_product']->value['custom_price'])) && $_smarty_tpl->tpl_vars['service_product']->value['custom_price']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['service_product']->value['custom_price'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['service_product']->value['default_price'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );
}?></span>
                                    <div class="field-edit" style="display:none">
                                        <div class="input-group">
                                            <input type="text" value="<?php if ((isset($_smarty_tpl->tpl_vars['service_product']->value['custom_price'])) && $_smarty_tpl->tpl_vars['service_product']->value['custom_price']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['service_product']->value['custom_price'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['service_product']->value['default_price'], ENT_QUOTES, 'UTF-8', true);
}?>" class="service-product-price" data-id_product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['service_product']->value['id_product'], ENT_QUOTES, 'UTF-8', true);?>
">
                                            <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;
echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>
</span>
                                        </div>
                                    </div>
                                    <div class="help-block"><?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['service_product']->value['default_price'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );
$_prefixVariable8 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default price: %s','sprintf'=>$_prefixVariable8),$_smarty_tpl ) );?>

                                </td>
                                <td>
                                    <span class="field-view service_product_tax_text"><?php if ((isset($_smarty_tpl->tpl_vars['service_product']->value['tax_rules_group_name'])) && $_smarty_tpl->tpl_vars['service_product']->value['tax_rules_group_name']) {
echo $_smarty_tpl->tpl_vars['service_product']->value['tax_rules_group_name'];
} else {
echo $_smarty_tpl->tpl_vars['service_product']->value['default_tax_rules_group_name'];
}?></span>
                                    <div class="field-edit" style="display:none">
                                        <select class="service_product_id_tax_rules_group">
                                            <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Tax'),$_smarty_tpl ) );?>
</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tax_rules_groups']->value, 'tax_rules_group');
$_smarty_tpl->tpl_vars['tax_rules_group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tax_rules_group']->value) {
$_smarty_tpl->tpl_vars['tax_rules_group']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['tax_rules_group']->value['id_tax_rules_group'];?>
" <?php if ($_smarty_tpl->tpl_vars['service_product']->value['id_tax_rules_group'] == $_smarty_tpl->tpl_vars['tax_rules_group']->value['id_tax_rules_group']) {?>selected="selected"<?php }?> >
                                                    <?php echo smarty_modifier_htmlentitiesUTF8($_smarty_tpl->tpl_vars['tax_rules_group']->value['name']);?>

                                                </option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                    <div class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default tax rule: %s','sprintf'=>$_smarty_tpl->tpl_vars['service_product']->value['default_tax_rules_group_name']),$_smarty_tpl ) );?>

                                </td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-default button-edit-price field-view"><i class="icon-pencil"></i></a>
                                    <span class="field-edit" style="display:none">
                                        <a href="#" class="btn btn-default btn-save" data-roomtype_url="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts',true));?>
" data-id_product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['service_product']->value['id_product'], ENT_QUOTES, 'UTF-8', true);?>
"><i class="icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'save'),$_smarty_tpl ) );?>
</a>
                                        <a href="#" class="btn btn-default btn-cancel"><i class="icon-times"></i></a>
                                    </span>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
            <div class="panel-footer">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts'), ENT_QUOTES, 'UTF-8', true);
if ((isset($_REQUEST['page'])) && $_REQUEST['page'] > 1) {?>&amp;submitFilterproduct=<?php echo intval($_REQUEST['page']);
}?>" class="btn btn-default">
                    <i class="process-icon-cancel"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

                </a>
                <button type="submit" name="submitAddproduct" class="btn btn-default pull-right" disabled="disabled">
                    <i class="process-icon-loading"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>

                </button>
                <button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right"  disabled="disabled">
                    <i class="process-icon-loading"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay'),$_smarty_tpl ) );?>

                </button>
            </div>
        <?php } else { ?>
            <div class="alert alert-info">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No services are attached with this room type'),$_smarty_tpl ) );?>

            </div>
        <?php }?>
    </div>
<?php }
}
}
