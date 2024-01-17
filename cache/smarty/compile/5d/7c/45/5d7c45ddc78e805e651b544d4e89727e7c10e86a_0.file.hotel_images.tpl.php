<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:46
  from 'C:\xampp\htdocs\cslhotel\cslhotel\themes\hotel-reservation-theme\_partials\hotel_images.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f36602556_91977010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d7c45ddc78e805e651b544d4e89727e7c10e86a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\themes\\hotel-reservation-theme\\_partials\\hotel_images.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f36602556_91977010 (Smarty_Internal_Template $_smarty_tpl) {
if (is_array($_smarty_tpl->tpl_vars['hotel_images']->value) && count($_smarty_tpl->tpl_vars['hotel_images']->value)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotel_images']->value, 'hotel_image');
$_smarty_tpl->tpl_vars['hotel_image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hotel_image']->value) {
$_smarty_tpl->tpl_vars['hotel_image']->do_else = false;
?>
        <div class="col-sm-4 image-item">
            <a class="hotel-images-fancybox" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hotel_image']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                <img class="img img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hotel_image']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
            </a>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
