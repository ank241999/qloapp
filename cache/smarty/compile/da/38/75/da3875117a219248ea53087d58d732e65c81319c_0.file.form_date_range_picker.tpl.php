<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:48
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\form_date_range_picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f38eb5a08_99854950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da3875117a219248ea53087d58d732e65c81319c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\form_date_range_picker.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f38eb5a08_99854950 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="calendar" class="panel">
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="calendar_form" name="calendar_form" class="form-inline">
		<div class="row">
			<div class="col-lg-6">
				<div class="btn-group">
					<button type="submit" name="submitDateDay" class="btn btn-default submitDateDay"><?php echo $_smarty_tpl->tpl_vars['translations']->value['Day'];?>
</button>
					<button type="submit" name="submitDateMonth" class="btn btn-default submitDateMonth"><?php echo $_smarty_tpl->tpl_vars['translations']->value['Month'];?>
</button>
					<button type="submit" name="submitDateYear" class="btn btn-default submitDateYear"><?php echo $_smarty_tpl->tpl_vars['translations']->value['Year'];?>
</button>
					<button type="submit" name="submitDateDayPrev" class="btn btn-default submitDateDayPrev"><?php echo $_smarty_tpl->tpl_vars['translations']->value['Day'];?>
-1</button>
					<button type="submit" name="submitDateMonthPrev" class="btn btn-default submitDateMonthPrev"><?php echo $_smarty_tpl->tpl_vars['translations']->value['Month'];?>
-1</button>
					<button type="submit" name="submitDateYearPrev" class="btn btn-default submitDateYearPrev"><?php echo $_smarty_tpl->tpl_vars['translations']->value['Year'];?>
-1</button>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-xs-6">
								<div class="input-group">
									<label class="input-group-addon"><?php if ((isset($_smarty_tpl->tpl_vars['translations']->value['From']))) {
echo $_smarty_tpl->tpl_vars['translations']->value['From'];
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From:'),$_smarty_tpl ) );
}?></label>
									<input type="text" name="datepickerFrom" id="datepickerFrom" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datepickerFrom']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="datepicker form-control" autocomplete="off" onfocus="this.blur();">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="input-group">
									<label class="input-group-addon"><?php if ((isset($_smarty_tpl->tpl_vars['translations']->value['To']))) {
echo $_smarty_tpl->tpl_vars['translations']->value['To'];
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From:'),$_smarty_tpl ) );
}?></label>
									<input type="text" name="datepickerTo" id="datepickerTo" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datepickerTo']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="datepicker form-control" autocomplete="off" onfocus="this.blur();">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="row">
							<button type="submit" name="submitDatePicker" id="submitDatePicker" class="btn btn-default"><i class="icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() {
		if ($('form#calendar_form .datepicker').length > 0) {
			$('form#calendar_form .datepicker#datepickerFrom').datepicker({
				prevText: '',
				nextText: '',
				dateFormat: 'yy-mm-dd',
				onClose: function() {
					let dateFrom = $('form#calendar_form .datepicker#datepickerFrom').val().trim();
					let dateTo = $('form#calendar_form .datepicker#datepickerTo').val().trim();

					if (dateFrom >= dateTo) {
						let objDateToMin = $.datepicker.parseDate('yy-mm-dd', dateFrom);
						objDateToMin.setDate(objDateToMin.getDate() + 1);

						$('form#calendar_form .datepicker#datepickerTo').datepicker('option', 'minDate', objDateToMin);
						$('form#calendar_form .datepicker#datepickerTo').val($.datepicker.formatDate('yy-mm-dd', objDateToMin));
						$('form#calendar_form .datepicker#datepickerTo').datepicker('show');
					}
				},
			});

			$('form#calendar_form .datepicker#datepickerTo').datepicker({
				prevText: '',
				nextText: '',
				dateFormat: 'yy-mm-dd',
				beforeShow: function() {
					let dateFrom = $('form#calendar_form .datepicker#datepickerFrom').val().trim();

					if (typeof dateFrom != 'undefined' && dateFrom != '') {
						let objDateToMin = $.datepicker.parseDate('yy-mm-dd', dateFrom);
						objDateToMin.setDate(objDateToMin.getDate() + 1);

						$('form#calendar_form .datepicker#datepickerTo').datepicker('option', 'minDate', objDateToMin);
					} else {
						let objDateToMin = new Date();
						objDateToMin.setDate(objDateToMin.getDate() + 1);

						$('form#calendar_form .datepicker#datepickerTo').datepicker('option', 'minDate', objDateToMin);
					}
				},
			});
		}
	});
<?php echo '</script'; ?>
><?php }
}
