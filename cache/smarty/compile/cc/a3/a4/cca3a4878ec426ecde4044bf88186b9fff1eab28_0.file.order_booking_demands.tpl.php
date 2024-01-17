<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:46
  from 'C:\xampp\htdocs\cslhotel\cslhotel\themes\hotel-reservation-theme\_partials\order_booking_demands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f366b6b44_46995928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cca3a4878ec426ecde4044bf88186b9fff1eab28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\themes\\hotel-reservation-theme\\_partials\\order_booking_demands.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f366b6b44_46995928 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section>
	<?php if (((isset($_smarty_tpl->tpl_vars['extraDemands']->value)) && $_smarty_tpl->tpl_vars['extraDemands']->value) || ((isset($_smarty_tpl->tpl_vars['additionalServices']->value)) && $_smarty_tpl->tpl_vars['additionalServices']->value)) {?>
		<ul class="nav nav-tabs">
			<?php if ((isset($_smarty_tpl->tpl_vars['extraDemands']->value)) && $_smarty_tpl->tpl_vars['extraDemands']->value) {?>
				<li class="active"><a href="#room_type_demands_desc" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facilities'),$_smarty_tpl ) );?>
</a></li>
			<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['additionalServices']->value)) && $_smarty_tpl->tpl_vars['additionalServices']->value) {?>
				<li<?php if (!(isset($_smarty_tpl->tpl_vars['extraDemands']->value)) || !$_smarty_tpl->tpl_vars['extraDemands']->value) {?> class="active"<?php }?>><a href="#room_type_service_product_desc" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Services'),$_smarty_tpl ) );?>
</a></li>
			<?php }?>
		</ul>
		<div class="tab-content">
			<?php if ((isset($_smarty_tpl->tpl_vars['extraDemands']->value)) && $_smarty_tpl->tpl_vars['extraDemands']->value) {?>
				<div id="room_type_demands_desc" class="tab-pane active">
					<div class="rooms_extra_demands_head">
						<p class="rooms_extra_demands_text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Below are the facilities chosen by you in this booking'),$_smarty_tpl ) );?>
</p>
					</div>
					<?php $_smarty_tpl->_assignInScope('roomCount', 1);?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extraDemands']->value, 'roomDemand');
$_smarty_tpl->tpl_vars['roomDemand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['roomDemand']->value) {
$_smarty_tpl->tpl_vars['roomDemand']->do_else = false;
?>
						<div class="card">
							<div class="row">
								<div class="col-sm-12 demand_header">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roomCount']->value, ENT_QUOTES, 'UTF-8', true);?>
&nbsp;
									<span>(<?php ob_start();
echo $_smarty_tpl->tpl_vars['roomDemand']->value['adults'];
$_prefixVariable69 = ob_get_clean();
if ($_prefixVariable69 <= 9) {?>0<?php echo $_smarty_tpl->tpl_vars['roomDemand']->value['adults'];
} else {
echo $_smarty_tpl->tpl_vars['roomDemand']->value['adults'];
}?> <?php if ($_smarty_tpl->tpl_vars['roomDemand']->value['adults'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adult'),$_smarty_tpl ) );
}?>, <?php ob_start();
echo $_smarty_tpl->tpl_vars['roomDemand']->value['children'];
$_prefixVariable70 = ob_get_clean();
if ($_prefixVariable70 <= 9) {?>0<?php echo $_smarty_tpl->tpl_vars['roomDemand']->value['children'];
} else {
echo $_smarty_tpl->tpl_vars['roomDemand']->value['children'];
}?> <?php if ($_smarty_tpl->tpl_vars['roomDemand']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}?>)</span>
								</div>
								<div class="col-sm-12 room_demand_detail">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roomDemand']->value['extra_demands'], 'demand');
$_smarty_tpl->tpl_vars['demand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['demand']->value) {
$_smarty_tpl->tpl_vars['demand']->do_else = false;
?>
										<div class="row room_demand_block">
											<div class="col-xs-6"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div>
											<div class="col-xs-6">
												<span class="pull-right">
													<?php if ($_smarty_tpl->tpl_vars['useTax']->value) {?>
														<?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['total_price_tax_incl'], ENT_QUOTES, 'UTF-8', true);
$_prefixVariable71=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_prefixVariable71),$_smarty_tpl ) );?>

													<?php } else { ?>
														<?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['total_price_tax_excl'], ENT_QUOTES, 'UTF-8', true);
$_prefixVariable72=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_prefixVariable72),$_smarty_tpl ) );?>

													<?php }?>
												</span>
											</div>
										</div>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						</div>
						<?php $_smarty_tpl->_assignInScope('roomCount', $_smarty_tpl->tpl_vars['roomCount']->value+1);?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php }?>

			<?php if ((isset($_smarty_tpl->tpl_vars['additionalServices']->value)) && $_smarty_tpl->tpl_vars['additionalServices']->value) {?>
				<div id="room_type_service_product_desc" class="tab-pane<?php if (!(isset($_smarty_tpl->tpl_vars['extraDemands']->value)) || !$_smarty_tpl->tpl_vars['extraDemands']->value) {?> active<?php }?>">
					<div class="rooms_extra_demands_head">
						<p class="rooms_extra_demands_text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Below are the services chosen by you in this booking'),$_smarty_tpl ) );?>
</p>
					</div>
					<?php $_smarty_tpl->_assignInScope('roomCount', 1);?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['additionalServices']->value, 'roomAdditionalService', false, 'key');
$_smarty_tpl->tpl_vars['roomAdditionalService']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['roomAdditionalService']->value) {
$_smarty_tpl->tpl_vars['roomAdditionalService']->do_else = false;
?>
						<div class="card">
							<div class="row">
								<div class="col-sm-12 demand_header">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roomCount']->value, ENT_QUOTES, 'UTF-8', true);?>
&nbsp;
									<span>(<?php ob_start();
echo $_smarty_tpl->tpl_vars['roomAdditionalService']->value['adults'];
$_prefixVariable73 = ob_get_clean();
if ($_prefixVariable73 <= 9) {?>0<?php echo $_smarty_tpl->tpl_vars['roomAdditionalService']->value['adults'];
} else {
echo $_smarty_tpl->tpl_vars['roomAdditionalService']->value['adults'];
}?> <?php if ($_smarty_tpl->tpl_vars['roomAdditionalService']->value['adults'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adult'),$_smarty_tpl ) );
}?>, <?php ob_start();
echo $_smarty_tpl->tpl_vars['roomAdditionalService']->value['children'];
$_prefixVariable74 = ob_get_clean();
if ($_prefixVariable74 <= 9) {?>0<?php echo $_smarty_tpl->tpl_vars['roomAdditionalService']->value['children'];
} else {
echo $_smarty_tpl->tpl_vars['roomAdditionalService']->value['children'];
}?> <?php if ($_smarty_tpl->tpl_vars['roomAdditionalService']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}?>)</span>
								</div>
								<div class="col-sm-12 room_demand_detail">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roomAdditionalService']->value['additional_services'], 'additionalService');
$_smarty_tpl->tpl_vars['additionalService']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['additionalService']->value) {
$_smarty_tpl->tpl_vars['additionalService']->do_else = false;
?>
										<div class="row room_demand_block">
											<div class="col-xs-6">
												<div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['additionalService']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div>
												<?php if ($_smarty_tpl->tpl_vars['additionalService']->value['allow_multiple_quantity']) {?>
													<div class="quantity"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Qty:'),$_smarty_tpl ) );?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['additionalService']->value['quantity'], ENT_QUOTES, 'UTF-8', true);?>
</div>
												<?php }?>
											</div>

											<div class="col-xs-6">
												<span class="pull-right">
													<?php if ($_smarty_tpl->tpl_vars['useTax']->value) {?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>htmlspecialchars($_smarty_tpl->tpl_vars['additionalService']->value['total_price_tax_incl'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl ) );?>

													<?php } else { ?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>htmlspecialchars($_smarty_tpl->tpl_vars['additionalService']->value['total_price_tax_excl'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl ) );?>

													<?php }?>
												</span>
											</div>
										</div>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php }?>
		</div>
	<?php }?>
</section><?php }
}
