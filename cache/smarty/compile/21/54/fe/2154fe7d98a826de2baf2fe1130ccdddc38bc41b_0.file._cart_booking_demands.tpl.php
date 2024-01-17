<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:46
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\orders\_cart_booking_demands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f363ee932_98261954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2154fe7d98a826de2baf2fe1130ccdddc38bc41b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\orders\\_cart_booking_demands.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f363ee932_98261954 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal" tabindex="-1" role="dialog" id="rooms_type_extra_demands">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<ul class="nav nav-tabs" role="tablist">
					<?php if ((isset($_smarty_tpl->tpl_vars['selectedRoomDemands']->value)) && $_smarty_tpl->tpl_vars['selectedRoomDemands']->value) {?>
						<li role="presentation" class="active"><a href="#room_type_demands_desc" aria-controls="facilities" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facilities'),$_smarty_tpl ) );?>
</a></li>
					<?php }?>
					<?php if ((isset($_smarty_tpl->tpl_vars['roomTypeServiceProducts']->value)) && $_smarty_tpl->tpl_vars['roomTypeServiceProducts']->value) {?>
						<li role="presentation" <?php if (!(isset($_smarty_tpl->tpl_vars['selectedRoomDemands']->value)) || !$_smarty_tpl->tpl_vars['selectedRoomDemands']->value) {?>class="active"<?php }?>><a href="#room_type_service_product_desc" aria-controls="services" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Services'),$_smarty_tpl ) );?>
</a></li>
					<?php }?>
				</ul>
			</div>
			<div class="modal-body" id="rooms_extra_demands">
				<div class="tab-content">
					<?php if ((isset($_smarty_tpl->tpl_vars['selectedRoomDemands']->value)) && $_smarty_tpl->tpl_vars['selectedRoomDemands']->value) {?>
						<div id="room_type_demands_desc" class="tab-pane active">
							<div class="rooms_extra_demands_head">
								<p class="rooms_extra_demands_text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add below facilities to the room for better hotel experience'),$_smarty_tpl ) );?>
</p>
							</div>
							<div id="room_type_demands_desc">
								<?php if ((isset($_smarty_tpl->tpl_vars['selectedRoomDemands']->value)) && $_smarty_tpl->tpl_vars['selectedRoomDemands']->value) {?>
									<?php $_smarty_tpl->_assignInScope('roomCount', 1);?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selectedRoomDemands']->value, 'roomDemand', false, 'key');
$_smarty_tpl->tpl_vars['roomDemand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['roomDemand']->value) {
$_smarty_tpl->tpl_vars['roomDemand']->do_else = false;
?>
										<div class="row room_demands_container">
											<div class="col-sm-12 demand_header">
												<span>
													<i class="icon-bed"></i>
													<?php if ((isset($_smarty_tpl->tpl_vars['roomDemand']->value['room_num'])) && $_smarty_tpl->tpl_vars['roomDemand']->value['room_num']) {?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roomDemand']->value['room_num'], ENT_QUOTES, 'UTF-8', true);?>

													<?php } else { ?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roomCount']->value, ENT_QUOTES, 'UTF-8', true);?>

													<?php }?>
												</span>
											</div>
											<div class="col-sm-12 room_demand_detail">
												<?php if ((isset($_smarty_tpl->tpl_vars['roomTypeDemands']->value)) && $_smarty_tpl->tpl_vars['roomTypeDemands']->value) {?>
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roomTypeDemands']->value, 'demand', false, 'idGlobalDemand');
$_smarty_tpl->tpl_vars['demand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idGlobalDemand']->value => $_smarty_tpl->tpl_vars['demand']->value) {
$_smarty_tpl->tpl_vars['demand']->do_else = false;
?>
														<div class="row room_demand_block">
															<div class="col-xs-6">
																<div class="row">
																	<div class="col-xs-2">
																		<input id_cart_booking="<?php echo $_smarty_tpl->tpl_vars['roomDemand']->value['id'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idGlobalDemand']->value, ENT_QUOTES, 'UTF-8', true);?>
" type="checkbox" class="id_room_type_demand" <?php if ((isset($_smarty_tpl->tpl_vars['roomDemand']->value['selected_global_demands'])) && $_smarty_tpl->tpl_vars['roomDemand']->value['selected_global_demands'] && (in_array($_smarty_tpl->tpl_vars['idGlobalDemand']->value,$_smarty_tpl->tpl_vars['roomDemand']->value['selected_global_demands']))) {?>checked<?php }?> />
																	</div>
																	<div class="col-xs-10 demand_adv_option_block">
																		<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</p>
																		<?php if ((isset($_smarty_tpl->tpl_vars['demand']->value['adv_option'])) && $_smarty_tpl->tpl_vars['demand']->value['adv_option']) {?>
																			<select class="id_option">
																				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['demand']->value['adv_option'], 'option', false, 'idOption');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idOption']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
																					<?php $_smarty_tpl->_assignInScope('demand_key', ((string)$_smarty_tpl->tpl_vars['idGlobalDemand']->value)."-".((string)$_smarty_tpl->tpl_vars['idOption']->value));?>
																					<option optionPrice="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['price_tax_excl'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idOption']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['roomDemand']->value['extra_demands'][$_smarty_tpl->tpl_vars['demand_key']->value]))) {?>selected<?php }?> key="<?php echo $_smarty_tpl->tpl_vars['demand_key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</option>
																					<?php if ((isset($_smarty_tpl->tpl_vars['roomDemand']->value['extra_demands'][$_smarty_tpl->tpl_vars['demand_key']->value]))) {?>
																						<?php $_smarty_tpl->_assignInScope('selected_adv_option', ((string)$_smarty_tpl->tpl_vars['idOption']->value));?>
																					<?php }?>
																				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																			</select>
																		<?php } else { ?>
																			<input type="hidden" class="id_option" value="0" />
																		<?php }?>
																	</div>
																</div>
															</div>
															<div class="col-xs-6">
																<p class="pull-right">
																	<span class="extra_demand_option_price">
																		<?php if ((isset($_smarty_tpl->tpl_vars['selected_adv_option']->value)) && (isset($_smarty_tpl->tpl_vars['demand']->value['adv_option'][$_smarty_tpl->tpl_vars['selected_adv_option']->value]['price_tax_excl']))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['adv_option'][$_smarty_tpl->tpl_vars['selected_adv_option']->value]['price_tax_excl'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl ) );
} elseif ((isset($_smarty_tpl->tpl_vars['demand']->value['adv_option'])) && $_smarty_tpl->tpl_vars['demand']->value['adv_option']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['demand']->value['adv_option'][key($_smarty_tpl->tpl_vars['demand']->value['adv_option'])]['price_tax_excl']),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['price_tax_excl'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl ) );
}?>
																	</span>
																	<?php if ($_smarty_tpl->tpl_vars['demand']->value['price_calc_method'] == HotelRoomTypeGlobalDemand::WK_PRICE_CALC_METHOD_EACH_DAY) {?>
																		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'/ night'),$_smarty_tpl ) );?>

																	<?php }?>
																</p>
															</div>
														</div>
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
					<?php if ((isset($_smarty_tpl->tpl_vars['roomTypeServiceProducts']->value)) && $_smarty_tpl->tpl_vars['roomTypeServiceProducts']->value) {?>
						<div id="room_type_service_product_desc" class="tab-pane<?php if (!(isset($_smarty_tpl->tpl_vars['selectedRoomDemands']->value)) || !$_smarty_tpl->tpl_vars['selectedRoomDemands']->value) {?> active<?php }?>">
							<div class="rooms_extra_demands_head">
								<p class="rooms_extra_demands_text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add below services to the rooms for better hotel experience'),$_smarty_tpl ) );?>
</p>
							</div>
							<div id="room_type_services_desc">
								<?php $_smarty_tpl->_assignInScope('roomCount', 1);?>
								<div class="row room_demands_container">
									<div class="col-sm-12 demand_header">
										<span>
											<i class="icon-bed"></i>
											<?php if ((isset($_smarty_tpl->tpl_vars['selectedRoomServiceProduct']->value['room_num'])) && $_smarty_tpl->tpl_vars['selectedRoomServiceProduct']->value['room_num']) {?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selectedRoomServiceProduct']->value['room_num'], ENT_QUOTES, 'UTF-8', true);?>

											<?php } else { ?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roomCount']->value, ENT_QUOTES, 'UTF-8', true);?>

											<?php }?>
										</span>
									</div>
									<div class="col-sm-12 room_demand_detail">
										<?php if ((isset($_smarty_tpl->tpl_vars['roomTypeServiceProducts']->value)) && $_smarty_tpl->tpl_vars['roomTypeServiceProducts']->value) {?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roomTypeServiceProducts']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
												<div class="row room_demand_block">
														<div class="col-xs-5">
															<div class="row">
																<div class="col-xs-2">
																	<input data-id_cart_booking="<?php echo $_smarty_tpl->tpl_vars['selectedRoomServiceProduct']->value['id'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8', true);?>
" type="checkbox" class="change_room_type_service_product" <?php if ((isset($_smarty_tpl->tpl_vars['selectedRoomServiceProduct']->value['selected_service'])) && $_smarty_tpl->tpl_vars['selectedRoomServiceProduct']->value['selected_service'] && (array_key_exists($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['selectedRoomServiceProduct']->value['selected_service']))) {?>checked<?php }?>/>
																</div>
																<div class="col-xs-10">
																	<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</p>
																	<?php if ($_smarty_tpl->tpl_vars['product']->value['allow_multiple_quantity']) {?>
																		<div class="qty_container">
																			<input type="number" class="form-control room_type_service_product_qty qty" id="qty_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" name="service_product_qty_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" min="1" value="<?php if ((isset($_smarty_tpl->tpl_vars['selectedRoomServiceProduct']->value['selected_service'])) && $_smarty_tpl->tpl_vars['selectedRoomServiceProduct']->value['selected_service'] && (array_key_exists($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['selectedRoomServiceProduct']->value['selected_service']))) {
echo $_smarty_tpl->tpl_vars['selectedRoomServiceProduct']->value['selected_service'][$_smarty_tpl->tpl_vars['product']->value['id_product']]['quantity'];
} else { ?>1<?php }?>">
																		</div>
																	<?php }?>
																</div>
															</div>
														</div>
														<div class="col-xs-3">
															<?php if ($_smarty_tpl->tpl_vars['product']->value['auto_add_to_cart'] && $_smarty_tpl->tpl_vars['product']->value['price_addition_type'] == Product::PRICE_ADDITION_TYPE_INDEPENDENT) {?>
																<span class="badge badge-info label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Convenience fee'),$_smarty_tpl ) );?>
</span>
															<?php }?>
															<?php if ($_smarty_tpl->tpl_vars['product']->value['auto_add_to_cart'] && $_smarty_tpl->tpl_vars['product']->value['price_addition_type'] == Product::PRICE_ADDITION_TYPE_WITH_ROOM) {?>
																<span class="badge badge-info label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Auto added'),$_smarty_tpl ) );?>
</span>
															<?php }?>
														</div>
														<div class="col-xs-4">
															<?php if (($_smarty_tpl->tpl_vars['product']->value['show_price'] && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value))) || (isset($_smarty_tpl->tpl_vars['groups']->value))) {?>
																<span class="pull-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl ) );?>
</span>
															<?php }?>
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
<?php }
}
