<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:49
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f39cdd705_39556217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6ebc0b2df8ffc0d5abbf19cc22e6e63020f9c90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\helpers\\list\\list_header.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f39cdd705_39556217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\tools\\smarty\\plugins\\function.math.php','function'=>'smarty_function_math',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['ajax']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		$(function () {
			$("#form-<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
 .ajax_table_link").click(function () {
				var link = $(this);
				$.post($(this).attr('href'), function (data) {
					if (data.success == 1) {
						showSuccessMessage(data.text);
						if (link.hasClass('action-disabled')){
							link.removeClass('action-disabled').addClass('action-enabled');
						} else {
							link.removeClass('action-enabled').addClass('action-disabled');
						}
						link.children().each(function () {
							if ($(this).hasClass('hidden')) {
								$(this).removeClass('hidden');
							} else {
								$(this).addClass('hidden');
							}
						});
					} else {
						showErrorMessage(data.text);
					}
				}, 'json');
				return false;
			});
		});
	<?php echo '</script'; ?>
>
<?php }
if ($_smarty_tpl->tpl_vars['is_order_position']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery/plugins/jquery.tablednd.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		var come_from = '<?php echo addslashes($_smarty_tpl->tpl_vars['list_id']->value);?>
';
		var alternate = <?php if ($_smarty_tpl->tpl_vars['order_way']->value == 'DESC') {?>'1'<?php } else { ?>'0'<?php }?>;
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/admin/dnd.js"><?php echo '</script'; ?>
>
<?php }
if (!$_smarty_tpl->tpl_vars['simple_header']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		$(function() {
			$('table.<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
 .filter').keypress(function(e){
				var key = (e.keyCode ? e.keyCode : e.which);
				if (key == 13)
				{
					e.preventDefault();
					formSubmit(e, 'submitFilterButton<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
');
				}
			})
			$('#submitFilterButton<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
').click(function() {
				$('#submitFilter<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
').val(1);
			});

			if ($("table .datepicker").length > 0) {
				$("table .datepicker").datepicker({
					prevText: '',
					nextText: '',
					altFormat: 'yy-mm-dd'
				});
			}
		});
	<?php echo '</script'; ?>
>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['simple_header']->value) {?>
	<div class="leadin">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_556754057659e3f39c1f786_14116473', "leadin");
?>

	</div>
<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2009661087659e3f39c208c5_19314809', "override_header");
?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAdminListBefore'),$_smarty_tpl ) );?>


<?php if ((isset($_smarty_tpl->tpl_vars['name_controller']->value))) {?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'hookName', 'hookName', null);?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
ListBefore<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl ) );?>

<?php } elseif ((isset($_GET['controller']))) {?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'hookName', 'hookName', null);?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
ListBefore<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl ) );?>

<?php }?>

<div class="alert alert-warning" id="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
-empty-filters-alert" style="display:none;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please fill at least one field to perform a search in this list.'),$_smarty_tpl ) );?>
</div>
<?php if ((isset($_smarty_tpl->tpl_vars['sql']->value)) && $_smarty_tpl->tpl_vars['sql']->value) {?>
	<form id="sql_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_id']->value, ENT_QUOTES, 'UTF-8', true);?>
" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminRequestSql'), ENT_QUOTES, 'UTF-8', true);?>
&amp;addrequest_sql" method="post" class="hide">
		<input type="hidden" id="sql_query_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_id']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="sql" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sql']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
		<input type="hidden" id="sql_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_id']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="name" value=""/>
	</form>
<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1473210299659e3f39c2fdf2_73194811', "startForm");
?>


<?php if (!$_smarty_tpl->tpl_vars['simple_header']->value) {?>
	<input type="hidden" id="submitFilter<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
" name="submitFilter<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
" value="0"/>
	<input type="hidden" name="page" value="<?php echo intval($_smarty_tpl->tpl_vars['page']->value);?>
"/>
	<input type="hidden" name="selected_pagination" value="<?php echo intval($_smarty_tpl->tpl_vars['selected_pagination']->value);?>
"/>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1368440011659e3f39c354c9_76331332', "override_form_extra");
?>

		<div class="panel col-lg-12">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_220862175659e3f39c36203_75179013', "panel_heading");
?>

		<?php if ($_smarty_tpl->tpl_vars['show_toolbar']->value) {?>
			<?php echo '<script'; ?>
 type="text/javascript">
				//<![CDATA[
				var submited = false;
				$(function() {
					//get reference on save link
					btn_save = $('i[class~="process-icon-save"]').parent();
					//get reference on form submit button
					btn_submit = $('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn');
					if (btn_save.length > 0 && btn_submit.length > 0) {
						//get reference on save and stay link
						btn_save_and_stay = $('i[class~="process-icon-save-and-stay"]').parent();
						//get reference on current save link label
						lbl_save = $('#desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save div');
						//override save link label with submit button value
						if (btn_submit.val().length > 0) {
							lbl_save.html(btn_submit.attr("value"));
						}
						if (btn_save_and_stay.length > 0) {
							//get reference on current save link label
							lbl_save_and_stay = $('#desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save-and-stay div');
							//override save and stay link label with submit button value
							if (btn_submit.val().length > 0 && lbl_save_and_stay && !lbl_save_and_stay.hasClass('locked')) {
								lbl_save_and_stay.html(btn_submit.val() + " <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'and stay'),$_smarty_tpl ) );?>
 ");
							}
						}
						//hide standard submit button
						btn_submit.hide();
						//bind enter key press to validate form
						$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').keypress(function (e) {
							if (e.which == 13 && e.target.localName != 'textarea') {
								$('#desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save').click();
							}
						});
						//submit the form
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_618921643659e3f39c5e2f5_13255083', 'formSubmit');
?>

					}
				});
				//]]>
			<?php echo '</script'; ?>
>
		<?php }
} elseif ($_smarty_tpl->tpl_vars['simple_header']->value) {?>
	<div class="panel col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><h3><?php if ((isset($_smarty_tpl->tpl_vars['icon']->value))) {?><i class="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"></i> <?php }
if (is_array($_smarty_tpl->tpl_vars['title']->value)) {
echo end($_smarty_tpl->tpl_vars['title']->value);
} else {
echo $_smarty_tpl->tpl_vars['title']->value;
}?></h3><?php }
}?>


	<?php if ($_smarty_tpl->tpl_vars['bulk_actions']->value && $_smarty_tpl->tpl_vars['has_bulk_actions']->value) {?>
		<?php $_smarty_tpl->_assignInScope('y', 2);?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('y', 1);?>
	<?php }?>
	<style>
	@media (max-width: 992px) {
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_display']->value, 'param', false, NULL, 'params', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['param']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['param']->value) {
$_smarty_tpl->tpl_vars['param']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_params']->value['index']++;
?>
			<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['displayed'])) && $_smarty_tpl->tpl_vars['params']->value['displayed'] === false) {
continue 1;
}?>
			.table-responsive-row td:nth-of-type(<?php echo smarty_function_math(array('equation'=>"x+y",'x'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_params']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_params']->value['index'] : null),'y'=>$_smarty_tpl->tpl_vars['y']->value),$_smarty_tpl);?>
):before {
				content: "<?php echo $_smarty_tpl->tpl_vars['param']->value['title'];?>
";
			}
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	}
	</style>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1236569941659e3f39c6f288_46090146', "preTable");
?>

	<div class="table-responsive-row clearfix<?php if ((isset($_smarty_tpl->tpl_vars['use_overflow']->value)) && $_smarty_tpl->tpl_vars['use_overflow']->value) {?> overflow-y<?php }?>">
		<table<?php if ($_smarty_tpl->tpl_vars['table_id']->value) {?> id="table-<?php echo $_smarty_tpl->tpl_vars['table_id']->value;?>
"<?php }?> class="table<?php if ($_smarty_tpl->tpl_vars['table_dnd']->value) {?> tableDnD<?php }?> <?php echo $_smarty_tpl->tpl_vars['table']->value;?>
" >
			<thead>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_943120808659e3f39c72803_07942904', "tableHeadings");
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138495573659e3f39c995f3_08863597', "tableFilter");
?>

			</thead>
<?php }
/* {block "leadin"} */
class Block_556754057659e3f39c1f786_14116473 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_556754057659e3f39c1f786_14116473',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "leadin"} */
/* {block "override_header"} */
class Block_2009661087659e3f39c208c5_19314809 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_2009661087659e3f39c208c5_19314809',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "override_header"} */
/* {block "startForm"} */
class Block_1473210299659e3f39c2fdf2_73194811 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'startForm' => 
  array (
    0 => 'Block_1473210299659e3f39c2fdf2_73194811',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="form-horizontal clearfix" id="form-<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
">
<?php
}
}
/* {/block "startForm"} */
/* {block "override_form_extra"} */
class Block_1368440011659e3f39c354c9_76331332 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_form_extra' => 
  array (
    0 => 'Block_1368440011659e3f39c354c9_76331332',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "override_form_extra"} */
/* {block "panel_heading_action"} */
class Block_529284653659e3f39c3b8b1_45568182 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<span class="panel-heading-action">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['toolbar_btn']->value, 'btn', false, 'k');
$_smarty_tpl->tpl_vars['btn']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->do_else = false;
?>
							<?php if ($_smarty_tpl->tpl_vars['k']->value != 'modules-list' && $_smarty_tpl->tpl_vars['k']->value != 'back') {?>
								<a id="desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['imgclass']))) {
echo $_smarty_tpl->tpl_vars['btn']->value['imgclass'];
} else {
echo $_smarty_tpl->tpl_vars['k']->value;
}?>" class="list-toolbar-btn<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['target'])) && $_smarty_tpl->tpl_vars['btn']->value['target']) {?> _blank<?php }?>"<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['href']))) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btn']->value['href'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['btn']->value['js'])) && $_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>>
									<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['btn']->value['desc']),$_smarty_tpl ) );?>
" data-html="true" data-placement="top">
										<i class="process-icon-<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['imgclass']))) {
echo $_smarty_tpl->tpl_vars['btn']->value['imgclass'];
} else {
echo $_smarty_tpl->tpl_vars['k']->value;
}
if ((isset($_smarty_tpl->tpl_vars['btn']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];
}?>"></i>
									</span>
								</a>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php if (count($_smarty_tpl->tpl_vars['fields_optional']->value)) {?>
								<a class="list-toolbar-btn dropdown-toggle" data-toggle="dropdown" data-target="#dropdown-option-toggle">
									<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Toggle list'),$_smarty_tpl ) );?>
" data-html="true" data-placement="top">
									<i class="process-icon-cogs"></i>
								</a>
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
								</ul>
							<?php }?>
							<?php echo '<script'; ?>
 type="text/javascript">
								$(document).ready(function(){
									updateListVisibility();
									$('#optional-list-toggle').on('click', function(e) {
										e.stopPropagation();
									})
									$('input[name="list_fields_visibility"]').on('change', function(){
										updateListVisibility();
									})
								});
								function updateListVisibility() {
									var list_fields_visibility = [];
									$('input[name="list_fields_visibility"]:checked').each(function(i, field){
										list_fields_visibility.push($(field).val());
									});
									const table = $('table.table.<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
');
									$(table).find('.field_optional').hide();
									$(table).find('.field_optional').each(function(i, val) {
										if (list_fields_visibility.includes($(this).data('key'))) {
											$(this).show();
										}
									});

									$.ajax({
										type: 'POST',
										headers: { "cache-control": "no-cache" },
										url: '<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
',
										data: {
											ajax: 1,
											action: 'updateListVisivility',
											list_fields_visibility: list_fields_visibility
										},
										cache: false,
										dataType: 'json',
										success: function(data) {

										}
									});
								}
							<?php echo '</script'; ?>
>
							<a class="list-toolbar-btn" href="javascript:location.reload();">
								<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh list'),$_smarty_tpl ) );?>
" data-html="true" data-placement="top">
									<i class="process-icon-refresh"></i>
								</span>
							</a>
						<?php if ((isset($_smarty_tpl->tpl_vars['sql']->value)) && $_smarty_tpl->tpl_vars['sql']->value) {?>
							<?php $_smarty_tpl->_assignInScope('sql_manager', Profile::getProfileAccess(Context::getContext()->employee->id_profile,Tab::getIdFromClassName('AdminRequestSql')));?>

							<?php if ($_smarty_tpl->tpl_vars['sql_manager']->value['view'] == 1) {?>
								<a class="list-toolbar-btn" href="javascript:void(0);" onclick="$('.leadin').first().append('<div class=\'alert alert-info\'>' + $('#sql_query_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_id']->value, ENT_QUOTES, 'UTF-8', true);?>
').val() + '</div>'); $(this).attr('onclick', '');">
									<span class="label-tooltip" data-toggle="tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show SQL query'),$_smarty_tpl ) );?>
" data-html="true" data-placement="top" >
										<i class="process-icon-terminal"></i>
									</span>
								</a>
								<a class="list-toolbar-btn" href="javascript:void(0);" onclick="$('#sql_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_id']->value, ENT_QUOTES, 'UTF-8', true);?>
').val(createSqlQueryName()); $('#sql_query_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_id']->value, ENT_QUOTES, 'UTF-8', true);?>
').val($('#sql_query_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_id']->value, ENT_QUOTES, 'UTF-8', true);?>
').val().replace(/\s+limit\s+[0-9,\s]+$/ig, '').trim()); $('#sql_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_id']->value, ENT_QUOTES, 'UTF-8', true);?>
').submit();">
									<span class="label-tooltip" data-toggle="tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export to SQL Manager'),$_smarty_tpl ) );?>
" data-html="true" data-placement="top" >
										<i class="process-icon-database"></i>
									</span>
								</a>
							<?php }?>
						<?php }?>
						</span>
					<?php
}
}
/* {/block "panel_heading_action"} */
/* {block "panel_heading"} */
class Block_220862175659e3f39c36203_75179013 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'panel_heading' => 
  array (
    0 => 'Block_220862175659e3f39c36203_75179013',
  ),
  'panel_heading_action' => 
  array (
    0 => 'Block_529284653659e3f39c3b8b1_45568182',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="panel-heading">
				<?php if ((isset($_smarty_tpl->tpl_vars['icon']->value))) {?><i class="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"></i> <?php }
if (is_array($_smarty_tpl->tpl_vars['title']->value)) {
echo end($_smarty_tpl->tpl_vars['title']->value);
} else {
echo $_smarty_tpl->tpl_vars['title']->value;
}?>
				<?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value)) && count($_smarty_tpl->tpl_vars['toolbar_btn']->value) > 0) {?>
					<span class="badge"><?php echo $_smarty_tpl->tpl_vars['list_total']->value;?>
</span>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_529284653659e3f39c3b8b1_45568182', "panel_heading_action", $this->tplIndex);
?>

				<?php }?>
			</div>
		<?php
}
}
/* {/block "panel_heading"} */
/* {block 'formSubmit'} */
class Block_618921643659e3f39c5e2f5_13255083 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formSubmit' => 
  array (
    0 => 'Block_618921643659e3f39c5e2f5_13255083',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							btn_save.click(function() {
								// Avoid double click
								if (submited) {
									return false;
								}
								submited = true;
								//add hidden input to emulate submit button click when posting the form -> field name posted
								btn_submit.before('<input type="hidden" name="'+btn_submit.attr("name")+'" value="1" />');
								$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit();
								return false;
							});
							if (btn_save_and_stay) {
								btn_save_and_stay.click(function() {
									//add hidden input to emulate submit button click when posting the form -> field name posted
									btn_submit.before('<input type="hidden" name="'+btn_submit.attr("name")+'AndStay" value="1" />');
									$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit();
									return false;
								});
							}
						<?php
}
}
/* {/block 'formSubmit'} */
/* {block "preTable"} */
class Block_1236569941659e3f39c6f288_46090146 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'preTable' => 
  array (
    0 => 'Block_1236569941659e3f39c6f288_46090146',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "preTable"} */
/* {block "tableHeadings"} */
class Block_943120808659e3f39c72803_07942904 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tableHeadings' => 
  array (
    0 => 'Block_943120808659e3f39c72803_07942904',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<tr class="nodrag nodrop">
					<?php if ($_smarty_tpl->tpl_vars['bulk_actions']->value && $_smarty_tpl->tpl_vars['has_bulk_actions']->value) {?>
						<th class="center fixed-width-xs"></th>
					<?php }?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_display']->value, 'params', false, 'key');
$_smarty_tpl->tpl_vars['params']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->do_else = false;
?>
					<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['displayed'])) && $_smarty_tpl->tpl_vars['params']->value['displayed'] === false) {
continue 1;
}?>
					<th class="<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['optional'])) && $_smarty_tpl->tpl_vars['params']->value['optional']) {?>field_optional<?php }
if ((isset($_smarty_tpl->tpl_vars['params']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['params']->value['class'];
}
if ((isset($_smarty_tpl->tpl_vars['params']->value['align']))) {?> <?php echo $_smarty_tpl->tpl_vars['params']->value['align'];
}?>" data-key="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
						<span class="title_box<?php if ((isset($_smarty_tpl->tpl_vars['order_by']->value)) && ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['order_by']->value)) {?> active<?php }?>">
							<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['hint']))) {?>
								<span class="label-tooltip" data-toggle="tooltip"
									title="
										<?php if (is_array($_smarty_tpl->tpl_vars['params']->value['hint'])) {?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['hint'], 'hint');
$_smarty_tpl->tpl_vars['hint']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hint']->value) {
$_smarty_tpl->tpl_vars['hint']->do_else = false;
?>
												<?php if (is_array($_smarty_tpl->tpl_vars['hint']->value)) {?>
													<?php echo $_smarty_tpl->tpl_vars['hint']->value['text'];?>

												<?php } else { ?>
													<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>

												<?php }?>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php } else { ?>
											<?php echo $_smarty_tpl->tpl_vars['params']->value['hint'];?>

										<?php }?>
									">
									<?php echo $_smarty_tpl->tpl_vars['params']->value['title'];?>

								</span>
							<?php } else { ?>
								<?php echo $_smarty_tpl->tpl_vars['params']->value['title'];?>

							<?php }?>
							<?php if ((!(isset($_smarty_tpl->tpl_vars['params']->value['orderby'])) || $_smarty_tpl->tpl_vars['params']->value['orderby']) && !$_smarty_tpl->tpl_vars['simple_header']->value && $_smarty_tpl->tpl_vars['show_filters']->value) {?>
								<a <?php if ((isset($_smarty_tpl->tpl_vars['order_by']->value)) && ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['order_by']->value) && ($_smarty_tpl->tpl_vars['order_way']->value == 'DESC')) {?>class="active"<?php }?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Orderby=<?php echo urlencode($_smarty_tpl->tpl_vars['key']->value);?>
&amp;<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Orderway=desc&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);
if ((isset($_GET[$_smarty_tpl->tpl_vars['identifier']->value]))) {?>&amp;<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
=<?php echo intval($_GET[$_smarty_tpl->tpl_vars['identifier']->value]);
}?>">
									<i class="icon-caret-down"></i>
								</a>
								<a <?php if ((isset($_smarty_tpl->tpl_vars['order_by']->value)) && ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['order_by']->value) && ($_smarty_tpl->tpl_vars['order_way']->value == 'ASC')) {?>class="active"<?php }?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Orderby=<?php echo urlencode($_smarty_tpl->tpl_vars['key']->value);?>
&amp;<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Orderway=asc&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);
if ((isset($_GET[$_smarty_tpl->tpl_vars['identifier']->value]))) {?>&amp;<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
=<?php echo intval($_GET[$_smarty_tpl->tpl_vars['identifier']->value]);
}?>">
									<i class="icon-caret-up"></i>
								</a>
							<?php }?>
						</span>
					</th>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php if ($_smarty_tpl->tpl_vars['shop_link_type']->value) {?>
						<th>
							<span class="title_box">
							<?php if ($_smarty_tpl->tpl_vars['shop_link_type']->value == 'shop') {?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop'),$_smarty_tpl ) );?>

							<?php } else { ?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop group'),$_smarty_tpl ) );?>

							<?php }?>
							</span>
						</th>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['has_actions']->value || $_smarty_tpl->tpl_vars['show_filters']->value) {?>
						<th><?php if (!$_smarty_tpl->tpl_vars['simple_header']->value) {
}?></th>
					<?php }?>
				</tr>
			<?php
}
}
/* {/block "tableHeadings"} */
/* {block "tableFilter"} */
class Block_138495573659e3f39c995f3_08863597 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tableFilter' => 
  array (
    0 => 'Block_138495573659e3f39c995f3_08863597',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php if (!$_smarty_tpl->tpl_vars['simple_header']->value && $_smarty_tpl->tpl_vars['show_filters']->value) {?>
					<tr class="nodrag nodrop filter <?php if ($_smarty_tpl->tpl_vars['row_hover']->value) {?>row_hover<?php }?>">
						<?php if ($_smarty_tpl->tpl_vars['has_bulk_actions']->value) {?>
							<th class="text-center">
								--
							</th>
						<?php }?>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_display']->value, 'params', false, 'key');
$_smarty_tpl->tpl_vars['params']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->do_else = false;
?>
							<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['displayed'])) && $_smarty_tpl->tpl_vars['params']->value['displayed'] === false) {
continue 1;
}?>
							<th class="<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['optional'])) && $_smarty_tpl->tpl_vars['params']->value['optional']) {?>field_optional<?php }
if ((isset($_smarty_tpl->tpl_vars['params']->value['align']))) {?> <?php echo $_smarty_tpl->tpl_vars['params']->value['align'];
}?>" data-key="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
								<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['search'])) && !$_smarty_tpl->tpl_vars['params']->value['search']) {?>
									--
								<?php } else { ?>
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
										<select class="filter fixed-width-sm center" name="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
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
										<div class="date_range row">
											<div class="input-group fixed-width-md center">
												<input type="text" class="filter datepicker date-input form-control" id="local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_0" name="local_<?php echo $_smarty_tpl->tpl_vars['params']->value['name_date'];?>
[0]"  placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From'),$_smarty_tpl ) );?>
" />
												<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_0" name="<?php echo $_smarty_tpl->tpl_vars['params']->value['name_date'];?>
[0]" value="<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['value'][0]))) {
echo $_smarty_tpl->tpl_vars['params']->value['value'][0];
}?>">
												<span class="input-group-addon">
													<i class="icon-calendar"></i>
												</span>
											</div>
											<div class="input-group fixed-width-md center">
												<input type="text" class="filter datepicker date-input form-control" id="local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_1" name="local_<?php echo $_smarty_tpl->tpl_vars['params']->value['name_date'];?>
[1]"  placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To'),$_smarty_tpl ) );?>
" />
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
											<select class="filter<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['align'])) && $_smarty_tpl->tpl_vars['params']->value['align'] == 'center') {?>center<?php }?>" onchange="$('#submitFilterButton<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
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
								<?php }?>
							</th>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						<?php if ($_smarty_tpl->tpl_vars['shop_link_type']->value) {?>
							<th>--</th>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['has_actions']->value || $_smarty_tpl->tpl_vars['show_filters']->value) {?>
							<th class="actions">
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
							</th>
						<?php }?>
					</tr>
				<?php }?>
			<?php
}
}
/* {/block "tableFilter"} */
}
