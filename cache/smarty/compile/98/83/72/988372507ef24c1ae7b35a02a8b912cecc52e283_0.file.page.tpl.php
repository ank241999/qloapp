<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:45
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\modules_catalog\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f35109564_78526535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '988372507ef24c1ae7b35a02a8b912cecc52e283' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\modules_catalog\\page.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/modules_catalog/modules_list.tpl' => 1,
    'file:controllers/modules_catalog/theme_list.tpl' => 1,
  ),
),false)) {
function content_659e3f35109564_78526535 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="catalog-center-column">
    <?php if ((isset($_smarty_tpl->tpl_vars['modules']->value)) && $_smarty_tpl->tpl_vars['modules']->value) {?>
        <div id="suggested-modules-list" class="row list-container">
            <div class="col-sm-12">
                <div class="row form-horizontal list-header">
                    <div class="pull-left col-sm-6 title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suggested Modules'),$_smarty_tpl ) );?>
&nbsp;</div>
                    <div class="pull-right col-sm-3">
                        <div class="input-group">
                            <input type="text" name="module-search" id="module-search" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search module name...'),$_smarty_tpl ) );?>
">
                            <span class="input-group-addon">
                                <i class="icon-search"></i>
                            </span>
                        </div>
                    </div>
                    <?php if ((isset($_smarty_tpl->tpl_vars['sort_criterta']->value)) && $_smarty_tpl->tpl_vars['sort_criterta']->value) {?>
                        <div class="pull-right col-sm-3">
                            <div class="row">
                                <label class="pull-left sort-label"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sort By :'),$_smarty_tpl ) );?>
</span></label>
                                <div class="col-sm-9">
                                    <select name="module-sort" id="module-sort">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sort_criterta']->value, 'criteria');
$_smarty_tpl->tpl_vars['criteria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['criteria']->value) {
$_smarty_tpl->tpl_vars['criteria']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['criteria']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['criteria']->value['value'] == $_smarty_tpl->tpl_vars['module_sort']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['criteria']->value['title'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>

                            </div>
                        </div>
                    <?php }?>
                </div>
                <?php $_smarty_tpl->_subTemplateRender('file:controllers/modules_catalog/modules_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('elements'=>$_smarty_tpl->tpl_vars['modules']->value), 0, false);
?>
                <div class="list-empty" style="display:none">
                    <div class="list-empty-msg">
                        <i class="icon-warning-sign list-empty-icon"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No modules found'),$_smarty_tpl ) );?>

                    </div>
                </div>
                <div class="pagination-container">
                    <ul class="pagination-block"></ul>
                </div>
            </div>
        </div>
        <div class="panel explore-panel text-center">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Explore all addon of Qloapps'),$_smarty_tpl ) );?>
&nbsp;
            <a href="https://qloapps.com/addons/" class="btn btn-primary btn-lg"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'QloApps Addons'),$_smarty_tpl ) );?>
</a>
        </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['themes']->value)) && $_smarty_tpl->tpl_vars['themes']->value) {?>
        <div id="suggested-theme-list" class="row list-container">
            <div class="col-sm-12">
                <div class="row form-horizontal list-header">
                                            <div class="pull-left col-sm-6 title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suggested Themes'),$_smarty_tpl ) );?>
&nbsp;</div>

                        <div class="pull-right col-sm-3">
                            <div class="input-group">
                                <input type="text" name="theme-search" id="theme-search" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search theme name...'),$_smarty_tpl ) );?>
">
                                <span class="input-group-addon">
                                    <i class="icon-search"></i>
                                </span>
                            </div>
                        </div>
                        <?php if ((isset($_smarty_tpl->tpl_vars['sort_criterta']->value)) && $_smarty_tpl->tpl_vars['sort_criterta']->value) {?>
                            <div class="pull-right col-sm-3">
                                <div class="row">
                                                                            <label class="pull-left sort-label"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sort By :'),$_smarty_tpl ) );?>
</span></label>
                                                                        <div class="col-sm-9">
                                        <select name="theme-sort" id="theme-sort">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sort_criterta']->value, 'criteria');
$_smarty_tpl->tpl_vars['criteria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['criteria']->value) {
$_smarty_tpl->tpl_vars['criteria']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['criteria']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['criteria']->value['value'] == $_smarty_tpl->tpl_vars['theme_sort']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['criteria']->value['title'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                                    </div>
                <?php $_smarty_tpl->_subTemplateRender('file:controllers/modules_catalog/theme_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('elements'=>$_smarty_tpl->tpl_vars['themes']->value), 0, false);
?>
                <div class="list-empty" style="display:none">
                    <div class="list-empty-msg">
                        <i class="icon-warning-sign list-empty-icon"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No themes found'),$_smarty_tpl ) );?>

                    </div>
                </div>
                <div class="pagination-container">
                    <ul class="pagination-block"></ul>
                </div>
            </div>
        </div>
        <div class="panel explore-panel text-center">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Explore all themes of Qloapps'),$_smarty_tpl ) );?>
&nbsp;
            <a href="https://store.webkul.com/Qloapps/responsive.html" class="btn btn-primary btn-lg"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'QloApps Themes'),$_smarty_tpl ) );?>
</a>
        </div>
    <?php }?>
</div>
<?php }
}
