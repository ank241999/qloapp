<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:45
  from 'C:\xampp\htdocs\cslhotel\cslhotel\themes\hotel-reservation-theme\order-return.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f35767e82_96066869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a48af568e4b11812653c34aee27767b8ed82ac4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\themes\\hotel-reservation-theme\\order-return.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./errors.tpl' => 1,
  ),
),false)) {
function content_659e3f35767e82_96066869 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\tools\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account'),$_smarty_tpl ) );?>

	</a>
	<span class="navigation-pipe">
		<?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>

	</span>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), ENT_QUOTES, 'UTF-8', true);?>
">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Booking refund requests'),$_smarty_tpl ) );?>

	</a>
	<span class="navigation-pipe">
		<?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>

	</span>
	<span class="navigation_page">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Booking refund detail'),$_smarty_tpl ) );?>

	</span>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("file:./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="panel card">
	<h1 class="page-heading bottom-indent">
		<i class="icon-tasks"></i> &nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Booking Refund Requests'),$_smarty_tpl ) );?>

	</h1>
	<div class="table-responsive wk-datatable-wrapper">
		<table class="table table-bordered">
			<tr>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room type'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duration'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Num rooms'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total rooms price (tax incl.)'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Extra services price (tax incl.)'),$_smarty_tpl ) );?>
</th>
				<?php if ($_smarty_tpl->tpl_vars['isRefundCompleted']->value) {?>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refund amount'),$_smarty_tpl ) );?>
</th>
				<?php }?>
			</tr>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['refundReqBookings']->value, 'booking');
$_smarty_tpl->tpl_vars['booking']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['booking']->value) {
$_smarty_tpl->tpl_vars['booking']->do_else = false;
?>
				<tr>
					<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['booking']->value['room_type_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
					<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['booking']->value['hotel_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['booking']->value['date_from'],"%d-%m-%Y");?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To'),$_smarty_tpl ) );?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['booking']->value['date_to'],"%d-%m-%Y");?>
</td>
					<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['booking']->value['num_rooms'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
					<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['booking']->value['total_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['orderCurrency']->value['id']),$_smarty_tpl ) );?>
</td>
					<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['booking']->value['extra_service_total_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['orderCurrency']->value['id']),$_smarty_tpl ) );?>
</td>
					<?php if ($_smarty_tpl->tpl_vars['isRefundCompleted']->value) {?>
						<td>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['booking']->value['refunded_amount'],'currency'=>$_smarty_tpl->tpl_vars['orderCurrency']->value['id']),$_smarty_tpl ) );?>

						</td>
					<?php }?>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
	</div>

	<div class="form-group row">
		<div class="col-md-2 col-sm-3">
			<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Current refund state'),$_smarty_tpl ) );?>
 </strong>
		</div>
		<div class="col-sm-9 col-md-10">
			<span class="badge wk-badge" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentStateInfo']->value['color'], ENT_QUOTES, 'UTF-8', true);?>
">
				<?php if ($_smarty_tpl->tpl_vars['isCanceled']->value) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancelled'),$_smarty_tpl ) );?>

				<?php } else { ?>
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentStateInfo']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

				<?php }?>
			</span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-2 col-sm-3">
			<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Way of payment'),$_smarty_tpl ) );?>
 </strong>
		</div>
		<div class="col-sm-9 col-md-10">
			<?php if ($_smarty_tpl->tpl_vars['orderInfo']->value['is_advance_payment']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Advance Payment'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Full Payment'),$_smarty_tpl ) );
}?>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-2 col-sm-3">
			<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total order amount'),$_smarty_tpl ) );?>
 </strong>
		</div>
		<div class="col-sm-9 col-md-10">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['orderInfo']->value['total_paid_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['orderInfo']->value['id_currency']),$_smarty_tpl ) );?>

		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-2 col-sm-3">
			<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Request date'),$_smarty_tpl ) );?>
 </strong>
		</div>
		<div class="col-sm-9 col-md-10">
			<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderReturnInfo']->value['date_add'],"%d-%m-%Y %I:%M %p");?>

		</div>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['currentStateInfo']->value['refunded']) {?>
		<div class="form-group row">
			<div class="col-md-2 col-sm-3">
				<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refunded amount','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</strong>
			</div>
			<div class="col-sm-9 col-md-10">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['orderReturnInfo']->value['refunded_amount'],'currency'=>$_smarty_tpl->tpl_vars['orderInfo']->value['id_currency']),$_smarty_tpl ) );?>

			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['orderReturnInfo']->value['payment_mode'] != '' && $_smarty_tpl->tpl_vars['orderReturnInfo']->value['id_transaction'] != '') {?>
			<div class="form-group row">
				<div class="col-md-2 col-sm-3">
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment mode','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</strong>
				</div>
				<div class="col-sm-9 col-md-10">
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderReturnInfo']->value['payment_mode'], ENT_QUOTES, 'UTF-8', true);?>

				</div>
			</div>
			<div class="form-group row">
				<div class="col-md-2 col-sm-3">
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Transaction ID','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</strong>
				</div>
				<div class="col-sm-9 col-md-10">
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderReturnInfo']->value['id_transaction'], ENT_QUOTES, 'UTF-8', true);?>

				</div>
			</div>
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['orderReturnInfo']->value['return_type']))) {?>
			<?php if ($_smarty_tpl->tpl_vars['orderReturnInfo']->value['return_type'] == OrderReturn::RETURN_TYPE_CART_RULE) {?>
				<div class="form-group row">
					<div class="col-md-2 col-sm-3">
						<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Voucher','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</strong>
					</div>
					<div class="col-sm-9 col-md-10">
						<a class="link" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('discount');?>
" target="_blank">
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value, ENT_QUOTES, 'UTF-8', true);?>

						</a>
					</div>
				</div>
			<?php } elseif ($_smarty_tpl->tpl_vars['orderReturnInfo']->value['return_type'] == OrderReturn::RETURN_TYPE_ORDER_SLIP) {?>
				<div class="form-group row">
					<div class="col-md-2 col-sm-3">
						<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit Slip','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</strong>
					</div>
					<div class="col-sm-9 col-md-10">
						<a class="link" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-slip');?>
" target="_blank">
							#<?php echo Configuration::get('PS_CREDIT_SLIP_PREFIX',$_smarty_tpl->tpl_vars['lang_id']->value);
echo sprintf("%06d",$_smarty_tpl->tpl_vars['orderReturnInfo']->value['id_return_type']);?>

						</a>
					</div>
				</div>
			<?php }?>
		<?php }?>
	<?php }?>
</div>

<ul class="footer_links clearfix">
	<li><a class="btn btn-default button button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><span><i class="icon-chevron-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to your account'),$_smarty_tpl ) );?>
</span></a></li>
	<li><a class="btn btn-default button button-small" href="<?php if ((isset($_smarty_tpl->tpl_vars['force_ssl']->value)) && $_smarty_tpl->tpl_vars['force_ssl']->value) {
echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;
} else {
echo $_smarty_tpl->tpl_vars['base_dir']->value;
}?>"><span><i class="icon-chevron-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home'),$_smarty_tpl ) );?>
</span></a></li>
</ul><?php }
}
