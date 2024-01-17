<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:44
  from 'C:\xampp\htdocs\cslhotel\cslhotel\themes\hotel-reservation-theme\modules\referralprogram\views\templates\hook\authentication.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f348c13f7_93701899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2328eb94d9f060d2023ef355dee75cec715e3b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\themes\\hotel-reservation-theme\\modules\\referralprogram\\views\\templates\\hook\\authentication.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f348c13f7_93701899 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- MODULE ReferralProgram -->
<fieldset class="account_creation">
	<h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</h3>
	<p class="form-group">
		<label for="referralprogram"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'E-mail address of your sponsor','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</label>
		<input class="form-control" type="text" size="52" maxlength="128" id="referralprogram" name="referralprogram" value="<?php if ((isset($_POST['referralprogram']))) {
echo htmlspecialchars($_POST['referralprogram'], ENT_QUOTES, 'UTF-8', true);
}?>" />
	</p>
</fieldset>
<!-- END : MODULE ReferralProgram --><?php }
}
