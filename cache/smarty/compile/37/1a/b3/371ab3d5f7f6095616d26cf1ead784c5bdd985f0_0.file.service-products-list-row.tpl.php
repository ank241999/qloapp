<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:46
  from 'C:\xampp\htdocs\cslhotel\cslhotel\themes\hotel-reservation-theme\_partials\service-products-list-row.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f36799047_60653528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '371ab3d5f7f6095616d26cf1ead784c5bdd985f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\themes\\hotel-reservation-theme\\_partials\\service-products-list-row.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f36799047_60653528 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['product']->value) {?>
    <li class="row service-product-element">
        <div class="col-xs-4 col-sm-3 col-md-2">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'large_default'), ENT_QUOTES, 'UTF-8', true);?>
" rel="htl-images<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" class="fancybox" title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);
}?>">
                <img class="img-responsive service-product-img" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);
}?>" title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);
}?>">
            </a>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['image']->value['cover'] == 0) {?>
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['image']->value['id_image'],'large_default'), ENT_QUOTES, 'UTF-8', true);?>
" rel="htl-images<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" class="fancybox hidden">
                    </a>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="col-xs-8 col-sm-9 col-md-10">
            <div class="row">
                <div class="col-sm-12 clearfix service-product-block">
                    <span class="service-product-name"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</span>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['description_short']) {?>
                    <div class="col-sm-12 clearfix service-product-short-desc service-product-block">
                        <?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>

                    </div>
                <?php }?>

                <div class="col-sm-12 service_product_action_block">
                    <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && !$_smarty_tpl->tpl_vars['order_date_restrict']->value && ($_smarty_tpl->tpl_vars['product']->value['show_price'] && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)))) {?>
                        <span class="service-product-price">
                            <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_incl']),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['product']->value['price_calculation_method'] == Product::PRICE_CALCULATION_METHOD_PER_DAY) {?><span class="price-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'/Night'),$_smarty_tpl ) );?>
</span><?php }?>
                        </span>
                    <?php }?>

                    <div>
                    <?php if (($_smarty_tpl->tpl_vars['product']->value['show_price'] && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)))) {?>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['available_for_order'] && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && !$_smarty_tpl->tpl_vars['order_date_restrict']->value && !(((isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && $_smarty_tpl->tpl_vars['restricted_country_mode']->value))) {?>
                            <button class="btn btn-service-product<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['selected'])) && $_smarty_tpl->tpl_vars['product']->value['selected']) {?> btn-danger remove_roomtype_product<?php } else { ?> btn-success add_roomtype_product<?php }?> pull-right" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
"><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['selected'])) && $_smarty_tpl->tpl_vars['product']->value['selected']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select'),$_smarty_tpl ) );
}?></button>
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['allow_multiple_quantity'] && $_smarty_tpl->tpl_vars['product']->value['available_for_order']) {?>
                                <div class="qty_container pull-right">
                                    <input type="hidden" class="service_product_qty" id="service_product_qty_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" name="service_product_qty_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" data-max_quantity="<?php echo $_smarty_tpl->tpl_vars['product']->value['max_quantity'];?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['quantity_added'])) && $_smarty_tpl->tpl_vars['product']->value['quantity_added']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_added'], ENT_QUOTES, 'UTF-8', true);
} else { ?>1<?php }?>">
                                    <div class="qty_count pull-left">
                                        <span><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['quantity_added'])) && $_smarty_tpl->tpl_vars['product']->value['quantity_added']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_added'], ENT_QUOTES, 'UTF-8', true);
} else { ?>1<?php }?></span>
                                    </div>
                                    <div class="qty_direction pull-left">
                                        <a href="#" class="btn btn-default quantity_up service_product_qty_up"><span><i class="icon-plus"></i></span></a>
                                        <a href="#" class="btn btn-default quantity_down service_product_qty_down"><span><i class="icon-minus"></i></span></a>
                                    </div>
                                </div>
                            <?php }?>
                        <?php }?>
                    <?php }?>
                </div>
            </div>
        </div>
    </li>
<?php }
}
}
