<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:47
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\referrers\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f37abd108_95161415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2432dcffc0a0b9f5f899e31be9498e7d0bde83b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\referrers\\helpers\\list\\list_header.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f37abd108_95161415 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_939888498659e3f37aba504_61883781', "override_header");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block "override_header"} */
class Block_939888498659e3f37aba504_61883781 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_939888498659e3f37aba504_61883781',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(function() {
			var btn_save_calendar = $('span[class~="process-icon-save-calendar"]').parent();
			var btn_submit_calendar = $('#submitDatePicker');

			if (btn_save_calendar.length > 0 && btn_submit_calendar.length > 0)
			{
				btn_submit_calendar.hide();
				btn_save_calendar.click(function() {
					btn_submit_calendar.before('<input type="hidden" name="'+btn_submit_calendar.attr("name")+'" value="1" />');
					$('#calendar_form').submit();
				});
			}
			
			var btn_save_settings = $('span[class~="process-icon-save-settings"]').parent();
			var btn_submit_settings = $('#submitSettings');

			if (btn_save_settings.length > 0 && btn_submit_settings.length > 0)
			{
				btn_submit_settings.hide();
				btn_save_settings.click(function() {
					btn_submit_settings.before('<input type="hidden" name="'+btn_submit_settings.attr("name")+'" value="1" />');
					$('#settings_form').submit();
				});
			}
			
			var btn_save_refresh_index = $('span[class~="process-icon-refresh-index"]').parent();
			var btn_submit_refresh_index = $('#submitRefreshIndex');

			if (btn_save_refresh_index.length > 0 && btn_submit_refresh_index.length > 0)
			{
				btn_submit_refresh_index.hide();
				btn_save_refresh_index.click(function() {
					btn_submit_refresh_index.before('<input type="hidden" name="'+btn_submit_refresh_index.attr("name")+'" value="1" />');
					$('#refresh_index_form').submit();
				});
			}
			
			var btn_save_refresh_cache = $('span[class~="process-icon-refresh-cache"]').parent();
			var btn_submit_refresh_cache = $('#submitRefreshCache');

			if (btn_save_refresh_cache.length > 0 && btn_submit_refresh_cache.length > 0)
			{
				btn_submit_refresh_cache.hide();
				btn_save_refresh_cache.click(function() {
					btn_submit_refresh_cache.before('<input type="hidden" name="'+btn_submit_refresh_cache.attr("name")+'" value="1" />');
					$('#refresh_cache_form').submit();
				});
			}
		});
	<?php echo '</script'; ?>
>
	<?php if ($_smarty_tpl->tpl_vars['enable_calendar']->value) {?>
		<?php echo $_smarty_tpl->tpl_vars['calendar_form']->value;?>

		<?php echo $_smarty_tpl->tpl_vars['settings_form']->value;?>

	<?php }
}
}
/* {/block "override_header"} */
}
