<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:45
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\modules_catalog\modules_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f350ca601_54848481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f02a6bfe346878288c00e1c300db67f4b3ffeb6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\modules_catalog\\modules_list.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f350ca601_54848481 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\tools\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<div class="suggested-elements row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['elements']->value, 'element');
$_smarty_tpl->tpl_vars['element']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->do_else = false;
?>
        <div class="col-xs-12 col-sm-6 col-md-4 element-panel">
            <div class="panel">
                <div class="module-info-wrapper">
                    <div class="module-logo clearfix">
                        <img src="<?php if ((isset($_smarty_tpl->tpl_vars['element']->value->image))) {
echo $_smarty_tpl->tpl_vars['element']->value->image;
} else {
echo $_smarty_tpl->tpl_vars['modules_uri']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['element']->value->name;?>
/<?php echo $_smarty_tpl->tpl_vars['element']->value->logo;
}?>" title="<?php echo $_smarty_tpl->tpl_vars['element']->value->displayName;?>
" class="pull-left">
                        <h4 class="name" data-name="<?php echo $_smarty_tpl->tpl_vars['element']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['element']->value->displayName;?>
</h4>
                        <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['element']->value->version;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['element']->value->author;?>
</p>
                    </div>
                    <p>
                        <?php if ($_smarty_tpl->tpl_vars['element']->value->description_full) {?>
                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['element']->value->description_full,90,"..." ));?>

                        <?php } else { ?>
                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['element']->value->description,90,"..." ));?>

                        <?php }?>
                    </p>
                    <div class="panel-action clearfix">
                        <?php if ((isset($_smarty_tpl->tpl_vars['element']->value->type)) && $_smarty_tpl->tpl_vars['element']->value->type == 'addonsMustHave' && $_smarty_tpl->tpl_vars['element']->value->not_on_disk) {?>
                            <span class="module-price"><?php if ((isset($_smarty_tpl->tpl_vars['element']->value->price))) {
if (floatval($_smarty_tpl->tpl_vars['element']->value->price) == 0) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free'),$_smarty_tpl ) );
} elseif ((isset($_smarty_tpl->tpl_vars['element']->value->id_currency))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['element']->value->price,'currency'=>$_smarty_tpl->tpl_vars['element']->value->id_currency),$_smarty_tpl ) );
}
}?></span>
                            <a class="btn button-action pull-right btn-primary _blank" href="<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['element']->value->addons_buy_url,' ','+'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Explore'),$_smarty_tpl ) );?>
</a>
                        <?php } else { ?>
                        <a class="btn button-action pull-right btn-primary<?php if (!$_smarty_tpl->tpl_vars['element']->value->trusted) {?> untrustedaddon<?php }?>" <?php if (!$_smarty_tpl->tpl_vars['element']->value->trusted) {?> data-target="#moduleNotTrusted"  data-toggle="modal"<?php }?> data-link="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value->options['install_url'], ENT_QUOTES, 'UTF-8', true);?>
" data-module-display-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value->displayName, ENT_QUOTES, 'UTF-8', true);?>
" data-module-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" data-module-image="<?php if ((isset($_smarty_tpl->tpl_vars['element']->value->image))) {
echo $_smarty_tpl->tpl_vars['element']->value->image;
} else {
echo $_smarty_tpl->tpl_vars['modules_uri']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['element']->value->name;?>
/<?php echo $_smarty_tpl->tpl_vars['element']->value->logo;
}?>" data-author-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value->author, ENT_QUOTES, 'UTF-8', true);?>
" data-author-uri="<?php if ((isset($_smarty_tpl->tpl_vars['element']->value->author_uri))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value->author_uri, ENT_QUOTES, 'UTF-8', true);
}?>" href="<?php if (!$_smarty_tpl->tpl_vars['element']->value->trusted) {?>#<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value->options['install_url'], ENT_QUOTES, 'UTF-8', true);
}?>" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Install'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Install'),$_smarty_tpl ) );?>
</a>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
