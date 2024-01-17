<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:43
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\carts\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f3393b991_06290254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a203825f3b868899f078d1dc47c54bf9fc2616a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\carts\\helpers\\view\\view.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f3393b991_06290254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1601991303659e3f338c39a9_96035626', "override_tpl");
?>

</div>
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_1601991303659e3f338c39a9_96035626 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_1601991303659e3f338c39a9_96035626',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="panel">
	<?php echo $_smarty_tpl->tpl_vars['kpi']->value;?>

</div>
<div class="row">
	<div class="col-lg-6">
		<div class="panel">
			<h3><i class="icon-user"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer information'),$_smarty_tpl ) );?>
</h3>
			<?php if ($_smarty_tpl->tpl_vars['customer']->value->id) {?>
				<a class="btn btn-default pull-right" href="mailto:<?php echo $_smarty_tpl->tpl_vars['customer']->value->email;?>
"><i class="icon-envelope"></i> <?php echo $_smarty_tpl->tpl_vars['customer']->value->email;?>
</a>
				<h2>
					<?php if ($_smarty_tpl->tpl_vars['customer']->value->id_gender == 1) {?>
					<i class="icon-male"></i>
					<?php } elseif ($_smarty_tpl->tpl_vars['customer']->value->id_gender == 2) {?>
					<i class="icon-female"></i>
					<?php } else { ?>
					<i class="icon-question"></i>
					<?php }?>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCustomers'), ENT_QUOTES, 'UTF-8', true);?>
&amp;id_customer=<?php echo intval($_smarty_tpl->tpl_vars['customer']->value->id);?>
&amp;viewcustomer"><?php echo $_smarty_tpl->tpl_vars['customer']->value->firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['customer']->value->lastname;?>
</a></h2>
				<div class="form-horizontal">
					<div class="form-group">
						<label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account registration date:'),$_smarty_tpl ) );?>
</label>
						<div class="col-lg-3"><p class="form-control-static"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['customer']->value->date_add),$_smarty_tpl ) );?>
</p></div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Valid orders placed:'),$_smarty_tpl ) );?>
</label>
						<div class="col-lg-3"><p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['customer_stats']->value['nb_orders'];?>
</p></div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total spent since registration:'),$_smarty_tpl ) );?>
</label>
						<div class="col-lg-3"><p class="form-control-static"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['customer_stats']->value['total_orders'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</p></div>
					</div>
				</div>
			<?php } else { ?>
				<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest not registered.'),$_smarty_tpl ) );?>
</h2>
			<?php }?>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="panel">
			<h3><i class="icon-shopping-cart"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order(s) Information'),$_smarty_tpl ) );?>
</h3>
			<?php if (is_array($_smarty_tpl->tpl_vars['cart_orders']->value) && count($_smarty_tpl->tpl_vars['cart_orders']->value)) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_orders']->value, 'cart_order');
$_smarty_tpl->tpl_vars['cart_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cart_order']->value) {
$_smarty_tpl->tpl_vars['cart_order']->do_else = false;
?>
					<h2><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'), ENT_QUOTES, 'UTF-8', true);?>
&amp;id_order=<?php echo intval($_smarty_tpl->tpl_vars['cart_order']->value['id_order']);?>
&amp;vieworder"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order #%d','sprintf'=>sprintf("%06d",$_smarty_tpl->tpl_vars['cart_order']->value['id_order'])),$_smarty_tpl ) );?>
</a></h2>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Created on:'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['cart_order']->value['date_add']),$_smarty_tpl ) );?>

			<?php } else { ?>
				<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No order was created from this cart.'),$_smarty_tpl ) );?>
</h2>
				<?php if ($_smarty_tpl->tpl_vars['customer']->value->id) {?>
					<a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'), ENT_QUOTES, 'UTF-8', true);?>
&amp;cart_id=<?php echo intval($_smarty_tpl->tpl_vars['cart']->value->id);?>
&amp;addorder"><i class="icon-shopping-cart"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an order from this cart.'),$_smarty_tpl ) );?>
</a>
				<?php }?>
			<?php }?>
		</div>
	</div>
</div>
<div class="panel">
	<h3><i class="icon-archive"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart summary'),$_smarty_tpl ) );?>
</h3>
	<div class="row">
		<table class="table" id="orderProducts">
			<thead>
				<tr>
					<th class="fixed-width-xs"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image'),$_smarty_tpl ) );?>
</span></th>
					<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Type'),$_smarty_tpl ) );?>
</span></th>
					<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel'),$_smarty_tpl ) );?>
</span></th>
					<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duration'),$_smarty_tpl ) );?>
</span></th>
					<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'occupancy'),$_smarty_tpl ) );?>
</span></th>
					<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room price'),$_smarty_tpl ) );?>
</span></th>
					<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Extra services'),$_smarty_tpl ) );?>
</span></th>
					<th class="text-right"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total'),$_smarty_tpl ) );?>
</span></th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_htl_data']->value, 'room');
$_smarty_tpl->tpl_vars['room']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['room']->value) {
$_smarty_tpl->tpl_vars['room']->do_else = false;
?>
					<tr>
						<td><img src="<?php echo $_smarty_tpl->tpl_vars['room']->value['image_link'];?>
" class="img-responsive" /></td>
						<td>
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts'), ENT_QUOTES, 'UTF-8', true);?>
&amp;id_product=<?php echo $_smarty_tpl->tpl_vars['room']->value['id_product'];?>
&amp;updateproduct">
								<span class="productName"><?php echo $_smarty_tpl->tpl_vars['room']->value['room_type'];?>
</span>
							</a>
						</td>
						<td><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAddHotel'), ENT_QUOTES, 'UTF-8', true);?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['room']->value['id_hotel'];?>
&amp;updatehtl_branch_info"><?php echo $_smarty_tpl->tpl_vars['room']->value['room_type_info']['hotel_name'];?>
</a></td>
						<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['room']->value['date_from']),$_smarty_tpl ) );?>
 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['room']->value['date_to']),$_smarty_tpl ) );?>
</td>
						<td>
							<span>
								<?php if ($_smarty_tpl->tpl_vars['room']->value['adults']) {
echo $_smarty_tpl->tpl_vars['room']->value['adults'];
}?> <?php if ($_smarty_tpl->tpl_vars['room']->value['adults'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adult'),$_smarty_tpl ) );
}
ob_start();
echo $_smarty_tpl->tpl_vars['room']->value['children'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2) {?>, <?php echo $_smarty_tpl->tpl_vars['room']->value['children'];?>
 <?php if ($_smarty_tpl->tpl_vars['room']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}
}?>
							</span>
						</td>
						<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['room']->value['feature_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</td>
						<td>
							<?php if (((isset($_smarty_tpl->tpl_vars['room']->value['extra_demands'])) && $_smarty_tpl->tpl_vars['room']->value['extra_demands']) || ((isset($_smarty_tpl->tpl_vars['room']->value['additional_service'])) && $_smarty_tpl->tpl_vars['room']->value['additional_service'])) {?>
								<a href="#" data-toggle="modal" data-target="#rooms_type_extra_demands_<?php echo $_smarty_tpl->tpl_vars['room']->value['id'];?>
">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>htmlspecialchars(($_smarty_tpl->tpl_vars['room']->value['demand_price']+$_smarty_tpl->tpl_vars['room']->value['additional_service_price']+$_smarty_tpl->tpl_vars['room']->value['additional_services_auto_add_price']), ENT_QUOTES, 'UTF-8', true),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

								</a>
							<?php } else { ?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>0,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

							<?php }?>
						</td>
						<td class="text-right">
							<?php if (((isset($_smarty_tpl->tpl_vars['room']->value['extra_demands'])) && $_smarty_tpl->tpl_vars['room']->value['extra_demands']) || ((isset($_smarty_tpl->tpl_vars['room']->value['additional_service'])) && $_smarty_tpl->tpl_vars['room']->value['additional_service'])) {?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>htmlspecialchars(($_smarty_tpl->tpl_vars['room']->value['amt_with_qty']+$_smarty_tpl->tpl_vars['room']->value['additional_services_auto_add_price']+$_smarty_tpl->tpl_vars['room']->value['demand_price']+$_smarty_tpl->tpl_vars['room']->value['additional_service_price']), ENT_QUOTES, 'UTF-8', true),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

							<?php } else { ?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>htmlspecialchars($_smarty_tpl->tpl_vars['room']->value['amt_with_qty'], ENT_QUOTES, 'UTF-8', true),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

							<?php }?>
						</td>
					</tr>
					<div class="modal" tabindex="-1" role="dialog" id="rooms_type_extra_demands_<?php echo $_smarty_tpl->tpl_vars['room']->value['id'];?>
">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body" id="rooms_extra_demands">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<ul class="nav nav-tabs" role="tablist">
										<?php if ((isset($_smarty_tpl->tpl_vars['room']->value['selected_demands'])) && $_smarty_tpl->tpl_vars['room']->value['selected_demands']) {?>
											<li role="presentation" class="active"><a href="#room_type_demands_desc_<?php echo $_smarty_tpl->tpl_vars['room']->value['id'];?>
" aria-controls="facilities" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facilities'),$_smarty_tpl ) );?>
</a></li>
										<?php }?>
										<?php if ((isset($_smarty_tpl->tpl_vars['room']->value['selected_services'])) && $_smarty_tpl->tpl_vars['room']->value['selected_services']) {?>
											<li role="presentation" <?php if (!(isset($_smarty_tpl->tpl_vars['room']->value['selected_demands'])) || !$_smarty_tpl->tpl_vars['room']->value['selected_demands']) {?>class="active"<?php }?>><a href="#room_type_service_product_desc_<?php echo $_smarty_tpl->tpl_vars['room']->value['id'];?>
" aria-controls="services" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Services'),$_smarty_tpl ) );?>
</a></li>
										<?php }?>
									</ul>
									<div class="tab-content panel">
										<?php if ((isset($_smarty_tpl->tpl_vars['room']->value['selected_demands'])) && $_smarty_tpl->tpl_vars['room']->value['selected_demands']) {?>
											<div id="room_type_demands_desc_<?php echo $_smarty_tpl->tpl_vars['room']->value['id'];?>
" class="tab-pane active">
												<div id="room_type_demands_desc">
													<?php if ((isset($_smarty_tpl->tpl_vars['room']->value['selected_demands'])) && $_smarty_tpl->tpl_vars['room']->value['selected_demands']) {?>
														<?php $_smarty_tpl->_assignInScope('roomCount', 1);?>
														<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['room']->value['selected_demands'], 'demand');
$_smarty_tpl->tpl_vars['demand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['demand']->value) {
$_smarty_tpl->tpl_vars['demand']->do_else = false;
?>
															<div class="row room_demands_container">
																<div class="col-sm-12 room_demand_detail">
																	<?php if ((isset($_smarty_tpl->tpl_vars['room']->value['selected_demands'])) && $_smarty_tpl->tpl_vars['room']->value['selected_demands']) {?>
																		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['room']->value['extra_demands'], 'roomDemand', false, 'idGlobalDemand');
$_smarty_tpl->tpl_vars['roomDemand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idGlobalDemand']->value => $_smarty_tpl->tpl_vars['roomDemand']->value) {
$_smarty_tpl->tpl_vars['roomDemand']->do_else = false;
?>
																			<?php if ($_smarty_tpl->tpl_vars['demand']->value['id_global_demand'] == $_smarty_tpl->tpl_vars['idGlobalDemand']->value) {?>
																				<div class="row room_demand_block">
																					<div class="col-xs-6">
																						<div class="row">
																							<div class="col-xs-10 demand_adv_option_block">
																								<p>
																									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roomDemand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<br>
																									<?php if ((isset($_smarty_tpl->tpl_vars['roomDemand']->value['adv_option'])) && $_smarty_tpl->tpl_vars['roomDemand']->value['adv_option']) {?>
																										<?php echo $_smarty_tpl->tpl_vars['roomDemand']->value['adv_option'][$_smarty_tpl->tpl_vars['demand']->value['id_option']]['name'];?>

																									<?php }?>
																								</p>
																							</div>
																						</div>
																					</div>
																					<div class="col-xs-6">
																						<p><span class="pull-right extra_demand_option_price"><?php if ((isset($_smarty_tpl->tpl_vars['roomDemand']->value['adv_option'])) && $_smarty_tpl->tpl_vars['roomDemand']->value['adv_option']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>htmlspecialchars($_smarty_tpl->tpl_vars['roomDemand']->value['adv_option'][$_smarty_tpl->tpl_vars['idGlobalDemand']->value]['price'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>htmlspecialchars($_smarty_tpl->tpl_vars['roomDemand']->value['price'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl ) );
}?></span></p>
																					</div>
																				</div>
																			<?php }?>
																		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																	<?php }?>
																</div>
															</div>
															<?php $_smarty_tpl->_assignInScope('roomCount', $_smarty_tpl->tpl_vars['roomCount']->value+1);?>
														<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
													<?php }?>
												</div>
											</div>
										<?php }?>
										<?php if ((isset($_smarty_tpl->tpl_vars['room']->value['selected_services'])) && $_smarty_tpl->tpl_vars['room']->value['selected_services']) {?>
											<div id="room_type_service_product_desc_<?php echo $_smarty_tpl->tpl_vars['room']->value['id'];?>
" class="tab-pane<?php if (!(isset($_smarty_tpl->tpl_vars['room']->value['selected_demands'])) || !$_smarty_tpl->tpl_vars['room']->value['selected_demands']) {?> active<?php }?>">
												<div id="room_type_services_desc">
													<?php $_smarty_tpl->_assignInScope('roomCount', 1);?>
													<div class="row room_demands_container">
														<div class="col-sm-12 room_demand_detail">
															<?php if ((isset($_smarty_tpl->tpl_vars['room']->value['selected_services'])) && $_smarty_tpl->tpl_vars['room']->value['selected_services']) {?>
																<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['room']->value['selected_services'], 'service');
$_smarty_tpl->tpl_vars['service']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->do_else = false;
?>
																	<div class="row room_demand_block">
																			<div class="col-xs-5">
																				<div class="row">
																					<div class="col-xs-10">
																						<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['service']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</p>
																						<?php if ($_smarty_tpl->tpl_vars['service']->value['allow_multiple_quantity']) {?>
																							<div class="qty_container">
																							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity:'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['service']->value['quantity'];?>

																							</div>
																						<?php }?>
																					</div>
																				</div>
																			</div>
																			<div class="col-xs-3">
																				<?php if ($_smarty_tpl->tpl_vars['service']->value['auto_add_to_cart'] && $_smarty_tpl->tpl_vars['service']->value['price_addition_type'] == Product::PRICE_ADDITION_TYPE_INDEPENDENT) {?>
																					<span class="badge badge-info label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Convenience fee'),$_smarty_tpl ) );?>
</span>
																				<?php }?>
																				<?php if ($_smarty_tpl->tpl_vars['service']->value['auto_add_to_cart'] && $_smarty_tpl->tpl_vars['service']->value['price_addition_type'] == Product::PRICE_ADDITION_TYPE_WITH_ROOM) {?>
																					<span class="badge badge-info label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Auto added'),$_smarty_tpl ) );?>
</span>
																				<?php }?>
																			</div>
																			<div class="col-xs-4">
																				<span class="pull-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['service']->value['total_price']),$_smarty_tpl ) );?>
</span>
																			</div>
																		</div>
																<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
															<?php }?>
														</div>
													</div>
												</div>
											</div>
										<?php }?>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close'),$_smarty_tpl ) );?>
</button>
								</div>
							</div>
						</div>
					</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="7"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total cost of room types:'),$_smarty_tpl ) );?>
</td>
					<td class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_products']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</td>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['total_discounts']->value != 0) {?>
				<tr>
					<td colspan="7"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total value of vouchers:'),$_smarty_tpl ) );?>
</td>
					<td class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_discounts']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</td>
				</tr>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['total_wrapping']->value > 0) {?>
				<tr>
					<td colspan="7"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total cost of gift wrapping:'),$_smarty_tpl ) );?>
</td>
					<td class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_wrapping']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</td>
				</tr>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(true,Cart::ONLY_SHIPPING) > 0) {?>
				<tr>
					<td colspan="7"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total cost of shipping:'),$_smarty_tpl ) );?>
</td>
					<td class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_shipping']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</td>
				</tr>
				<?php }?>
				<tr>
					<td colspan="7" class=" success"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total:'),$_smarty_tpl ) );?>
</strong></td>
					<td class="text-right success"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_price']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</strong></td>
				</tr>
			</tfoot>
		</table>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['discounts']->value) {?>
	<div class="clear">&nbsp;</div>
	<div class="row">
		<table class="table">
			<thead>
				<tr>
					<th class="fixed-width-xs"><img src="../img/admin/coupon.gif" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discounts'),$_smarty_tpl ) );?>
" /></th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount name'),$_smarty_tpl ) );?>
</th>
					<th class="text-right fixed-width-md"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Value'),$_smarty_tpl ) );?>
</th>
				</tr>
			</thead>
			<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discounts']->value, 'discount');
$_smarty_tpl->tpl_vars['discount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->do_else = false;
?>
				<tr>
					<td class="fixed-width-xs"><?php echo $_smarty_tpl->tpl_vars['discount']->value['id_discount'];?>
</td>
					<td><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCartRules'), ENT_QUOTES, 'UTF-8', true);?>
&amp;id_cart_rule=<?php echo $_smarty_tpl->tpl_vars['discount']->value['id_discount'];?>
&amp;updatecart_rule"><?php echo $_smarty_tpl->tpl_vars['discount']->value['name'];?>
</a></td>
					<td class="text-right fixed-width-md"><?php if ((float)$_smarty_tpl->tpl_vars['discount']->value['value_real'] == 0 && (int)$_smarty_tpl->tpl_vars['discount']->value['free_shipping'] == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free shipping'),$_smarty_tpl ) );
} else { ?>- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_real'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );
}?></td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
	</div>
	<?php }?>
	<div class="clear">&nbsp;</div>
	<div class="row alert alert-warning">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For this particular customer group, prices are displayed as:'),$_smarty_tpl ) );?>
 <b><?php if ($_smarty_tpl->tpl_vars['tax_calculation_method']->value == (defined('PS_TAX_EXC') ? constant('PS_TAX_EXC') : null)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax excluded'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax included'),$_smarty_tpl ) );
}?></b>
	</div>
<?php
}
}
/* {/block "override_tpl"} */
}
