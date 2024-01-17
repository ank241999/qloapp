<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:46
  from 'C:\xampp\htdocs\cslhotel\cslhotel\themes\hotel-reservation-theme\_partials\cart_booking_demands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f365d3353_59559895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6adba57a3c1eec59afa73e988ac527211b1c925e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\themes\\hotel-reservation-theme\\_partials\\cart_booking_demands.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f365d3353_59559895 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section>
	<?php if (((isset($_smarty_tpl->tpl_vars['selectedRoomDemands']->value)) && $_smarty_tpl->tpl_vars['selectedRoomDemands']->value) || ((isset($_smarty_tpl->tpl_vars['roomTypeServiceProducts']->value)) && $_smarty_tpl->tpl_vars['roomTypeServiceProducts']->value)) {?>
		<ul class="nav nav-tabs">
			<?php if ((isset($_smarty_tpl->tpl_vars['selectedRoomDemands']->value)) && $_smarty_tpl->tpl_vars['selectedRoomDemands']->value) {?>
				<li class="active"><a href="#room_type_demands_desc" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facilities'),$_smarty_tpl ) );?>
</a></li>
			<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['roomTypeServiceProducts']->value)) && $_smarty_tpl->tpl_vars['roomTypeServiceProducts']->value) {?>
				<li<?php if (!(isset($_smarty_tpl->tpl_vars['selectedRoomDemands']->value)) || !$_smarty_tpl->tpl_vars['selectedRoomDemands']->value) {?> class="active"<?php }?>><a href="#room_type_service_product_desc" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Services'),$_smarty_tpl ) );?>
</a></li>
			<?php }?>
		</ul>
		<div class="tab-content">
			<?php if ((isset($_smarty_tpl->tpl_vars['selectedRoomDemands']->value)) && $_smarty_tpl->tpl_vars['selectedRoomDemands']->value) {?>
				<div id="room_type_demands_desc" class="tab-pane active">
					<div class="rooms_extra_demands_head">
						<p class="rooms_extra_demands_text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add below facilities to the rooms for better hotel experience'),$_smarty_tpl ) );?>
</p>
					</div>
					<?php $_smarty_tpl->_assignInScope('roomCount', 1);?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selectedRoomDemands']->value, 'roomDemand', false, 'key');
$_smarty_tpl->tpl_vars['roomDemand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['roomDemand']->value) {
$_smarty_tpl->tpl_vars['roomDemand']->do_else = false;
?>
						<div class="card accordion">
							<div class="row accordion-section">
								<div class="col-sm-12 demand_header">
									<a class="accordion-section-title <?php if ($_smarty_tpl->tpl_vars['roomCount']->value == 1) {?>active<?php }?>" href="#accordion_demand_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roomCount']->value, ENT_QUOTES, 'UTF-8', true);?>
&nbsp;
										<span>(<?php ob_start();
echo $_smarty_tpl->tpl_vars['roomDemand']->value['adults'];
$_prefixVariable65 = ob_get_clean();
if ($_prefixVariable65 <= 9) {?>0<?php echo $_smarty_tpl->tpl_vars['roomDemand']->value['adults'];
} else {
echo $_smarty_tpl->tpl_vars['roomDemand']->value['adults'];
}?> <?php if ($_smarty_tpl->tpl_vars['roomDemand']->value['adults'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adult'),$_smarty_tpl ) );
}?>, <?php ob_start();
echo $_smarty_tpl->tpl_vars['roomDemand']->value['children'];
$_prefixVariable66 = ob_get_clean();
if ($_prefixVariable66 <= 9) {?>0<?php echo $_smarty_tpl->tpl_vars['roomDemand']->value['children'];
} else {
echo $_smarty_tpl->tpl_vars['roomDemand']->value['children'];
}?> <?php if ($_smarty_tpl->tpl_vars['roomDemand']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}?>)</span>
									</a>
								</div>
								<div id="accordion_demand_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="room_demand_detail col-sm-12 accordion-section-content <?php if ($_smarty_tpl->tpl_vars['roomCount']->value == 1) {?>open<?php }?>" <?php if ($_smarty_tpl->tpl_vars['roomCount']->value == 1) {?>style="display: block;"<?php }?>>
									<?php if ((isset($_smarty_tpl->tpl_vars['roomTypeDemands']->value)) && $_smarty_tpl->tpl_vars['roomTypeDemands']->value) {?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roomTypeDemands']->value, 'demand', false, 'idGlobalDemand');
$_smarty_tpl->tpl_vars['demand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idGlobalDemand']->value => $_smarty_tpl->tpl_vars['demand']->value) {
$_smarty_tpl->tpl_vars['demand']->do_else = false;
?>
											<div class="row room_demand_block">
												<div class="col-xs-8">
													<div class="row">
														<div class="col-xs-2">
															<p class="checkbox">
																<input id_cart_booking="<?php echo $_smarty_tpl->tpl_vars['roomDemand']->value['id'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idGlobalDemand']->value, ENT_QUOTES, 'UTF-8', true);?>
" type="checkbox" class="id_room_type_demand" <?php if ((isset($_smarty_tpl->tpl_vars['roomDemand']->value['selected_global_demands'])) && $_smarty_tpl->tpl_vars['roomDemand']->value['selected_global_demands'] && (in_array($_smarty_tpl->tpl_vars['idGlobalDemand']->value,$_smarty_tpl->tpl_vars['roomDemand']->value['selected_global_demands']))) {?>checked<?php }?> />
															</p>
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
																			<option optionPrice="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['price'], ENT_QUOTES, 'UTF-8', true);?>
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
													<div class="col-xs-4">
														<p class="pull-right">
															<span class="extra_demand_option_price"><?php if ((isset($_smarty_tpl->tpl_vars['selected_adv_option']->value)) && (isset($_smarty_tpl->tpl_vars['demand']->value['adv_option'][$_smarty_tpl->tpl_vars['selected_adv_option']->value]['price']))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['adv_option'][$_smarty_tpl->tpl_vars['selected_adv_option']->value]['price'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['price'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl ) );
}?></span><?php if ($_smarty_tpl->tpl_vars['demand']->value['price_calc_method'] == HotelRoomTypeGlobalDemand::WK_PRICE_CALC_METHOD_EACH_DAY) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'/Night'),$_smarty_tpl ) );
}?>
														</p>
													</div>
												</div>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php }?>
								</div>
							</div>
						</div>
						<?php $_smarty_tpl->_assignInScope('roomCount', $_smarty_tpl->tpl_vars['roomCount']->value+1);?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php }?>

			<?php if ((isset($_smarty_tpl->tpl_vars['roomTypeServiceProducts']->value)) && $_smarty_tpl->tpl_vars['roomTypeServiceProducts']->value) {?>
				<div id="room_type_service_product_desc" class="tab-pane<?php if (!(isset($_smarty_tpl->tpl_vars['selectedRoomDemands']->value)) || !$_smarty_tpl->tpl_vars['selectedRoomDemands']->value) {?> active<?php }?>">
					<div class="rooms_extra_demands_head">
						<p class="rooms_extra_demands_text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add below services to the rooms for better hotel experience'),$_smarty_tpl ) );?>
</p>
					</div>
					<?php $_smarty_tpl->_assignInScope('roomCount', 1);?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartRooms']->value, 'cartRoom', false, 'key');
$_smarty_tpl->tpl_vars['cartRoom']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['cartRoom']->value) {
$_smarty_tpl->tpl_vars['cartRoom']->do_else = false;
?>
						<div class="card accordion">
							<div class="row accordion-section">
								<div class="col-sm-12 demand_header">
									<a class="accordion-section-title <?php if ($_smarty_tpl->tpl_vars['roomCount']->value == 1) {?>active<?php }?>" href="#accordion_service_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roomCount']->value, ENT_QUOTES, 'UTF-8', true);?>
&nbsp;
										<span>(<?php ob_start();
echo $_smarty_tpl->tpl_vars['cartRoom']->value['adults'];
$_prefixVariable67 = ob_get_clean();
if ($_prefixVariable67 <= 9) {?>0<?php echo $_smarty_tpl->tpl_vars['cartRoom']->value['adults'];
} else {
echo $_smarty_tpl->tpl_vars['cartRoom']->value['adults'];
}?> <?php if ($_smarty_tpl->tpl_vars['cartRoom']->value['adults'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adult'),$_smarty_tpl ) );
}?>, <?php ob_start();
echo $_smarty_tpl->tpl_vars['cartRoom']->value['children'];
$_prefixVariable68 = ob_get_clean();
if ($_prefixVariable68 <= 9) {?>0<?php echo $_smarty_tpl->tpl_vars['cartRoom']->value['children'];
} else {
echo $_smarty_tpl->tpl_vars['cartRoom']->value['children'];
}?> <?php if ($_smarty_tpl->tpl_vars['cartRoom']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}?>)</span>
									</a>
								</div>
								<div id="accordion_service_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
" class=" col-sm-12 room_demand_detail accordion-section-content <?php if ($_smarty_tpl->tpl_vars['roomCount']->value == 1) {?>open<?php }?>" <?php if ($_smarty_tpl->tpl_vars['roomCount']->value == 1) {?>style="display: block;"<?php }?>>
									<?php if ((isset($_smarty_tpl->tpl_vars['roomTypeServiceProducts']->value)) && $_smarty_tpl->tpl_vars['roomTypeServiceProducts']->value) {?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roomTypeServiceProducts']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
											<div class="row room_demand_block">
												<div class="col-xs-8">
													<div class="row">
														<div class="col-xs-2">
															<?php if ($_smarty_tpl->tpl_vars['product']->value['available_for_order']) {?>
																<p class="checkbox">
																	<input data-id_cart_booking="<?php echo $_smarty_tpl->tpl_vars['cartRoom']->value['id'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8', true);?>
" type="checkbox" class="change_room_type_service_product" <?php if ((isset($_smarty_tpl->tpl_vars['cartRoom']->value['selected_service'])) && $_smarty_tpl->tpl_vars['cartRoom']->value['selected_service'] && (array_key_exists($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['cartRoom']->value['selected_service']))) {?>checked<?php }?> />
																</p>
															<?php }?>
														</div>
														<div class="col-xs-10">
															<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</p>
															<?php if ($_smarty_tpl->tpl_vars['product']->value['allow_multiple_quantity']) {?>
																<div class="qty_container">
																	<input type="text" class="form-control qty" id="qty_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" name="service_product_qty_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" data-max_quantity="<?php echo $_smarty_tpl->tpl_vars['product']->value['max_quantity'];?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['cartRoom']->value['selected_service'])) && $_smarty_tpl->tpl_vars['cartRoom']->value['selected_service'] && (array_key_exists($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['cartRoom']->value['selected_service']))) {
echo $_smarty_tpl->tpl_vars['cartRoom']->value['selected_service'][$_smarty_tpl->tpl_vars['product']->value['id_product']]['quantity'];
} else { ?>1<?php }?>">
																	<div class="qty_controls">
																		<a href="#" class="qty_up"><span><i class="icon-plus"></i></span></a>
																		<a href="#" class="qty_down"><span><i class="icon-minus"></i></span></a>
																	</div>
																</div>
															<?php }?>
														</div>
													</div>
												</div>
												<div class="col-xs-4">
													<?php if (($_smarty_tpl->tpl_vars['product']->value['show_price'] && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value))) || (isset($_smarty_tpl->tpl_vars['groups']->value))) {?>
														<span class="pull-right"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_incl']),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['product']->value['price_calculation_method'] == Product::PRICE_CALCULATION_METHOD_PER_DAY) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'/Night'),$_smarty_tpl ) );
}?></span>

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
						<?php $_smarty_tpl->_assignInScope('roomCount', $_smarty_tpl->tpl_vars['roomCount']->value+1);?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<div>
			<?php }?>
		</div>
	<?php }?>
</section>
<?php }
}
