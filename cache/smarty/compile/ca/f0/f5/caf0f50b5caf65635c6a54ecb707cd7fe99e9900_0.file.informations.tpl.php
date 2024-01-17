<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:45
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\normal_products\informations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f35910bf9_83631043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caf0f50b5caf65635c6a54ecb707cd7fe99e9900' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\normal_products\\informations.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/products/multishop/check_fields.tpl' => 1,
    'file:controllers/products/multishop/checkbox.tpl' => 7,
    'file:controllers/products/input_text_lang.tpl' => 1,
    'file:controllers/products/textarea_lang.tpl' => 1,
  ),
),false)) {
function content_659e3f35910bf9_83631043 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['check_product_association_ajax']->value) {?>
	<?php $_smarty_tpl->_assignInScope('class_input_ajax', 'check_product_name ');
} else { ?>
	<?php $_smarty_tpl->_assignInScope('class_input_ajax', '');
}?>

<div id="product-informations" class="panel product-tab">
	<input type="hidden" name="submitted_tabs[]" value="Informations" />
	<h3 class="tab"> <i class="icon-info"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Information'),$_smarty_tpl ) );?>
</h3>
	<?php echo '<script'; ?>
 type="text/javascript">

		var msg_select_one = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select at least one room type.','js'=>1),$_smarty_tpl ) );?>
";
		var msg_set_quantity = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please set a quantity to add a room type.','js'=>1),$_smarty_tpl ) );?>
";

		<?php if ((isset($_smarty_tpl->tpl_vars['ps_force_friendly_product']->value)) && $_smarty_tpl->tpl_vars['ps_force_friendly_product']->value) {?>
			var ps_force_friendly_product = 1;
		<?php } else { ?>
			var ps_force_friendly_product = 0;
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value)) && $_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value) {?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 1;
		<?php } else { ?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 0;
		<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['combinationImagesJs']->value;?>

		<?php if ($_smarty_tpl->tpl_vars['check_product_association_ajax']->value) {?>
				var search_term = '';
				$('document').ready( function() {
					$(".check_product_name")
						.autocomplete(
							'<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminNormalProducts',true));?>
', {
								minChars: 3,
								max: 10,
								width: $(".check_product_name").width(),
								selectFirst: false,
								scroll: false,
								dataType: "json",
								formatItem: function(data, i, max, value, term) {
									search_term = term;
									// adding the little
									if ($('.ac_results').find('.separation').length == 0)
										$('.ac_results').css('background-color', '#EFEFEF')
											.prepend('<div style="color:#585A69; padding:2px 5px"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use a product from the list'),$_smarty_tpl ) );?>
<div class="separation"></div></div>');
									return value;
								},
								parse: function(data) {
									var mytab = new Array();
									for (var i = 0; i < data.length; i++)
										mytab[mytab.length] = { data: data[i], value: data[i].name };
									return mytab;
								},
								extraParams: {
									ajax: 1,
									action: 'checkProductName',
									id_lang: <?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>

								}
							}
						)
						.result(function(event, data, formatted) {
							// keep the searched term in the input
							$('#name_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
').val(search_term);
							jConfirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to use this product?'),$_smarty_tpl ) );?>
&nbsp;<strong>'+data.name+'</strong>', '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirmation'),$_smarty_tpl ) );?>
', function(confirm){
								if (confirm == true)
									document.location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminNormalProducts',true);?>
&updateproduct&id_product='+data.id_product;
								else
									return false;
							});
						});
				});
		<?php }?>
	<?php echo '</script'; ?>
>

	<?php if ((isset($_smarty_tpl->tpl_vars['display_common_field']->value)) && $_smarty_tpl->tpl_vars['display_common_field']->value) {?>
	<div class="alert alert-warning" style="display: block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warning, if you change the value of fields with an orange bullet %s, the value will be changed for all other shops for this product','sprintf'=>$_smarty_tpl->tpl_vars['bullet_common_field']->value),$_smarty_tpl ) );?>
</div>
	<?php }?>

	<?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/check_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_tab'=>"Informations"), 0, false);
?>

	<div id="product-pack-container" <?php if ($_smarty_tpl->tpl_vars['product_type']->value != Product::PTYPE_PACK) {?>style="display:none"<?php }?>></div>

		<div class="form-group">
		<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"name",'type'=>"default",'multilang'=>"true"), 0, false);
?></span></div>
		<label class="control-label col-lg-2 required" id="name" for="name_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
">
			<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write the name of the Product for ex. water bottle, etc.'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invalid characters:'),$_smarty_tpl ) );?>
 &lt;&gt;;=#{}">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name'),$_smarty_tpl ) );?>

			</span>
		</label>
		<div class="col-lg-5">
			<?php ob_start();
if (!$_smarty_tpl->tpl_vars['product']->value->id || Configuration::get('PS_FORCE_FRIENDLY_PRODUCT')) {
echo "copy2friendlyUrl";
}
$_prefixVariable9=ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:controllers/products/input_text_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_class'=>((string)$_smarty_tpl->tpl_vars['class_input_ajax']->value).$_prefixVariable9." updateCurrentText",'input_value'=>$_smarty_tpl->tpl_vars['product']->value->name,'input_name'=>"name",'required'=>true), 0, false);
?>
		</div>
	</div>

	<div class="form-group hidden">
		<label class="control-label col-lg-3" for="reference">
			<span class="label-tooltip" data-toggle="tooltip"
			title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your internal reference code for this product.'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Allowed special characters:'),$_smarty_tpl ) );?>
 .-_#\">
				<?php echo $_smarty_tpl->tpl_vars['bullet_common_field']->value;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference code'),$_smarty_tpl ) );?>

			</span>
		</label>
		<div class="col-lg-5">
			<input type="text" id="reference" name="reference" value="<?php echo smarty_modifier_htmlentitiesUTF8($_smarty_tpl->tpl_vars['product']->value->reference);?>
" />
		</div>
	</div>

	<div class="form-group hidden">
		<label class="control-label col-lg-3" for="ean13">
			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This type of product code is specific to Europe and Japan, but is widely used internationally. It is a superset of the UPC code: all products marked with an EAN will be accepted in North America.'),$_smarty_tpl ) );?>
">
				<?php echo $_smarty_tpl->tpl_vars['bullet_common_field']->value;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'EAN-13 or JAN barcode'),$_smarty_tpl ) );?>

			</span>
		</label>
		<div class="col-lg-3">
			<input maxlength="13" type="text" id="ean13" name="ean13" value="<?php echo smarty_modifier_htmlentitiesUTF8($_smarty_tpl->tpl_vars['product']->value->ean13);?>
" />
		</div>
	</div>

	<div class="form-group hidden">
		<label class="control-label col-lg-3" for="upc">
			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This type of product code is widely used in the United States, Canada, the United Kingdom, Australia, New Zealand and in other countries.'),$_smarty_tpl ) );?>
">
				<?php echo $_smarty_tpl->tpl_vars['bullet_common_field']->value;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'UPC barcode'),$_smarty_tpl ) );?>

			</span>
		</label>
		<div class="col-lg-3">
			<input maxlength="12" type="text" id="upc" name="upc" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->upc, ENT_QUOTES, 'UTF-8', true);?>
" />
		</div>
	</div>

	<!-- <hr/> -->

		<div class="form-group">
		<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"active",'type'=>"radio",'onclick'=>''), 0, true);
?></span></div>
		<label class="control-label col-lg-2">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enabled'),$_smarty_tpl ) );?>

		</label>
		<div class="col-lg-9">
			<span class="switch prestashop-switch fixed-width-lg">
				<input onclick="toggleDraftWarning(false);showOptions(true);showRedirectProductOptions(false);" type="radio" name="active" id="active_on" value="1" <?php if ($_smarty_tpl->tpl_vars['product']->value->active || !$_smarty_tpl->tpl_vars['product']->value->isAssociatedToShop()) {?>checked="checked" <?php }?> />
				<label for="active_on" class="radioCheck">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );?>

				</label>
				<input onclick="toggleDraftWarning(true);showOptions(false);showRedirectProductOptions(true);"  type="radio" name="active" id="active_off" value="0" <?php if (!$_smarty_tpl->tpl_vars['product']->value->active && $_smarty_tpl->tpl_vars['product']->value->isAssociatedToShop()) {?>checked="checked"<?php }?> />
				<label for="active_off" class="radioCheck">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );?>

				</label>
				<a class="slide-button btn"></a>
			</span>
		</div>
	</div>

	<div class="form-group redirect_product_options" style="display:none">
		<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"redirect_type",'type'=>"radio",'onclick'=>''), 0, true);
?></span></div>
		<label class="control-label col-lg-2" for="redirect_type">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Redirect when disabled'),$_smarty_tpl ) );?>

		</label>
		<div class="col-lg-5">
			<select name="redirect_type" id="redirect_type">
				<option value="404" <?php if ($_smarty_tpl->tpl_vars['product']->value->redirect_type == '404') {?> selected="selected" <?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No redirect (404)'),$_smarty_tpl ) );?>
</option>
				<option value="301" <?php if ($_smarty_tpl->tpl_vars['product']->value->redirect_type == '301') {?> selected="selected" <?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Redirected permanently (301)'),$_smarty_tpl ) );?>
</option>
				<option value="302" <?php if ($_smarty_tpl->tpl_vars['product']->value->redirect_type == '302') {?> selected="selected" <?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Redirected temporarily (302)'),$_smarty_tpl ) );?>
</option>
			</select>
		</div>
	</div>
	<div class="form-group redirect_product_options" style="display:none">
		<div class="col-lg-9 col-lg-offset-3">
			<div class="alert alert-info">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'404 Not Found = Do not redirect and display a 404 page.'),$_smarty_tpl ) );?>
<br/>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'301 Moved Permanently = Permanently display another product instead.'),$_smarty_tpl ) );?>
<br/>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'302 Moved Temporarily = Temporarily display another product instead.'),$_smarty_tpl ) );?>

			</div>
		</div>
	</div>

	<div class="form-group redirect_product_options redirect_product_options_product_choise" style="display:none">
		<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"id_product_redirected",'type'=>"radio",'onclick'=>''), 0, true);
?></span></div>
		<label class="control-label col-lg-2" for="related_product_autocomplete_input">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Related product:'),$_smarty_tpl ) );?>

		</label>
		<div class="col-lg-7">
			<input type="hidden" value="" name="id_product_redirected" />

			<div class="input-group">
				<input type="text" id="related_product_autocomplete_input" name="related_product_autocomplete_input" autocomplete="off" class="ac_input" />
				<span class="input-group-addon"><i class="icon-search"></i></span>
			</div>

			<div class="form-control-static">
				<span id="related_product_name"><i class="icon-warning-sign"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No related product.'),$_smarty_tpl ) );?>
</span>
				<span id="related_product_remove" style="display:none">
					<a class="btn btn-default" href="#" onclick="removeRelatedProduct(); return false" id="related_product_remove_link">
						<i class="icon-remove text-danger"></i>
					</a>
				</span>
			</div>

		</div>
		<?php echo '<script'; ?>
>
			var no_related_product = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No related product'),$_smarty_tpl ) );?>
';
			var id_product_redirected = <?php echo intval($_smarty_tpl->tpl_vars['product']->value->id_product_redirected);?>
;
			var product_name_redirected = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_name_redirected']->value, ENT_QUOTES, 'UTF-8', true);?>
';
		<?php echo '</script'; ?>
>
	</div>
	<div class="form-group" id="associated_hotel_rooms_tree" <?php if ($_smarty_tpl->tpl_vars['product']->value->service_product_type == Product::SERVICE_PRODUCT_WITHOUT_ROOMTYPE) {?>style="display:none;"<?php }?>>
		<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"category_box",'type'=>"category_box"), 0, true);
?></span></div>
		<label class="control-label col-lg-2" for="category_block">
			<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select room type and hotels for which this service will be available.'),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Associated Hotels and Room Types'),$_smarty_tpl ) );?>

			</span>
		</label>
		<div class="col-lg-9">
			<div id="category_block">
				<?php echo $_smarty_tpl->tpl_vars['hotel_tree']->value;?>

			</div>
		</div>
	</div>
	<div class="form-group" id="auto_add_to_cart_container">
		<label class="control-label col-lg-3" for="">
			<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When enabled, this service will be added in cart for each associated Room type or Hotel when they are added in cart. Also auto added services will not be visible to customers.'),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Auto add to cart this product'),$_smarty_tpl ) );?>

			</span>
		</label>
		<div class="col-lg-3">
			<span class="switch prestashop-switch fixed-width-lg">
				<input type="radio" name="auto_add_to_cart" id="auto_add_to_cart_on" value="1" <?php if ($_smarty_tpl->tpl_vars['product']->value->auto_add_to_cart) {?>checked="checked"<?php }?>/>
				<label for="auto_add_to_cart_on" class="radioCheck">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );?>

				</label>
				<input type="radio" name="auto_add_to_cart" id="auto_add_to_cart_off" value="0" <?php if (!$_smarty_tpl->tpl_vars['product']->value->auto_add_to_cart || !$_smarty_tpl->tpl_vars['product']->value->isAssociatedToShop()) {?>checked="checked"<?php }?>/>
				<label for="auto_add_to_cart_off" class="radioCheck">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );?>

				</label>
				<a class="slide-button btn"></a>
			</span>
		</div>
	</div>

	<div id="price_addition_type_container" <?php if (!$_smarty_tpl->tpl_vars['product']->value->auto_add_to_cart || !$_smarty_tpl->tpl_vars['product']->value->isAssociatedToShop()) {?>style="display:none;"<?php }?>>
		<div class="form-group">
			<label class="control-label col-lg-3" for="service_product_type">
				<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select whether price will be added in the base room price or as Convenience Fee'),$_smarty_tpl ) );?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price display preference'),$_smarty_tpl ) );?>

				<span>
			</label>
			<div class="col-lg-4">
				<select name="price_addition_type" id="price_addition_type">
					<option value="<?php echo Product::PRICE_ADDITION_TYPE_WITH_ROOM;?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value->price_addition_type == Product::PRICE_ADDITION_TYPE_WITH_ROOM) {?>selected="selected"<?php }?> ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add price in room price'),$_smarty_tpl ) );?>
</option>
					<option value="<?php echo Product::PRICE_ADDITION_TYPE_INDEPENDENT;?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value->price_addition_type == Product::PRICE_ADDITION_TYPE_INDEPENDENT) {?>selected="selected"<?php }?> ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add price as convenience Fee'),$_smarty_tpl ) );?>
</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-lg-8 col-lg-offset-3">
				<div class="alert alert-info">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select how this service price will be added in booking.'),$_smarty_tpl ) );?>

					<ul>
						<li>
							<b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add price in room price'),$_smarty_tpl ) );?>
</b> : <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Service price will be added in room base price.'),$_smarty_tpl ) );?>
<br><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(e.g., Room price : 500, service price: 50, final room price : 550)'),$_smarty_tpl ) );?>

						</li>
						<li><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add price as convenience fee'),$_smarty_tpl ) );?>
</b> : <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Service price will be dispalyed in order summary as "Convenience Fees"'),$_smarty_tpl ) );?>
</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

			<div class="form-group" id="show_at_front_container" <?php if ($_smarty_tpl->tpl_vars['product']->value->auto_add_to_cart) {?>style="display:none;"<?php }?>>
		<label class="control-label col-lg-3" for="">
			<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable if you want this product to be visible at front office of your website.'),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show at front office'),$_smarty_tpl ) );?>

			</span>
		</label>
		<div class="col-lg-3">
			<span class="switch prestashop-switch fixed-width-lg">
				<input type="radio" name="show_at_front" id="show_at_front_on" value="1" <?php if ($_smarty_tpl->tpl_vars['product']->value->show_at_front || !$_smarty_tpl->tpl_vars['product']->value->isAssociatedToShop()) {?>checked="checked"<?php }?>/>
				<label for="show_at_front_on" class="radioCheck">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );?>

				</label>
				<input type="radio" name="show_at_front" id="show_at_front_off" value="0" <?php if (!$_smarty_tpl->tpl_vars['product']->value->show_at_front && $_smarty_tpl->tpl_vars['product']->value->isAssociatedToShop()) {?>checked="checked"<?php }?>/>
				<label for="show_at_front_off" class="radioCheck">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );?>

				</label>
				<a class="slide-button btn"></a>
			</span>
		</div>
	</div>
	<div class="form-group" id="available_for_order_container" <?php if ((!$_smarty_tpl->tpl_vars['product']->value->show_at_front && $_smarty_tpl->tpl_vars['product']->value->isAssociatedToShop()) || $_smarty_tpl->tpl_vars['product']->value->auto_add_to_cart) {?>style="display:none;"<?php }?>>
		<label class="control-label col-lg-3" for="">
			<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable if you want this product to be sold from front office of your website.'),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availabe for order'),$_smarty_tpl ) );?>

			</span>
		</label>
		<div class="col-lg-3">
			<span class="switch prestashop-switch fixed-width-lg">
				<input type="radio" name="available_for_order" id="available_for_order_on" value="1" <?php if ($_smarty_tpl->tpl_vars['product']->value->available_for_order || !$_smarty_tpl->tpl_vars['product']->value->isAssociatedToShop()) {?>checked="checked"<?php }?>/>
				<label for="available_for_order_on" class="radioCheck">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );?>

				</label>
				<input type="radio" name="available_for_order" id="available_for_order_off" value="0" <?php if (!$_smarty_tpl->tpl_vars['product']->value->available_for_order && $_smarty_tpl->tpl_vars['product']->value->isAssociatedToShop()) {?>checked="checked"<?php }?>/>
				<label for="available_for_order_off" class="radioCheck">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );?>

				</label>
				<a class="slide-button btn"></a>
			</span>
		</div>
	</div>
	<div class="form-group" id="show_price_container" <?php if ($_smarty_tpl->tpl_vars['product']->value->available_for_order || (!$_smarty_tpl->tpl_vars['product']->value->show_at_front && $_smarty_tpl->tpl_vars['product']->value->isAssociatedToShop()) || !$_smarty_tpl->tpl_vars['product']->value->isAssociatedToShop() || $_smarty_tpl->tpl_vars['product']->value->auto_add_to_cart) {?>style="display:none;"<?php }?>>
		<label class="control-label col-lg-3" for="">
			<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable if you want show product price even when product is not availabe to be sold at front office.'),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show price'),$_smarty_tpl ) );?>

			</span>
		</label>
		<div class="col-lg-3">
			<span class="switch prestashop-switch fixed-width-lg">
				<input type="radio" name="show_price" id="show_price_on" value="1" <?php if ($_smarty_tpl->tpl_vars['product']->value->show_price || !$_smarty_tpl->tpl_vars['product']->value->isAssociatedToShop()) {?>checked="checked"<?php }?>/>
				<label for="show_price_on" class="radioCheck">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );?>

				</label>
				<input type="radio" name="show_price" id="show_price_off" value="0" <?php if (!$_smarty_tpl->tpl_vars['product']->value->show_price && $_smarty_tpl->tpl_vars['product']->value->isAssociatedToShop()) {?>checked="checked"<?php }?>/>
				<label for="show_price_off" class="radioCheck">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );?>

				</label>
				<a class="slide-button btn"></a>
			</span>
		</div>
	</div>

	<div class="form-group hidden">
		<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"visibility",'type'=>"default"), 0, true);
?></span></div>
		<label class="control-label col-lg-2" for="visibility">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Visibility'),$_smarty_tpl ) );?>

		</label>
		<div class="col-lg-3">
			<select name="visibility" id="visibility">
				<option value="both" <?php if ($_smarty_tpl->tpl_vars['product']->value->visibility == 'both') {?>selected="selected"<?php }?> ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Everywhere'),$_smarty_tpl ) );?>
</option>
				<option value="catalog" <?php if ($_smarty_tpl->tpl_vars['product']->value->visibility == 'catalog') {?>selected="selected"<?php }?> ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Catalog only'),$_smarty_tpl ) );?>
</option>
				<option value="search" <?php if ($_smarty_tpl->tpl_vars['product']->value->visibility == 'search') {?>selected="selected"<?php }?> ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search only'),$_smarty_tpl ) );?>
</option>
				<option value="none" <?php if ($_smarty_tpl->tpl_vars['product']->value->visibility == 'none') {?>selected="selected"<?php }?> selected="selected"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Nowhere'),$_smarty_tpl ) );?>
</option>
			</select>
		</div>
	</div>

	<div id="allow_multiple_quantity_container" <?php if ((!$_smarty_tpl->tpl_vars['product']->value->available_for_order && $_smarty_tpl->tpl_vars['product']->value->isAssociatedToShop()) || $_smarty_tpl->tpl_vars['product']->value->auto_add_to_cart) {?>style="display:none;"<?php }?>>
		<div class="form-group">
			<label class="control-label col-lg-3">
				<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When enabled, customer can order multiple quantity of product otherwise only one quantity can be purchased by customer per room/hotel'),$_smarty_tpl ) );?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Allow ordering of multiple quantities'),$_smarty_tpl ) );?>

				</span>
			</label>
			<div class="col-lg-9">
				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" name="allow_multiple_quantity" id="allow_multiple_quantity_on"<?php if ($_smarty_tpl->tpl_vars['product']->value->allow_multiple_quantity) {?>checked="checked"<?php }?> value="1"/>
					<label for="allow_multiple_quantity_on" class="radioCheck">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );?>

					</label>
					<input type="radio" name="allow_multiple_quantity" id="allow_multiple_quantity_off"<?php if (!$_smarty_tpl->tpl_vars['product']->value->allow_multiple_quantity) {?>checked="checked"<?php }?> value="0"/>
					<label for="allow_multiple_quantity_off" class="radioCheck">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );?>

					</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
		<div id="max_quantity_container" class="form-group" <?php if ((!$_smarty_tpl->tpl_vars['product']->value->available_for_order && $_smarty_tpl->tpl_vars['product']->value->isAssociatedToShop()) || $_smarty_tpl->tpl_vars['product']->value->auto_add_to_cart || !$_smarty_tpl->tpl_vars['product']->value->allow_multiple_quantity) {?>style="display:none;"<?php }?>>
			<label class="control-label col-lg-3" for="max_quantity">
				<span class="label-tooltip" data-toggle="tooltip"
					title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter max allowed quantity per room, enter 0 for unlimited.'),$_smarty_tpl ) );?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Max quantity allow'),$_smarty_tpl ) );?>

				</span>
			</label>
			<div class="col-lg-3">
				<input type="text" id="max_quantity" name="max_quantity" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->max_quantity, ENT_QUOTES, 'UTF-8', true);?>
" />
			</div>
		</div>
		<div class="form-group">
			<div class="col-lg-6 col-lg-offset-3">
				<div class="alert alert-info">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By default all products have infinte quantity, Using this setting you can restrict customer to purchase only one product per room.'),$_smarty_tpl ) );?>

				</div>
			</div>
		</div>
	</div>


	<hr/>

	<div class="form-group">
		<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"description_short",'type'=>"tinymce",'multilang'=>"true"), 0, true);
?></span></div>
		<label class="control-label col-lg-2" for="description_short_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
">
			<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Appears in the product list(s), and at the top of the product page.'),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Short description'),$_smarty_tpl ) );?>

			</span>
		</label>
		<div class="col-lg-9">
			<?php $_smarty_tpl->_subTemplateRender("file:controllers/products/textarea_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_name'=>'description_short','class'=>"autoload_rte",'input_value'=>$_smarty_tpl->tpl_vars['product']->value->description_short,'max'=>$_smarty_tpl->tpl_vars['PS_PRODUCT_SHORT_DESC_LIMIT']->value), 0, false);
?>
		</div>
	</div>
	
		<div class="panel-footer">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminNormalProducts'), ENT_QUOTES, 'UTF-8', true);
if ((isset($_REQUEST['page'])) && $_REQUEST['page'] > 1) {?>&amp;submitFilterproduct=<?php echo intval($_REQUEST['page']);
}?>" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>
</a>
		<button type="submit" name="submitAddproduct" class="btn btn-default pull-right" disabled="disabled"><i class="process-icon-loading"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
</button>
		<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right" disabled="disabled"><i class="process-icon-loading"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay'),$_smarty_tpl ) );?>
</button>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['default_form_language']->value;?>
);
	var missing_product_name = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please fill product name input field','js'=>1),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
>
<?php }
}
