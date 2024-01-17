<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:43
  from 'C:\xampp\htdocs\cslhotel\cslhotel\themes\hotel-reservation-theme\maintenance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f33b86161_66990488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cf2b460949d267dfdf2752f739ea02dde17b3e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\themes\\hotel-reservation-theme\\maintenance.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f33b86161_66990488 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
">

<head>
	<meta charset="utf-8">
	<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
	<?php if ((isset($_smarty_tpl->tpl_vars['meta_description']->value))) {?>
		<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['meta_keywords']->value))) {?>
		<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<?php }?>
	<meta name="robots" content="<?php if ((isset($_smarty_tpl->tpl_vars['nobots']->value))) {?>no<?php }?>index,follow">
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
">
	<link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
maintenance.css" rel="stylesheet">
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
js/jquery/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
js/maintenance.js"><?php echo '</script'; ?>
>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet'>
</head>

<body>
	<div id="maintenance">
		<div class="logo">
			<img src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['logo_image_width']->value) {?>width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
" <?php }?>
				<?php if ($_smarty_tpl->tpl_vars['logo_image_height']->value) {?>height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
" <?php }?> alt="logo" />
		</div>
		<div class="margin-l-r">
			<?php if ((isset($_smarty_tpl->tpl_vars['errors']->value)) && $_smarty_tpl->tpl_vars['errors']->value) {?>
				<div class="alert alert-danger">
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error!'),$_smarty_tpl ) );?>
</strong>
					<ol>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error', false, 'k');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
							<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ol>
				</div>
			<?php }?>
		</div>
		<div class="containter">
			<div class="left">
				<div class="">
					<img class="" src="<?php echo $_smarty_tpl->tpl_vars['img_ps_dir']->value;?>
maintenance_banner.png"></img>
				</div>
			</div>
			<div class="right">
				<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We\'ll be back soon.'),$_smarty_tpl ) );?>
</h2>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We are currently updating our site and will be back really soon.'),$_smarty_tpl ) );?>
</p>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Thanks for your patience!'),$_smarty_tpl ) );?>
</p>
				<?php if ((isset($_smarty_tpl->tpl_vars['allowEmployee']->value)) && $_smarty_tpl->tpl_vars['allowEmployee']->value) {?>
					<div>
						<p class="clicker blue" tabindex="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you member?'),$_smarty_tpl ) );?>
</p>
						<div class="hiddendiv">
							<div class="allow-conatainer">
								<form action="index.php" method="post">
									<div class="form_content clearfix">
										<div class="form-group form-ok">
											<label class="" for="email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address'),$_smarty_tpl ) );?>
</label>
											<br>
											<input class="form-control" placeholder="Email" type="email" id="email"
												name="email" value="">
										</div>
										<div class="form-group form-ok">
											<label class="" for="passwd"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password'),$_smarty_tpl ) );?>
</label>
											<br>
											<input class="form-control" type="password" placeholder="Password" id="passwd"
												name="passwd" value="">
										</div>
										<button type="submit" id="SubmitLogin" name="SubmitLogin" class="btn btn-primary">
											<span>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in'),$_smarty_tpl ) );?>

											</span>
										</button>
										<button type="button" id="cancelLogin" name="cancelLogin"
											class="btn btn-primary cancel-login">
											<span>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

											</span>
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				<?php }?>
			</div>
		</div>
	</div>
</body>

</html><?php }
}
