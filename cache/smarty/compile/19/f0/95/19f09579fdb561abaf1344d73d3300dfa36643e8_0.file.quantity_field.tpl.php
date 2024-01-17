<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:46
  from 'C:\xampp\htdocs\cslhotel\cslhotel\themes\hotel-reservation-theme\_partials\quantity_field.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f366d09d0_14281175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19f09579fdb561abaf1344d73d3300dfa36643e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\themes\\hotel-reservation-theme\\_partials\\quantity_field.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f366d09d0_14281175 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="rm_qty_cont form-group clearfix">
    <input type="hidden" class="text-center form-control quantity_wanted" min="1" name="qty" value="<?php if ((isset($_smarty_tpl->tpl_vars['quantity']->value)) && $_smarty_tpl->tpl_vars['quantity']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity']->value, ENT_QUOTES, 'UTF-8', true);
} else { ?>1<?php }?>">
    <input type="hidden" class="max_avail_type_qty" value="<?php if ((isset($_smarty_tpl->tpl_vars['total_available_rooms']->value))) {?>	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total_available_rooms']->value, ENT_QUOTES, 'UTF-8', true);
}?>">
    <div class="qty_count pull-left">
        <span><?php if ((isset($_smarty_tpl->tpl_vars['quantity']->value)) && $_smarty_tpl->tpl_vars['quantity']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity']->value, ENT_QUOTES, 'UTF-8', true);
} else { ?>1<?php }?></span>
    </div>
    <div class="qty_direction pull-left">
        <a href="#" data-field-qty="qty" class="btn btn-default quantity_up rm_quantity_up">
            <span><i class="icon-plus"></i></span>
        </a>
        <a href="#" data-field-qty="qty" class="btn btn-default quantity_down rm_quantity_down">
            <span><i class="icon-minus"></i></span>
        </a>
    </div>
</div><?php }
}
