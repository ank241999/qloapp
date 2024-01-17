<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:46
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\orders\_room_extra_services_modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f3681e233_49417934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e3d1b0d37d469f17e55b3391e74540f0f786199' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\orders\\_room_extra_services_modal.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/orders/_room_facilities_block.tpl' => 1,
    'file:controllers/orders/_room_services_block.tpl' => 1,
  ),
),false)) {
function content_659e3f3681e233_49417934 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#room_type_demands_desc" aria-controls="facilities" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facilities'),$_smarty_tpl ) );?>
</a></li>
		<li role="presentation"><a href="#room_type_service_product_desc" aria-controls="services" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Services'),$_smarty_tpl ) );?>
</a></li>
	</ul>
</div>
<div class="modal-body" id="rooms_extra_demands">
	<div class="tab-content clearfix">
		<?php $_smarty_tpl->_subTemplateRender('file:controllers/orders/_room_facilities_block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender('file:controllers/orders/_room_services_block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
</div>

<style type="text/css">
	/*Extra demands CSS*/
	#room_extra_demand_content .modal-header {
		padding-bottom: 0px;}
	#rooms_type_extra_demands .modal-title {
		margin: 0px;}
	#rooms_extra_demands .demand_header {
		padding: 10px;
		color: #333;
    	border-bottom: 1px solid #ddd;}
	#rooms_extra_demands .room_demand_block {
		margin-bottom: 15px;
		color: #333;
		font-size: 14px;}
	#rooms_extra_demands .facility_nav_btn {
		margin-bottom: 20px;}
	#rooms_extra_demands .room_demands_container, #rooms_extra_demands .room_services_container {
		display: none;}
	#room_extra_demand_content #save_room_demands, #room_extra_demand_content #back_to_demands_btn, #room_extra_demand_content #save_service_service, #room_extra_demand_content #back_to_service_btn {
		display: none;}
</style>

<?php }
}
