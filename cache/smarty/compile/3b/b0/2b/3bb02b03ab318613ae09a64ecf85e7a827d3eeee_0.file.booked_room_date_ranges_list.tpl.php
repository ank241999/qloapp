<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:46
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\products\booked_room_date_ranges_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f36c63699_22823241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bb02b03ab318613ae09a64ecf85e7a827d3eeee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\products\\booked_room_date_ranges_list.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f36c63699_22823241 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This room already has bookings for highlighted date range(s):'),$_smarty_tpl ) );?>


<table width="70%">
    <tr>
        <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order ID'),$_smarty_tpl ) );?>
</th>
        <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date From'),$_smarty_tpl ) );?>
</th>
        <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date To'),$_smarty_tpl ) );?>
</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['booked_rows_list']->value, 'booked_row');
$_smarty_tpl->tpl_vars['booked_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['booked_row']->value) {
$_smarty_tpl->tpl_vars['booked_row']->do_else = false;
?>
        <tr>
            <td class="text-center">
                <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders');?>
&id_order=<?php echo $_smarty_tpl->tpl_vars['booked_row']->value->id_order;?>
&vieworder" target="_blank"><strong>#<?php echo intval($_smarty_tpl->tpl_vars['booked_row']->value->id_order);?>
</strong></a>
            </td>
            <td class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['booked_row']->value->date_from),$_smarty_tpl ) );?>
</td>
            <td class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['booked_row']->value->date_to),$_smarty_tpl ) );?>
</td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php }
}
