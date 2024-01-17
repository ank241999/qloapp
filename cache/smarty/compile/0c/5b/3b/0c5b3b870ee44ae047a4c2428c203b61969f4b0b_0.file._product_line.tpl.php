<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:46
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\orders\_product_line.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f367a24f9_18899464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c5b3b870ee44ae047a4c2428c203b61969f4b0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\orders\\_product_line.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f367a24f9_18899464 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\tools\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<tr class="product-line-row" data-id_room="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_room'];?>
" data-id_product="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_product'];?>
" data-id_hotel="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_hotel'];?>
" data-date_from="<?php echo $_smarty_tpl->tpl_vars['data']->value['date_from'];?>
" data-date_to="<?php echo $_smarty_tpl->tpl_vars['data']->value['date_to'];?>
" data-product_price="<?php echo $_smarty_tpl->tpl_vars['data']->value['unit_amt_tax_incl'];?>
" data-id_order_detail="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_order_detail'];?>
">
	<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
		<td class="standard_refund_fields" style="display:none">
			<input type="checkbox" name="id_htl_booking[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['refundReqBookings']->value)) && (in_array($_smarty_tpl->tpl_vars['data']->value['id'],$_smarty_tpl->tpl_vars['refundReqBookings']->value))) {?>disabled<?php }?>/>
		</td>
	<?php }?>
	<td class="text-center">
		<?php echo $_smarty_tpl->tpl_vars['data']->value['room_num'];?>

	</td>
	<td class="text-center">
		<img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['image_link'];?>
" title="Room image" />
	</td>
	<td class="text-center">
		<p><?php echo $_smarty_tpl->tpl_vars['data']->value['room_type'];?>
</p>
					</td>
	<td class="text-center">
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAddHotel');?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_hotel'];?>
&amp;updatehtl_branch_info" target="_blank">
			<span><?php echo $_smarty_tpl->tpl_vars['data']->value['hotel_name'];?>
</span>
		</a>
	</td>
	<td class="text-center">
		<span class="booking_duration_show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['data']->value['date_from']),$_smarty_tpl ) );?>
 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['data']->value['date_to']),$_smarty_tpl ) );?>
</span>

		<?php if ($_smarty_tpl->tpl_vars['can_edit']->value) {?>
			<div class="booking_duration_edit" style="display:none;">
				<div class="form-group">
					<div class="fixed-width-xl room_check_in_div">
						<div class="input-group">
							<div class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check In'),$_smarty_tpl ) );?>
</div>
							<input type="text" class="form-control edit_product_date_from" name="edit_product[date_from]" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['date_from'],"%d-%m-%Y");?>
"/>
							<div class="input-group-addon"><i class="icon-calendar"></i></div>
						</div>
					</div>
					<br/>
					<div class="fixed-width-xl room_check_out_div">
						<div class="input-group">
							<div class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check Out'),$_smarty_tpl ) );?>
</div>
							<input type="text" class="form-control edit_product_date_to" name="edit_product[date_to]" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['date_to'],"%d-%m-%Y");?>
"/>
							<div class="input-group-addon"><i class="icon-calendar"></i></div>
						</div>
					</div>
				</div>
			</div>
		<?php }?>
	</td>
	<td class="text-center">
		<?php if ($_smarty_tpl->tpl_vars['order']->value->with_occupancy && $_smarty_tpl->tpl_vars['data']->value['children']) {?>
			<div class="dropdown booking_occupancy_show">
				<button class="btn btn-default btn-left btn-block" data-toggle="dropdown" type="button">
					<span><?php if ($_smarty_tpl->tpl_vars['data']->value['adults']) {
echo $_smarty_tpl->tpl_vars['data']->value['adults'];
}?> <?php if ($_smarty_tpl->tpl_vars['data']->value['adults'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adult'),$_smarty_tpl ) );
}
ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['children'];
$_prefixVariable16 = ob_get_clean();
if ($_prefixVariable16) {?>, <?php echo $_smarty_tpl->tpl_vars['data']->value['children'];?>
 <?php if ($_smarty_tpl->tpl_vars['data']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}
}?></span>
				</button>
				<div class="dropdown-menu well well-sm">
					<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children Ages'),$_smarty_tpl ) );?>
</label>
					<?php if ((isset($_smarty_tpl->tpl_vars['data']->value['child_ages'])) && $_smarty_tpl->tpl_vars['data']->value['child_ages']) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['child_ages'], 'childAge');
$_smarty_tpl->tpl_vars['childAge']->iteration = 0;
$_smarty_tpl->tpl_vars['childAge']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['childAge']->value) {
$_smarty_tpl->tpl_vars['childAge']->do_else = false;
$_smarty_tpl->tpl_vars['childAge']->iteration++;
$__foreach_childAge_236_saved = $_smarty_tpl->tpl_vars['childAge'];
?>
							<p class="">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child %s : %s years','sprintf'=>array($_smarty_tpl->tpl_vars['childAge']->iteration,$_smarty_tpl->tpl_vars['childAge']->value)),$_smarty_tpl ) );?>

							</p>
						<?php
$_smarty_tpl->tpl_vars['childAge'] = $__foreach_childAge_236_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
				</div>
			</div>
		<?php } else { ?>
			<span class="booking_occupancy_show"><?php if ($_smarty_tpl->tpl_vars['data']->value['adults']) {
echo $_smarty_tpl->tpl_vars['data']->value['adults'];
}?> <?php if ($_smarty_tpl->tpl_vars['data']->value['adults'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adult'),$_smarty_tpl ) );
}
ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['children'];
$_prefixVariable17 = ob_get_clean();
if ($_prefixVariable17) {?>, <?php echo $_smarty_tpl->tpl_vars['data']->value['children'];?>
 <?php if ($_smarty_tpl->tpl_vars['data']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}
}?></span>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['order']->value->with_occupancy) {?>
			<div class="booking_occupancy_edit" style="display:none;">
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
$_prefixVariable18 = ob_get_clean();
if ($_prefixVariable18) {?>, <?php echo $_smarty_tpl->tpl_vars['data']->value['children'];?>
 <?php if ($_smarty_tpl->tpl_vars['data']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}
}?>
						</span>
					</button>
					<div class="dropdown-menu booking_occupancy_wrapper fixed-width-xxl well well-sm">
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
							<div class="occupancy_info_block" occ_block_index="0">
								<div class="occupancy_info_head col-sm-12"><span class="room_num_wrapper"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room - 1'),$_smarty_tpl ) );?>
</span></div>
								<div class="row">
									<div class="col-xs-6 occupancy_count_block">
										<div class="col-sm-12">
											<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );?>
</label>
											<input type="number" class="form-control num_occupancy num_adults" name="occupancy[0][adults]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['adults'];?>
" min="1"  max="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['room_type_info']['max_adults'], ENT_QUOTES, 'UTF-8', true);?>
">
										</div>
									</div>
									<div class="col-xs-6 occupancy_count_block">
										<div class="col-sm-12">
											<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );?>
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
$_smarty_tpl->tpl_vars['childAge']->iteration = 0;
$_smarty_tpl->tpl_vars['childAge']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['childAge']->value) {
$_smarty_tpl->tpl_vars['childAge']->do_else = false;
$_smarty_tpl->tpl_vars['childAge']->iteration++;
$__foreach_childAge_237_saved = $_smarty_tpl->tpl_vars['childAge'];
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
$_smarty_tpl->tpl_vars['childAge'] = $__foreach_childAge_237_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												<?php }?>
											</div>
										</div>
									</div>
								</div>
								<hr class="occupancy-info-separator">
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } else { ?>
			<span class="booking_occupancy_edit" style="display:none;"><?php if ($_smarty_tpl->tpl_vars['data']->value['adults']) {
echo $_smarty_tpl->tpl_vars['data']->value['adults'];
}?> <?php if ($_smarty_tpl->tpl_vars['data']->value['adults'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adult'),$_smarty_tpl ) );
}
ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['children'];
$_prefixVariable19 = ob_get_clean();
if ($_prefixVariable19) {?>, <?php echo $_smarty_tpl->tpl_vars['data']->value['children'];?>
 <?php if ($_smarty_tpl->tpl_vars['data']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}
}?></span>
		<?php }?>
	</td>
	<td class="text-center">
		<span class="room_unit_price_show">
						<p>
				<span class="room_type_current_price">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['data']->value['total_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>

				</span>
			</p>
			<p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Per day price:'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['data']->value['paid_unit_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>
</p>
		</span>
		<div class="room_unit_price_edit" style="display: none;">
			<input type="text" class="room_unit_price" name="room_unit_price" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['paid_unit_price_tax_excl'];?>
">
			<p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set per day price'),$_smarty_tpl ) );?>
</p>
		</div>
	</td>
	<td class="text-center">
		<span class="extra_service_show">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['data']->value['extra_demands_price_te']+$_smarty_tpl->tpl_vars['data']->value['additional_services_price_te']+$_smarty_tpl->tpl_vars['data']->value['convenience_fee_te']+$_smarty_tpl->tpl_vars['data']->value['additional_services_price_auto_add_te']),'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>

			<?php if (($_smarty_tpl->tpl_vars['data']->value['extra_demands_price_te']+$_smarty_tpl->tpl_vars['data']->value['additional_services_price_te']+$_smarty_tpl->tpl_vars['data']->value['convenience_fee_te']+$_smarty_tpl->tpl_vars['data']->value['additional_services_price_auto_add_te']) > 0) {?>
				<a href="#" data-toggle="modal" data-target="#rooms_type_extra_demands" date_from="<?php echo $_smarty_tpl->tpl_vars['data']->value['date_from'];?>
" date_to="<?php echo $_smarty_tpl->tpl_vars['data']->value['date_to'];?>
" id_product="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_product'];?>
" id_room="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_room'];?>
" id_order="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" class="open_room_extra_services" id_htl_booking="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
					<i class="icon icon-lg icon-info-circle"></i>
				</a>
			<?php }?>
		</span>
		<span class="extra_service_edit" style="display: none;">
			<a href="#" data-toggle="modal" data-target="#rooms_type_extra_demands" date_from="<?php echo $_smarty_tpl->tpl_vars['data']->value['date_from'];?>
" date_to="<?php echo $_smarty_tpl->tpl_vars['data']->value['date_to'];?>
" id_product="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_product'];?>
" id_room="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_room'];?>
" id_order="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" class="open_room_extra_services" id_htl_booking="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['data']->value['extra_demands_price_te']+$_smarty_tpl->tpl_vars['data']->value['additional_services_price_te']+$_smarty_tpl->tpl_vars['data']->value['convenience_fee_te']+$_smarty_tpl->tpl_vars['data']->value['additional_services_price_auto_add_te']),'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>

			</a>
		</span>
	</td>
	<td class="text-center">
		<span class="product_price_show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['data']->value['total_room_tax']),'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>
</span>
	</td>
	<td class="text-center">
		<span class="product_price_show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['data']->value['total_room_price_ti']),'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>
</span>
		<?php if ($_smarty_tpl->tpl_vars['can_edit']->value) {?>
		<div class="product_price_edit" style="display:none;">
			<div class="form-group">
				<div class="fixed-width-xl">
					<div class="input-group">
						<?php if ($_smarty_tpl->tpl_vars['currency']->value->format%2) {?><div class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax excl.'),$_smarty_tpl ) );?>
</div><?php }?>
						<input type="text" name="product_price_tax_excl" class="edit_product_price_tax_excl edit_product_price" value="<?php echo Tools::ps_round($_smarty_tpl->tpl_vars['data']->value['original_unit_price_tax_excl'],2);?>
"/>
						<?php if (!($_smarty_tpl->tpl_vars['currency']->value->format%2)) {?><div class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax excl.'),$_smarty_tpl ) );?>
</div><?php }?>
					</div>
				</div>
				<br/>
				<div class="fixed-width-xl">
					<div class="input-group">
						<?php if ($_smarty_tpl->tpl_vars['currency']->value->format%2) {?><div class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax incl.'),$_smarty_tpl ) );?>
</div><?php }?>
						<input type="text" name="product_price_tax_incl" class="edit_product_price_tax_incl edit_product_price" value="<?php echo Tools::ps_round($_smarty_tpl->tpl_vars['data']->value['original_unit_price_tax_incl'],2);?>
"/>
						<?php if (!($_smarty_tpl->tpl_vars['currency']->value->format%2)) {?><div class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax incl.'),$_smarty_tpl ) );?>
</div><?php }?>
					</div>
				</div>
			</div>
		</div>
		<?php }?>
	</td>
	<?php if (((isset($_smarty_tpl->tpl_vars['refundReqBookings']->value)) && $_smarty_tpl->tpl_vars['refundReqBookings']->value) || ((isset($_smarty_tpl->tpl_vars['isCancelledRoom']->value)) && $_smarty_tpl->tpl_vars['isCancelledRoom']->value)) {?>
		<td class="text-center">
			<?php if ($_smarty_tpl->tpl_vars['data']->value['is_cancelled']) {?>
				<span class="badge badge-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancelled'),$_smarty_tpl ) );?>
</span>
			<?php } elseif ((isset($_smarty_tpl->tpl_vars['data']->value['refund_info'])) && $_smarty_tpl->tpl_vars['data']->value['refund_info']) {?>
				<span class="badge" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['refund_info']['color'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['refund_info']['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
			<?php } else { ?>
				<span>--</span>
			<?php }?>
		</td>
		<td class="text-center">
			<?php if ((isset($_smarty_tpl->tpl_vars['data']->value['refund_info'])) && $_smarty_tpl->tpl_vars['data']->value['refund_info']) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['data']->value['refund_info']['refunded_amount'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>

			<?php }?>
		</td>
	<?php }?>
	<?php if (($_smarty_tpl->tpl_vars['can_edit']->value && !$_smarty_tpl->tpl_vars['order']->value->hasBeenDelivered())) {?>
		<td class="product_invoice" style="display: none;">
		<?php if (sizeof($_smarty_tpl->tpl_vars['invoices_collection']->value)) {?>
		<select name="product_invoice" class="edit_product_invoice">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoices_collection']->value, 'invoice');
$_smarty_tpl->tpl_vars['invoice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['invoice']->value) {
$_smarty_tpl->tpl_vars['invoice']->do_else = false;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
" >
				#<?php echo Configuration::get('PS_INVOICE_PREFIX',$_smarty_tpl->tpl_vars['current_id_lang']->value,null,$_smarty_tpl->tpl_vars['order']->value->id_shop);
echo sprintf('%06d',$_smarty_tpl->tpl_vars['invoice']->value->number);?>

			</option>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</select>
		<?php } else { ?>
		&nbsp;
		<?php }?>
		</td>
		<td class="product_action text-right">
						<div class="btn-group pull-right">
				<button type="button" class="btn btn-default edit_room_change_link">
					<i class="icon-pencil"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit'),$_smarty_tpl ) );?>

				</button>
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li>
						<a href="#" data-toggle="modal" data-target="#mySwappigModal" data-id_order="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" data-room_num='<?php echo $_smarty_tpl->tpl_vars['data']->value['room_num'];?>
' data-date_from='<?php echo $_smarty_tpl->tpl_vars['data']->value['date_from'];?>
' data-date_to='<?php echo $_smarty_tpl->tpl_vars['data']->value['date_to'];?>
' data-id_room='<?php echo $_smarty_tpl->tpl_vars['data']->value['id_room'];?>
' data-cust_name='<?php echo $_smarty_tpl->tpl_vars['data']->value['alloted_cust_name'];?>
' data-cust_email='<?php echo $_smarty_tpl->tpl_vars['data']->value['alloted_cust_email'];?>
' data-avail_rm_swap='<?php echo json_encode($_smarty_tpl->tpl_vars['data']->value['avail_rooms_to_swap']);?>
' data-avail_rm_realloc='<?php echo json_encode($_smarty_tpl->tpl_vars['data']->value['avail_rooms_to_realloc']);?>
'>
							<i class="icon-refresh"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reallocate Room'),$_smarty_tpl ) );?>

						</a>
					</li>
					<li>
						<a href="#" class="delete_room_line">
							<i class="icon-trash"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>

						</a>
					</li>
				</ul>
			</div>
						<button type="button" class="btn btn-default submitRoomChange" style="display: none;">
				<i class="icon-ok"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update'),$_smarty_tpl ) );?>

			</button>
			<button type="button" class="btn btn-default cancel_room_change_link" style="display: none;">
				<i class="icon-remove"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

			</button>
		</td>
	<?php }?>
</tr><?php }
}
