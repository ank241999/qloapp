<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:45
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\orders\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f35f24436_02796204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b3a50b4bf13b76b5ccb304d515fe721e58998f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\orders\\helpers\\list\\list_header.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f35f24436_02796204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1769409990659e3f35e92083_07577000', 'leadin');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2087990531659e3f35e9ffd4_86433019', "tableFilter");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132272835659e3f35ea0bf0_74662107', "override_form_extra");
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_1769409990659e3f35e92083_07577000 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_1769409990659e3f35e92083_07577000',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ((isset($_smarty_tpl->tpl_vars['updateOrderStatus_mode']->value)) && $_smarty_tpl->tpl_vars['updateOrderStatus_mode']->value) {?>
	<div class="panel">
		<div class="panel-heading">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose an order status'),$_smarty_tpl ) );?>

		</div>
		<form action="<?php echo $_smarty_tpl->tpl_vars['REQUEST_URI']->value;?>
" method="post">
			<div class="radio">
				<label for="id_order_state">
					<select id="id_order_state" name="id_order_state">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_statuses']->value, 'order_status_name', false, 'id_order_state');
$_smarty_tpl->tpl_vars['order_status_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_order_state']->value => $_smarty_tpl->tpl_vars['order_status_name']->value) {
$_smarty_tpl->tpl_vars['order_status_name']->do_else = false;
?>
						<option value="<?php echo intval($_smarty_tpl->tpl_vars['id_order_state']->value);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</label>
			</div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['POST']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
	<?php if (is_array($_smarty_tpl->tpl_vars['value']->value)) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value, 'val');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
			<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php } elseif (strtolower($_smarty_tpl->tpl_vars['key']->value) != 'id_order_state') {?>
			<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" />

	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<div class="panel-footer">
				<button type="submit" name="cancel" class="btn btn-default">
					<i class="icon-remove"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

				</button>
				<button type="submit" class="btn btn-default" name="submitUpdateOrderStatus">
					<i class="icon-check"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update Order Status'),$_smarty_tpl ) );?>

				</button>
			</div>
		</form>
	</div>
<?php }
}
}
/* {/block 'leadin'} */
/* {block "tableFilter"} */
class Block_2087990531659e3f35e9ffd4_86433019 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tableFilter' => 
  array (
    0 => 'Block_2087990531659e3f35e9ffd4_86433019',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "tableFilter"} */
/* {block "override_form_extra"} */
class Block_132272835659e3f35ea0bf0_74662107 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_form_extra' => 
  array (
    0 => 'Block_132272835659e3f35ea0bf0_74662107',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (!$_smarty_tpl->tpl_vars['simple_header']->value && $_smarty_tpl->tpl_vars['show_filters']->value) {?>
		<?php echo '<script'; ?>
>
			$(function() {
				if ($("#list_filters_panel .datepicker").length > 0) {
					$("#list_filters_panel .datepicker").datepicker({
						prevText: '',
						nextText: '',
						altFormat: 'yy-mm-dd'
					});
				}
			});
		<?php echo '</script'; ?>
>
		<div class="list_action_wrapper">
			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-2">
					<div class="list_availibility_container">
						<button type="button" class="btn btn-default btn-left btn-block dropdown-toggle" data-toggle="dropdown">
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available Fields'),$_smarty_tpl ) );?>

							<i class="icon-caret-down pull-right"></i>
						</button>
						<ul id="optional-list-toggle" class="dropdown-menu">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_optional']->value, 'field', false, 'key');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
								<li>
									<label>
										<input type="checkbox" name="list_fields_visibility" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['selected'])) && $_smarty_tpl->tpl_vars['field']->value['selected']) {?>checked="checked"<?php }?>>
										<?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

									</label>
								</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php $_smarty_tpl->_assignInScope('fields_optional', array());?>
						</ul>
					</div>
				</div>
				<div class="col-xs-3 col-xs-offset-5 col-sm-2 col-sm-offset-7 col-md-1 col-md-offset-9">
					<div class="list_filter_container">
						<button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#list_filters_panel">
							<i class="icon-sliders"></i>
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filters'),$_smarty_tpl ) );?>

						</button>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<?php if ($_smarty_tpl->tpl_vars['filters_has_value']->value) {?>
						<div id="selected_filter_container">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filters: '),$_smarty_tpl ) );?>

							<span class="selected_filters">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_display']->value, 'params', false, 'key');
$_smarty_tpl->tpl_vars['params']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->do_else = false;
?>
									<?php if ((!(isset($_smarty_tpl->tpl_vars['params']->value['search'])) || $_smarty_tpl->tpl_vars['params']->value['search']) && $_smarty_tpl->tpl_vars['params']->value['value'] != '') {?>
										<?php if (($_smarty_tpl->tpl_vars['params']->value['type'] == 'date' || $_smarty_tpl->tpl_vars['params']->value['type'] == 'datetime' || $_smarty_tpl->tpl_vars['params']->value['type'] == 'range') && is_array($_smarty_tpl->tpl_vars['params']->value['value'])) {?>
											<?php $_smarty_tpl->_assignInScope('filter_value', '');?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['value'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
												<?php if ((is_string($_smarty_tpl->tpl_vars['value']->value) && !empty($_smarty_tpl->tpl_vars['value']->value))) {?>
													<?php if (empty($_smarty_tpl->tpl_vars['filter_value']->value)) {?>
														<?php $_smarty_tpl->_assignInScope('filter_value', $_smarty_tpl->tpl_vars['value']->value);?>
													<?php } else { ?>
														<?php $_smarty_tpl->_assignInScope('filter_value', ((string)$_smarty_tpl->tpl_vars['filter_value']->value)." - ".((string)$_smarty_tpl->tpl_vars['value']->value));?>
													<?php }?>
												<?php }?>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											<?php if (!empty($_smarty_tpl->tpl_vars['filter_value']->value)) {?>
												<span data-filter_key="<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['name_date']))) {
echo $_smarty_tpl->tpl_vars['params']->value['name_date'];
} else {
echo $_smarty_tpl->tpl_vars['key']->value;
}?>" data-filter_type="<?php echo $_smarty_tpl->tpl_vars['params']->value['type'];?>
">
													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
: <span class="filter_value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_value']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
													<i class="icon-times"></i>
												</span>
											<?php }?>
										<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['type'] == 'select') {?>
											<span data-filter_key="<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['filter_key']))) {
echo $_smarty_tpl->tpl_vars['params']->value['filter_key'];
} else {
echo $_smarty_tpl->tpl_vars['key']->value;
}?>" data-filter_type="<?php echo $_smarty_tpl->tpl_vars['params']->value['type'];?>
">
												<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
: <span class="filter_value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['list'][$_smarty_tpl->tpl_vars['params']->value['value']], ENT_QUOTES, 'UTF-8', true);?>
</span>
												<i class="icon-times"></i>
											</span>
										<?php } else { ?>
											<span data-filter_key="<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['filter_key']))) {
echo $_smarty_tpl->tpl_vars['params']->value['filter_key'];
} else {
echo $_smarty_tpl->tpl_vars['key']->value;
}?>" data-filter_type="<?php echo $_smarty_tpl->tpl_vars['params']->value['type'];?>
">
												<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
: <span class="filter_value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
</span>
												<i class="icon-times"></i>
											</span>
										<?php }?>
									<?php }?>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</span>
						</div>
					<?php }?>
					<div class="panel collapse" id="list_filters_panel">
						<div class="row">
							<div class="col-sm-12">
								<div class="list_filters">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_display']->value, 'params', false, 'key');
$_smarty_tpl->tpl_vars['params']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->do_else = false;
?>
										<?php if (!(isset($_smarty_tpl->tpl_vars['params']->value['search'])) || $_smarty_tpl->tpl_vars['params']->value['search']) {?>
											<div class="row">
												<label class="col-xs-3" for="filter_input_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</label>
												<div class="col-xs-9">
													<?php if ($_smarty_tpl->tpl_vars['params']->value['type'] == 'range') {?>
														<div class="input_range">
															<input type="text" class="filter form-control" name="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Filter_<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['filter_key']))) {
echo $_smarty_tpl->tpl_vars['params']->value['filter_key'];
} else {
echo $_smarty_tpl->tpl_vars['key']->value;
}?>[0]" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From'),$_smarty_tpl ) );?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['value'][0]))) {
echo $_smarty_tpl->tpl_vars['params']->value['value'][0];
}?>">
															<input type="text" class="filter form-control" name="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Filter_<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['filter_key']))) {
echo $_smarty_tpl->tpl_vars['params']->value['filter_key'];
} else {
echo $_smarty_tpl->tpl_vars['key']->value;
}?>[1]" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To'),$_smarty_tpl ) );?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['value'][1]))) {
echo $_smarty_tpl->tpl_vars['params']->value['value'][1];
}?>">
														</div>
													<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['type'] == 'bool') {?>
														<select id="filter_input_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="filter fixed-width-sm center" name="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Filter_<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['filter_key']))) {
echo $_smarty_tpl->tpl_vars['params']->value['filter_key'];
} else {
echo $_smarty_tpl->tpl_vars['key']->value;
}?>">
															<option value="">-</option>
															<option value="1" <?php if ($_smarty_tpl->tpl_vars['params']->value['value'] == 1) {?> selected="selected" <?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );?>
</option>
															<option value="0" <?php if ($_smarty_tpl->tpl_vars['params']->value['value'] == 0 && $_smarty_tpl->tpl_vars['params']->value['value'] != '') {?> selected="selected" <?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );?>
</option>
														</select>
													<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['type'] == 'date' || $_smarty_tpl->tpl_vars['params']->value['type'] == 'datetime') {?>
														<div class="date_range">
															<div class="input-group center">
																<input type="text" class="filter datepicker date-input form-control" id="local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_0" name="local_<?php echo $_smarty_tpl->tpl_vars['params']->value['name_date'];?>
[0]"  placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From'),$_smarty_tpl ) );?>
" autocomplete="off"/>
																<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_0" name="<?php echo $_smarty_tpl->tpl_vars['params']->value['name_date'];?>
[0]" value="<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['value'][0]))) {
echo $_smarty_tpl->tpl_vars['params']->value['value'][0];
}?>">
																<span class="input-group-addon">
																	<i class="icon-calendar"></i>
																</span>
															</div>
															<div class="input-group center">
																<input type="text" class="filter datepicker date-input form-control" id="local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_1" name="local_<?php echo $_smarty_tpl->tpl_vars['params']->value['name_date'];?>
[1]"  placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To'),$_smarty_tpl ) );?>
"  autocomplete="off"/>
																<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_1" name="<?php echo $_smarty_tpl->tpl_vars['params']->value['name_date'];?>
[1]" value="<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['value'][1]))) {
echo $_smarty_tpl->tpl_vars['params']->value['value'][1];
}?>">
																<span class="input-group-addon">
																	<i class="icon-calendar"></i>
																</span>
															</div>
															<?php echo '<script'; ?>
>
																$(function() {
																	var dateStart = parseDate($("#<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_0").val());
																	var dateEnd = parseDate($("#<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_1").val());
																	$("#local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_0").datepicker("option", "altField", "#<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_0");
																	$("#local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_1").datepicker("option", "altField", "#<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_1");
																	if (dateStart !== null){
																		$("#local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_0").datepicker("setDate", dateStart);
																	}
																	if (dateEnd !== null){
																		$("#local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_1").datepicker("setDate", dateEnd);
																	}

																	$('#local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_0').datepicker('option', {
																		prevText: '',
																		nextText: '',
																		dateFormat: 'yy-mm-dd',
																		beforeShow: function() {
																			let dateTo = $('#local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_1').val().trim();
																			if (typeof dateTo != 'undefined' && dateTo != '') {
																				let objDateToMax = $.datepicker.parseDate('yy-mm-dd', dateTo);
																				objDateToMax.setDate(objDateToMax.getDate() - 1);
																				$('#local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_0').datepicker('option', 'maxDate', objDateToMax);
																			}
																		},
																		onClose: function() {
																			let dateFrom = $('#local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_0').val().trim();
																			let dateTo = $('#local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_1').val().trim();

																			if (dateFrom >= dateTo) {
																				let objDateToMin = $.datepicker.parseDate('yy-mm-dd', dateFrom);
																				objDateToMin.setDate(objDateToMin.getDate() + 1);

																				$('#local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_1').datepicker('option', 'minDate', objDateToMin);
																			}
																		},
																	});

																	$('#local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_1').datepicker('option', {
																		prevText: '',
																		nextText: '',
																		dateFormat: 'yy-mm-dd',
																		beforeShow: function() {
																			let dateFrom = $('#local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_0').val().trim();

																			if (typeof dateFrom != 'undefined' && dateFrom != '') {
																				let objDateToMin = $.datepicker.parseDate('yy-mm-dd', dateFrom);
																				objDateToMin.setDate(objDateToMin.getDate() + 1);

																				$('#local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_1').datepicker('option', 'minDate', objDateToMin);
																			}
																		},
																	});
																});
															<?php echo '</script'; ?>
>
														</div>
													<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['type'] == 'select') {?>
														<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['filter_key']))) {?>
															<select id="filter_input_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="filter<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['align'])) && $_smarty_tpl->tpl_vars['params']->value['align'] == 'center') {?>center<?php }?>" onchange="$('#submitFilterButton<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
').focus();$('#submitFilterButton<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
').click();" name="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Filter_<?php echo $_smarty_tpl->tpl_vars['params']->value['filter_key'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['params']->value['width']))) {?> style="width:<?php echo $_smarty_tpl->tpl_vars['params']->value['width'];?>
px"<?php }?>>
																<option value="" <?php if ($_smarty_tpl->tpl_vars['params']->value['value'] == '') {?> selected="selected" <?php }?>>-</option>
																<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['list'])) && is_array($_smarty_tpl->tpl_vars['params']->value['list'])) {?>
																	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['list'], 'option_display', false, 'option_value');
$_smarty_tpl->tpl_vars['option_display']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option_value']->value => $_smarty_tpl->tpl_vars['option_display']->value) {
$_smarty_tpl->tpl_vars['option_display']->do_else = false;
?>
																		<option value="<?php echo $_smarty_tpl->tpl_vars['option_value']->value;?>
" <?php if ((string)$_smarty_tpl->tpl_vars['option_display']->value === (string)$_smarty_tpl->tpl_vars['params']->value['value'] || (string)$_smarty_tpl->tpl_vars['option_value']->value === (string)$_smarty_tpl->tpl_vars['params']->value['value']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['option_display']->value;?>
</option>
																	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																<?php }?>
															</select>
														<?php }?>
													<?php } else { ?>
														<input type="text" class="filter" name="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Filter_<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['filter_key']))) {
echo $_smarty_tpl->tpl_vars['params']->value['filter_key'];
} else {
echo $_smarty_tpl->tpl_vars['key']->value;
}?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['params']->value['width'])) && $_smarty_tpl->tpl_vars['params']->value['width'] != 'auto') {?> style="width:<?php echo $_smarty_tpl->tpl_vars['params']->value['width'];?>
px"<?php }?> />
													<?php }?>
												</div>
											</div>
										<?php }?>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php if ($_smarty_tpl->tpl_vars['has_actions']->value || $_smarty_tpl->tpl_vars['show_filters']->value) {?>
										<div class="actions">
											<hr>
											<?php if ($_smarty_tpl->tpl_vars['show_filters']->value) {?>
											<span class="pull-right">
												<button type="submit" id="submitFilterButton<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
" name="submitFilter" class="btn btn-default" data-list-id="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
">
													<i class="icon-search"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search'),$_smarty_tpl ) );?>

												</button>
												<?php if ($_smarty_tpl->tpl_vars['filters_has_value']->value) {?>
													<button type="submit" name="submitReset<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
" class="btn btn-warning">
														<i class="icon-eraser"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset'),$_smarty_tpl ) );?>

													</button>
												<?php }?>
											</span>
											<?php }?>
										</div>
									<?php }?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php echo '<script'; ?>
>
			$(document).ready(function(){
				$('#selected_filter_container .selected_filters span i').on('click', function() {
					let form = $(this).closest('form');
					let type = $(this).parent().data('filter_type');
					$(this).parent().remove();
					if (type == 'date' || type == 'datetime') {
						$('#list_filters_panel').find('[name*="'+$(this).parent().data('filter_key')+'"]').val('');
					} else if (type == 'range') {
						$('#list_filters_panel').find('[name*="orderFilter_'+$(this).parent().data('filter_key')+'"]').val('');
					} else if (type == 'select') {
						$('#list_filters_panel').find('select[name="orderFilter_'+$(this).parent().data('filter_key')+'"] option:selected').prop("selected", false);
					} else {
						$('#list_filters_panel').find('input[name="orderFilter_'+$(this).parent().data('filter_key')+'"]').val('');
					}
					form.submit();
				});
			});
		<?php echo '</script'; ?>
>
		<style>
			.list_action_wrapper {
				margin-bottom: 15px;
			}
			.list_availibility_container {
				position: relative;}
				.list_availibility_container .dropdown-menu {
					right: 0;
					padding: 8px 12px;}
					.list_availibility_container .dropdown-menu label {
						font-weight: 400;}
			#selected_filter_container {
				background-color: #fff;
				padding: 8px 20px;
				border: solid 1px #d3d8db;
				border-radius: 5px 5px 0 0;
				font-size: 14px;
				min-height: 52px;
				margin-top: 15px;}
				#selected_filter_container .selected_filters > span {
					font-size: 12px;
					padding: 6px 10px;
					display: inline-block;
					background: #F5F8F9;
					border: 1px solid #A0D0EB;
					border-radius: 3px;}
					#selected_filter_container .selected_filters > span + span {
						margin-left: 12px;}
					#selected_filter_container .selected_filters > span .filter_value {
						font-weight: 700;
					}
					#selected_filter_container .selected_filters > span i {
						cursor: pointer;}

			#content.bootstrap #list_filters_panel{
				margin-top: 15px;
				margin-bottom: 0;
			}
			#content.bootstrap  #selected_filter_container + #list_filters_panel {
				margin-top: 0;
			}
			#content.bootstrap  #selected_filter_container + div.panel {
				border-top: transparent;
				border-radius: 0 0 5px 5px;
			}

			.list_filters {
				padding: 0 30px;
				display: grid;
				grid-template-columns: repeat(3, 1fr);
				gap: 8px 40px;}
				.list_filters > .row {
					display: flex;
					align-items: center;}
				.list_filters .date_range, .list_filters .input_range {
					display: flex;
					justify-content: space-between;
					gap: 15px;}
				.list_filters .date_range .input-group:first-child {
					margin-bottom: 0;}
				.list_filters label {
					text-align: right;
					font-weight: 400;}
				.list_filters .actions {
					grid-column-start: 1;
					grid-column-end: 4;}
			@media (max-width: 992px) {
				.list_filters {
					grid-template-columns: repeat(2, 1fr);}
					.list_filters .actions {
					grid-column-start: 1;
					grid-column-end: 3;}
			}
			@media (max-width: 768px) {
				.list_filters {
					grid-template-columns: repeat(1, 1fr);}
					.list_filters .actions {
					grid-column-start: 1;
					grid-column-end: 2;}
					.list_filters label {
						text-align: left;
					}
			}

		</style>
	<?php }
}
}
/* {/block "override_form_extra"} */
}
