<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:46
  from 'C:\xampp\htdocs\cslhotel\cslhotel\themes\hotel-reservation-theme\_partials\occupancy_field.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f36672d03_81745755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '363a626320afb3478c4ebfec4303bd5d69c91e7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\themes\\hotel-reservation-theme\\_partials\\occupancy_field.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f36672d03_81745755 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group dropdown">
    <button class="form-control booking_guest_occupancy input-occupancy<?php if ((isset($_smarty_tpl->tpl_vars['error']->value)) && $_smarty_tpl->tpl_vars['error']->value == 1) {?> error_border<?php }?>" type="button">
        <span class="">
            <?php if ((isset($_smarty_tpl->tpl_vars['occupancies']->value)) && $_smarty_tpl->tpl_vars['occupancies']->value) {?>
                <?php if (((isset($_smarty_tpl->tpl_vars['occupancy_adults']->value)) && $_smarty_tpl->tpl_vars['occupancy_adults']->value)) {
echo $_smarty_tpl->tpl_vars['occupancy_adults']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['occupancy_adults']->value > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adult'),$_smarty_tpl ) );
}?>, <?php if ((isset($_smarty_tpl->tpl_vars['occupancy_children']->value)) && $_smarty_tpl->tpl_vars['occupancy_children']->value) {
echo $_smarty_tpl->tpl_vars['occupancy_children']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['occupancy_children']->value > 1) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}?>, <?php }
echo count($_smarty_tpl->tpl_vars['occupancies']->value);?>
 <?php if (count($_smarty_tpl->tpl_vars['occupancies']->value) > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room'),$_smarty_tpl ) );
}
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 Adult, 1 Room'),$_smarty_tpl ) );
}?>
            <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Occupancy'),$_smarty_tpl ) );?>

            <?php }?>
        </span>
    </button>

    <div class="dropdown-menu booking_occupancy_wrapper">
        <input type="hidden" class="max_avail_type_qty" value="<?php if ((isset($_smarty_tpl->tpl_vars['total_available_rooms']->value))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['total_available_rooms']->value, ENT_QUOTES, 'UTF-8', true);
}?>">
        <input type="hidden" class="max_adults" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['room_type_info']->value['max_adults'], ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" class="max_children" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['room_type_info']->value['max_children'], ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" class="max_guests" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['room_type_info']->value['max_guests'], ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" class="base_adult" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['room_type_info']->value['adults'], ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" class="base_children" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['room_type_info']->value['children'], ENT_QUOTES, 'UTF-8', true);?>
">
        <div class="booking_occupancy_inner">
            <?php if ((isset($_smarty_tpl->tpl_vars['occupancies']->value)) && $_smarty_tpl->tpl_vars['occupancies']->value) {?>
                <?php $_smarty_tpl->_assignInScope('countRoom', 1);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['occupancies']->value, 'occupancy', false, 'key', 'occupancyInfo', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['occupancy']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['occupancy']->value) {
$_smarty_tpl->tpl_vars['occupancy']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_occupancyInfo']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_occupancyInfo']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_occupancyInfo']->value['index'];
?>
                    <div class="occupancy_info_block selected" occ_block_index="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                        <div class="occupancy_info_head"><span class="room_num_wrapper"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room'),$_smarty_tpl ) );?>
 - <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['countRoom']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 </span><?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_occupancyInfo']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_occupancyInfo']->value['first'] : null)) {?><a class="remove-room-link pull-right" href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove'),$_smarty_tpl ) );?>
</a><?php }?></div>
                        <div class="row">
                            <div class="form-group col-sm-5 col-xs-6 occupancy_count_block">
                                <div class="row">
                                    <label class="col-sm-12"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );?>
</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="num_occupancy num_adults room_occupancies" name="occupancy[<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
][adults]" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['occupancy']->value['adults'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                                        <div class="occupancy_count pull-left">
                                            <span><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['occupancy']->value['adults'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
                                        </div>
                                        <div class="qty_direction pull-left">
                                            <a href="#" data-field-qty="qty" class="btn btn-default occupancy_quantity_up">
                                                <span><i class="icon-plus"></i></span>
                                            </a>
                                            <a href="#" data-field-qty="qty" class="btn btn-default occupancy_quantity_down">
                                                <span><i class="icon-minus"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-sm-7 col-xs-6 occupancy_count_block">
                                <div class="row">
                                    <label class="col-sm-12 clearfix"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );?>
</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" class="num_occupancy num_children room_occupancies" name="occupancy[<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
][children]" max="{}" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['occupancy']->value['children'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                                        <div class="occupancy_count pull-left">
                                            <span><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['occupancy']->value['children'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
                                        </div>
                                        <div class="qty_direction pull-left">
                                            <a href="#" data-field-qty="qty" class="btn btn-default occupancy_quantity_up">
                                                <span><i class="icon-plus"></i></span>
                                            </a>
                                            <a href="#" data-field-qty="qty" class="btn btn-default occupancy_quantity_down">
                                                <span><i class="icon-minus"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <span class="label-desc-txt">(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Below'),$_smarty_tpl ) );?>
  <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['max_child_age']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'years'),$_smarty_tpl ) );?>
)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row children_age_info_block" <?php if ((isset($_smarty_tpl->tpl_vars['occupancy']->value['child_ages'])) && $_smarty_tpl->tpl_vars['occupancy']->value['child_ages']) {?>style="display:block;"<?php }?>>
                            <label class="col-sm-12"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Children'),$_smarty_tpl ) );?>
</label>
                            <div class="col-sm-12">
                                <div class="children_ages">
                                    <?php if ((isset($_smarty_tpl->tpl_vars['occupancy']->value['child_ages'])) && $_smarty_tpl->tpl_vars['occupancy']->value['child_ages']) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['occupancy']->value['child_ages'], 'childAge');
$_smarty_tpl->tpl_vars['childAge']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['childAge']->value) {
$_smarty_tpl->tpl_vars['childAge']->do_else = false;
?>
                                            <div>
                                                <select class="guest_child_age room_occupancies" name="occupancy[<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
][child_ages][]">
                                                    <option value="-1" <?php if ($_smarty_tpl->tpl_vars['childAge']->value == -1) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select 1'),$_smarty_tpl ) );?>
</option>
                                                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['childAge']->value == 0) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Under 1'),$_smarty_tpl ) );?>
</option>
                                                    <?php
$_smarty_tpl->tpl_vars['age'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['age']->step = 1;$_smarty_tpl->tpl_vars['age']->total = (int) ceil(($_smarty_tpl->tpl_vars['age']->step > 0 ? ($_smarty_tpl->tpl_vars['max_child_age']->value-1)+1 - (1) : 1-(($_smarty_tpl->tpl_vars['max_child_age']->value-1))+1)/abs($_smarty_tpl->tpl_vars['age']->step));
if ($_smarty_tpl->tpl_vars['age']->total > 0) {
for ($_smarty_tpl->tpl_vars['age']->value = 1, $_smarty_tpl->tpl_vars['age']->iteration = 1;$_smarty_tpl->tpl_vars['age']->iteration <= $_smarty_tpl->tpl_vars['age']->total;$_smarty_tpl->tpl_vars['age']->value += $_smarty_tpl->tpl_vars['age']->step, $_smarty_tpl->tpl_vars['age']->iteration++) {
$_smarty_tpl->tpl_vars['age']->first = $_smarty_tpl->tpl_vars['age']->iteration === 1;$_smarty_tpl->tpl_vars['age']->last = $_smarty_tpl->tpl_vars['age']->iteration === $_smarty_tpl->tpl_vars['age']->total;?>
                                                        <option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['age']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['childAge']->value == $_smarty_tpl->tpl_vars['age']->value) {?>selected<?php }?>><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['age']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
                                                    <?php }
}
?>
                                                </select>
                                            </div>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <hr class="occupancy-info-separator">
                    </div>
                    <?php $_smarty_tpl->_assignInScope('countRoom', $_smarty_tpl->tpl_vars['countRoom']->value+1);?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <div class="occupancy_info_block" occ_block_index="0">
                    <div class="occupancy_info_head"><span class="room_num_wrapper"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room - 1'),$_smarty_tpl ) );?>
</span></div>
                    <div class="row">
                        <div class="form-group col-sm-5 col-xs-6 occupancy_count_block">
                            <div class="row">
                                <label class="col-sm-12"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );?>
</label>
                                <div class="col-sm-12">
                                    <input type="hidden" class="num_occupancy num_adults" name="num_adults[]" value="<?php echo $_smarty_tpl->tpl_vars['room_type_info']->value['adults'];?>
">
                                    <div class="occupancy_count pull-left">
                                        <span><?php echo $_smarty_tpl->tpl_vars['room_type_info']->value['adults'];?>
</span>
                                    </div>
                                    <div class="qty_direction pull-left">
                                        <a href="#" data-field-qty="qty" class="btn btn-default occupancy_quantity_up">
                                            <span>
                                                <i class="icon-plus"></i>
                                            </span>
                                        </a>
                                        <a href="#" data-field-qty="qty" class="btn btn-default occupancy_quantity_down">
                                            <span>
                                                <i class="icon-minus"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-7 col-xs-6 occupancy_count_block">
                            <div class="row">
                                <label class="col-sm-12"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );?>
</label>
                                <div class="col-sm-12 clearfix">
                                    <input type="hidden" class="num_occupancy num_children" name="num_children[]" value="0">
                                    <div class="occupancy_count pull-left">
                                        <span>0</span>
                                    </div>
                                    <div class="qty_direction pull-left">
                                        <a href="#" data-field-qty="qty" class="btn btn-default occupancy_quantity_up">
                                            <span>
                                                <i class="icon-plus"></i>
                                            </span>
                                        </a>
                                        <a href="#" data-field-qty="qty" class="btn btn-default occupancy_quantity_down">
                                            <span>
                                                <i class="icon-minus"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <span class="label-desc-txt">(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Below'),$_smarty_tpl ) );?>
  <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['max_child_age']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'years'),$_smarty_tpl ) );?>
)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row children_age_info_block">
                        <label class="col-sm-12"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Children'),$_smarty_tpl ) );?>
</label>
                        <div class="col-sm-12">
                            <div class="children_ages">
                            </div>
                        </div>
                    </div>
                    <hr class="occupancy-info-separator">
                </div>
            <?php }?>
        </div>
        <div class="add_occupancy_block">
            <a class="add_new_occupancy_btn" href="#"><i class="icon-plus"></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Room'),$_smarty_tpl ) );?>
</span></a>
        </div>
    </div>
</div><?php }
}
