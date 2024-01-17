<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:45
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\orders\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f35e4ffa3_70684690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd28b6ddf0d56560e8cb4517f67767472d182fce9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\orders\\form.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/orders/_current_cart_details_data.tpl' => 1,
  ),
),false)) {
function content_659e3f35e4ffa3_70684690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo '<script'; ?>
 type="text/javascript">
	<?php if ((isset($_smarty_tpl->tpl_vars['cart']->value->id)) && $_smarty_tpl->tpl_vars['cart']->value->id) {?>
		var id_cart = <?php echo intval($_smarty_tpl->tpl_vars['cart']->value->id);?>
;
	<?php }?>
	var id_customer = 0;
	var admin_order_tab_link = "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'));?>
";
	var changed_shipping_price = false;
	var shipping_price_selected_carrier = '';
	var current_index = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
';
	var admin_cart_link = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCarts'));?>
';
	var cart_quantity = new Array();
	var currencies = new Array();
	var id_currency = '';
	var id_lang = '';
	//var txt_show_carts = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show carts and orders for this customer.','js'=>1),$_smarty_tpl ) );?>
';
	//var txt_hide_carts = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hide carts and orders for this customer.','js'=>1),$_smarty_tpl ) );?>
';
	var defaults_order_state = new Array();
	var customization_errors = false;
	var pic_dir = '<?php echo $_smarty_tpl->tpl_vars['pic_dir']->value;?>
';
	var currency_format = 5;
	var currency_sign = '';
	var currency_blank = false;
	var priceDisplayPrecision = <?php echo intval((defined('_PS_PRICE_DISPLAY_PRECISION_') ? constant('_PS_PRICE_DISPLAY_PRECISION_') : null));?>
;

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['defaults_order_state']->value, 'id_order_state', false, 'module');
$_smarty_tpl->tpl_vars['id_order_state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value => $_smarty_tpl->tpl_vars['id_order_state']->value) {
$_smarty_tpl->tpl_vars['id_order_state']->do_else = false;
?>
		defaults_order_state['<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'] = '<?php echo $_smarty_tpl->tpl_vars['id_order_state']->value;?>
';
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	$(document).ready(function() {

		$('#customer').typeWatch({
			captureLength: 3,
			highlight: true,
			wait: 100,
			callback: function(){ searchCustomers(); }
			});
		$('#product').typeWatch({
			captureLength: 1,
			highlight: true,
			wait: 750,
			callback: function(){ searchProducts(); }
		});
		$('#payment_module_name').change(function() {
			var id_order_state = defaults_order_state[this.value];
			if (typeof(id_order_state) == 'undefined')
				id_order_state = defaults_order_state['other'];
			$('#id_order_state').val(id_order_state);
		});
		$("#id_address_delivery").change(function() {
			updateAddresses();
		});
		$("#id_address_invoice").change(function() {
			updateAddresses();
		});
		$('#id_currency').change(function() {
			updateCurrency();
		});
		$('#id_lang').change(function(){
			updateLang();
		});
		$('#delivery_option,#carrier_recycled_package,#order_gift,#gift_message').change(function() {
			updateDeliveryOption();
		});
		$('#shipping_price').change(function() {
			if ($(this).val() != shipping_price_selected_carrier)
				changed_shipping_price = true;
		});

		$('#payment_module_name').change();
		$.ajaxSetup({ type:"post" });
		$("#voucher").autocomplete('<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCartRules'));?>
', {
					minChars: 3,
					max: 15,
					width: 250,
					selectFirst: false,
					scroll: false,
					dataType: "json",
					formatItem: function(data, i, max, value, term) {
						return value;
					},
					parse: function(data) {
						if (!data.found)
							$('#vouchers_err').html('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No voucher was found'),$_smarty_tpl ) );?>
').show();
						else
							$('#vouchers_err').hide();
						var mytab = new Array();
						for (var i = 0; i < data.vouchers.length; i++)
							mytab[mytab.length] = { data: data.vouchers[i], value: data.vouchers[i].name + (data.vouchers[i].code.length > 0 ? ' - ' + data.vouchers[i].code : '')};
						return mytab;
					},
					extraParams: {
						ajax: "1",
						token: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCartRules'),$_smarty_tpl ) );?>
",
						tab: "AdminCartRules",
						action: "searchCartRuleVouchers"
					}
				}
			)
			.result(function(event, data, formatted) {
				$('#voucher').val(data.name);
				add_cart_rule(data.id_cart_rule);
			});
		<?php if ((isset($_smarty_tpl->tpl_vars['cart']->value->id)) && $_smarty_tpl->tpl_vars['cart']->value->id) {?>
			setupCustomer(<?php echo intval($_smarty_tpl->tpl_vars['cart']->value->id_customer);?>
);
			useCart('<?php echo intval($_smarty_tpl->tpl_vars['cart']->value->id);?>
');
		<?php }?>

		$('.delete_product').live('click', function(e) {
			e.preventDefault();
			var to_delete = $(this).attr('rel').split('_');
			deleteProduct(to_delete[1], to_delete[2], to_delete[3]);
		});
		$('.delete_discount').live('click', function(e) {
			e.preventDefault();
			deleteVoucher($(this).attr('rel'));
		});
		$('.use_cart').live('click', function(e) {
			e.preventDefault();
			useCart($(this).attr('rel'));
			return false;
		});

		/*By Webkul to delete the rooms added in the cart*/
		$('body').on('click', '.delete_hotel_cart_data', function(){
			if (confirm("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure?'),$_smarty_tpl ) );?>
"))
        	{
				$.ajax({
					type:"POST",
					url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'));?>
",
					data : {
						ajax: "1",
						action: "deleteRoomProcess",
						del_id: $(this).data('id'),
						id_product: $(this).data('id_product'),
						id_cart: $(this).data('id_cart'),
						id_room: $(this).data('id_room'),
						date_from: $(this).data('date_from'),
						date_to: $(this).data('date_to'),
					},
					dataType:"json",
					success : function(data)
					{
						if (data.status == 'deleted')
						{
							showSuccessMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove successful'),$_smarty_tpl ) );?>
");
							if (data.cart_rooms)
								location.reload();
							else
								window.location.href = "<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminHotelRoomsBooking',true);?>
";
						}
						else
						{
							alert("l s='Some error occured.please try again.'}");
						}
					}
				});
				$(this).closest("tr").remove();
			}
		});

		$('body').on('click', '.delete_service_product', function(){
			if (confirm("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure?'),$_smarty_tpl ) );?>
"))
        	{

				$.ajax({
					type:"POST",
					url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'));?>
",
					data : {
						ajax: true,
						action: "deleteProductProcess",
						id_product: $(this).data('id_product'),
						id_cart: $(this).data('id_cart'),
						id_hotel: $(this).data('id_hotel'),
					},
					dataType:"json",
					success : function(data)
					{
						if (data.status == 'deleted')
						{
							showSuccessMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove successful'),$_smarty_tpl ) );?>
");
							location.reload();
													}
						else
						{
							alert("l s='Some error occured.please try again.'}");
						}
					}
				});
				$(this).closest("tr").remove();
			}
		});
		/*END*/

		$('input:radio[name="free_shipping"]').on('change',function() {
			var free_shipping = $('input[name=free_shipping]:checked').val();
			$.ajax({
				type:"POST",
				url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCarts'));?>
",
				async: true,
				dataType: "json",
				data : {
					ajax: "1",
					token: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCarts'),$_smarty_tpl ) );?>
",
					tab: "AdminCarts",
					action: "updateFreeShipping",
					id_cart: id_cart,
					id_customer: id_customer,
					'free_shipping': free_shipping
					},
				success : function(res)
				{
					displaySummary(res);
				}
			});
		});

		$('.duplicate_order').live('click', function(e) {
			e.preventDefault();
			duplicateOrder($(this).attr('rel'));
		});
		$('.cart_quantity').live('change', function(e) {
			e.preventDefault();
			if ($(this).val() != cart_quantity[$(this).attr('rel')])
			{
				var product = $(this).attr('rel').split('_');
				updateQty(product[0], product[1], product[2], $(this).val() - cart_quantity[$(this).attr('rel')]);
			}
		});
		$('.increaseqty_product, .decreaseqty_product').live('click', function(e) {
			e.preventDefault();
			var product = $(this).attr('rel').split('_');
			var sign = '';
			if ($(this).hasClass('decreaseqty_product'))
				sign = '-';
			updateQty(product[0], product[1],product[2], sign+1);
		});
		$('#id_product').live('keydown', function(e) {
			$(this).click();
			return true;
		});
		$('#id_product, .id_product_attribute').live('change', function(e) {
			e.preventDefault();
			displayQtyInStock(this.id);
		});
		$('#id_product, .id_product_attribute').live('keydown', function(e) {
			$(this).change();
			return true;
		});
		$(document).on('change', '.room_unit_price', function(e) {
			e.preventDefault();
			var cart_row = $(this).closest('tr');
			var params = {
				id_booking_data: parseInt($(cart_row).attr('data-id-booking-data')),
				id_product: parseInt($(cart_row).attr('data-id-product')),
				id_room: parseInt($(cart_row).attr('data-id-room')),
				date_from: $(cart_row).attr('data-date-from'),
				date_to: $(cart_row).attr('data-date-to'),
				price: new Number($(this).val().replace(",",".")).toFixed(4).toString(),
				id_cart: id_cart
			};
			updateProductPrice(params, cart_row);
		})
		$('#order_message').live('change', function(e) {
			e.preventDefault();
			$.ajax({
				type:"POST",
				url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCarts'));?>
",
				async: true,
				dataType: "json",
				data : {
					ajax: "1",
					token: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCarts'),$_smarty_tpl ) );?>
",
					tab: "AdminCarts",
					action: "updateOrderMessage",
					id_cart: id_cart,
					id_customer: id_customer,
					message: $(this).val()
					},
				success : function(res)
				{
					displaySummary(res);
				}
			});
		});

		resetBind();

		$('#customer').focus();

		$('#submitAddProduct').on('click',function(){
			addProduct();
		});

		$('#product').bind('keypress', function(e) {
			var code = (e.keyCode ? e.keyCode : e.which);
			if(code == 13)
			{
				e.stopPropagation();
				e.preventDefault();
				if ($('#submitAddProduct').length)
					addProduct();
			}
		});

		$('#send_email_to_customer').on('click',function(){
			sendMailToCustomer();
			return false;
		});

		$('#products_found').hide();
		$('#carts').hide();

		$('#customer_part').on('click','button.setup-customer',function(e){
			e.preventDefault();
			setupCustomer($(this).data('customer'));
			updateCurrency();
			$(this).removeClass('setup-customer').addClass('change-customer').html('<i class="icon-refresh"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Change"),$_smarty_tpl ) );?>
').blur();
			$(this).closest('.customerCard').addClass('selected-customer');
			$('.selected-customer .panel-heading').prepend('<i class="icon-ok text-success"></i>');
			$('.customerCard').not('.selected-customer').remove();
			$('#search-customer-form-group').hide();
			//cart id is additionally send in query by webkul
			var query = 'ajax=1&token='+token+'&action=changePaymentMethod&id_customer='+$(this).data('customer')+'&id_cart='+$(this).data('id_cart');
			$.ajax({
				type: 'POST',
				url: admin_order_tab_link,
				headers: { "cache-control": "no-cache" },
				cache: false,
				dataType: 'json',
				data : query,
				success : function(data) {
					if (data.result)
					{
						$('#cart_detail_form').show();//line added by webkul
						$('#payment_module_name').replaceWith(data.view)
					}
				}
			});
		});

		$('#customer_part').on('click','button.change-customer',function(e){
			e.preventDefault();
			$('#search-customer-form-group').show();
			$(this).blur();
		});

		
			$(document).on('click', '.booking_occupancy_wrapper .remove-room-link', function(e) {
				e.preventDefault();

				booking_occupancy_inner = $(this).closest('.booking_occupancy_inner');
				$(this).closest('.occupancy_info_block').remove();
				$(booking_occupancy_inner).find('.room_num_wrapper').each(function(key, val) {
					$(this).text(room_txt + ' - '+ (key+1) );
				});
				setRoomTypeGuestOccupancy($(booking_occupancy_inner).closest('.booking_occupancy_wrapper'));
			});

			$(document).on('change', '.num_occupancy', function(e) {
				let current_room_occupancy = 0;
				$(this).closest('.occupancy_info_block').find('.num_occupancy').each(function(){
					current_room_occupancy += parseInt($(this).val());
				});
				let max_guests_in_room = $(this).closest(".booking_occupancy_wrapper").find('.max_guests').val();
				let max_allowed_for_current = (max_guests_in_room - current_room_occupancy) + parseInt($(this).val());
				if ($(this).val() > $(this).attr('max')) {
					$(this).val($(this).attr('max'));
				}
				if ($(this).val() > max_allowed_for_current) {
					$(this).val(max_allowed_for_current);
				}
				if ($(this).hasClass('num_children')) {
					var totalChilds = $(this).closest('.occupancy_info_block').find('.guest_child_age').length;
					if (totalChilds < $(this).val()) {
						if (totalChilds < max_child_in_room) {
							$(this).closest('.occupancy_info_block').find('.children_age_info_block').show();
							while ($(this).closest('.occupancy_info_block').find('.guest_child_age').length < $(this).val()) {


								var roomBlockIndex = parseInt($(this).closest('.occupancy_info_block').attr('occ_block_index'));

								var childAgeSelect = '<p class="col-xs-12 col-sm-12 col-md-6 col-lg-6">';
									childAgeSelect += '<select class="guest_child_age room_occupancies" name="occupancy[' +roomBlockIndex+ '][child_ages][]">';
										childAgeSelect += '<option value="-1">' + select_age_txt + '</option>';
										childAgeSelect += '<option value="0">' + under_1_age + '</option>';
										for (let age = 1; age < max_child_age; age++) {
											childAgeSelect += '<option value="'+age+'">'+age+'</option>';
										}
									childAgeSelect += '</select>';
								childAgeSelect += '</p>';
								$(this).closest('.occupancy_info_block').find('.children_ages').append(childAgeSelect);
							}
						}
					} else {
						let child = $(this).val();
						$(this).closest('.occupancy_info_block').find('.guest_child_age').each(function(ind, element) {
							if (child <= ind) {
								$(element).parent().remove();
							}
						});
						if (child == 0) {
							$(this).closest('.occupancy_info_block').find('.children_age_info_block').hide();
						}

					}
				}
				setRoomTypeGuestOccupancy($(this).closest('.booking_occupancy_wrapper'));

			});


			$(document).on('click', '.booking_guest_occupancy', function(e) {
				$(this).parent().toggleClass('open');
			});

			$(document).on('click', function(e) {
				if ($('.booking_occupancy_wrapper:visible').length) {
					var occupancy_wrapper = $('.booking_occupancy_wrapper:visible');
					$(occupancy_wrapper).find(".occupancy_info_block").addClass('selected');
					if (!($(e.target).closest(".booking_occupancy_wrapper").length || $(e.target).closest(".booking_guest_occupancy").length || $(e.target).closest(".ajax_add_to_cart_button").length || $(e.target).closest(".exclusive.book_now_submit").length)) {
						let hasErrors = 0;

						let adults = $(occupancy_wrapper).find(".num_adults").map(function(){return $(this).val();}).get();
						let children = $(occupancy_wrapper).find(".num_children").map(function(){return $(this).val();}).get();
						let child_ages = $(occupancy_wrapper).find(".guest_child_age").map(function(){return $(this).val();}).get();

						// start validating above values
						if (!adults.length || (adults.length != children.length)) {
							hasErrors = 1;
							showErrorMessage(invalid_occupancy_txt);
						} else {
							$(occupancy_wrapper).find('.occupancy_count').removeClass('error_border');

							// validate values of adults and children
							adults.forEach(function (item, index) {
								if (isNaN(item) || parseInt(item) < 1) {
									hasErrors = 1;
									$(occupancy_wrapper).find(".num_adults").eq(index).closest('.occupancy_count_block').find('.occupancy_count').addClass('error_border');
								}
								if (isNaN(children[index])) {
									hasErrors = 1;
									$(occupancy_wrapper).find(".num_children").eq(index).closest('.occupancy_count_block').find('.occupancy_count').addClass('error_border');
								}
							});

							// validate values of selected child ages
							$(occupancy_wrapper).find('.guest_child_age').parent().removeClass('has-error');
							child_ages.forEach(function (age, index) {
								age = parseInt(age);
								if (isNaN(age) || (age < 0) || (age >= parseInt(max_child_age))) {
									hasErrors = 1;
									$(occupancy_wrapper).find(".guest_child_age").eq(index).parent().addClass('has-error');
								}
							});
						}
						if (hasErrors == 0) {
							$(occupancy_wrapper).parent().removeClass('open');
							$(document).trigger( "QloApps:updateRoomOccupancy", [occupancy_wrapper]);
						}
					}
				}
			});

			$(document).on('QloApps:updateRoomOccupancy', function (e, occupancy_wrapper) {
				e.preventDefault();
				let cart_row = $(occupancy_wrapper).closest('tr');
				let occupancy = getBookingOccupancyDetails(cart_row);
				let params = {
					id_cart: id_cart,
					id_booking_data: parseInt($(cart_row).attr('data-id-booking-data')),
					occupancy : occupancy.shift(),
				};
				updateRoomOccupancy(params, cart_row);
			});

		function getBookingOccupancyDetails(bookingform)
		{
			let occupancy = [];
			let selected_occupancy = $(bookingform).find(".occupancy_info_block.selected")
			if (selected_occupancy.length) {
				$(selected_occupancy).each(function(ind, element) {
					if (parseInt($(element).find('.num_adults').val())) {
						let child_ages = [];
						$(element).find('.guest_child_age').each(function(index) {
							if ($(this).val() > -1) {
								child_ages.push($(this).val());
							}
						});
						if ($(element).find('.num_children').val()) {
							if (child_ages.length != $(element).find('.num_children').val()) {
								$(bookingform).find('.booking_occupancy_wrapper').parent().addClass('open');
							}
						}
						occupancy.push({
							'adults': $(element).find('.num_adults').val(),
							'children': $(element).find('.num_children').val(),
							'child_ages': child_ages
						});
					} else {
						$(bookingform).find('.booking_occupancy_wrapper').parent().addClass('open');
					}
				});
			} else {
				$(bookingform).find('.booking_occupancy_wrapper').parent().addClass('open');
			}

			return occupancy;
		}

		function setRoomTypeGuestOccupancy(booking_occupancy_wrapper)
		{
			var adults = 0;
			var children = 0;
			var rooms = $(booking_occupancy_wrapper).find('.occupancy_info_block').length;

			$(booking_occupancy_wrapper).find(".num_adults" ).each(function(key, val) {
				adults += parseInt($(this).val());
			});
			$(booking_occupancy_wrapper).find(".num_children" ).each(function(key, val) {
				children += parseInt($(this).val());
			});

			var guestButtonVal = parseInt(adults) + ' ';
			if (parseInt(adults) > 1) {
				guestButtonVal += adults_txt;
			} else {
				guestButtonVal += adult_txt;
			}
			if (parseInt(children) > 0) {
				if (parseInt(children) > 1) {
					guestButtonVal += ', ' + parseInt(children) + ' ' + children_txt;
				} else {
					guestButtonVal += ', ' + parseInt(children) + ' ' + child_txt;
				}
			}
			// if (parseInt(rooms) > 1) {
			// 	guestButtonVal += ', ' + parseInt(rooms) + ' ' + rooms_txt;
			// } else {
			// 	guestButtonVal += ', ' + parseInt(rooms) + ' ' + room_txt;
			// }
			// console.log($(booking_occupancy_wrapper).siblings('.booking_guest_occupancy > span'));
			$(booking_occupancy_wrapper).siblings('.booking_guest_occupancy').find('span').text(guestButtonVal);
		}
		
	});

	function resetBind()
	{
		$('.fancybox').fancybox({
			'type': 'iframe',
			'width': '90%',
			'height': '90%',
		});

		$('.fancybox_customer').fancybox({
			'type': 'iframe',
			'width': '90%',
			'height': '90%',
			'afterClose' : function () {
				searchCustomers();
			}
		});
		/*$("#new_address").fancybox({
			onClosed: useCart(id_cart)
		});*/
	}

	function add_cart_rule(id_cart_rule)
	{
		$.ajax({
			type:"POST",
			url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCarts'));?>
",
			async: true,
			dataType: "json",
			data : {
				ajax: "1",
				token: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCarts'),$_smarty_tpl ) );?>
",
				tab: "AdminCarts",
				action: "addVoucher",
				id_cart_rule: id_cart_rule,
				id_cart: id_cart,
				id_customer: id_customer
				},
			success : function(res)
			{
				displaySummary(res);
				$('#voucher').val('');
				var errors = '';
				if (res.errors.length > 0)
				{
					$.each(res.errors, function() {
						errors += this+'<br/>';
					});
					$('#vouchers_err').html(errors).show();
				}
				else
					$('#vouchers_err').hide();
			}
		});
	}

	function updateProductPrice(params, cart_row)
	{
		$.ajax({
			type:"POST",
			url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCarts'));?>
",
			async: true,
			dataType: "JSON",
			data: {
				ajax: "1",
				token: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCarts'),$_smarty_tpl ) );?>
",
				tab: "AdminCarts",
				action: "updateProductPrice",
				params: params,
			},
			success : function(response) {
				updateCartLine(response.curr_booking_info, cart_row);
				updateCartSummaryData(response.cart_info);
			}
		});
	}

	function updateRoomOccupancy(params, cart_row)
	{
		$.ajax({
			type:"POST",
			url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCarts'));?>
",
			async: true,
			dataType: "JSON",
			data: {
				ajax: "1",
				token: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCarts'),$_smarty_tpl ) );?>
",
				tab: "AdminCarts",
				action: "updateRoomOccupancy",
				params: params,
			},
			success : function(response) {
				updateCartLine(response.curr_booking_info, cart_row);
				updateCartSummaryData(response.cart_info);
			}
		});
	}


	function updateCartLine(data, cart_row) {
		$(cart_row).find('.cart_line_total_rooms_price').html(data.amt_with_qty);
		$(cart_row).find('.cart_line_total_price').html(data.total_price);
	}

	function updateCartSummaryData(summaryData) {
		$('#total_rooms').html(formatCurrency(parseFloat(jsonSummary.summary.total_rooms + jsonSummary.summary.total_extra_demands + jsonSummary.summary.total_additional_services + jsonSummary.summary.total_additional_services_auto_add), currency_format, currency_sign, currency_blank));
		$('#total_vouchers').html(formatCurrency(parseFloat(summaryData.summary.total_discounts_tax_exc), currency_format, currency_sign, currency_blank));
		$('#total_convenience_fees').html(formatCurrency(parseFloat(jsonSummary.summary.convenience_fee), currency_format, currency_sign, currency_blank));
		$('#total_without_taxes').html(formatCurrency(parseFloat(jsonSummary.summary.total_price_without_tax - jsonSummary.summary.convenience_fee), currency_format, currency_sign, currency_blank));
		// $('#total_service_products').html(formatCurrency(parseFloat(jsonSummary.summary.total_service_products), currency_format, currency_sign, currency_blank));
		$('#total_taxes').html(formatCurrency(parseFloat(summaryData.summary.total_tax), currency_format, currency_sign, currency_blank));
		$('#total_with_taxes').html(formatCurrency(parseFloat(summaryData.summary.total_price), currency_format, currency_sign, currency_blank));
	}

	function displayQtyInStock(id)
	{
		var id_product = $('#id_product').val();
		if ($('#ipa_' + id_product + ' option').length)
			var id_product_attribute = $('#ipa_' + id_product).val();
		else
			var id_product_attribute = 0;

		$('#qty_in_stock').html(stock[id_product][id_product_attribute]);
	}

	function duplicateOrder(id_order)
	{
		$.ajax({
			type:"POST",
			url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCarts'));?>
",
			async: true,
			dataType: "json",
			data : {
				ajax: "1",
				token: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCarts'),$_smarty_tpl ) );?>
",
				tab: "AdminCarts",
				action: "duplicateOrder",
				id_order: id_order,
				id_customer: id_customer
				},
			success : function(res)
			{
				id_cart = res.cart.id;
				//$('#id_cart').val(id_cart);
				displaySummary(res);
			}
		});
	}

	function useCart(id_new_cart)
	{
		id_cart = id_new_cart;
		//$('#id_cart').val(id_cart);
		//$('#id_cart').val(id_cart);
		$.ajax({
			type:"POST",
			url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCarts'));?>
",
			async: false,
			dataType: "json",
			data : {
				ajax: "1",
				token: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCarts'),$_smarty_tpl ) );?>
",
				tab: "AdminCarts",
				action: "getSummary",
				id_cart: id_cart,
				id_customer: id_customer
				},
			success : function(res)
			{
				displaySummary(res);
			}
		});
	}

	function getSummary()
	{
		useCart(id_cart);
	}

	function deleteVoucher(id_cart_rule)
	{
		$.ajax({
			type:"POST",
			url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCarts'));?>
",
			async: true,
			dataType: "json",
			data : {
				ajax: "1",
				token: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCarts'),$_smarty_tpl ) );?>
",
				tab: "AdminCarts",
				action: "deleteVoucher",
				id_cart_rule: id_cart_rule,
				id_cart: id_cart,
				id_customer: id_customer
				},
			success : function(res)
			{
				displaySummary(res);
			}
		});
	}

	function deleteProduct(id_product, id_product_attribute, id_customization)
	{
		$.ajax({
			type:"POST",
			url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCarts'));?>
",
			async: true,
			dataType: "json",
			data : {
				ajax: "1",
				token: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCarts'),$_smarty_tpl ) );?>
",
				tab: "AdminCarts",
				action: "deleteProduct",
				id_product: id_product,
				id_product_attribute: id_product_attribute,
				id_customization: id_customization,
				id_cart: id_cart,
				id_customer: id_customer
				},
			success : function(res)
			{
				displaySummary(res);
			}
		});
	}

	function searchCustomers()
	{
		$.ajax({
			type:"POST",
			url : "<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCustomers');?>
",
			async: true,
			dataType: "json",
			data : {
				ajax: "1",
				tab: "AdminCustomers",
				action: "searchCustomers",
				customer_search: $('#customer').val()},
			success : function(res)
			{
				if(res.found)
				{
					var html = '';
					$.each(res.customers, function() {
						html += '<div class="customerCard col-lg-4">';
						html += '<div class="panel">';
						html += '<div class="panel-heading">'+this.firstname+' '+this.lastname;
						html += '<span class="pull-right">#'+this.id_customer+'</span></div>';
						html += '<span>'+this.email+'</span><br/>';
						html += '<span class="text-muted">'+((this.birthday != '0000-00-00') ? this.birthday : '')+'</span><br/>';
						html += '<div class="panel-footer">';
						html += '<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCustomers');?>
&id_customer='+this.id_customer+'&viewcustomer&liteDisplaying=1" class="btn btn-default fancybox"><i class="icon-search"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Details'),$_smarty_tpl ) );?>
</a>';
						html += '<button type="button" data-id_cart="'+id_cart+'" data-customer="'+this.id_customer+'" class="setup-customer btn btn-default pull-right"><i class="icon-arrow-right"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose'),$_smarty_tpl ) );?>
</button>';
						html += '</div>';
						html += '</div>';
						html += '</div>';
					});
				}
				else
					html = '<div class="alert alert-warning"><i class="icon-warning-sign"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No customers found'),$_smarty_tpl ) );?>
</div>';
				$('#customers').html(html);
				resetBind();
			}
		});
	}

	function setupCustomer(idCustomer)
	{
		//$('#carts').show();// by webkul
		$('#products_part').show();
		$('#vouchers_part').show();
		//$('#address_part').show();// by webkul
		//$('#carriers_part').show();// by webkul
		$('#summary_part').show();
		var address_link = $('#new_address').attr('href');
		id_customer = idCustomer;
		id_cart = 0;
		<?php if ((isset($_smarty_tpl->tpl_vars['cart']->value->id)) && $_smarty_tpl->tpl_vars['cart']->value->id) {?>
			id_cart = "<?php echo $_smarty_tpl->tpl_vars['cart']->value->id;?>
";
		<?php }?>
		$('#new_address').attr('href', address_link.replace(/id_customer=[0-9]+/, 'id_customer='+id_customer));
		$.ajax({
			type:"POST",
			url : "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCarts'));?>
",
			async: false,
			dataType: "json",
			data : {
				ajax: "1",
				token: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCarts'),$_smarty_tpl ) );?>
",
				tab: "AdminCarts",
				action: "searchCarts",
				id_customer: id_customer,
				id_cart: id_cart
			},
			success : function(res)
			{
				if(res.found)
				{
					var html_carts = '';
					var html_orders = '';
					$.each(res.carts, function() {
						html_carts += '<tr>';
						html_carts += '<td>'+this.id_cart+'</td>';
						html_carts += '<td>'+this.date_add+'</td>';
						html_carts += '<td>'+this.total_price+'</td>';
						html_carts += '<td class="text-right">';
						html_carts += '<a title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View this cart'),$_smarty_tpl ) );?>
" class="fancybox btn btn-default" href="index.php?tab=AdminCarts&id_cart='+this.id_cart+'&viewcart&token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCarts'),$_smarty_tpl ) );?>
&liteDisplaying=1#"><i class="icon-search"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Details"),$_smarty_tpl ) );?>
</a>';
						html_carts += '&nbsp;<a href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use this cart'),$_smarty_tpl ) );?>
" class="use_cart btn btn-default" rel="'+this.id_cart+'"><i class="icon-arrow-right"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Use"),$_smarty_tpl ) );?>
</a>';
						html_carts += '</td>';
						html_carts += '</tr>';
					});

					$.each(res.orders, function() {
						html_orders += '<tr>';
						html_orders += '<td>'+this.id_order+'</td><td>'+this.date_add+'</td><td>'+(this.nb_products ? this.nb_products : '0')+'</td><td>'+this.total_paid_real+'</span></td><td>'+this.payment+'</td><td>'+this.order_state+'</td>';
						html_orders += '<td class="text-right">';
						html_orders += '<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders');?>
&id_order='+this.id_order+'&vieworder&liteDisplaying=1#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View this order'),$_smarty_tpl ) );?>
" class="fancybox btn btn-default"><i class="icon-search"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Details"),$_smarty_tpl ) );?>
</a>';
						html_orders += '&nbsp;<a href="#" "title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate this order'),$_smarty_tpl ) );?>
" class="duplicate_order btn btn-default" rel="'+this.id_order+'"><i class="icon-arrow-right"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Use"),$_smarty_tpl ) );?>
</a>';
						html_orders += '</td>';
						html_orders += '</tr>';
					});
					$('#nonOrderedCarts table tbody').html(html_carts);
					$('#lastOrders table tbody').html(html_orders);
				}
				if (res.id_cart)
				{
					id_cart = res.id_cart;
					//$('#id_cart').val(id_cart);
				}
				displaySummary(res);
				resetBind();
			}
		});
	}

	function updateDeliveryOptionList(delivery_option_list)
	{
		var html = '';
		if (delivery_option_list.length > 0)
		{
			$.each(delivery_option_list, function() {
				html += '<option value="'+this.key+'" '+(($('#delivery_option').val() == this.key) ? 'selected="selected"' : '')+'>'+this.name+'</option>';
			});
			$('#carrier_form').show();
			$('#delivery_option').html(html);
			$('#carriers_err').hide();
		}
		else
		{
			$('#carrier_form').hide();
			$('#carriers_err').show().html('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No carrier can be applied to this order'),$_smarty_tpl ) );?>
');
		}
	}

	function searchProducts()
	{
		$('#products_part').show();
		$.ajax({
			type:"POST",
			url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'));?>
",
			async: true,
			dataType: "json",
			data : {
				ajax: "1",
				token: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
",
				tab: "AdminOrders",
				action: "searchProducts",
				id_cart: id_cart,
				id_customer: id_customer,
				id_currency: id_currency,
				product_search: $('#product').val()},
			success : function(res)
			{
				var products_found = '';
				var attributes_html = '';
				var customization_html = '';
				stock = {};

				if(res.found)
				{
					if (!customization_errors)
						$('#products_err').addClass('hide');
					else
						customization_errors = false;
					$('#products_found').show();
					products_found += '<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product'),$_smarty_tpl ) );?>
</label><div class="col-lg-6"><select id="id_product" onchange="display_product_attributes();display_product_customizations();"></div>';
					attributes_html += '<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Combination'),$_smarty_tpl ) );?>
</label><div class="col-lg-6">';
					$.each(res.products, function() {
						products_found += '<option '+(this.combinations.length > 0 ? 'rel="'+this.qty_in_stock+'"' : '')+' value="'+this.id_product+'">'+this.name+(this.combinations.length == 0 ? ' - '+this.formatted_price : '')+'</option>';
						attributes_html += '<select class="id_product_attribute" id="ipa_'+this.id_product+'" style="display:none;">';
						var id_product = this.id_product;
						stock[id_product] = new Array();
						if (this.customizable == '1' || this.customizable == '2')
						{
							customization_html += '<div class="bootstrap"><div class="panel"><div class="panel-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customization'),$_smarty_tpl ) );?>
</div><form id="customization_'+id_product+'" class="id_customization" method="post" enctype="multipart/form-data" action="'+admin_cart_link+'" style="display:none;">';
							customization_html += '<input type="hidden" name="id_product" value="'+id_product+'" />';
							customization_html += '<input type="hidden" name="id_cart" value="'+id_cart+'" />';
							customization_html += '<input type="hidden" name="action" value="updateCustomizationFields" />';
							customization_html += '<input type="hidden" name="id_customer" value="'+id_customer+'" />';
							customization_html += '<input type="hidden" name="ajax" value="1" />';
							$.each(this.customization_fields, function() {
								class_customization_field = "";
								if (this.required == 1){ class_customization_field = 'required' };
								customization_html += '<div class="form-group"><label class="control-label col-lg-3 ' + class_customization_field + '" for="customization_'+id_product+'_'+this.id_customization_field+'">';
								customization_html += this.name+'</label><div class="col-lg-9">';
								if (this.type == 0)
									customization_html += '<input class="form-control customization_field" type="file" name="customization_'+id_product+'_'+this.id_customization_field+'" id="customization_'+id_product+'_'+this.id_customization_field+'">';
								else if (this.type == 1)
									customization_html += '<input class="form-control customization_field" type="text" name="customization_'+id_product+'_'+this.id_customization_field+'" id="customization_'+id_product+'_'+this.id_customization_field+'">';
								customization_html += '</div></div>';
							});
							customization_html += '</form></div></div>';
						}

						$.each(this.combinations, function() {
							attributes_html += '<option rel="'+this.qty_in_stock+'" '+(this.default_on == 1 ? 'selected="selected"' : '')+' value="'+this.id_product_attribute+'">'+this.attributes+' - '+this.formatted_price+'</option>';
							stock[id_product][this.id_product_attribute] = this.qty_in_stock;
						});

						stock[this.id_product][0] = this.stock[0];
						attributes_html += '</select>';
					});
					products_found += '</select></div>';
					$('#products_found #product_list').html(products_found);
					$('#products_found #attributes_list').html(attributes_html);
					$('link[rel="stylesheet"]').each(function (i, element) {
						sheet = $(element).clone();
						$('#products_found #customization_list').contents().find('head').append(sheet);
					});
					$('#products_found #customization_list').contents().find('body').html(customization_html);
					display_product_attributes();
					display_product_customizations();
					$('#id_product').change();
				}
				else
				{
					$('#products_found').hide();
					$('#products_err').html('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products found'),$_smarty_tpl ) );?>
');
					$('#products_err').removeClass('hide');
				}
				resetBind();
			}
		});
	}

	function display_product_customizations()
	{
		if ($('#products_found #customization_list').contents().find('#customization_'+$('#id_product option:selected').val()).children().length === 0)
			$('#customization_list').hide();
		else
		{
			$('#customization_list').show();
			$('#products_found #customization_list').contents().find('.id_customization').hide();
			$('#products_found #customization_list').contents().find('#customization_'+$('#id_product option:selected').val()).show();
			$('#products_found #customization_list').css('height',$('#products_found #customization_list').contents().find('#customization_'+$('#id_product option:selected').val()).height()+95+'px');
		}
	}

	function display_product_attributes()
	{
		if ($('#ipa_'+$('#id_product option:selected').val()+' option').length === 0)
			$('#attributes_list').hide();
		else
		{
			$('#attributes_list').show();
			$('.id_product_attribute').hide();
			$('#ipa_'+$('#id_product option:selected').val()).show();
		}
	}

	function updateCartProducts(products, gifts, id_address_delivery)
	{
		var cart_content = '';
		$.each(products, function() {
			var id_product = Number(this.id_product);
			var id_product_attribute = Number(this.id_product_attribute);
			cart_quantity[Number(this.id_product)+'_'+Number(this.id_product_attribute)+'_'+Number(this.id_customization)] = this.cart_quantity;
			cart_content += '<tr><td><img src="'+this.image_link+'" title="'+this.name+'" /></td><td>'+this.name+'<br />'+this.attributes_small+'</td><td>'+this.reference+'</td><td><input type="text" rel="'+this.id_product+'_'+this.id_product_attribute+'" class="product_unit_price" value="' + this.numeric_price + '" /></td><td>';
			cart_content += (!this.id_customization ? '<div class="input-group fixed-width-md"><div class="input-group-btn"><a href="#" class="btn btn-default increaseqty_product" rel="'+this.id_product+'_'+this.id_product_attribute+'_'+(this.id_customization ? this.id_customization : 0)+'" ><i class="icon-caret-up"></i></a><a href="#" class="btn btn-default decreaseqty_product" rel="'+this.id_product+'_'+this.id_product_attribute+'_'+(this.id_customization ? this.id_customization : 0)+'"><i class="icon-caret-down"></i></a></div>' : '');
			cart_content += (!this.id_customization ? '<input type="text" rel="'+this.id_product+'_'+this.id_product_attribute+'_'+(this.id_customization ? this.id_customization : 0)+'" class="cart_quantity" value="'+this.cart_quantity+'" />' : '');
			cart_content += (!this.id_customization ? '<div class="input-group-btn"><a href="#" class="delete_product btn btn-default" rel="delete_'+this.id_product+'_'+this.id_product_attribute+'_'+(this.id_customization ? this.id_customization : 0)+'" ><i class="icon-remove text-danger"></i></a></div></div>' : '');
			cart_content += '</td><td>' + formatCurrency(this.numeric_total, currency_format, currency_sign, currency_blank) + '</td></tr>';

			if (this.id_customization && this.id_customization != 0)
			{
				$.each(this.customized_datas[this.id_product][this.id_product_attribute][id_address_delivery], function() {
					var customized_desc = '';
					if (typeof this.datas[1] !== 'undefined' && this.datas[1].length)
					{
						$.each(this.datas[1],function() {
							customized_desc += this.name + ': ' + this.value + '<br />';
							id_customization = this.id_customization;
						});
					}
					if (typeof this.datas[0] !== 'undefined' && this.datas[0].length)
					{
						$.each(this.datas[0],function() {
							customized_desc += this.name + ': <img src="' + pic_dir + this.value + '_small" /><br />';
							id_customization = this.id_customization;
						});
					}
					cart_content += '<tr><td></td><td>'+customized_desc+'</td><td></td><td></td><td>';
					cart_content += '<div class="input-group fixed-width-md"><div class="input-group-btn"><a href="#" class="btn btn-default increaseqty_product" rel="'+id_product+'_'+id_product_attribute+'_'+id_customization+'" ><i class="icon-caret-up"></i></a><a href="#" class="btn btn-default decreaseqty_product" rel="'+id_product+'_'+id_product_attribute+'_'+id_customization+'"><i class="icon-caret-down"></i></a></div>';
					cart_content += '<input type="text" rel="'+id_product+'_'+id_product_attribute+'_'+id_customization +'" class="cart_quantity" value="'+this.quantity+'" />';
					cart_content += '<div class="input-group-btn"><a href="#" class="delete_product btn btn-default" rel="delete_'+id_product+'_'+id_product_attribute+'_'+id_customization+'" ><i class="icon-remove"></i></a></div></div>';
					cart_content += '</td><td></td></tr>';
				});
			}
		});

		$.each(gifts, function() {
			cart_content += '<tr><td><img src="'+this.image_link+'" title="'+this.name+'" /></td><td>'+this.name+'<br />'+this.attributes_small+'</td><td>'+this.reference+'</td>';
			cart_content += '<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Gift'),$_smarty_tpl ) );?>
</td><td>'+this.cart_quantity+'</td><td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Gift'),$_smarty_tpl ) );?>
</td></tr>';
		});
		$('#customer_cart tbody').html(cart_content);
	}

	function updateCartVouchers(vouchers)
	{
		var vouchers_html = '';
		if (typeof(vouchers) == 'object')
			$.each(vouchers, function(){
				if (parseFloat(this.value_real) === 0 && parseInt(this.free_shipping) === 1)
					var value = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free shipping'),$_smarty_tpl ) );?>
';
				else
					var value = this.value_real;

				vouchers_html += '<tr><td>'+this.name+'</td><td>'+this.description+'</td><td>'+value+'</td><td class="text-right"><a href="#" class="btn btn-default delete_discount" rel="'+this.id_discount+'"><i class="icon-remove text-danger"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>
</a></td></tr>';
			});
		$('#voucher_list tbody').html($.trim(vouchers_html));
		if ($('#voucher_list tbody').html().length == 0)
			$('#voucher_list').hide();
		else
			$('#voucher_list').show();
	}

	function updateCartPaymentList(payment_list)
	{
		$('#payment_list').html(payment_list);
	}

	function fixPriceFormat(price)
	{
		if(price.indexOf(',') > 0 && price.indexOf('.') > 0) // if contains , and .
			if(price.indexOf(',') < price.indexOf('.')) // if , is before .
				price = price.replace(',','');  // remove ,
		price = price.replace(' ',''); // remove any spaces
		price = price.replace(',','.'); // remove , if price did not cotain both , and .
		return price;
	}

	function displaySummary(jsonSummary) {
		currency_format = jsonSummary.currency.format;
		currency_sign = jsonSummary.currency.sign;
		currency_blank = jsonSummary.currency.blank;
		priceDisplayPrecision = jsonSummary.currency.decimals ? 2 : 0;

		updateCartProducts(jsonSummary.summary.products, jsonSummary.summary.gift_products, jsonSummary.cart.id_address_delivery);
		updateCartVouchers(jsonSummary.summary.discounts);
		updateAddressesList(jsonSummary.addresses, jsonSummary.cart.id_address_delivery, jsonSummary.cart.id_address_invoice);

		if (!jsonSummary.summary.products.length || !jsonSummary.addresses.length || !jsonSummary.delivery_option_list) {
			$('#carriers_part').hide();
		} else {
			$('#carriers_part').hide();
		}

		updateDeliveryOptionList(jsonSummary.delivery_option_list);

		if (jsonSummary.cart.gift == 1) {
			$('#order_gift').attr('checked', true);
		} else {
			$('#carrier_gift').removeAttr('checked');
		}
		if (jsonSummary.cart.recyclable == 1) {
			$('#carrier_recycled_package').attr('checked', true);
		} else {
			$('#carrier_recycled_package').removeAttr('checked');
		}
		if (jsonSummary.free_shipping == 1) {
			$('#free_shipping').attr('checked', true);
		} else {
			$('#free_shipping_off').attr('checked', true);
		}

		$('#gift_message').html(jsonSummary.cart.gift_message);

		if (!changed_shipping_price) {
			$('#shipping_price').html('<b>' + formatCurrency(parseFloat(jsonSummary.summary.total_shipping), currency_format, currency_sign, currency_blank) + '</b>');
		}

		shipping_price_selected_carrier = jsonSummary.summary.total_shipping;

		$('#total_vouchers').html(formatCurrency(parseFloat(jsonSummary.summary.total_discounts_tax_exc), currency_format, currency_sign, currency_blank));
		$('#total_taxes').html(formatCurrency(parseFloat(jsonSummary.summary.total_tax), currency_format, currency_sign, currency_blank));
		$('#total_without_taxes').html(formatCurrency(parseFloat(jsonSummary.summary.total_price_without_tax - jsonSummary.summary.convenience_fee), currency_format, currency_sign, currency_blank));
		$('#total_with_taxes').html(formatCurrency(parseFloat(jsonSummary.summary.total_price), currency_format, currency_sign, currency_blank));
		$('#total_rooms').html(formatCurrency(parseFloat(jsonSummary.summary.total_rooms + jsonSummary.summary.total_extra_demands + jsonSummary.summary.total_additional_services + jsonSummary.summary.total_additional_services_auto_add), currency_format, currency_sign, currency_blank));
		$('#total_convenience_fees').html(formatCurrency(parseFloat(jsonSummary.summary.convenience_fee), currency_format, currency_sign, currency_blank));
		// $('#total_service_products').html(formatCurrency(parseFloat(jsonSummary.summary.total_service_products), currency_format, currency_sign, currency_blank));

		id_currency = jsonSummary.cart.id_currency;
		$('#id_currency option').removeAttr('selected');
		$('#id_currency option[value="'+id_currency+'"]').attr('selected', true);
		id_lang = jsonSummary.cart.id_lang;
		$('#id_lang option').removeAttr('selected');
		$('#id_lang option[value="'+id_lang+'"]').attr('selected', true);
		$('#send_email_to_customer').attr('rel', jsonSummary.link_order);
		if (!jsonSummary.is_backdate_order) {
			$('#go_order_process').show();
			$('#go_order_process').attr('href', jsonSummary.link_order);
		} else {
			$('#go_order_process').hide();
		}
		$('#order_message').val(jsonSummary.order_message);
		resetBind();
	}

	function updateQty(id_product, id_product_attribute, id_customization, qty)
	{
		$.ajax({
			type:"POST",
			url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCarts'));?>
",
			async: true,
			dataType: "json",
			data : {
				ajax: "1",
				token: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCarts'),$_smarty_tpl ) );?>
",
				tab: "AdminCarts",
				action: "updateQty",
				id_product: id_product,
				id_product_attribute: id_product_attribute,
				id_customization: id_customization,
				qty: qty,
				id_customer: id_customer,
				id_cart: id_cart,
			},
			success : function(res)
			{
				displaySummary(res);
				var errors = '';
				if (res.errors.length)
				{
					$.each(res.errors, function() {
						errors += this + '<br />';
					});
					$('#products_err').removeClass('hide');
				}
				else
					$('#products_err').addClass('hide');
				$('#products_err').html(errors);
			}
		});
	}

	function resetShippingPrice()
	{
		$('#shipping_price').val(shipping_price_selected_carrier);
		changed_shipping_price = false;
	}

	function addProduct()
	{
		var id_product = $('#id_product option:selected').val();
		$('#products_found #customization_list').contents().find('#customization_'+id_product).submit();

		addProductProcess();
	}

	//Called from form_customization_feedback.tpl
	function customizationProductListener()
	{
		//refresh form customization
		searchProducts();

	}

	function addProductProcess()
	{
		if (customization_errors) {
			$('#products_err').removeClass('hide');
		} else {
			$('#products_err').addClass('hide');
			updateQty($('#id_product').val(), $('#ipa_'+$('#id_product').val()+' option:selected').val(), 0, $('#qty').val());
		}
	}

	function updateCurrency()
	{
		$.ajax({
			type:"POST",
			url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCarts'));?>
",
			async: true,
			dataType: "json",
			data : {
				ajax: "1",
				token: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCarts'),$_smarty_tpl ) );?>
",
				tab: "AdminCarts",
				action: "updateCurrency",
				id_currency: $('#id_currency option:selected').val(),
				id_customer: id_customer,
				id_cart: id_cart
				},
			success : function(res)
			{
				$("#customer_cart_details").empty();
				$("#customer_cart_details").append(res.cart_detail_html);

				displaySummary(res);
			}
		});
	}

	function updateLang()
	{
		$.ajax({
			type:"POST",
			url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCarts'));?>
",
			async: true,
			dataType: "json",
			data : {
				ajax: "1",
				token: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCarts'),$_smarty_tpl ) );?>
",
				tab: "admincarts",
				action: "updateLang",
				id_lang: $('#id_lang option:selected').val(),
				id_customer: id_customer,
				id_cart: id_cart
				},
			success : function(res)
			{
					displaySummary(res);
			}
		});
	}

	function updateDeliveryOption()
	{
		$.ajax({
			type:"POST",
			url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCarts'));?>
",
			async: true,
			dataType: "json",
			data : {
				ajax: "1",
				token: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCarts'),$_smarty_tpl ) );?>
",
				tab: "AdminCarts",
				action: "updateDeliveryOption",
				delivery_option: $('#delivery_option option:selected').val(),
				gift: $('#order_gift').is(':checked')?1:0,
				gift_message: $('#gift_message').val(),
				recyclable: $('#carrier_recycled_package').is(':checked')?1:0,
				id_customer: id_customer,
				id_cart: id_cart
				},
			success : function(res)
			{
				displaySummary(res);
			}
		});
	}

	function sendMailToCustomer()
	{
		$.ajax({
			type:"POST",
			url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'));?>
",
			async: true,
			dataType: "json",
			data : {
				ajax: "1",
				token: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminOrders'),$_smarty_tpl ) );?>
",
				tab: "AdminOrders",
				action: "sendMailValidateOrder",
				id_customer: id_customer,
				id_cart: id_cart
				},
			success : function(res)
			{
				if (res.errors)
					$('#send_email_feedback').removeClass('hide').removeClass('alert-success').addClass('alert-danger');
				else
					$('#send_email_feedback').removeClass('hide').removeClass('alert-danger').addClass('alert-success');
				$('#send_email_feedback').html(res.result);
			}
		});
	}

	function updateAddressesList(addresses, id_address_delivery, id_address_invoice)
	{
		var addresses_delivery_options = '';
		var addresses_invoice_options = '';
		var address_invoice_detail = '';
		var address_delivery_detail = '';
		var delivery_address_edit_link = '';
		var invoice_address_edit_link = '';

		$.each(addresses, function() {
			if (this.id_address == id_address_invoice)
			{
				address_invoice_detail = this.formated_address;
				invoice_address_edit_link = "<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAddresses');?>
&id_address="+this.id_address+"&updateaddress&realedit=1&liteDisplaying=1&submitFormAjax=1#";
			}

			if(this.id_address == id_address_delivery)
			{
				address_delivery_detail = this.formated_address;
				delivery_address_edit_link = "<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAddresses');?>
&id_address="+this.id_address+"&updateaddress&realedit=1&liteDisplaying=1&submitFormAjax=1#";
			}

			addresses_delivery_options += '<option value="'+this.id_address+'" '+(this.id_address == id_address_delivery ? 'selected="selected"' : '')+'>'+this.alias+'</option>';
			addresses_invoice_options += '<option value="'+this.id_address+'" '+(this.id_address == id_address_invoice ? 'selected="selected"' : '')+'>'+this.alias+'</option>';
		});
		if (addresses.length == 0)
		{
			$('#addresses_err').show().html('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must add at least one address to process the order.'),$_smarty_tpl ) );?>
');
			$('#address_delivery, #address_invoice').hide();
			$("#new_address").show();

			//by webkul (if there is no address then order can not be created)
			$("button[name=\"submitAddOrder\"]").attr("disabled", "disabled");
		}
		else
		{
			$('#addresses_err').hide();
			$("#new_address").hide();
			$('#address_delivery, #address_invoice').show();

			//by webkul
			$("button[name=\"submitAddOrder\"]").removeAttr("disabled");
		}

		/*Changed by webkul to make delivery and invoice addresses same*/
		$('#id_address_delivery').html(addresses_delivery_options).hide();
		$('#id_address_invoice').html(addresses_delivery_options).hide();
		$('#address_delivery_detail').html(address_delivery_detail);
		$('#address_invoice_detail').html(address_delivery_detail);
		$('#edit_delivery_address').attr('href', delivery_address_edit_link);
		$('#edit_invoice_address').attr('href', delivery_address_edit_link);
		/*END*/

		/*Original*/
		/*$('#id_address_delivery').html(addresses_delivery_options);
		$('#id_address_invoice').html(addresses_invoice_options);
		$('#address_delivery_detail').html(address_delivery_detail);
		$('#address_invoice_detail').html(address_invoice_detail);
		$('#edit_delivery_address').attr('href', delivery_address_edit_link);
		$('#edit_invoice_address').attr('href', invoice_address_edit_link);*/
	}

	function updateAddresses()
	{
		$.ajax({
			type:"POST",
			url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCarts'));?>
",
			async: true,
			dataType: "json",
			data : {
				ajax: "1",
				token: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCarts'),$_smarty_tpl ) );?>
",
				tab: "AdminCarts",
				action: "updateAddresses",
				id_customer: id_customer,
				id_cart: id_cart,
				id_address_delivery: $('#id_address_delivery option:selected').val(),
				id_address_invoice: $('#id_address_invoice option:selected').val()
				},
			success : function(res)
			{
				updateDeliveryOption();
			}
		});
	}

		$(document).ready(function() {
		// modalbox for extra demands
		$('body').on('click', '.open_rooms_extra_demands', function() {
			var idProduct = $(this).attr('id_product');
			var idCart = $(this).attr('id_cart');
			var idRoom = $(this).attr('id_room');
			var dateFrom = $(this).attr('date_from');
			var dateTo = $(this).attr('date_to');
			$.ajax({
				type: 'POST',
				dataType: 'JSON',
				headers: {
					"cache-control": "no-cache"
				},
				url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCarts'));?>
",
				cache: false,
				data: {
					date_from: dateFrom,
					date_to: dateTo,
					id_room: idRoom,
					id_cart: idCart,
					id_product: idProduct,
					action: 'getRoomTypeCartDemands',
					ajax: true
				},
				success: function(response) {
					if (response.status) {
						$('#customer_cart_details').after(response.html_exta_demands);
						// $('#rooms_type_extra_demands').find('#room_type_demands_desc').html('');
						// $('#rooms_type_extra_demands').find('#room_type_demands_desc').append(response.html_exta_demands);
						$('#rooms_type_extra_demands').modal('show');
					}
				},
			});
		});
		$(document).on('hidden.bs.modal', '#rooms_type_extra_demands', function (e) {
			// reload to make changes reflect everywhere
			location.reload();
		});

		// select/unselect extra demand
		$(document).on('click', '.id_room_type_demand', function() {
			var roomDemands = [];
			// get the selected extra demands by customer
			$(this).closest('.room_demand_detail').find('input:checkbox.id_room_type_demand:checked').each(function () {
				roomDemands.push({
					'id_global_demand':$(this).val(),
					'id_option': $(this).closest('.room_demand_block').find('.id_option').val()
				});
			});
			var idBookingCart = $(this).attr('id_cart_booking');
			$.ajax({
				type: 'POST',
				dataType: 'JSON',
				headers: {
					"cache-control": "no-cache"
				},
				url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCarts'));?>
",
				dataType: 'JSON',
				cache: false,
				data: {
					id_cart_booking: idBookingCart,
					room_demands: JSON.stringify(roomDemands),
					action: 'changeRoomDemands',
					ajax: true
				},
				success: function(response) {
					if (response.status) {
						showSuccessMessage(txtExtraDemandSucc);
					} else {
						showErrorMessage(txtExtraDemandErr);
					}
				}
			});
		});

		// change advanced option of extra demand
		$(document).on('change', '.demand_adv_option_block .id_option', function(e) {
			var option_selected = $(this).find('option:selected');
			var extra_demand_price = option_selected.attr("optionPrice")
			extra_demand_price = parseFloat(extra_demand_price);
			extra_demand_price = formatCurrency(extra_demand_price, currency_format, currency_sign, currency_blank);
			$(this).closest('.room_demand_block').find('.extra_demand_option_price').text(extra_demand_price);
			var roomDemands = [];
			if ($(this).closest('.room_demand_block').find('input:checkbox.id_room_type_demand').is(':checked')) {
				// get the selected extra demands by customer
				$(this).closest('.room_demand_detail').find('input:checkbox.id_room_type_demand:checked').each(function () {
					roomDemands.push({
						'id_global_demand':$(this).val(),
						'id_option': $(this).closest('.room_demand_block').find('.id_option').val()
					});
				});
				var idBookingCart = $(this).closest('.room_demand_block').find('.id_room_type_demand').attr('id_cart_booking');
				$.ajax({
					type: 'POST',
					dataType: 'JSON',
					headers: {
						"cache-control": "no-cache"
					},
					url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCarts'));?>
",
					dataType: 'JSON',
					cache: false,
					data: {
						id_cart_booking: idBookingCart,
						room_demands: JSON.stringify(roomDemands),
						action: 'changeRoomDemands',
						ajax: true
					},
					success: function(response) {
						if (response.status) {
							showSuccessMessage(txtExtraDemandSucc);
						} else {
							showErrorMessage(txtExtraDemandErr);
						}
					}
				});
			}
		});

		$(document).on('click', '.change_room_type_service_product', function() {
			updateServiceProducts(this);
		});

		$(document).on('focusout', '#rooms_type_extra_demands .qty', function(e) {
			var qty_wntd = $(this).val();
			if (qty_wntd == '' || !$.isNumeric(qty_wntd)) {
				$(this).val(1);
			}
			if ($(this).closest('.room_demand_block').find('.change_room_type_service_product').is(':checked')) {
				updateServiceProducts($(this).closest('.room_demand_block').find('.change_room_type_service_product'));
			}
		});

		function updateServiceProducts(element)
		{
			var operator = $(element).is(':checked') ? 'up' : 'down';
			var id_product = $(element).val();
			var id_cart_booking = $(element).data('id_cart_booking');
			var qty = $(element).closest('.room_demand_block').find('input.qty').val();
			if (typeof(qty) == 'undefined') {
				qty = 1;
			}
			$.ajax({
				type: 'POST',
				headers: {
					"cache-control": "no-cache"
				},
				url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'));?>
",
				dataType: 'JSON',
				cache: false,
				data: {
					operator: operator,
					id_product: id_product,
					id_cart_booking: id_cart_booking,
					qty: qty,
					action: 'updateServiceProduct',
					ajax: true
				},
				success: function(jsonData) {
					if (!jsonData.hasError) {
						showSuccessMessage(txtExtraDemandSucc);
					} else {
						showErrorMessage(jsonData.errors);

					}
				}
			});

		}
	});
<?php echo '</script'; ?>
>

<div class="leadin"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1191401064659e3f35df1263_94823612', "leadin");
?>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:controllers/orders/_current_cart_details_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<div class="panel form-horizontal" id="customer_part" <?php if ((isset($_smarty_tpl->tpl_vars['is_order_created']->value)) && $_smarty_tpl->tpl_vars['is_order_created']->value) {?>style="display:none;"<?php }?>>
		<div class="panel-heading">
			<i class="icon-user"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer'),$_smarty_tpl ) );?>

		</div>
		<div id="search-customer-form-group" class="form-group">
			<label class="control-label col-lg-3">
				<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search for an existing customer by typing the first letters of his/her name.'),$_smarty_tpl ) );?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search for a customer'),$_smarty_tpl ) );?>

				</span>
			</label>
			<div class="col-lg-9">
				<div class="row">
					<div class="col-lg-6">
						<div class="input-group">
							<input type="text" id="customer" value="" />
							<span class="input-group-addon">
								<i class="icon-search"></i>
							</span>
						</div>
					</div>
					<div class="col-lg-6">
						<span class="form-control-static"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Or'),$_smarty_tpl ) );?>
&nbsp;</span>
						<a class="fancybox_customer btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCustomers'), ENT_QUOTES, 'UTF-8', true);?>
&amp;addcustomer&amp;liteDisplaying=1&amp;submitFormAjax=1#">
							<i class="icon-plus-sign-alt"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new customer'),$_smarty_tpl ) );?>

						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div id="customers"></div>
		</div>
		<!-- by webkul to hide unnessesary content -->
	</div>

<form class="form-horizontal" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAdd<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value, ENT_QUOTES, 'UTF-8', true);?>
=1" method="post" autocomplete="off" style="display:none" id="cart_detail_form">
	<div class="panel" id="products_part" style="display:none;">
		<div class="panel-heading">
			<i class="icon-shopping-cart"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart'),$_smarty_tpl ) );?>

		</div>
		<div class="form-group">
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['cart']->value->id;?>
" id="id_cart" name="id_cart" />
		</div>
		<!-- by webkul to hide unnessesary content -->


		<div class="form-group">
			<label class="control-label col-lg-3" for="id_currency">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency'),$_smarty_tpl ) );?>

			</label>
			<?php echo '<script'; ?>
 type="text/javascript">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
					currencies['<?php echo $_smarty_tpl->tpl_vars['currency']->value['id_currency'];?>
'] = '<?php echo $_smarty_tpl->tpl_vars['currency']->value['sign'];?>
';
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php echo '</script'; ?>
>
			<div class="col-lg-9">
				<select id="id_currency" name="id_currency">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
						<option rel="<?php echo $_smarty_tpl->tpl_vars['currency']->value['iso_code'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['id_currency'];?>
"><?php echo $_smarty_tpl->tpl_vars['currency']->value['name'];?>
</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-lg-3" for="id_lang">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language'),$_smarty_tpl ) );?>

			</label>
			<div class="col-lg-9">
				<select id="id_lang" name="id_lang">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['langs']->value, 'lang');
$_smarty_tpl->tpl_vars['lang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
		</div>
	</div>

	<div class="panel" id="vouchers_part" style="display:none;">
		<div class="panel-heading">
			<i class="icon-ticket"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vouchers'),$_smarty_tpl ) );?>

		</div>
		<div class="form-group">
			<label class="control-label col-lg-3">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search for a voucher'),$_smarty_tpl ) );?>

			</label>
			<div class="col-lg-9">
				<div class="row">
					<div class="col-lg-6">
						<div class="input-group">
							<input type="text" id="voucher" value="" />
							<div class="input-group-addon">
								<i class="icon-search"></i>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<span class="form-control-static"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Or'),$_smarty_tpl ) );?>
&nbsp;</span>
						<a class="fancybox btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCartRules'), ENT_QUOTES, 'UTF-8', true);?>
&amp;addcart_rule&amp;liteDisplaying=1&amp;submitFormAjax=1#">
							<i class="icon-plus-sign-alt"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new voucher'),$_smarty_tpl ) );?>

						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<table class="table" id="voucher_list">
				<thead>
					<tr>
						<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name'),$_smarty_tpl ) );?>
</span></th>
						<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description'),$_smarty_tpl ) );?>
</span></th>
						<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Value'),$_smarty_tpl ) );?>
</span></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
		<div id="vouchers_err" class="alert alert-warning" style="display:none;"></div>
	</div>

	<div class="panel" id="address_part" style="">
		<div class="panel-heading">
			<i class="icon-envelope"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addresses'),$_smarty_tpl ) );?>

		</div>
		<div id="addresses_err" class="alert alert-warning" style="display:none;"></div>

		<div class="row">
			<div id="address_delivery" class="col-xs-6 col-sm-6">
				<h4>
					<i class="icon-map-marker"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer Address'),$_smarty_tpl ) );?>

				</h4>
				<div class="row-margin-bottom">
					<select id="id_address_delivery" name="id_address_delivery"></select>
				</div>
				<div class="well">
					<a href="" id="edit_delivery_address" class="btn btn-default pull-right fancybox"><i class="icon-pencil"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit'),$_smarty_tpl ) );?>
</a>
					<div id="address_delivery_detail"></div>
				</div>
			</div>
			<div id="address_invoice" class="col-lg-6 hidden">
				<h4>
					<i class="icon-file-text"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice'),$_smarty_tpl ) );?>

				</h4>
				<div class="row-margin-bottom">
					<select id="id_address_invoice" name="id_address_invoice"></select>
				</div>
				<div class="well">
					<a href="" id="edit_invoice_address" class="btn btn-default pull-right fancybox"><i class="icon-pencil"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit'),$_smarty_tpl ) );?>
</a>
					<div id="address_invoice_detail"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a class="fancybox btn btn-default" id="new_address" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAddresses'), ENT_QUOTES, 'UTF-8', true);?>
&amp;addaddress&amp;id_customer=42&amp;liteDisplaying=1&amp;submitFormAjax=1#">
					<i class="icon-plus-sign-alt"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new address'),$_smarty_tpl ) );?>

				</a>
			</div>
		</div>
	</div>
	<div class="panel" id="carriers_part" style="display:none;">
		<div class="panel-heading">
			<i class="icon-truck"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping'),$_smarty_tpl ) );?>

		</div>
		<div id="carriers_err" style="display:none;" class="alert alert-warning"></div>
		<div id="carrier_form">
			<div class="form-group">
				<label class="control-label col-lg-3">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery option'),$_smarty_tpl ) );?>

				</label>
				<div class="col-lg-9">
					<select name="delivery_option" id="delivery_option">
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3" for="shipping_price">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping price (Tax incl.)'),$_smarty_tpl ) );?>

				</label>
				<div class="col-lg-9">
					<p id="shipping_price" class="form-control-static" name="shipping_price"></p>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3" for="free_shipping">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free shipping'),$_smarty_tpl ) );?>

				</label>
				<div class="input-group col-lg-9 fixed-width-lg">
					<span class="switch prestashop-switch">
						<input type="radio" name="free_shipping" id="free_shipping" value="1">
						<label for="free_shipping" class="radioCheck">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'yes'),$_smarty_tpl ) );?>

						</label>
						<input type="radio" name="free_shipping" id="free_shipping_off" value="0" checked="checked">
						<label for="free_shipping_off" class="radioCheck">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );?>

						</label>
						<a class="slide-button btn"></a>
					</span>
				</div>
			</div>

			<?php if ($_smarty_tpl->tpl_vars['recyclable_pack']->value) {?>
			<div class="form-group">
				<div class="checkbox col-lg-9 col-offset-3">
					<label for="carrier_recycled_package">
						<input type="checkbox" name="carrier_recycled_package" value="1" id="carrier_recycled_package" />
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recycled package'),$_smarty_tpl ) );?>

					</label>
				</div>
			</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['gift_wrapping']->value) {?>
			<div class="form-group">
				<div class="checkbox col-lg-9 col-offset-3">
					<label for="order_gift">
						<input type="checkbox" name="order_gift" id="order_gift" value="1" />
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Gift'),$_smarty_tpl ) );?>

					</label>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3" for="gift_message"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Gift message'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-9">
					<textarea id="gift_message" class="form-control" cols="40" rows="4"></textarea>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
	<div class="panel" id="summary_part" style="display:none;">
		<div class="panel-heading">
			<i class="icon-align-justify"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Summary'),$_smarty_tpl ) );?>

		</div>

		<div id="send_email_feedback" class="hide alert"></div>

		<div id="cart_summary" class="panel row-margin-bottom text-center">
			<div class="row">
				<div class="col-lg-2">
					<div class="data-focus">
						<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total rooms (Tax excl.)'),$_smarty_tpl ) );?>
</span><br/>
						<span id="total_rooms" class="size_l text-success"></span>
					</div>
				</div>
												<div class="col-lg-2">
					<div class="data-focus">
						<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total vouchers (Tax excl.)'),$_smarty_tpl ) );?>
</span><br/>
						<span id="total_vouchers" class="size_l text-danger"></span>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="data-focus">
						<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total (Tax excl.)'),$_smarty_tpl ) );?>
</span><br/>
						<span id="total_without_taxes" class="size_l"></span>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="data-focus">
						<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Convenience fees (Tax excl.)'),$_smarty_tpl ) );?>
</span><br/>
						<span id="total_convenience_fees" class="size_l"></span>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="data-focus">
						<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total taxes'),$_smarty_tpl ) );?>
</span><br/>
						<span id="total_taxes" class="size_l"></span>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="data-focus data-focus-primary">
						<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total (Tax incl.)'),$_smarty_tpl ) );?>
</span><br/>
						<span id="total_with_taxes" class="size_l"></span>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="order_message_right col-lg-12">
				<div class="form-group">
					<label class="control-label col-lg-3" for="order_message"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order message'),$_smarty_tpl ) );?>
</label>
					<div class="col-lg-6">
						<textarea name="order_message" id="order_message" rows="3" cols="45"></textarea>
					</div>
				</div>
				<div class="form-group">
					<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
					<div class="col-lg-9 col-lg-offset-3">
						<a href="javascript:void(0);" id="send_email_to_customer" class="btn btn-default">
							<i class="icon-credit-card"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send an email to the customer with the link to process the payment.'),$_smarty_tpl ) );?>

						</a>
						<a id="go_order_process" href="" class="btn btn-link _blank">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go on payment page to process the payment.'),$_smarty_tpl ) );?>

							<i class="icon-external-link"></i>
						</a>
					</div>
					<?php }?>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment'),$_smarty_tpl ) );?>
</label>
					<div class="col-lg-9">
						<select name="payment_module_name" id="payment_module_name">
							<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_modules']->value, 'module');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" <?php if ((isset($_POST['payment_module_name'])) && $_smarty_tpl->tpl_vars['module']->value->name == $_POST['payment_module_name']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php } else { ?>
								<option value="boorder"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back office order'),$_smarty_tpl ) );?>
</option>
							<?php }?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order status'),$_smarty_tpl ) );?>
</label>
					<div class="col-lg-9">
						<select name="id_order_state" id="id_order_state">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_states']->value, 'order_state');
$_smarty_tpl->tpl_vars['order_state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order_state']->value) {
$_smarty_tpl->tpl_vars['order_state']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['order_state']->value['id_order_state'];?>
" <?php if ((isset($_POST['id_order_state'])) && $_smarty_tpl->tpl_vars['order_state']->value['id_order_state'] == $_POST['id_order_state']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['order_state']->value['name'];?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-9 col-lg-offset-3">
						<button type="submit" name="submitAddOrder" class="btn btn-default" />
							<i class="icon-check"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create the order'),$_smarty_tpl ) );?>

						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('max_child_age'=>$_smarty_tpl->tpl_vars['max_child_age']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('max_child_in_room'=>$_smarty_tpl->tpl_vars['max_child_in_room']->value),$_smarty_tpl ) );
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'select_age_txt'));
$_block_repeat=true;
echo $_block_plugin1->addJsDefL(array('name'=>'select_age_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select age','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin1->addJsDefL(array('name'=>'select_age_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'under_1_age'));
$_block_repeat=true;
echo $_block_plugin2->addJsDefL(array('name'=>'under_1_age'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Under 1','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin2->addJsDefL(array('name'=>'under_1_age'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'room_txt'));
$_block_repeat=true;
echo $_block_plugin3->addJsDefL(array('name'=>'room_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin3->addJsDefL(array('name'=>'room_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'rooms_txt'));
$_block_repeat=true;
echo $_block_plugin4->addJsDefL(array('name'=>'rooms_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin4->addJsDefL(array('name'=>'rooms_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'remove_txt'));
$_block_repeat=true;
echo $_block_plugin5->addJsDefL(array('name'=>'remove_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin5->addJsDefL(array('name'=>'remove_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'adult_txt'));
$_block_repeat=true;
echo $_block_plugin6->addJsDefL(array('name'=>'adult_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adult','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin6->addJsDefL(array('name'=>'adult_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'adults_txt'));
$_block_repeat=true;
echo $_block_plugin7->addJsDefL(array('name'=>'adults_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin7->addJsDefL(array('name'=>'adults_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'child_txt'));
$_block_repeat=true;
echo $_block_plugin8->addJsDefL(array('name'=>'child_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin8->addJsDefL(array('name'=>'child_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'children_txt'));
$_block_repeat=true;
echo $_block_plugin9->addJsDefL(array('name'=>'children_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin9->addJsDefL(array('name'=>'children_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'below_txt'));
$_block_repeat=true;
echo $_block_plugin10->addJsDefL(array('name'=>'below_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Below','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin10->addJsDefL(array('name'=>'below_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'years_txt'));
$_block_repeat=true;
echo $_block_plugin11->addJsDefL(array('name'=>'years_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'years','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin11->addJsDefL(array('name'=>'years_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'all_children_txt'));
$_block_repeat=true;
echo $_block_plugin12->addJsDefL(array('name'=>'all_children_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Children','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin12->addJsDefL(array('name'=>'all_children_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin13 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin13, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'invalid_occupancy_txt'));
$_block_repeat=true;
echo $_block_plugin13->addJsDefL(array('name'=>'invalid_occupancy_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invalid occupancy(adults/children) found.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin13->addJsDefL(array('name'=>'invalid_occupancy_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div id="loader_container">
	<div id="loader"></div>
</div>
<?php }
/* {block "leadin"} */
class Block_1191401064659e3f35df1263_94823612 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_1191401064659e3f35df1263_94823612',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "leadin"} */
}
