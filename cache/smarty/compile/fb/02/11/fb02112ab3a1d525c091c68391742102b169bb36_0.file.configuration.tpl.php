<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:47
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\products\configuration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f3708f4f1_44692492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb02112ab3a1d525c091c68391742102b169bb36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\products\\configuration.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f3708f4f1_44692492 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['product']->value->id))) {?>
	<div id="product-configuration" class="panel product-tab">
		<input type="hidden" name="submitted_tabs[]" value="Configuration" />
		<h3 class="tab"> <i class="icon-AdminAdmin"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configuration'),$_smarty_tpl ) );?>
</h3>

		<input type="hidden" id="checkConfSubmit" value="0" name="checkConfSubmit">

		<div class="from-group table-responsive-row clearfix">
			<table class="table hotel-room">
				<thead>
					<tr class="nodrag nodrop">
						<th class="col-sm-2 center">
							<label class="control-label required">
								<span class="label-tooltip" data-toggle="tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter room number. For eg. A-101, A-102 etc. Invalid characters <>;=#{}'),$_smarty_tpl ) );?>
">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room No.'),$_smarty_tpl ) );?>

								</span>
							</label>
						</th>
						<th class="col-sm-2 center">
							<label class="control-label">
								<span class="label-tooltip" data-toggle="tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter floor of the room. For eg. First, Second etc. Invalid characters <>;=#{}'),$_smarty_tpl ) );?>
">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Floor'),$_smarty_tpl ) );?>

								</span>
							</label>
						</th>
						<th class="col-sm-2 center">
							<label class="control-label">
								<span class="label-tooltip" data-toggle="tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select status of the room.'),$_smarty_tpl ) );?>
">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status'),$_smarty_tpl ) );?>

								</span>
							</label>
						</th>
						<th class="col-sm-3 center">
							<label class="control-label">
								<span class="label-tooltip" data-toggle="tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter extra information about this room. Leave empty if not required.'),$_smarty_tpl ) );?>
">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Extra Information'),$_smarty_tpl ) );?>

								</span>
							</label>
						</th>
						<th class="col-sm-2 center">
							<label class="control-label">
								<span class="label-tooltip" data-toggle="tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set date ranges when room is set to Temporarily Inactive.'),$_smarty_tpl ) );?>
">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disable Dates'),$_smarty_tpl ) );?>

								</span>
							</label>
						</th>
                        <th class="col-sm-1 center">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'--'),$_smarty_tpl ) );?>

                        </th>
					</tr>
				</thead>
				<tbody>
					<?php if ((isset($_POST['rooms_info'])) && is_array($_POST['rooms_info']) && count($_POST['rooms_info'])) {?>
						<?php $_smarty_tpl->_assignInScope('rooms_info', $_POST['rooms_info']);?>
					<?php } elseif ((isset($_smarty_tpl->tpl_vars['htl_room_info']->value)) && is_array($_smarty_tpl->tpl_vars['htl_room_info']->value) && count($_smarty_tpl->tpl_vars['htl_room_info']->value)) {?>
						<?php $_smarty_tpl->_assignInScope('rooms_info', $_smarty_tpl->tpl_vars['htl_room_info']->value);?>
					<?php }?>
					<?php if ((isset($_smarty_tpl->tpl_vars['rooms_info']->value)) && is_array($_smarty_tpl->tpl_vars['rooms_info']->value) && count($_smarty_tpl->tpl_vars['rooms_info']->value)) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rooms_info']->value, 'room_info', false, 'key');
$_smarty_tpl->tpl_vars['room_info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['room_info']->value) {
$_smarty_tpl->tpl_vars['room_info']->do_else = false;
?>
							<?php $_smarty_tpl->_assignInScope('var_name_room_info', "rooms_info[".((string)$_smarty_tpl->tpl_vars['key']->value)."]");?>
							<tr class="room_data_values" data-row-index="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
								<td class="col-sm-1 center">
									<input class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['room_info']->value['room_num'];?>
" name="<?php echo ($_smarty_tpl->tpl_vars['var_name_room_info']->value).('[room_num]');?>
">
								</td>
								<td class="col-sm-2 center">
									<input class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['room_info']->value['floor'];?>
" name="<?php echo ($_smarty_tpl->tpl_vars['var_name_room_info']->value).('[floor]');?>
">
								</td>
								<td class="col-sm-2 center">
									<select class="form-control room_status" name="<?php echo ($_smarty_tpl->tpl_vars['var_name_room_info']->value).('[id_status]');?>
">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rm_status']->value, 'room_stauts');
$_smarty_tpl->tpl_vars['room_stauts']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['room_stauts']->value) {
$_smarty_tpl->tpl_vars['room_stauts']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['room_stauts']->value['id'];?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['room_stauts']->value['id'];
$_prefixVariable22 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['room_info']->value['id_status'] == $_prefixVariable22) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['room_stauts']->value['status'];?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</td>
								<td class="col-sm-3 center">
									<input type="text" class="form-control room_comment" value="<?php echo $_smarty_tpl->tpl_vars['room_info']->value['comment'];?>
" name="<?php echo ($_smarty_tpl->tpl_vars['var_name_room_info']->value).('[comment]');?>
">
								</td>
								<td class="col-sm-2 center">
									<a class="btn btn-default deactiveDatesModal <?php if ($_smarty_tpl->tpl_vars['room_info']->value['id_status'] != $_smarty_tpl->tpl_vars['rm_status']->value['STATUS_TEMPORARY_INACTIVE']['id']) {?>disabled<?php }?>" data-toggle="modal" data-target="#deactiveDatesModal" data-id-room="<?php echo $_smarty_tpl->tpl_vars['room_info']->value['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['room_info']->value['id_status'] != $_smarty_tpl->tpl_vars['rm_status']->value['STATUS_TEMPORARY_INACTIVE']['id']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Dates'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View Dates'),$_smarty_tpl ) );
}?>
									</a>
									<input type="hidden" class="form-control disable_dates_json" name="<?php echo ($_smarty_tpl->tpl_vars['var_name_room_info']->value).('[disable_dates_json]');?>
" <?php if ($_smarty_tpl->tpl_vars['room_info']->value['id_status'] == $_smarty_tpl->tpl_vars['rm_status']->value['STATUS_TEMPORARY_INACTIVE']['id']) {?>value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['room_info']->value['disable_dates_json'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
								</td>
								<td class="col-sm-1 center">
									<?php if ((isset($_smarty_tpl->tpl_vars['room_info']->value['id']))) {?>
										<a href="#" class="rm_htl_room btn btn-default" data-id-htl-info="<?php echo $_smarty_tpl->tpl_vars['room_info']->value['id'];?>
"><i class="icon-trash"></i></a>
										<input type="hidden" name="<?php echo ($_smarty_tpl->tpl_vars['var_name_room_info']->value).('[id]');?>
" value="<?php echo $_smarty_tpl->tpl_vars['room_info']->value['id'];?>
">
									<?php } else { ?>
										<a href="#" class="remove-rooms-button btn btn-default"><i class="icon-trash"></i></a>
									<?php }?>
								</td>
							</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php } else { ?>
						<?php
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['k']->step = 1;$_smarty_tpl->tpl_vars['k']->total = (int) ceil(($_smarty_tpl->tpl_vars['k']->step > 0 ? 1+1 - (0) : 0-(1)+1)/abs($_smarty_tpl->tpl_vars['k']->step));
if ($_smarty_tpl->tpl_vars['k']->total > 0) {
for ($_smarty_tpl->tpl_vars['k']->value = 0, $_smarty_tpl->tpl_vars['k']->iteration = 1;$_smarty_tpl->tpl_vars['k']->iteration <= $_smarty_tpl->tpl_vars['k']->total;$_smarty_tpl->tpl_vars['k']->value += $_smarty_tpl->tpl_vars['k']->step, $_smarty_tpl->tpl_vars['k']->iteration++) {
$_smarty_tpl->tpl_vars['k']->first = $_smarty_tpl->tpl_vars['k']->iteration === 1;$_smarty_tpl->tpl_vars['k']->last = $_smarty_tpl->tpl_vars['k']->iteration === $_smarty_tpl->tpl_vars['k']->total;?>
							<?php $_smarty_tpl->_assignInScope('var_name_room_info', "rooms_info[".((string)$_smarty_tpl->tpl_vars['k']->value)."]");?>
							<tr class="room_data_values" data-row-index="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
								<td class="col-sm-1 center">
									<input class="form-control" type="text" name="<?php echo ($_smarty_tpl->tpl_vars['var_name_room_info']->value).('[room_num]');?>
">
								</td>
								<td class="col-sm-2 center">
									<input class="form-control" type="text" name="<?php echo ($_smarty_tpl->tpl_vars['var_name_room_info']->value).('[floor]');?>
">
								</td>
								<td class="col-sm-2 center">
									<select class="form-control room_status" name="<?php echo ($_smarty_tpl->tpl_vars['var_name_room_info']->value).('[id_status]');?>
">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rm_status']->value, 'room_stauts');
$_smarty_tpl->tpl_vars['room_stauts']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['room_stauts']->value) {
$_smarty_tpl->tpl_vars['room_stauts']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['room_stauts']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['room_stauts']->value['status'];?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</td>
                                <td class="center col-sm-3">
									<input type="text" class="form-control room_comment" name="<?php echo ($_smarty_tpl->tpl_vars['var_name_room_info']->value).('[comment]');?>
">
                                </td>
								<td class="center col-sm-2">
									<a class="btn btn-default deactiveDatesModal disabled" data-toggle="modal" data-target="#deactiveDatesModal">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Dates'),$_smarty_tpl ) );?>

									</a>
									<input type="hidden" class="form-control disable_dates_json" name="<?php echo ($_smarty_tpl->tpl_vars['var_name_room_info']->value).('[disable_dates_json]');?>
" value="">
								</td>
								<td class="center col-sm-1">
								    <?php if ($_smarty_tpl->tpl_vars['k']->value == 1) {?>
										<a href="#" class="remove-rooms-button btn btn-default"><i class="icon-trash"></i></a>
                                    <?php } else { ?>
                                        <a href="#" class="remove-rooms-button btn btn-default disabled"><i class="icon-trash"></i></a>
								    <?php }?>
                                </td>
							</tr>
						<?php }
}
?>
					<?php }?>
				</tbody>
			</table>
			<div class="form-group">
				<div class="col-sm-12">
					<button id="add-more-rooms-button" class="btn btn-default" type="button" data-size="s" data-style="expand-right">
						<i class="icon icon-plus"></i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add More Rooms'),$_smarty_tpl ) );?>

					</button>
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
			<button type="submit" name="submitAddproduct" class="btn btn-default pull-right checkConfigurationClick" disabled="disabled">
				<i class="process-icon-loading"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>

			</button>
			<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right checkConfigurationClick"  disabled="disabled">
				<i class="process-icon-loading"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay'),$_smarty_tpl ) );?>

			</button>
		</div>
	</div>
<?php }?>

<div class="modal fade" id="deactiveDatesModal" tabindex="-1" role="dialog" aria-labelledby="deactiveDatesLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close margin-right-10" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title"><i class="icon-calendar"></i>&nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disable Dates'),$_smarty_tpl ) );?>
</h4>
			</div>
			<div class="modal-body">
				<div class="text-left errors-wrap" style="display: none;"></div>
				<div class="alert alert-info">
					<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please note that the date chosen for field \'Date To\' is not considered as a blocking date.'),$_smarty_tpl ) );?>
</p>
				</div>
				<div class="from-group table-responsive-row clearfix">
					<table class="table room-disable-dates">
						<thead>
							<tr class="nodrag nodrop">
								<th class="col-sm-1 center">
									<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date From'),$_smarty_tpl ) );?>
</span>
								</th>
								<th class="col-sm-2 center">
									<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date To'),$_smarty_tpl ) );?>
</span>
								</th>
								<th class="col-sm-2 center">
									<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reason'),$_smarty_tpl ) );?>
</span>
								</th>
                                <th class="col-sm-1 center"></th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
					<div class="form-group">
						<div class="col-sm-12">
							<a href="#" class="add_more_room_disable_dates btn btn-default">
                                <i class="icon icon-plus"></i>
                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Add More"),$_smarty_tpl ) );?>
</span>
                            </a>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default deactiveDatesModalSubmit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Done'),$_smarty_tpl ) );?>
</button>
			</div>
		</div>
	</div>
</div>

<style>
	.deactiveDatesModal {
		cursor: pointer;
	}

	.hotel-room {
		border: 1px solid #f2f2f2;
		margin-top: 10px;
	}
</style>


<?php echo '<script'; ?>
>
    var prod_link = "<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts');?>
";
    var rm_status = <?php echo json_encode($_smarty_tpl->tpl_vars['rm_status']->value);?>
;
    var currentRoomRow = 0;

    $(document).ready(function() {
        const DisableDatesModal = {
            init: function() {
                DisableDatesModal.addNewRow();
                DisableDatesModal.hideErrors();
                DisableDatesModal.removeAllInvalidRowDataMarkers();
            },
            addNewRow: function() {
                $('#deactiveDatesModal tbody').append(this.disableDatesRowHtml);
            },
            populateWithDatesInfo: function(datesInfo) {
                const $this = this;
                $(datesInfo).each(function(i, dateRange) {
                    $('#deactiveDatesModal tbody').append($this.disableDatesRowHtml);
                    const dateRangeRow = $('#deactiveDatesModal tbody tr').last();
                    $(dateRangeRow).find('.disabled_date_from').val(dateRange.date_from);
                    $(dateRangeRow).find('.disabled_date_to').val(dateRange.date_to);
                    $(dateRangeRow).find('.room_disable_reason').val(dateRange.reason);
                });
            },
            validateDisableDates: function(cb) {
                DisableDatesModal.hideErrors();
                DisableDatesModal.removeAllInvalidRowDataMarkers();
                DisableDatesModal.disableRowDeleteActionButtons();

                let idRoom = parseInt($('#deactiveDatesModal .room-disable-dates').attr('data-id-room'));
                idRoom = idRoom == isNaN(idRoom) ? 0 : idRoom;
                const disableDates = Array();
                $('#deactiveDatesModal .room-disable-dates tbody tr').each(function(i, tr) {
                    const date_from = $(tr).find('.disabled_date_from').val().trim();
                    const date_to = $(tr).find('.disabled_date_to').val().trim();
                    disableDates.push({ date_from, date_to });
                });

                $.ajax({
                    url: prod_link,
                    type: 'POST',
                    data: {
                        ajax: true,
                        action: 'validateDisableDates',
                        id_room: idRoom,
                        disable_dates: disableDates,
                    },
                    dataType: 'JSON',
                    success: function(response) {
                        if (response.status) {
                            if (typeof cb === 'function') {
                                cb();
                            }
                        } else {
                            DisableDatesModal.showErrors(response.errors);
                            DisableDatesModal.addInvalidRowDataMarkers(response.rows_to_highlight);
                        }
                    },
                    complete: function () {
                        DisableDatesModal.enableRowDeleteActionButtons();
                    }
                });
            },
            showErrors: function(errors) {
                $('#deactiveDatesModal .errors-wrap').html(errors);
                $('#deactiveDatesModal .errors-wrap').show();
            },
            hideErrors: function() {
                $('#deactiveDatesModal .errors-wrap').hide();
                $('#deactiveDatesModal .errors-wrap').html('');
            },
            addInvalidRowDataMarkers: function(rowsToHighlight) {
                rowsToHighlight.map(function (rowIndex) {
                    const tr = $('#deactiveDatesModal .room-disable-dates tbody tr').eq(rowIndex);
                    DisableDatesModal.markRowDataInvalid(tr);
                });
            },
            getDisableDatesInfo: function() {
                const disableDates = Array();
                $('#deactiveDatesModal .room-disable-dates tbody tr').each(function(i, tr) {
                    disableDates.push({
                        date_from: $(tr).find('.disabled_date_from').val().trim(),
                        date_to: $(tr).find('.disabled_date_to').val().trim(),
                        reason: $(tr).find('.room_disable_reason').val().trim(),
                    });
                });

                return disableDates;
            },
            disableRowDeleteActionButtons: function() {
                const disableDates = Array();
                $('#deactiveDatesModal .room-disable-dates .remove-disable-dates-button').addClass('disabled');
            },
            enableRowDeleteActionButtons: function() {
                const disableDates = Array();
                $('#deactiveDatesModal .room-disable-dates .remove-disable-dates-button').removeClass('disabled');
            },
            markRowDataInvalid: function(tr) {
                $(tr).css({ 'outline': '1px solid #D27C82', 'border-radius': '2px' });
            },
            removeAllInvalidRowDataMarkers: function(tr) {
                $('#deactiveDatesModal .room-disable-dates tr').css('outline', '');
                $(tr).css('outline', '');
            },
            removeRowDataMark: function(tr) {
                $(tr).css('outline', '');
            },
            disableDatesRowHtml: `
                <tr class="disabledDatesTr">
                    <td class="col-sm-2 center">
                        <input type="text" class="form-control disabled_date_from" value="" readonly>
                    </td>
                    <td class="col-sm-2 center">
                        <input type="text" class="form-control disabled_date_to" value="" readonly>
                    </td>
                    <td class="center col-sm-6">
                        <input type="text" class="form-control room_disable_reason" value="">
                    </td>
                    <td class="center col-sm-1">
                        <a href="#" class="remove-disable-dates-button btn btn-default"><i class="icon-trash"></i></a>
                    </td>
                </tr>
            `,
        }

        // Disable dates data filling when model open
        $('#deactiveDatesModal').on('show.bs.modal', function(e) {
            const triggerRoomRow = $(e.relatedTarget);
            const roomRowIndex = parseInt($(triggerRoomRow).closest('tr').attr('data-row-index'));
            const idRoom = parseInt($(triggerRoomRow).attr('data-id-room'));
            $('#deactiveDatesModal table.room-disable-dates tbody').html('');
            $('#deactiveDatesModal table.room-disable-dates').attr('data-room-row-index', roomRowIndex);
            $('#deactiveDatesModal table.room-disable-dates').attr('data-id-room', idRoom);
            let disableDates = $(triggerRoomRow).closest('tr').find('.disable_dates_json').val();
            if (!disableDates) {
                DisableDatesModal.init();
                return;
            }

            disableDates = JSON.parse(disableDates);
            DisableDatesModal.hideErrors();
            DisableDatesModal.populateWithDatesInfo(disableDates);
        });

        // Disable dates data filling when model open
        $('#deactiveDatesModal').on('hide.bs.modal', function(e) {
            const disableDates = DisableDatesModal.getDisableDatesInfo();
            const roomRowIndex = parseInt($('#deactiveDatesModal table.room-disable-dates').attr('data-room-row-index'));
            const roomRow = $('#product-configuration .hotel-room tr.room_data_values[data-row-index='+roomRowIndex+']');
            $(roomRow).find('.disable_dates_json').val(JSON.stringify(disableDates));
        });

        // copy json formatted dates to room
        $(document).on('click', '.deactiveDatesModalSubmit', function() {
            DisableDatesModal.validateDisableDates(function () {
                const disableDates = DisableDatesModal.getDisableDatesInfo();
                const roomRowIndex = parseInt($('#deactiveDatesModal table.room-disable-dates').attr('data-room-row-index'));
                const roomRow = $('#product-configuration .hotel-room tr.room_data_values[data-row-index='+roomRowIndex+']');
                $(roomRow).find('.disable_dates_json').val(JSON.stringify(disableDates));
                $('#deactiveDatesModal').modal('hide');
            });
        });

        // Add new room detail
        $('#add-more-rooms-button').on('click',function() {
            var lengthRooms = parseInt($('.room_data_values').length);

            var prefix = 'rooms_info['+lengthRooms+']';
            html = '<tr class="room_data_values" data-row-index="'+lengthRooms+'">';
                html += '<td class="col-sm-1 center">';
                    html += '<input class="form-control" type="text" name="'+prefix+'[room_num]">';
                html += '</td>';
                html += '<td class="col-sm-2 center">';
                    html += '<input class="form-control" type="text" name="'+prefix+'[floor]">';
                html += '</td>';
                html += '<td class="col-sm-2 center">';
                    html += '<select class="form-control room_status" name="'+prefix+'[id_status]">';
                        $.each(rm_status, function(key, value) {
                            html += '<option value="'+value.id+'">'+value.status+'</option>';
                        });
                    html += '</select>';
                html += '</td>';
                html += '<td class="col-sm-3 center">';
                    html += '<input class="form-control" type="text" name="'+prefix+'[floor]">';
                html += '</td>';
                html += '<td class="center col-sm-2">';
                    html += '<a class="btn btn-default deactiveDatesModal disabled" data-toggle="modal" data-target="#deactiveDatesModal">';
                        html += "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Dates'),$_smarty_tpl ) );?>
";
                    html += '</a>';
                    html += '<input type="hidden" class="form-control disable_dates_json" name="'+prefix+'[disable_dates_json]">';
                html += '</td>';
                html += '<td class="center col-sm-1">';
                    html += '<a href="#" class="remove-rooms-button btn btn-default"><i class="icon-trash"></i></a>';
                html += '</td>';
            html += '</tr>';

            $('table.hotel-room tbody').append(html);
        });

        // delete room
        $('.rm_htl_room').on('click',function(e) {
            e.preventDefault();
            var $current = $(this);
            var id_htl_info = $(this).attr('data-id-htl-info');
            $.ajax({
                url: prod_link,
                type: 'POST',
                dataType: 'text',
                data: {
                    ajax:true,
                    action:'deleteHotelRoom',
                    id: id_htl_info,
                },
                success: function (result) {
                    if (parseInt(result) == 1) {
                        showSuccessMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Removed successfully'),$_smarty_tpl ) );?>
");
                        $current.closest(".room_data_values").remove();
                    } else {
                        showErrorMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some error occurred'),$_smarty_tpl ) );?>
");
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    showErrorMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some error occurred'),$_smarty_tpl ) );?>
");
                }
            });
        });

        $(".checkConfigurationClick").on("click", function() {
            $("#checkConfSubmit").val(1);
            return true;
        });

        // remove room row
        $(document).on('click','.remove-rooms-button',function(e) {
            e.preventDefault();
            $(this).closest('.room_data_values').remove();
            $('#product-configuration table.hotel-room tr.room_data_values').each(function(iOuter, tr) {
                $(tr).attr('data-row-index', iOuter);
                $(tr).find('input, select').each(function (iInner, inputField) {
                    let fieldName = $(inputField).attr('name');
                    fieldName = fieldName.replace(/[0-9]+/, iOuter)
                    $(inputField).attr('name', fieldName);
                });
            });
        });

        // on changing the room status as disabled for some date range
        $(document).on('change', '.room_status', function(){
            var status_val = $(this).val();
            if (status_val == rm_status.STATUS_TEMPORARY_INACTIVE.id) {
                $(this).closest('.room_data_values').find('.deactiveDatesModal').removeClass('disabled');
            } else {
                $(this).closest('.room_data_values').find('.deactiveDatesModal').addClass('disabled');
            }
        });

        $(document).on('focus', '.disabled_date_from, .disabled_date_to', function () {
            $('.disabled_date_from').datepicker({
                showOtherMonths: true,
                dateFormat: 'yy-mm-dd',
                minDate: 0,
                onSelect: function(selectedDate) {
                    var date_format = selectedDate.split('-');
                    selectedDate = new Date($.datepicker.formatDate('yy-mm-dd', new Date(date_format[0], date_format[1] - 1, date_format[2])));
                    selectedDate.setDate(selectedDate.getDate() + 1);
                    $(this).closest('tr').find('.disabled_date_to').datepicker('option', 'minDate', selectedDate);
                },
                onClose: function(selectedDate) {
                    var dateTo = $(this).closest('tr').find('.disabled_date_to').val();
                    if (!dateTo || (dateTo && selectedDate >= dateTo)) {
                        $(this).closest('tr').find('.disabled_date_to').datepicker('show');
                    }
                },
            });

            $('.disabled_date_to').datepicker({
                showOtherMonths: true,
                dateFormat: 'yy-mm-dd',
                minDate: 0,
                beforeShow: function (input, instance) {
                    var date_to = $(this).closest('tr').find('.disabled_date_from').val();
                    if (typeof date_to != 'undefined' && date_to != '') {
                        var date_format = date_to.split('-');
                        var selectedDate = new Date($.datepicker.formatDate('yy-mm-dd', new Date(date_format[0], date_format[1] - 1, date_format[2])));
                    } else {
                        var date_format = new Date();
                        var selectedDate = new Date($.datepicker.formatDate('yy-mm-dd', new Date()));
                    }
                    selectedDate.setDate(selectedDate.getDate()+1);
                    $(this).datepicker('option', 'minDate', selectedDate);
                },
            });
        });

        $('.add_more_room_disable_dates').on('click', function() {
            DisableDatesModal.addNewRow();
        });

        $(document).on('click','.remove-disable-dates-button',function(e) {
            e.preventDefault();
            $(this).closest('tr').remove();
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
