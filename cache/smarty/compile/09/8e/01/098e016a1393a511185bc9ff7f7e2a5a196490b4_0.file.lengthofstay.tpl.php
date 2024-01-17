<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:47
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\products\lengthofstay.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f3767e272_64014073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '098e016a1393a511185bc9ff7f7e2a5a196490b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\products\\lengthofstay.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f3767e272_64014073 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\tools\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if ((isset($_smarty_tpl->tpl_vars['product']->value->id))) {?>
	<div id="product-lengthofstay" class="panel product-tab">
		<h3 class="tab"><i class="icon-calendar"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Length Of Stay'),$_smarty_tpl ) );?>
</h3>
		<input type="hidden" name="submitted_tabs[]" value="LengthOfStay" />

		<div class="panel-content">
			<div class="alert alert-info">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please read below important points regarding length of stay management'),$_smarty_tpl ) );?>

				<ul>
					<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set 1 day for setting no limit on Minimum length of stay'),$_smarty_tpl ) );?>
</li>
					<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set 0 day for setting no limit on Maximum length of stay'),$_smarty_tpl ) );?>
</li>
					<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable "Length of stay for date ranges" for setting values of \"Minimum length of stay\" and \"Maximum length of stay\" according to different date ranges'),$_smarty_tpl ) );?>
</li>
					<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Length of stays (minimum|maximum) of all the dates which does not fall under the date ranges of \"Length of stay for date ranges\", will be taken from the global values of length of stays of this room type.'),$_smarty_tpl ) );?>
</li>
					<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'\"Date to\" will not be included in the date range of \"Length of stay for date ranges\".'),$_smarty_tpl ) );?>
</li>
				</ul>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-3 required" for="min_los">
					<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter minimum length of stay for the hotel. set 1 day for setting no limit on minimum length of stay.'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Minimum length of stay'),$_smarty_tpl ) );?>
</span>
				</label>
				<div class="col-sm-2">
					<div class="input-group">
						<input type="text" id="min_los" name="min_los" value="<?php if ((isset($_POST['min_los']))) {
echo htmlspecialchars($_POST['min_los'], ENT_QUOTES, 'UTF-8', true);
} elseif ((isset($_smarty_tpl->tpl_vars['roomTypeInfo']->value['min_los'])) && $_smarty_tpl->tpl_vars['roomTypeInfo']->value['min_los']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roomTypeInfo']->value['min_los'], ENT_QUOTES, 'UTF-8', true);
} else { ?>1<?php }?>">
						<span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Day(s)'),$_smarty_tpl ) );?>
</span>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-3 required" for="max_los">
					<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter maximum length of stay for the hotel. set 0 day for setting no limit on maximum length of stay.'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Maximum length of stay'),$_smarty_tpl ) );?>
</span>
				</label>
				<div class="col-sm-2">
					<div class="input-group">
						<input type="text" id="max_los" name="max_los" value="<?php if ((isset($_POST['max_los']))) {
echo htmlspecialchars($_POST['max_los'], ENT_QUOTES, 'UTF-8', true);
} elseif ((isset($_smarty_tpl->tpl_vars['roomTypeInfo']->value['max_los']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roomTypeInfo']->value['max_los'], ENT_QUOTES, 'UTF-8', true);
} else { ?>0<?php }?>">
						<span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Day(s)'),$_smarty_tpl ) );?>
</span>
					</div>
				</div>
			</div>
		</div>

		<div class="form-group">
			<label for="active_restriction_dates" class="control-label col-sm-3">
				<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable, if you want set minimum|maximum length of stay according to different date ranges.'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Length of stay for date ranges'),$_smarty_tpl ) );?>
</span>
			</label>
			<div class="col-sm-9">
				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" value="1" id="active_restriction_dates_on" name="active_restriction_dates" <?php if ((isset($_POST['active_restriction_dates'])) && $_POST['active_restriction_dates']) {?>checked="checked"<?php } elseif ((isset($_smarty_tpl->tpl_vars['roomTypeInfo']->value['restrictionDataRange'])) && $_smarty_tpl->tpl_vars['roomTypeInfo']->value['restrictionDataRange']) {?>checked="checked"<?php }?>>
					<label for="active_restriction_dates_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );?>
</label>

					<input type="radio" value="0" id="active_restriction_dates_off" name="active_restriction_dates" <?php if ((isset($_POST['active_restriction_dates']))) {
if (!$_POST['active_restriction_dates']) {?>checked="checked"<?php }
} elseif ((isset($_smarty_tpl->tpl_vars['roomTypeInfo']->value['restrictionDataRange']))) {
if (!$_smarty_tpl->tpl_vars['roomTypeInfo']->value['restrictionDataRange']) {?>checked="checked"<?php }
} else { ?>checked="checked"<?php }?>>
					<label for="active_restriction_dates_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );?>
</label>

					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>

		<div id="restriction_dates_container" class="form-group table-responsive" <?php if ((isset($_POST['active_restriction_dates']))) {
if (!$_POST['active_restriction_dates']) {?>style="display:none;"<?php }
} elseif ((isset($_smarty_tpl->tpl_vars['roomTypeInfo']->value['restrictionDataRange']))) {
if (!$_smarty_tpl->tpl_vars['roomTypeInfo']->value['restrictionDataRange']) {?>style="display:none;"<?php }
}?>>
			<table id="restriction_dates_table" class="table table-striped">
				<thead>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date From'),$_smarty_tpl ) );?>
</th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date To'),$_smarty_tpl ) );?>
</th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Minimum length of stay'),$_smarty_tpl ) );?>
</th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Maximum length of stay'),$_smarty_tpl ) );?>
</th>
					<th></th>
				</thead>
				<tbody>
					<?php if ((isset($_POST['active_restriction_dates'])) && $_POST['active_restriction_dates'] && (isset($_POST['restriction_date_from'])) && $_POST['restriction_date_from']) {?>
						<?php $_smarty_tpl->_assignInScope('restrictionDataRange', array());?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_POST['restriction_date_from'], 'restrictionDateFromVal', false, 'restrictionKey');
$_smarty_tpl->tpl_vars['restrictionDateFromVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['restrictionKey']->value => $_smarty_tpl->tpl_vars['restrictionDateFromVal']->value) {
$_smarty_tpl->tpl_vars['restrictionDateFromVal']->do_else = false;
?>
							<?php $_smarty_tpl->_assignInScope('restrictionDataRangeTemp', array('date_from'=>$_smarty_tpl->tpl_vars['restrictionDateFromVal']->value,'date_to'=>$_POST['restriction_date_to'][$_smarty_tpl->tpl_vars['restrictionKey']->value],'min_los'=>$_POST['restriction_min_los'][$_smarty_tpl->tpl_vars['restrictionKey']->value],'max_los'=>$_POST['restriction_max_los'][$_smarty_tpl->tpl_vars['restrictionKey']->value]));?>

							<?php if ((isset($_POST['id_rt_restriction'])) && (isset($_POST['id_rt_restriction'][$_smarty_tpl->tpl_vars['restrictionKey']->value]))) {?>
								<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['restrictionDataRangeTemp']) ? $_smarty_tpl->tpl_vars['restrictionDataRangeTemp']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['id_rt_restriction'] = $_POST['id_rt_restriction'][$_smarty_tpl->tpl_vars['restrictionKey']->value];
$_smarty_tpl->_assignInScope('restrictionDataRangeTemp', $_tmp_array);?>
							<?php }?>

							<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['restrictionDataRange']) ? $_smarty_tpl->tpl_vars['restrictionDataRange']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['restrictionDataRangeTemp']->value;
$_smarty_tpl->_assignInScope('restrictionDataRange', $_tmp_array);?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php } elseif ((isset($_smarty_tpl->tpl_vars['roomTypeInfo']->value['restrictionDataRange'])) && $_smarty_tpl->tpl_vars['roomTypeInfo']->value['restrictionDataRange']) {?>
						<?php $_smarty_tpl->_assignInScope('restrictionDataRange', $_smarty_tpl->tpl_vars['roomTypeInfo']->value['restrictionDataRange']);?>
					<?php } else { ?>
						<?php $_smarty_tpl->_assignInScope('restrictionDataRange', array(array('date_from'=>'','date_to'=>'','min_los'=>'','max_los'=>'')));?>
					<?php }?>

					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['restrictionDataRange']->value, 'restrictionInfo');
$_smarty_tpl->tpl_vars['restrictionInfo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['restrictionInfo']->value) {
$_smarty_tpl->tpl_vars['restrictionInfo']->do_else = false;
?>
						<tr>
							<td>
								<div class="input-group">
									<input class="form-control restriction_date date_from_restriction" type="text" name="restriction_date_from[]" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['restrictionInfo']->value['date_from'],'%d-%m-%Y');?>
" readonly>
									<span class="input-group-addon"><i class="icon-calendar"></i></span>
								</div>
							</td>
							<td>
								<div class="input-group">
									<input class="form-control restriction_date date_to_restriction" type="text" name="restriction_date_to[]" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['restrictionInfo']->value['date_to'],'%d-%m-%Y');?>
" readonly>
									<span class="input-group-addon"><i class="icon-calendar"></i></span>
								</div>
							</td>
							<td>
								<div class="input-group">
									<input class="form-control" type="text" name="restriction_min_los[]" value="<?php echo $_smarty_tpl->tpl_vars['restrictionInfo']->value['min_los'];?>
">
									<span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'day(s)'),$_smarty_tpl ) );?>
</span>
								</div>
							</td>
							<td>
								<div class="input-group">
									<input class="form-control" type="text" name="restriction_max_los[]" value="<?php echo $_smarty_tpl->tpl_vars['restrictionInfo']->value['max_los'];?>
">
									<span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'day(s)'),$_smarty_tpl ) );?>
</span>
								</div>
							</td>
							<td>
								<?php if ((isset($_smarty_tpl->tpl_vars['restrictionInfo']->value['id_rt_restriction']))) {?>
									<input type="hidden" name="id_rt_restriction[]" value="<?php echo $_smarty_tpl->tpl_vars['restrictionInfo']->value['id_rt_restriction'];?>
">
								<?php }?>
								<a href="#" class="btn btn-default delete_date_restriction" <?php if ((isset($_smarty_tpl->tpl_vars['restrictionInfo']->value['id_rt_restriction']))) {?>data-id-rt-restriction="<?php echo $_smarty_tpl->tpl_vars['restrictionInfo']->value['id_rt_restriction'];?>
"<?php }?>><i class="icon-trash"></i></a>
							</td>
						</tr>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tbody>
			</table>
			<div class="row">
				<div class="col-sm-12">
					<a href="#" id="add_los_restriction" class="btn btn-default"><i class="icon icon-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add more length of stays'),$_smarty_tpl ) );?>
</a>
				</div>
			</div>
		</div>

		<div class="panel-footer">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts'), ENT_QUOTES, 'UTF-8', true);
if ((isset($_REQUEST['page'])) && $_REQUEST['page'] > 1) {?>&amp;submitFilterproduct=<?php echo intval($_REQUEST['page']);
}?>" class="btn btn-default">
				<i class="process-icon-cancel"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

			</a>
			<button type="submit" name="submitAddproduct" class="btn btn-default pull-right" disabled="disabled">
				<i class="process-icon-loading"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>

			</button>
			<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right"  disabled="disabled">
				<i class="process-icon-loading"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay'),$_smarty_tpl ) );?>

			</button>
		</div>
	</div>
<?php }?>

<?php echo '<script'; ?>
>
	var days_txt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'day(s)','js'=>1),$_smarty_tpl ) );?>
";
	var adminProductLink = "<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminlink('AdminProducts');?>
";
	var someErrorText = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Something went wrong. Please try again.','js'=>1),$_smarty_tpl ) );?>
";

	// console.log($.datepicker.parseDate( "dd-mm-yy", "15-06-2022" ));

	$(document).ready(function() {
		$("input[name='active_restriction_dates']").on('change', function () {
			if (parseInt($(this).val())) {
				$("#restriction_dates_container").show(200);
			} else {
				$("#restriction_dates_container").hide(200);
			}
		});

		$(document).on("click", ".delete_date_restriction",function(e) {
			e.preventDefault();

			if (typeof $(this).attr('data-id-rt-restriction') !== 'undefined' && $(this).attr('data-id-rt-restriction') !== false) {
				var currentElement = $(this);
				$.ajax({
					url: adminProductLink,
					type: 'POST',
					dataType: 'json',
					data: {
						ajax: true,
						action:'deleteRoomTypeLengthOfStayRestriction',
						id_rt_restriction: currentElement.attr('data-id-rt-restriction'),
					},
					success: function (result) {
						if (typeof result.success !== 'undefined' && result.success !== false) {
							showSuccessMessage(result.success);
							currentElement.closest('tr').remove();
						} else if (typeof result.error !== 'undefined' && result.error !== false) {
							showErrorMessage(result.error);
						}
					},
					error: function(XMLHttpRequest, textStatus, errorThrown) {
						showErrorMessage(someErrorText);
					}
				});
			} else {
				$(this).closest('tr').remove();
			}
		});

		$('#add_los_restriction').on('click',function(e) {
			e.preventDefault();

			var html = '';
			html += '<tr>';
				html += '<td>';
					html += '<div class="input-group">';
						html += '<input class="form-control restriction_date date_from_restriction" type="text" name="restriction_date_from[]" value="" readonly>';
						html += '<span class="input-group-addon"><i class="icon-calendar"></i></span>';
					html += '</div>';
				html += '</td>';
				html += '<td>';
					html += '<div class="input-group">';
						html += '<input class="form-control restriction_date date_to_restriction" type="text" name="restriction_date_to[]" value="" readonly>';
						html += '<span class="input-group-addon"><i class="icon-calendar"></i></span>';
					html += '</div>';
				html += '</td>';
				html += '<td>';
					html += '<div class="input-group">';
						html += '<input class="form-control" type="text" name="restriction_min_los[]" value="">';
						html += '<span class="input-group-addon">'+ days_txt +'</span>';
					html += '</div>';
				html += '</td>';
				html += '<td>';
					html += '<div class="input-group">';
						html += '<input class="form-control" type="text" name="restriction_max_los[]" value="">';
						html += '<span class="input-group-addon">'+ days_txt +'</span>';
					html += '</div>';
				html += '</td>';
				html += '<td>';
					html += '<a href="#" class="btn btn-default delete_date_restriction"><i class="icon-trash"></i></a>';
				html += '</td>';
			html += '</tr>';

			$('#restriction_dates_table tbody').append(html);
			$(this).blur();
		});

		$(document).on('focus', '.restriction_date', function() {
			var dateFormat = "dd-mm-yy";
			$(this).datepicker({
				defaultDate: new Date(),
				dateFormat: dateFormat,
				minDate: 0,
				beforeShow: function (input, instance) {
					if ($(input).hasClass('date_to_restriction') ) {
						var dateFrom = $(this).closest('tr').find('td div input.date_from_restriction').val();
						if (typeof dateFrom !== 'undefined' && dateFrom !== false && dateFrom != '') {
							// This can also work but more testing needed: var date = new Date($.datepicker.parseDate(dateFormat, dateFrom));
							var minDateTo = new Date($.datepicker.formatDate('yy-mm-dd', $.datepicker.parseDate(dateFormat, dateFrom)));
							minDateTo.setDate(minDateTo.getDate() + 1);

							$(this).datepicker("option", "minDate", minDateTo);
						}
					}
				},
				beforeShowDay: function (currentDate) {
					let dateRange = [];

					$(this).closest('tr').siblings().each(function( index ) {
						var dateFrom = $(this).find('td div input.date_from_restriction').val();
						var dateTo = $(this).find('td div input.date_to_restriction').val();
						if ((typeof dateFrom !== 'undefined' && dateFrom !== false && dateFrom != '') && (typeof dateTo !== 'undefined' && dateTo !== false && dateTo != '')) {
							for (let index = $.datepicker.parseDate(dateFormat, dateFrom); index < $.datepicker.parseDate(dateFormat, dateTo); index.setDate(index.getDate() + 1)) {
								dateRange.push($.datepicker.formatDate(dateFormat, index));
							}
						}
					});

					let dateString = $.datepicker.formatDate(dateFormat, currentDate);
					return [dateRange.indexOf(dateString) == -1];
				},
				onClose: function (dateText, instance) {
					if ($(this).hasClass('date_from_restriction')) {
						if (dateText != "") {
							var dateFrom = $.datepicker.parseDate(dateFormat, dateText);

							var dateTo = $(this).closest('tr').find('td div input.date_to_restriction').val();
							dateTo = $.datepicker.parseDate(dateFormat, dateTo);

							if (dateFrom >= dateTo) {
								// In this case empty date_to, so that user have to again select the date for date_to field
								$(this).closest('tr').find('td div input.date_to_restriction').val("");
							}
						}
					}
				}
			});
		});
	});
<?php echo '</script'; ?>
><?php }
}
