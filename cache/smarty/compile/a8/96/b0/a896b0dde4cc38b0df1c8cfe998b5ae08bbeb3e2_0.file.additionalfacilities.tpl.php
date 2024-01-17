<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:46
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\products\additionalfacilities.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f36bd4834_36235615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a896b0dde4cc38b0df1c8cfe998b5ae08bbeb3e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\products\\additionalfacilities.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f36bd4834_36235615 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php if ((isset($_smarty_tpl->tpl_vars['product']->value->id)) && $_smarty_tpl->tpl_vars['product']->value->id) {?>
    <input type="hidden" name="submitted_tabs[]" value="AdditionalFacilities" />
    <div class="panel">
        <div class="panel-heading">
            <i class="icon-user"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Type Additional Facilities'),$_smarty_tpl ) );?>

        </div>
        <div class="alert alert-info">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To create new Additional facilities'),$_smarty_tpl ) );?>
 <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminRoomTypeGlobalDemand');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'click here.'),$_smarty_tpl ) );?>
</a>
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['allDemands']->value)) && $_smarty_tpl->tpl_vars['allDemands']->value) {?>

            <div class="from-group table-responsive-row clearfix">
                <table class="table" id="demands_table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name'),$_smarty_tpl ) );?>

                            </th>
                            <th>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Option'),$_smarty_tpl ) );?>

                            </th>
                            <th class="fixed-width-xl">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price'),$_smarty_tpl ) );?>

                            </th>
                            <th>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax rate'),$_smarty_tpl ) );?>

                            </th>
                            <th class="fixed-width-lg text-center">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Per day price calculation'),$_smarty_tpl ) );?>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allDemands']->value, 'demand', false, 'key');
$_smarty_tpl->tpl_vars['demand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['demand']->value) {
$_smarty_tpl->tpl_vars['demand']->do_else = false;
?>
                            <?php $_smarty_tpl->_assignInScope('rowcount', 0);?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['demand']->value['adv_option'])) && $_smarty_tpl->tpl_vars['demand']->value['adv_option']) {?>
                                <?php $_smarty_tpl->_assignInScope('rowspan', count($_smarty_tpl->tpl_vars['demand']->value['adv_option']));?>
                                <?php $_smarty_tpl->_assignInScope('adv_option', $_smarty_tpl->tpl_vars['demand']->value['adv_option']);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('rowspan', 1);?>
                                <?php $_smarty_tpl->_assignInScope('adv_option', array());?>
                            <?php }?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adv_option']->value, 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                    <?php $_smarty_tpl->_assignInScope('rowcount', $_smarty_tpl->tpl_vars['rowcount']->value+1);?>
                                    <tr>
                                        <?php if ($_smarty_tpl->tpl_vars['rowcount']->value <= 1) {?>
                                            <td rowspan="<?php echo $_smarty_tpl->tpl_vars['rowspan']->value;?>
">
                                                <input class="selected_demand" type="checkbox" name="selected_demand[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['id_global_demand'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['selectedDemands']->value[$_smarty_tpl->tpl_vars['demand']->value['id_global_demand']]))) {?>checked<?php }?> />
                                                <input type="hidden" name="demand_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['id_global_demand'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['selectedDemands']->value[$_smarty_tpl->tpl_vars['demand']->value['id_global_demand']]['price']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['selectedDemands']->value[$_smarty_tpl->tpl_vars['demand']->value['id_global_demand']]['price'], ENT_QUOTES, 'UTF-8', true);
} elseif ((isset($_smarty_tpl->tpl_vars['demand']->value['price']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['price'], ENT_QUOTES, 'UTF-8', true);
}?>"/>
                                            </td>
                                            <td rowspan="<?php echo $_smarty_tpl->tpl_vars['rowspan']->value;?>
">
                                                <a target="blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminRoomTypeGlobalDemand'), ENT_QUOTES, 'UTF-8', true);?>
&amp;id_global_demand=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['id_global_demand'], ENT_QUOTES, 'UTF-8', true);?>
&amp;updatehtl_room_type_global_demand"><i class="icon-external-link-sign"></i></a> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                            </td>
                                        <?php }?>
                                        <td>
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                        </td>
                                        <td class="demand_price_<?php echo $_smarty_tpl->tpl_vars['demand']->value['id_global_demand'];?>
">
                                            <div class="input-group price_input" <?php if (!(isset($_smarty_tpl->tpl_vars['selectedDemands']->value[$_smarty_tpl->tpl_vars['demand']->value['id_global_demand']]))) {?>style="display:none"<?php }?>>
                                                <span class="input-group-addon"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['defaultcurrencySign']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                <input type="text" name="option_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['selectedDemands']->value[$_smarty_tpl->tpl_vars['demand']->value['id_global_demand']]['adv_option'][$_smarty_tpl->tpl_vars['option']->value['id']]['price']))) {
echo htmlspecialchars(Tools::ps_round($_smarty_tpl->tpl_vars['selectedDemands']->value[$_smarty_tpl->tpl_vars['demand']->value['id_global_demand']]['adv_option'][$_smarty_tpl->tpl_vars['option']->value['id']]['price'],2), ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars(Tools::ps_round($_smarty_tpl->tpl_vars['option']->value['price'],2), ENT_QUOTES, 'UTF-8', true);
}?>"/>
                                            </div>
                                            <div class="price_display" <?php if ((isset($_smarty_tpl->tpl_vars['selectedDemands']->value[$_smarty_tpl->tpl_vars['demand']->value['id_global_demand']]))) {?>style="display:none"<?php }?>>
                                                <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['price'], ENT_QUOTES, 'UTF-8', true);
$_prefixVariable20 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_prefixVariable20,'currency'=>$_smarty_tpl->tpl_vars['idDefaultcurrency']->value),$_smarty_tpl ) );?>

                                            </div>

                                        </td>
                                        <?php if ($_smarty_tpl->tpl_vars['rowcount']->value == 1) {?>
                                            <td rowspan="<?php echo $_smarty_tpl->tpl_vars['rowspan']->value;?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['demand']->value['default_tax_rules_group_name'];?>

                                            </td>
                                            <td class="text-center" rowspan="<?php echo $_smarty_tpl->tpl_vars['rowspan']->value;?>
">
                                                <?php if ($_smarty_tpl->tpl_vars['demand']->value['price_calc_method'] == 1) {?>
                                                    <span class="badge badge-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );?>
</span>
                                                <?php } else { ?>
                                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );?>
</span>
                                                <?php }?>
                                            </td>
                                        <?php }?>
                                    </tr>
                                <?php
}
if ($_smarty_tpl->tpl_vars['option']->do_else) {
?>
                                    <tr>
                                        <td>
                                            <input class="selected_demand" type="checkbox" name="selected_demand[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['id_global_demand'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['selectedDemands']->value[$_smarty_tpl->tpl_vars['demand']->value['id_global_demand']]))) {?>checked<?php }?> />
                                        </td>
                                        <td>
                                            <a target="blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminRoomTypeGlobalDemand'), ENT_QUOTES, 'UTF-8', true);?>
&amp;id_global_demand=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['id_global_demand'], ENT_QUOTES, 'UTF-8', true);?>
&amp;updatehtl_room_type_global_demand"><i class="icon-external-link-sign"></i></a> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                        </td>

                                        <td></td>
                                        <td class="demand_price_<?php echo $_smarty_tpl->tpl_vars['demand']->value['id_global_demand'];?>
">
                                            <div class="input-group price_input" <?php if (!(isset($_smarty_tpl->tpl_vars['selectedDemands']->value[$_smarty_tpl->tpl_vars['demand']->value['id_global_demand']]))) {?>style="display:none"<?php }?>>
                                                <span class="input-group-addon"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['defaultcurrencySign']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                <input type="text" name="demand_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['id_global_demand'], ENT_QUOTES, 'UTF-8', true);?>
"
                                                value="<?php if ((isset($_smarty_tpl->tpl_vars['selectedDemands']->value[$_smarty_tpl->tpl_vars['demand']->value['id_global_demand']]['price']))) {
echo htmlspecialchars(Tools::ps_round($_smarty_tpl->tpl_vars['selectedDemands']->value[$_smarty_tpl->tpl_vars['demand']->value['id_global_demand']]['price'],2), ENT_QUOTES, 'UTF-8', true);
} elseif ((isset($_smarty_tpl->tpl_vars['demand']->value['price']))) {
echo htmlspecialchars(Tools::ps_round($_smarty_tpl->tpl_vars['demand']->value['price'],2), ENT_QUOTES, 'UTF-8', true);
}?>"/>
                                            </div>
                                            <div class="price_display" <?php if ((isset($_smarty_tpl->tpl_vars['selectedDemands']->value[$_smarty_tpl->tpl_vars['demand']->value['id_global_demand']]))) {?>style="display:none"<?php }?>>
                                                <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['price'], ENT_QUOTES, 'UTF-8', true);
$_prefixVariable21 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_prefixVariable21,'currency'=>$_smarty_tpl->tpl_vars['idDefaultcurrency']->value),$_smarty_tpl ) );?>

                                            </div>
                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['demand']->value['default_tax_rules_group_name'];?>

                                        </td>
                                        <td class="text-center">
                                            <?php if ($_smarty_tpl->tpl_vars['demand']->value['price_calc_method'] == 1) {?>
                                                <span class="badge badge-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );?>
</span>
                                            <?php } else { ?>
                                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );?>
</span>
                                            <?php }?>
                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
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
        <?php } else { ?>
            <div class="alert alert-warning">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No additional facilities created yet. To create please visit'),$_smarty_tpl ) );?>
 <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminRoomTypeGlobalDemand');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional facilities'),$_smarty_tpl ) );?>
</a> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'page'),$_smarty_tpl ) );?>
.
            </div>
        <?php }?>
    </div>
<?php }
}
}
