<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:45
  from 'C:\xampp\htdocs\cslhotel\cslhotel\themes\hotel-reservation-theme\order-detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f3510eb25_75554432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc3d2ea0a2fc84dc28edd83ae90c2c9c2c6ce70f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\themes\\hotel-reservation-theme\\order-detail.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f3510eb25_75554432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\tools\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\tools\\smarty\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),2=>array('file'=>'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\tools\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
if ((isset($_smarty_tpl->tpl_vars['order']->value))) {?>
	<div class="box box-small clearfix">
		<?php if ((isset($_smarty_tpl->tpl_vars['reorderingAllowed']->value)) && $_smarty_tpl->tpl_vars['reorderingAllowed']->value) {?>
		<form id="submitReorder" action="<?php if ((isset($_smarty_tpl->tpl_vars['opc']->value)) && $_smarty_tpl->tpl_vars['opc']->value) {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true);
} else {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);
}?>" method="post" class="submit">
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" name="id_order"/>
			<input type="hidden" value="" name="submitReorder"/>

					</form>
		<?php }?>
		<p class="dark">
			<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Reference %s - placed on','sprintf'=>$_smarty_tpl->tpl_vars['order']->value->getUniqReference()),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['order']->value->date_add,'full'=>0),$_smarty_tpl ) );?>
</strong>
		</p>
	</div>
	<div class="info-order box">
		<?php if ($_smarty_tpl->tpl_vars['carrier']->value->id) {?><p><strong class="dark"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier'),$_smarty_tpl ) );?>
</strong> <?php if ($_smarty_tpl->tpl_vars['carrier']->value->name == "0") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value->name, ENT_QUOTES, 'UTF-8', true);
}?></p><?php }?>
		<p><strong class="dark"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment method'),$_smarty_tpl ) );?>
</strong> <span class="color-myaccount"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->payment, ENT_QUOTES, 'UTF-8', true);?>
</span></p>
		<?php if ($_smarty_tpl->tpl_vars['invoice']->value && $_smarty_tpl->tpl_vars['invoiceAllowed']->value) {?>
		<p>
			<i class="icon-file-text"></i>
			<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-invoice',true);?>
?id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);
if ($_smarty_tpl->tpl_vars['is_guest']->value) {?>&amp;secure_key=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->secure_key, ENT_QUOTES, 'UTF-8', true);
}?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download your invoice as a PDF file.'),$_smarty_tpl ) );?>
</a>
		</p>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['order']->value->recyclable) {?>
		<p><i class="icon-repeat"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have given permission to receive your order in recycled packaging.'),$_smarty_tpl ) );?>
</p>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['order']->value->gift) {?>
			<p><i class="icon-gift"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have requested gift wrapping for this order.'),$_smarty_tpl ) );?>
</p>
			<p><strong class="dark"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message'),$_smarty_tpl ) );?>
</strong> <?php echo nl2br($_smarty_tpl->tpl_vars['order']->value->gift_message);?>
</p>
		<?php }?>
	</div>

		<?php if ($_smarty_tpl->tpl_vars['order']->value->is_advance_payment && $_smarty_tpl->tpl_vars['order']->value->advance_paid_amount > 0) {?>
		<div class="info-order box">
			<strong><p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please pay'),$_smarty_tpl ) );?>
 <span class="advance_paid_amount"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value->advance_paid_amount,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'as an Advance Payment amount for the bookings of this order.'),$_smarty_tpl ) );?>
</p></strong>
			<p class="back_o_msg">** <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please ignore if already paid'),$_smarty_tpl ) );?>
</p>
		</div>
	<?php }?>

	<?php if (count($_smarty_tpl->tpl_vars['order_history']->value)) {?>
		<h1 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Follow your order\'s status step-by-step'),$_smarty_tpl ) );?>
</h1>
		<div class="table_block">
			<table class="detail_step_by_step table table-bordered">
				<thead>
					<tr>
						<th class="first_item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date'),$_smarty_tpl ) );?>
</th>
						<th class="last_item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status'),$_smarty_tpl ) );?>
</th>
					</tr>
				</thead>
				<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_history']->value, 'state', false, NULL, 'orderStates', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_orderStates']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_orderStates']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_orderStates']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_orderStates']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_orderStates']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_orderStates']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_orderStates']->value['total'];
?>
					<tr class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_orderStates']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_orderStates']->value['first'] : null)) {?>first_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_orderStates']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_orderStates']->value['last'] : null)) {?>last_item<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_orderStates']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_orderStates']->value['index'] : null)%2) {?>alternate_item<?php } else { ?>item<?php }?>">
						<td class="step-by-step-date"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['state']->value['date_add'],'full'=>0),$_smarty_tpl ) );?>
</td>
						<td><span<?php if ((isset($_smarty_tpl->tpl_vars['state']->value['color'])) && $_smarty_tpl->tpl_vars['state']->value['color']) {?> style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['color'], ENT_QUOTES, 'UTF-8', true);?>
; border-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['color'], ENT_QUOTES, 'UTF-8', true);?>
;"<?php }?> class="label<?php if ((isset($_smarty_tpl->tpl_vars['state']->value['color'])) && Tools::getBrightness($_smarty_tpl->tpl_vars['state']->value['color']) > 128) {?> dark<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['ostate_name'], ENT_QUOTES, 'UTF-8', true);?>
</span></td>
					</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tbody>
			</table>
		</div>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['followup']->value))) {?>
		<p class="bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click the following link to track the delivery of your order'),$_smarty_tpl ) );?>
</p>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['followup']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['followup']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
	<?php }?>

	<div class="adresses_bloc">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<ul class="address item <?php if ($_smarty_tpl->tpl_vars['order']->value->isVirtual()) {?>full_width<?php }?> box">
					<li><h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Details'),$_smarty_tpl ) );?>
</h3></li>
					<?php if ($_smarty_tpl->tpl_vars['customerGuestDetail']->value) {?>
						<?php if ((isset($_smarty_tpl->tpl_vars['customerGuestDetail']->value->firstname)) && $_smarty_tpl->tpl_vars['customerGuestDetail']->value->firstname) {?>
							<li class="row"><div class="col-sm-3 col-md-2 col-xs-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name'),$_smarty_tpl ) );?>
</div><div class="col-sm-9 col-xs-6"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerGuestDetail']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerGuestDetail']->value->lastname, ENT_QUOTES, 'UTF-8', true);?>
</div></li>
						<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['customerGuestDetail']->value->email)) && $_smarty_tpl->tpl_vars['customerGuestDetail']->value->email) {?>
							<li class="row"><div class="col-sm-3 col-md-2 col-xs-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email'),$_smarty_tpl ) );?>
</div><div class="col-sm-9 col-xs-6"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerGuestDetail']->value->email, ENT_QUOTES, 'UTF-8', true);?>
</div></li>
						<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['customerGuestDetail']->value->phone)) && $_smarty_tpl->tpl_vars['customerGuestDetail']->value->phone) {?>
							<li class="row"><div class="col-sm-3 col-md-2 col-xs-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile Number'),$_smarty_tpl ) );?>
</div><div class="col-sm-9 col-xs-6"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerGuestDetail']->value->phone, ENT_QUOTES, 'UTF-8', true);?>
</div></li>
						<?php }?>
					<?php } else { ?>
						<?php if ((isset($_smarty_tpl->tpl_vars['address_invoice']->value->firstname)) && $_smarty_tpl->tpl_vars['address_invoice']->value->firstname) {?>
							<li class="row"><div class="col-sm-3 col-md-2 col-xs-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name'),$_smarty_tpl ) );?>
</div><div class="col-sm-9 col-xs-6"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address_invoice']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address_invoice']->value->lastname, ENT_QUOTES, 'UTF-8', true);?>
</div></li>
						<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value['email'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['email']) {?>
							<li class="row"><div class="col-sm-3 col-md-2 col-xs-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email'),$_smarty_tpl ) );?>
</div><div class="col-sm-9 col-xs-6"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['guestInformations']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
</div></li>
						<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['address_invoice']->value->phone_mobile)) && $_smarty_tpl->tpl_vars['address_invoice']->value->phone_mobile) {?>
							<li class="row"><div class="col-sm-3 col-md-2 col-xs-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile Number'),$_smarty_tpl ) );?>
</div><div class="col-sm-9 col-xs-6"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address_invoice']->value->phone_mobile, ENT_QUOTES, 'UTF-8', true);?>
</div></li>
						<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['address_invoice']->value->phone)) && $_smarty_tpl->tpl_vars['address_invoice']->value->phone) {?>
							<li class="row"><div class="col-sm-3 col-md-2 col-xs-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone Number'),$_smarty_tpl ) );?>
</div><div class="col-sm-9 col-xs-6"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address_invoice']->value->phone, ENT_QUOTES, 'UTF-8', true);?>
</div></li>
						<?php }?>
					<?php }?>
				</ul>
			</div>
		</div>
	</div>

	<?php echo $_smarty_tpl->tpl_vars['HOOK_ORDERDETAILDISPLAYED']->value;?>

	<?php if (!$_smarty_tpl->tpl_vars['is_guest']->value) {?><form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post"><?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['refundReqBookings']->value)) && $_smarty_tpl->tpl_vars['refundReqBookings']->value) {?>
		<div class="alert alert-warning-light cancel_requests_link_wrapper">
			<i class="icon-info-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have booking cancelation requests from this order. To see the cancelation request status'),$_smarty_tpl ) );?>
 <a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow'), ENT_QUOTES, 'UTF-8', true);?>
?id_order=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click Here'),$_smarty_tpl ) );?>
</a>
		</div>
	<?php }?>

	<div class="row booking-actions-wrap">
		<div class="col-xs-12 col-sm-12">
			<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
				<?php if (!$_smarty_tpl->tpl_vars['hasCompletelyRefunded']->value) {?>
					<a refund_fields_on="0" id="order_refund_request" class="btn btn-default pull-right" href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to refund'),$_smarty_tpl ) );?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel Bookings'),$_smarty_tpl ) );?>
</span></a>
				<?php }?>

				<?php if ((isset($_smarty_tpl->tpl_vars['id_cms_refund_policy']->value)) && $_smarty_tpl->tpl_vars['id_cms_refund_policy']->value) {?><a target="_blank" class="btn btn-default pull-right refund_policy_link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCMSLink($_smarty_tpl->tpl_vars['id_cms_refund_policy']->value), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refund Policies'),$_smarty_tpl ) );?>
</a><?php }?>
			<?php }?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBookingAction','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

		</div>
	</div>

		<form id="order-detail-content">

		<div class="table_block table-responsive wk_booking_details_wrapper">
			<table class="table table-bordered">

				<tfoot>
					<?php $_smarty_tpl->_assignInScope('room_price_tax_excl', $_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithoutTaxes(false,true));?>
					<?php $_smarty_tpl->_assignInScope('room_price_tax_incl', $_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithTaxes(false,true));?>
										<?php $_smarty_tpl->_assignInScope('additional_service_price_tax_excl', ($_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithoutTaxes(false,false,Product::SERVICE_PRODUCT_WITH_ROOMTYPE)+$_smarty_tpl->tpl_vars['total_demands_price_te']->value));?>
					<?php $_smarty_tpl->_assignInScope('additional_service_price_tax_incl', ($_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithTaxes(false,false,Product::SERVICE_PRODUCT_WITH_ROOMTYPE)+$_smarty_tpl->tpl_vars['total_demands_price_ti']->value));?>
					<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value && $_smarty_tpl->tpl_vars['use_tax']->value && $_smarty_tpl->tpl_vars['room_price_tax_excl']->value) {?>
						<tr class="item">
							<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
								<td class="standard_refund_fields"></td>
							<?php }?>
							<td colspan="4"></td>
							<td colspan="3">
								<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total rooms cost (tax excl.)'),$_smarty_tpl ) );?>
</strong>
							</td>
							<td colspan="2" class="text-right">
								<span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['room_price_tax_excl']->value+$_smarty_tpl->tpl_vars['additional_service_price_tax_excl']->value-$_smarty_tpl->tpl_vars['total_convenience_fee_te']->value),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
							</td>
						</tr>
					<?php } else { ?>
						<tr class="item">
							<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
								<td class="standard_refund_fields"></td>
							<?php }?>
							<td colspan="4"></td>
							<td colspan="3">
								<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Rooms Cost'),$_smarty_tpl ) );?>
 <?php if ($_smarty_tpl->tpl_vars['use_tax']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)'),$_smarty_tpl ) );
}?> </strong>
							</td>
							<td colspan="2" class="text-right">
								<span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['room_price_tax_incl']->value+$_smarty_tpl->tpl_vars['additional_service_price_tax_incl']->value-$_smarty_tpl->tpl_vars['total_convenience_fee_ti']->value),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
							</td>
						</tr>
					<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['order']->value->total_wrapping > 0) {?>
						<tr class="item">
							<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
								<td class="standard_refund_fields"></td>
							<?php }?>
							<td colspan="4"></td>
							<td colspan="3">
								<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total gift wrapping cost'),$_smarty_tpl ) );?>
</strong>
							</td>
							<td colspan="2" class="text-right">
								<span class="price-wrapping"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_wrapping,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
							</td>
						</tr>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['order']->value->total_discounts > 0) {?>
						<tr class="item">
							<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
								<td class="standard_refund_fields"></td>
							<?php }?>
							<td colspan="4"></td>
							<td colspan="3">
								<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Vouchers'),$_smarty_tpl ) );?>
</strong>
							</td>
							<td colspan="2" class="text-right">
								<span class="price-discount">-<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_discounts,'currency'=>$_smarty_tpl->tpl_vars['currency']->value,'convert'=>1),$_smarty_tpl ) );?>
</span>
							</td>
						</tr>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value && $_smarty_tpl->tpl_vars['use_tax']->value && $_smarty_tpl->tpl_vars['total_convenience_fee_te']->value) {?>
						<tr class="item">
							<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
								<td class="standard_refund_fields"></td>
							<?php }?>
							<td colspan="4"></td>
							<td colspan="3">
								<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Convenience Fees (tax excl.)'),$_smarty_tpl ) );?>
</strong>
							</td>
							<td colspan="2" class="text-right">
								<span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_convenience_fee_te']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
							</td>
						</tr>
					<?php } elseif ($_smarty_tpl->tpl_vars['total_convenience_fee_ti']->value) {?>
						<tr class="item">
							<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
								<td class="standard_refund_fields"></td>
							<?php }?>
							<td colspan="4"></td>
							<td colspan="3">
								<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Convenience Fees (tax incl.)'),$_smarty_tpl ) );?>
</strong>
							</td>
							<td colspan="2" class="text-right">
								<span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_convenience_fee_ti']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
							</td>
						</tr>
					<?php }?>

					<tr class="totalprice item">
						<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
							<td class="standard_refund_fields"></td>
						<?php }?>
						<td colspan="4"></td>
						<td colspan="3">
							<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Tax'),$_smarty_tpl ) );?>
</strong>
						</td>
						<td colspan="2" class="text-right">
							<span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['order']->value->total_paid-$_smarty_tpl->tpl_vars['order']->value->total_paid_tax_excl),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
						</td>
					</tr>
					<tr class="totalprice item">
						<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
							<td class="standard_refund_fields"></td>
						<?php }?>
						<td colspan="4"></td>
						<td colspan="3">
							<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Final Order Total'),$_smarty_tpl ) );?>
</strong>
						</td>
						<td colspan="2" class="text-right">
							<span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_paid,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
						</td>
					</tr>
					<?php if ($_smarty_tpl->tpl_vars['order']->value->total_paid_tax_incl > $_smarty_tpl->tpl_vars['order']->value->total_paid_real) {?>
						<tr class="totalprice item">
							<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
								<td class="standard_refund_fields"></td>
							<?php }?>
							<td colspan="4"></td>
							<td colspan="3">
								<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Due Amount'),$_smarty_tpl ) );?>
</strong>
							</td>
							<td colspan="2" class="text-right">
								<span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['order']->value->total_paid_tax_incl-$_smarty_tpl->tpl_vars['order']->value->total_paid_real),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
							</td>
						</tr>
					<?php }?>
					
					<?php if ((isset($_smarty_tpl->tpl_vars['refundReqBookings']->value)) && $_smarty_tpl->tpl_vars['refundReqBookings']->value) {?>
						<tr class="totalprice item">
							<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
								<td class="standard_refund_fields"></td>
							<?php }?>
							<td colspan="4"></td>
							<td colspan="3">
								<strong>*<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refunded Amount'),$_smarty_tpl ) );?>
</strong>
							</td>
							<td colspan="2" class="text-right">
								<span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['refundedAmount']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
							</td>
						</tr>
					<?php }?>
				</tfoot>

				<?php if ((isset($_smarty_tpl->tpl_vars['cart_htl_data']->value)) && $_smarty_tpl->tpl_vars['cart_htl_data']->value) {?>
					<thead>
						<tr>
							<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
								<th class="standard_refund_fields"></th>
							<?php }?>
							<th class="cart_product"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Image'),$_smarty_tpl ) );?>
</th>
							<th class="cart_description"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Description'),$_smarty_tpl ) );?>
</th>
							<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Name'),$_smarty_tpl ) );?>
</th>
							<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Capacity'),$_smarty_tpl ) );?>
</th>
							<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check-in Date'),$_smarty_tpl ) );?>
</th>
							<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check-out Date'),$_smarty_tpl ) );?>
</th>
							<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Extra Services'),$_smarty_tpl ) );?>
</th>
							<th class="cart_total"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total'),$_smarty_tpl ) );?>
</th>
						</tr>
					</thead>
					<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_htl_data']->value, 'data_v', false, 'data_k');
$_smarty_tpl->tpl_vars['data_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_k']->value => $_smarty_tpl->tpl_vars['data_v']->value) {
$_smarty_tpl->tpl_vars['data_v']->do_else = false;
?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_v']->value['date_diff'], 'rm_v', false, 'rm_k');
$_smarty_tpl->tpl_vars['rm_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rm_k']->value => $_smarty_tpl->tpl_vars['rm_v']->value) {
$_smarty_tpl->tpl_vars['rm_v']->do_else = false;
?>
								<tr class="table_body">
									<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
										<td class="booking_refund_fields standard_refund_fields">
											<?php if ((isset($_smarty_tpl->tpl_vars['rm_v']->value['ids_htl_booking_detail'])) && $_smarty_tpl->tpl_vars['rm_v']->value['ids_htl_booking_detail']) {?>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rm_v']->value['ids_htl_booking_detail'], 'id_htl_booking', false, 'key');
$_smarty_tpl->tpl_vars['id_htl_booking']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['id_htl_booking']->value) {
$_smarty_tpl->tpl_vars['id_htl_booking']->do_else = false;
?>
													<div class="checkbox">
														<label for="bookings_to_refund">
															<input class="bookings_to_refund" type="checkbox" name="bookings_to_refund[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_htl_booking']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if (((isset($_smarty_tpl->tpl_vars['refundReqBookings']->value)) && (in_array($_smarty_tpl->tpl_vars['id_htl_booking']->value,$_smarty_tpl->tpl_vars['refundReqBookings']->value))) || $_smarty_tpl->tpl_vars['rm_v']->value['is_refunded']) {?>disabled<?php }?>/> &nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room'),$_smarty_tpl ) );?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>

														</label>
													</div>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											<?php }?>
										</td>
									<?php }?>
									<td class="cart_product">
										<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['data_v']->value['id_product']), ENT_QUOTES, 'UTF-8', true);?>
">
											<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_v']->value['cover_img'], ENT_QUOTES, 'UTF-8', true);?>
" class="img-responsive"/>
										</a>
									</td>
									<td class="cart_description">
										<p class="product-name">
											<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['data_v']->value['id_product']);?>
">
												<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

											</a>
										</p>
									</td>
									<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_v']->value['hotel_name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
									<td class="text-center">
										<p>
											<?php if ($_smarty_tpl->tpl_vars['rm_v']->value['adults'] <= 9) {?>0<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['adults'];
} else {
echo $_smarty_tpl->tpl_vars['rm_v']->value['adults'];
}?> <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['adults'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adult'),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['rm_v']->value['children']) {?>, <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['children'] <= 9) {?>0<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['children'];
} else { ?> <?php echo $_smarty_tpl->tpl_vars['rm_v']->value['children'];
}?> <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}
}?><br><?php if ($_smarty_tpl->tpl_vars['rm_v']->value['num_rm'] <= 9) {?>0<?php }
echo $_smarty_tpl->tpl_vars['rm_v']->value['num_rm'];?>
 <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['num_rm'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room'),$_smarty_tpl ) );
}?>
										</p>
										<?php if ($_smarty_tpl->tpl_vars['rm_v']->value['count_cancelled'] > 0) {?>
											<span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['rm_v']->value['count_cancelled'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room(s) Cancelled'),$_smarty_tpl ) );?>
</span>
											<br>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['rm_v']->value['count_refunded'] > 0) {?>
											<span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['rm_v']->value['count_refunded'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room(s) Refunded'),$_smarty_tpl ) );?>
</span>
										<?php }?>
									</td>
									<td class="text-center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_form'],"%d-%m-%Y");?>
</td>
									<td class="text-center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_to'],"%d-%m-%Y");?>
</td>

									<td>
										<?php if (((isset($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands'])) && $_smarty_tpl->tpl_vars['rm_v']->value['extra_demands']) || (isset($_smarty_tpl->tpl_vars['rm_v']->value['additional_services'])) && $_smarty_tpl->tpl_vars['rm_v']->value['additional_services']) {?>
											<a data-date_from="<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['data_form'];?>
" data-date_to="<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['data_to'];?>
" data-id_product="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['id_product'];?>
" data-id_order="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" data-action="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page_name']->value;
$_prefixVariable35 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink($_prefixVariable35);?>
" class="open_rooms_extra_services_panel" href="#rooms_type_extra_services_form">
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands_price_ti']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_ti']),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

										<?php } else { ?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands_price_te']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_te']),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

										<?php }?>
										<?php if (((isset($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands'])) && $_smarty_tpl->tpl_vars['rm_v']->value['extra_demands']) || (isset($_smarty_tpl->tpl_vars['rm_v']->value['additional_services'])) && $_smarty_tpl->tpl_vars['rm_v']->value['additional_services']) {?>
											</a>
										<?php }?>
									</td>
									<td class="cart_total text-left">
										<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['amount_tax_incl']+$_smarty_tpl->tpl_vars['rm_v']->value['extra_demands_price_ti']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_ti']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_auto_add_ti']),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

										<?php } else { ?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['amount_tax_excl']+$_smarty_tpl->tpl_vars['rm_v']->value['extra_demands_price_te']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_te']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_auto_add_te']),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

										<?php }?>
										<?php if (((isset($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands'])) && $_smarty_tpl->tpl_vars['rm_v']->value['extra_demands']) || (isset($_smarty_tpl->tpl_vars['rm_v']->value['additional_services'])) && $_smarty_tpl->tpl_vars['rm_v']->value['additional_services']) {?>
											<span class="order-price-info">
												<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/icon-info.svg" />
											</span>
											<div class="price-info-container" style="display:none">
												<div class="price-info-tooltip-cont">
													<div class="list-row">
														<div>
															<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room cost'),$_smarty_tpl ) );?>
 : </p>
														</div>
														<div class="text-right">
															<p>
																<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
																	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['amount_tax_incl']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_auto_add_ti']),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

																<?php } else { ?>
																	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['amount_tax_excl']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_auto_add_te']),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

																<?php }?>
															</p>
														</div>
													</div>
													<div class="list-row">
														<div>
															<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Service cost'),$_smarty_tpl ) );?>
 : </p>
														</div>
														<div class="text-right">
															<p>
																<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
																	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands_price_ti']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_ti']),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

																<?php } else { ?>
																	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands_price_te']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_te']),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

																<?php }?>
															</p>
														</div>
													</div>
												</div>
											</div>
										<?php }?>
									</td>
								</tr>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tbody>
				<?php }?>


				<?php if ((isset($_smarty_tpl->tpl_vars['cart_service_products']->value)) && $_smarty_tpl->tpl_vars['cart_service_products']->value) {?>
					<thead>
						<tr>
							<th colspan="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image'),$_smarty_tpl ) );?>
</th>
							<th colspan="3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name'),$_smarty_tpl ) );?>
</th>
							<th colspan="2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unit Price'),$_smarty_tpl ) );?>
</th>
							<th colspan="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity'),$_smarty_tpl ) );?>
</th>
							<th colspan="2" class="cart_total"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total'),$_smarty_tpl ) );?>
</th>
						</tr>
					</thead>
					<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_service_products']->value, 'data_v', false, 'data_k');
$_smarty_tpl->tpl_vars['data_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_k']->value => $_smarty_tpl->tpl_vars['data_v']->value) {
$_smarty_tpl->tpl_vars['data_v']->do_else = false;
?>
							<tr class="table_body">
								<td class="cart_product">
									<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['data_v']->value['id_product']);?>
">
										<img src="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['cover_img'];?>
" class="img-responsive"/>
									</a>
								</td>
								<td class="cart_product" colspan="3">
									<p class="product-name">
										<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['data_v']->value['id_product']);?>
">
											<?php echo $_smarty_tpl->tpl_vars['data_v']->value['product_name'];?>

										</a>
									</p>
								</td>
								<td class="cart_unit" colspan="2">
									<p class="text-center">
										<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['data_v']->value['unit_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

																					<?php } else { ?>
																						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['data_v']->value['unit_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

										<?php }?>
									</p>
								</td>
								<td>
									<p class="text-center">
										<?php echo $_smarty_tpl->tpl_vars['data_v']->value['product_quantity'];?>

									</p>
								</td>
								<td colspan="2">
									<p class="text-left" colspan="2">
										<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['data_v']->value['total_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

										<?php } else { ?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['data_v']->value['total_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

										<?php }?>
									</p>
								</td>
							</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tbody>
				<?php }?>
				<tbody>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discounts']->value, 'discount');
$_smarty_tpl->tpl_vars['discount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->do_else = false;
?>
						<tr class="item">
							<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
								<td class="standard_refund_fields"></td>
							<?php }?>
							<td class="text-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
							<td class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Voucher'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
							<td class="text-center" colspan="5"><span class="order_qte_span editable">1</span></td>
							<td class="text-right" colspan="2"><?php if ($_smarty_tpl->tpl_vars['discount']->value['value'] != 0.00) {?>-<?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</td>
													</tr>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tbody>
			</table>
		</div>

		<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value && $_smarty_tpl->tpl_vars['non_requested_rooms']->value) {?>
			<div class="alert alert-info-light standard_refund_fields">
				<i class="icon-info-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select rooms for which you want to cancel bookings. Additional facilities for cancelled rooms will be cancelled automatically.'),$_smarty_tpl ) );?>

			</div>
			<?php if (!$_smarty_tpl->tpl_vars['hasCompletelyRefunded']->value) {?>
				<div class="row standard_refund_fields">
					<div class="col-sm-12">
						<button type="button" id="order_refund_request_submit" class="btn pull-right"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit'),$_smarty_tpl ) );?>
</span></button>
					</div>
				</div>
			<?php }?>
		<?php }?>
	</form>

	<?php if ($_smarty_tpl->tpl_vars['any_back_order']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['shw_bo_msg']->value) {?>
			<p class="back_o_msg"><strong><sup>*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some of your rooms are on back order. Please read the following message for rooms with status on backorder'),$_smarty_tpl ) );?>
</strong></p>
			<p>
				-&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['back_ord_msg']->value;?>

			</p>
		<?php }?>
	<?php }?>

	<?php if (!$_smarty_tpl->tpl_vars['is_guest']->value) {?></form><?php }?>
	<?php $_smarty_tpl->_assignInScope('carriers', $_smarty_tpl->tpl_vars['order']->value->getShipping());?>
	<?php if (count($_smarty_tpl->tpl_vars['carriers']->value) > 0 && (isset($_smarty_tpl->tpl_vars['carriers']->value[0]['carrier_name'])) && $_smarty_tpl->tpl_vars['carriers']->value[0]['carrier_name']) {?>
		<table class="table table-bordered footab">
			<thead>
				<tr>
					<th class="first_item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date'),$_smarty_tpl ) );?>
</th>
					<th class="item" data-sort-ignore="true"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier'),$_smarty_tpl ) );?>
</th>
					<th data-hide="phone" class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Weight'),$_smarty_tpl ) );?>
</th>
					<th data-hide="phone" class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping cost'),$_smarty_tpl ) );?>
</th>
					<th data-hide="phone" class="last_item" data-sort-ignore="true"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tracking number'),$_smarty_tpl ) );?>
</th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carriers']->value, 'line');
$_smarty_tpl->tpl_vars['line']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->do_else = false;
?>
				<tr class="item">
					<td data-value="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['line']->value['date_add'],"/[\-\:\ ]/",'');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['line']->value['date_add'],'full'=>0),$_smarty_tpl ) );?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['line']->value['carrier_name'];?>
</td>
					<td data-value="<?php if ($_smarty_tpl->tpl_vars['line']->value['weight'] > 0) {
echo sprintf("%.3f",$_smarty_tpl->tpl_vars['line']->value['weight']);
} else { ?>0<?php }?>"><?php if ($_smarty_tpl->tpl_vars['line']->value['weight'] > 0) {
echo sprintf("%.3f",$_smarty_tpl->tpl_vars['line']->value['weight']);?>
 <?php echo Configuration::get('PS_WEIGHT_UNIT');
} else { ?>-<?php }?></td>
					<td data-value="<?php if ($_smarty_tpl->tpl_vars['order']->value->getTaxCalculationMethod() == (defined('PS_TAX_INC') ? constant('PS_TAX_INC') : null)) {
echo $_smarty_tpl->tpl_vars['line']->value['shipping_cost_tax_incl'];
} else {
echo $_smarty_tpl->tpl_vars['line']->value['shipping_cost_tax_excl'];
}?>"><?php if ($_smarty_tpl->tpl_vars['order']->value->getTaxCalculationMethod() == (defined('PS_TAX_INC') ? constant('PS_TAX_INC') : null)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['line']->value['shipping_cost_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['line']->value['shipping_cost_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );
}?></td>
					<td>
						<span class="shipping_number_show"><?php if ($_smarty_tpl->tpl_vars['line']->value['tracking_number']) {
if ($_smarty_tpl->tpl_vars['line']->value['url'] && $_smarty_tpl->tpl_vars['line']->value['tracking_number']) {?><a href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['line']->value['url'],'@',$_smarty_tpl->tpl_vars['line']->value['tracking_number']);?>
"><?php echo $_smarty_tpl->tpl_vars['line']->value['tracking_number'];?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['line']->value['tracking_number'];
}
} else { ?>-<?php }?></span>
					</td>
				</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
	<?php }?>

	<?php if (!$_smarty_tpl->tpl_vars['is_guest']->value) {?>
		<?php if (count($_smarty_tpl->tpl_vars['messages']->value)) {?>
			<h3 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Messages'),$_smarty_tpl ) );?>
</h3>
			<div class="table_block">
				<table class="detail_step_by_step table table-bordered">
					<thead>
						<tr>
							<th class="first_item" style="width:150px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From'),$_smarty_tpl ) );?>
</th>
							<th class="last_item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message'),$_smarty_tpl ) );?>
</th>
						</tr>
					</thead>
					<tbody>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message', false, NULL, 'messageList', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_messageList']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_messageList']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_messageList']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_messageList']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_messageList']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_messageList']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_messageList']->value['total'];
?>
						<tr class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_messageList']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_messageList']->value['first'] : null)) {?>first_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_messageList']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_messageList']->value['last'] : null)) {?>last_item<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_messageList']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_messageList']->value['index'] : null)%2) {?>alternate_item<?php } else { ?>item<?php }?>">
							<td>
								<strong class="dark">
									<?php if ((isset($_smarty_tpl->tpl_vars['message']->value['elastname'])) && $_smarty_tpl->tpl_vars['message']->value['elastname']) {?>
										<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['efirstname'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['elastname'], ENT_QUOTES, 'UTF-8', true);?>

									<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['clastname']) {?>
										<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['cfirstname'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['clastname'], ENT_QUOTES, 'UTF-8', true);?>

									<?php } else { ?>
										<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>

									<?php }?>
								</strong>
								<br />
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['message']->value['date_add'],'full'=>1),$_smarty_tpl ) );?>

							</td>
							<td><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['message'], ENT_QUOTES, 'UTF-8', true));?>
</td>
						</tr>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tbody>
				</table>
			</div>
			<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['errors']->value)) && $_smarty_tpl->tpl_vars['errors']->value) {?>
				<div class="alert alert-danger">
					<p><?php if (count($_smarty_tpl->tpl_vars['errors']->value) > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %d errors','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is %d error','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl ) );
}?></p>
					<ol>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error', false, 'k');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
						<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ol>
				</div>
			<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['message_confirmation']->value)) && $_smarty_tpl->tpl_vars['message_confirmation']->value) {?>
			<p class="alert alert-success">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message successfully sent'),$_smarty_tpl ) );?>

			</p>
			<?php }?>
			<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="std" id="sendOrderMessage">
				<h3 class="page-heading bottom-indent"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a message'),$_smarty_tpl ) );?>
</h3>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you would like to add a comment about your order, please write it in the field below.'),$_smarty_tpl ) );?>
</p>
				<p class="form-group">
				<label for="id_product"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Type'),$_smarty_tpl ) );?>
</label>
					<select name="id_product" class="form-control">
						<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- Choose --'),$_smarty_tpl ) );?>
</option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'products', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
							<?php if ($_smarty_tpl->tpl_vars['product']->value['is_booking_product']) {?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</p>
				<p class="form-group">
					<textarea class="form-control" cols="67" rows="3" name="msgText"></textarea>
				</p>
				<div class="submit">
					<input type="hidden" name="id_order" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['order']->value->id), ENT_QUOTES, 'UTF-8', true);?>
" />
					<input type="submit" class="unvisible" name="submitMessage" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send'),$_smarty_tpl ) );?>
"/>
					<button type="submit" name="submitMessage" class="button btn btn-default button-medium"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i></span></button>
				</div>
			</form>
		<?php } else { ?>
			<p class="alert alert-info"><i class="icon-info-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You cannot request refund with a guest account'),$_smarty_tpl ) );?>
</p>
		<?php }?>
	<?php }?>


		<div style="display:none;" id="rooms_extra_services">
			</div>

		<div style="display: none;" id="reason_fancybox_content">
		<div id="htlRefundReasonForm">
			<h2 class="refund_reason_head">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mention a reason for cancelation'),$_smarty_tpl ) );?>

			</h2>
			<div class="refundReasonFormContent">
				<input type="hidden" id="bookings_to_refund">
				<textarea class="form-control reasonForRefund" rows="4" name="reasonForRefund" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type here....'),$_smarty_tpl ) );?>
"></textarea>
				<div>
					<p class="required required_err" style="color:#AA1F00; display:none"><sup>*</sup> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required field'),$_smarty_tpl ) );?>
</p><br>
					<p class="reason_submit_wrapper">
						<button  name="submit_refund_reason" type="button" id="submit_refund_reason" class="btn"  data-id_order="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['order']->value->id), ENT_QUOTES, 'UTF-8', true);?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit'),$_smarty_tpl ) );?>
</span></button>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="loading_overlay">
		<img src="<?php echo $_smarty_tpl->tpl_vars['THEME_DIR']->value;?>
img/ajax-loader.gif" class="loading-img"/>
	</div><?php }
}
