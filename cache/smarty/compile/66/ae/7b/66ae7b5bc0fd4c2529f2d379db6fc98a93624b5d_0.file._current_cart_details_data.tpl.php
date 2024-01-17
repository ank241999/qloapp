<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:46
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\orders\_current_cart_details_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f364e2365_14002121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66ae7b5bc0fd4c2529f2d379db6fc98a93624b5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\orders\\_current_cart_details_data.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f364e2365_14002121 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel form-horizontal" id="customer_cart_details">
	<div class="panel-heading">
		<i class="icon-shopping-cart"></i>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart Details'),$_smarty_tpl ) );?>

	</div>
	<div class="row">
		<div class="col-lg-12 table-responsive">
			<table class="table" id="customer_cart_details_table">
				<?php if ((isset($_smarty_tpl->tpl_vars['cart_detail_data']->value)) && $_smarty_tpl->tpl_vars['cart_detail_data']->value) {?>
					<thead>
						<tr>
							<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room No.'),$_smarty_tpl ) );?>
</span></th>
							<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Image'),$_smarty_tpl ) );?>
</th>
							<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Type'),$_smarty_tpl ) );?>
</span></th>
							<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duration'),$_smarty_tpl ) );?>
</span></th>
							<?php if ($_smarty_tpl->tpl_vars['occupancy_required_for_booking']->value) {?>
							<th><span class="fixed-width-lg title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Occupancy'),$_smarty_tpl ) );?>
</span></th>
						<?php }?>
						<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unit Price (tax excl)'),$_smarty_tpl ) );?>
</span></th>
							<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Extra Services / Fees (tax excl)'),$_smarty_tpl ) );?>
</span></th>
														<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Price (tax excl)'),$_smarty_tpl ) );?>
</span></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php $_smarty_tpl->_assignInScope('curr_id', intval($_smarty_tpl->tpl_vars['cart']->value->id_currency));?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_detail_data']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
							<tr  data-id-booking-data="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" data-id-product="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_product'];?>
" data-id-room="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_room'];?>
" data-date-from="<?php echo $_smarty_tpl->tpl_vars['data']->value['date_from'];?>
" data-date-to="<?php echo $_smarty_tpl->tpl_vars['data']->value['date_to'];?>
" >
								<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['room_num'], ENT_QUOTES, 'UTF-8', true);?>
</td>
								<td><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['image_link'], ENT_QUOTES, 'UTF-8', true);?>
" title="Room image" /></td>
								<td>
									<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['room_type'], ENT_QUOTES, 'UTF-8', true);?>
</p>
								</td>
								<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['data']->value['date_from']),$_smarty_tpl ) );?>
 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['data']->value['date_to']),$_smarty_tpl ) );?>
</td>
								<?php if ($_smarty_tpl->tpl_vars['occupancy_required_for_booking']->value) {?>
									<td>
										<div class="dropdown">
											<button class="booking_guest_occupancy btn btn-default btn-left btn-block input-occupancy" type="button">
												<span>
													<?php if ($_smarty_tpl->tpl_vars['data']->value['adults']) {
echo $_smarty_tpl->tpl_vars['data']->value['adults'];
}?> <?php if ($_smarty_tpl->tpl_vars['data']->value['adults'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adult'),$_smarty_tpl ) );
}
ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['children'];
$_prefixVariable15 = ob_get_clean();
if ($_prefixVariable15) {?>, <?php echo $_smarty_tpl->tpl_vars['data']->value['children'];?>
 <?php if ($_smarty_tpl->tpl_vars['data']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}
}?>
												</span>
											</button>
											<div class="dropdown-menu booking_occupancy_wrapper fixed-width-xxl">
												<div class="booking_occupancy_inner">
													<input type="hidden" class="max_adults" value="<?php if ((isset($_smarty_tpl->tpl_vars['data']->value['room_type_info']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['room_type_info']['max_adults'], ENT_QUOTES, 'UTF-8', true);
}?>">
													<input type="hidden" class="max_children" value="<?php if ((isset($_smarty_tpl->tpl_vars['data']->value['room_type_info']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['room_type_info']['max_children'], ENT_QUOTES, 'UTF-8', true);
}?>">
													<input type="hidden" class="max_guests" value="<?php if ((isset($_smarty_tpl->tpl_vars['data']->value['room_type_info']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['room_type_info']['max_guests'], ENT_QUOTES, 'UTF-8', true);
}?>">
													<div class="occupancy_info_block selected" occ_block_index="0">
														<div class="occupancy_info_head col-sm-12"><span class="room_num_wrapper"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room - 1'),$_smarty_tpl ) );?>
</span></div>
														<div class="row">
															<div class="col-xs-6 occupancy_count_block">
																<div class="col-sm-12">
																	<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );?>
</label>
																	<input type="number" class="form-control num_occupancy num_adults" name="occupancy[0][adults]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['adults'];?>
" min="1" max="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['room_type_info']['max_adults'], ENT_QUOTES, 'UTF-8', true);?>
">
																</div>
															</div>
															<div class="col-xs-6 occupancy_count_block">
																<div class="col-sm-12">
																	<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );?>
 <span class="label-desc-txt"></span></label>
																	<input type="number" class="form-control num_occupancy num_children" name="occupancy[0][children]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['children'];?>
" min="0" max="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['room_type_info']['max_children'], ENT_QUOTES, 'UTF-8', true);?>
">
																	(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Below'),$_smarty_tpl ) );?>
  <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['max_child_age']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'years'),$_smarty_tpl ) );?>
)
																</div>
															</div>
														</div>
														<div class="row children_age_info_block" <?php if (!(isset($_smarty_tpl->tpl_vars['data']->value['child_ages'])) || !$_smarty_tpl->tpl_vars['data']->value['child_ages']) {?>style="display:none"<?php }?>>
															<div class="col-sm-12">
																<label class="col-sm-12"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Children'),$_smarty_tpl ) );?>
</label>
																<div class="col-sm-12">
																	<div class="row children_ages">
																		<?php if ((isset($_smarty_tpl->tpl_vars['data']->value['child_ages'])) && $_smarty_tpl->tpl_vars['data']->value['child_ages']) {?>
																			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['child_ages'], 'childAge');
$_smarty_tpl->tpl_vars['childAge']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['childAge']->value) {
$_smarty_tpl->tpl_vars['childAge']->do_else = false;
?>
																				<p class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
																					<select class="guest_child_age room_occupancies" name="occupancy[0][child_ages][]">
																						<option value="-1" <?php if ($_smarty_tpl->tpl_vars['childAge']->value == -1) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select 1'),$_smarty_tpl ) );?>
</option>
																						<option value="0" <?php if ($_smarty_tpl->tpl_vars['childAge']->value == 0) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Under 1'),$_smarty_tpl ) );?>
</option>
																						<?php
$_smarty_tpl->tpl_vars['age'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['age']->step = 1;$_smarty_tpl->tpl_vars['age']->total = (int) ceil(($_smarty_tpl->tpl_vars['age']->step > 0 ? ($_smarty_tpl->tpl_vars['max_child_age']->value-1)+1 - (1) : 1-(($_smarty_tpl->tpl_vars['max_child_age']->value-1))+1)/abs($_smarty_tpl->tpl_vars['age']->step));
if ($_smarty_tpl->tpl_vars['age']->total > 0) {
for ($_smarty_tpl->tpl_vars['age']->value = 1, $_smarty_tpl->tpl_vars['age']->iteration = 1;$_smarty_tpl->tpl_vars['age']->iteration <= $_smarty_tpl->tpl_vars['age']->total;$_smarty_tpl->tpl_vars['age']->value += $_smarty_tpl->tpl_vars['age']->step, $_smarty_tpl->tpl_vars['age']->iteration++) {
$_smarty_tpl->tpl_vars['age']->first = $_smarty_tpl->tpl_vars['age']->iteration === 1;$_smarty_tpl->tpl_vars['age']->last = $_smarty_tpl->tpl_vars['age']->iteration === $_smarty_tpl->tpl_vars['age']->total;?>
																							<option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['age']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['childAge']->value == $_smarty_tpl->tpl_vars['age']->value) {?>selected<?php }?>><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['age']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
																						<?php }
}
?>
																					</select>
																				</p>
																			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																		<?php }?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</td>
								<?php }?>
								<td id="cart_detail_data_unit_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">
									<?php if ($_smarty_tpl->tpl_vars['data']->value['feature_price_diff'] != 0) {?>
										<?php $_smarty_tpl->_assignInScope('shown_room_type_price', $_smarty_tpl->tpl_vars['data']->value['feature_price_tax_excl']);?>
									<?php } else { ?>
										<?php $_smarty_tpl->_assignInScope('shown_room_type_price', $_smarty_tpl->tpl_vars['data']->value['product_price_tax_excl']);?>
									<?php }?>
									<div class="input-group">
										<input type="text" class="room_unit_price" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shown_room_type_price']->value, ENT_QUOTES, 'UTF-8', true);?>
">
										<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;
echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>
</span>
									</div>
								</td>
								<td>
									<?php if (((isset($_smarty_tpl->tpl_vars['data']->value['extra_demands'])) && $_smarty_tpl->tpl_vars['data']->value['extra_demands']) || ((isset($_smarty_tpl->tpl_vars['data']->value['additional_service'])) && $_smarty_tpl->tpl_vars['data']->value['additional_service'])) {?>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>htmlspecialchars(($_smarty_tpl->tpl_vars['data']->value['demand_price']+$_smarty_tpl->tpl_vars['data']->value['additional_service_price']+$_smarty_tpl->tpl_vars['data']->value['additional_services_auto_add_price']), ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl ) );?>

									<?php } else { ?>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>0),$_smarty_tpl ) );?>

									<?php }?>
								</td>
																<td class="cart_line_total_price">
									<?php if (((isset($_smarty_tpl->tpl_vars['data']->value['extra_demands'])) && $_smarty_tpl->tpl_vars['data']->value['extra_demands']) || ((isset($_smarty_tpl->tpl_vars['data']->value['additional_service'])) && $_smarty_tpl->tpl_vars['data']->value['additional_service'])) {?>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>htmlspecialchars(($_smarty_tpl->tpl_vars['data']->value['amt_with_qty']+$_smarty_tpl->tpl_vars['data']->value['additional_services_auto_add_price']+$_smarty_tpl->tpl_vars['data']->value['demand_price']+$_smarty_tpl->tpl_vars['data']->value['additional_service_price']), ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl ) );?>

									<?php } else { ?>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['amt_with_qty'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl ) );?>

									<?php }?>
								</td>
								<td>
									<button class="delete_hotel_cart_data btn btn-danger" data-id_room=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['id_room'], ENT_QUOTES, 'UTF-8', true);?>
 data-id_product=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['id_product'], ENT_QUOTES, 'UTF-8', true);?>
 data-id = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
 data-id_cart = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['id_cart'], ENT_QUOTES, 'UTF-8', true);?>
 data-date_to = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['date_to'], ENT_QUOTES, 'UTF-8', true);?>
 data-date_from = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['date_from'], ENT_QUOTES, 'UTF-8', true);?>
>
										<i class="icon-trash"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>

									</button>
									<?php if (((isset($_smarty_tpl->tpl_vars['data']->value['extra_demands'])) && $_smarty_tpl->tpl_vars['data']->value['extra_demands']) || (isset($_smarty_tpl->tpl_vars['data']->value['additional_service'])) && $_smarty_tpl->tpl_vars['data']->value['additional_service']) {?>
										<br />
										<a href="#" id_room=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['id_room'], ENT_QUOTES, 'UTF-8', true);?>
 date_from="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['date_from'], ENT_QUOTES, 'UTF-8', true);?>
" date_to="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['date_to'], ENT_QUOTES, 'UTF-8', true);?>
" id_product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['id_product'], ENT_QUOTES, 'UTF-8', true);?>
" id_cart="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['id_cart'], ENT_QUOTES, 'UTF-8', true);?>
" class="open_rooms_extra_demands btn btn-success" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here to add or remove the extra services of this room type.'),$_smarty_tpl ) );?>
">
											<i class="icon-pencil"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Services'),$_smarty_tpl ) );?>

										</a>
									<?php }?>
								</td>
							</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tbody>
				<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['cart_normal_data']->value)) && $_smarty_tpl->tpl_vars['cart_normal_data']->value) {?>
					<thead>
						<tr>
							<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image'),$_smarty_tpl ) );?>
</th>
							<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name'),$_smarty_tpl ) );?>
</span></th>
							<th colspan="2"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Name'),$_smarty_tpl ) );?>
</span></th>
							<th colspan="2"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unit Price (tax excl)'),$_smarty_tpl ) );?>
</span></th>
							<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity'),$_smarty_tpl ) );?>
</span></th>
							<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Price (Tax incl.)'),$_smarty_tpl ) );?>
</span></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_normal_data']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
							<tr>
								<td><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover_img'], ENT_QUOTES, 'UTF-8', true);?>
" class="img-responsive" /></td>
								<td><p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</p></td>
								<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['product']->value['hotel_name'];?>
</td>
								<td colspan="2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_tax_incl']),$_smarty_tpl ) );?>
</td>
								<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
								<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_price_tax_incl']),$_smarty_tpl ) );?>
</td>
								<td>
									<button class="delete_service_product btn btn-danger" data-id-hotel="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_hotel'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-id_product=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8', true);?>
 data-id_cart = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value->id, ENT_QUOTES, 'UTF-8', true);?>
>
										<i class="icon-trash"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>

									</button>
								</td>
							</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tbody>
				<?php }?>
			</table>
		</div>
	</div>
</div>


<?php $_block_plugin37 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin37, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtExtraDemandSucc'));
$_block_repeat=true;
echo $_block_plugin37->addJsDefL(array('name'=>'txtExtraDemandSucc'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Updated Successfully','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin37->addJsDefL(array('name'=>'txtExtraDemandSucc'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin38 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin38, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtExtraDemandErr'));
$_block_repeat=true;
echo $_block_plugin38->addJsDefL(array('name'=>'txtExtraDemandErr'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some error occurred while updating demands','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin38->addJsDefL(array('name'=>'txtExtraDemandErr'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<style type="text/css">
	#customer_cart_details .extra-demand-list {
		padding-left:15px;}
	#customer_cart_details .delete_hotel_cart_data {
		margin-bottom:2px !important;}
	#customer_cart_details .room_type_old_price {
		text-decoration: line-through;
		color:#979797;
		font-size:12px;}
	/*Extra demands CSS*/
	#rooms_type_extra_demands .modal-header {
		padding-bottom: 0px}
	#rooms_extra_demands {
		font-size: 16px;}
	#rooms_extra_demands .room_demands_container {
		border: 1px solid #ddd;}
	#rooms_extra_demands .demand_header {
		padding: 10px;
		color: #333;
		border-bottom: 1px solid #ddd;}
	#rooms_extra_demands .rooms_extra_demands_head {
		margin-bottom: 18px;}
	#rooms_extra_demands .room_demand_block {
		margin-bottom: 15px;
		color: #333;
		font-size: 14px;}
	#rooms_extra_demands .room_demand_detail {
		padding: 15px 15px 0px 15px;}
</style>
<?php }
}
