<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:44
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\dashboard\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f3436cb18_14746459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8deb7c25cece223aca53249885ebced2ebfb8b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\dashboard\\helpers\\view\\view.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:recomended-banner.tpl' => 1,
  ),
),false)) {
function content_659e3f3436cb18_14746459 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    var dashboard_ajax_url = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminDashboard');?>
';
    var adminstats_ajax_url = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminStats');?>
';
    var no_results_translation = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No result','js'=>1),$_smarty_tpl ) );?>
';
    var dashboard_use_push = '<?php echo intval($_smarty_tpl->tpl_vars['dashboard_use_push']->value);?>
';
    var read_more = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','js'=>1),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
>

<div id="dashboard">
    <?php echo $_smarty_tpl->tpl_vars['hookDashboardTop']->value;?>

    <div class="row">
        <?php if ($_smarty_tpl->tpl_vars['warning']->value) {?>
            <div class="col-lg-12">
                <div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</div>
            </div>
        <?php }?>
        <div class="col-lg-12">
            <div class="panel clearfix">
                <div class="col-lg-6">
                    <div id="calendar">
                        <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="calendar_form" name="calendar_form" class="form-inline">
                            <div class="btn-toolbar">
                                <div class="btn-group input-group">
                                    <button type="button" name="submitDateDay" class="btn btn-default submitDateDay<?php if ((!(isset($_smarty_tpl->tpl_vars['preselect_date_range']->value)) || !$_smarty_tpl->tpl_vars['preselect_date_range']->value) || ((isset($_smarty_tpl->tpl_vars['preselect_date_range']->value)) && $_smarty_tpl->tpl_vars['preselect_date_range']->value == 'day')) {?> active<?php }?>">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Day'),$_smarty_tpl ) );?>

                                    </button>
                                    <button type="button" name="submitDateMonth" class="btn btn-default submitDateMonth <?php if ((isset($_smarty_tpl->tpl_vars['preselect_date_range']->value)) && $_smarty_tpl->tpl_vars['preselect_date_range']->value == 'month') {?>active<?php }?>">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Month'),$_smarty_tpl ) );?>

                                    </button>
                                    <button type="button" name="submitDateYear" class="btn btn-default submitDateYear<?php if ((isset($_smarty_tpl->tpl_vars['preselect_date_range']->value)) && $_smarty_tpl->tpl_vars['preselect_date_range']->value == 'year') {?> active<?php }?>">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Year'),$_smarty_tpl ) );?>

                                    </button>
                                    <button type="button" name="submitDateDayPrev" class="btn btn-default submitDateDayPrev<?php if ((isset($_smarty_tpl->tpl_vars['preselect_date_range']->value)) && $_smarty_tpl->tpl_vars['preselect_date_range']->value == 'prev-day') {?> active<?php }?>">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Day'),$_smarty_tpl ) );?>
-1
                                    </button>
                                    <button type="button" name="submitDateMonthPrev" class="btn btn-default submitDateMonthPrev<?php if ((isset($_smarty_tpl->tpl_vars['preselect_date_range']->value)) && $_smarty_tpl->tpl_vars['preselect_date_range']->value == 'prev-month') {?> active<?php }?>">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Month'),$_smarty_tpl ) );?>
-1
                                    </button>
                                    <button type="button" name="submitDateYearPrev" class="btn btn-default submitDateYearPrev<?php if ((isset($_smarty_tpl->tpl_vars['preselect_date_range']->value)) && $_smarty_tpl->tpl_vars['preselect_date_range']->value == 'prev-year') {?> active<?php }?>">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Year'),$_smarty_tpl ) );?>
-1
                                    </button>
                                </div>
                                <input type="hidden" name="datepickerFrom" id="datepickerFrom" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_from']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="form-control">
                                <input type="hidden" name="datepickerTo" id="datepickerTo" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_to']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="form-control">
                                <input type="hidden" name="preselectDateRange" id="preselectDateRange" value="<?php if ((isset($_smarty_tpl->tpl_vars['preselect_date_range']->value))) {
echo $_smarty_tpl->tpl_vars['preselect_date_range']->value;
}?>" class="form-control">
                                <div class="form-group input-group">
                                    <button id="datepickerExpand" class="btn btn-default" type="button">
                                        <i class="icon-calendar-empty"></i>
                                        <span class="hidden-xs">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From'),$_smarty_tpl ) );?>

                                            <strong class="text-info" id="datepicker-from-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['date_from']->value),$_smarty_tpl ) );?>
</strong>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To'),$_smarty_tpl ) );?>

                                            <strong class="text-info" id="datepicker-to-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['date_to']->value),$_smarty_tpl ) );?>
</strong>
                                            <strong class="text-info" id="datepicker-diff-info"></strong>
                                        </span>
                                        <i class="icon-caret-down"></i>
                                    </button>
                                    <?php echo $_smarty_tpl->tpl_vars['calendar']->value;?>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="form-inline">
                        <div class="text-right">
                            <select class="form-control stats-filter-hotel" name="stats_id_hotel">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotel_options']->value, 'hotel_option');
$_smarty_tpl->tpl_vars['hotel_option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hotel_option']->value) {
$_smarty_tpl->tpl_vars['hotel_option']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['hotel_option']->value['id_hotel'];?>
" <?php if ($_smarty_tpl->tpl_vars['hotel_option']->value['id_hotel'] == $_smarty_tpl->tpl_vars['id_hotel']->value) {?>selected<?php }?>>
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hotel_option']->value['hotel_name'], ENT_QUOTES, 'UTF-8', true);?>

                                    </option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                            <input type="hidden" id="submit-stats-hotel" name="submitStatsHotel" value="1" disabled>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	<?php $_smarty_tpl->_subTemplateRender('file:recomended-banner.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<div class="row" id="recommendation-wrapper" style="display:none">
	</div>
    <div class="row">
        <div class="col-md-8 col-md-push-4 col-lg-7 col-lg-push-3" id="hookDashboardZoneTwo">
            <div class='row'>
                <?php echo $_smarty_tpl->tpl_vars['hookDashboardZoneTwo']->value;?>

            </div>
        </div>
        <div class="col-md-4 col-md-pull-8 col-lg-3 col-lg-pull-7" id="hookDashboardZoneOne">
            <?php echo $_smarty_tpl->tpl_vars['hookDashboardZoneOne']->value;?>

        </div>
        <div class="col-md-4 col-md-pull-8 col-lg-2 col-lg-pull-0" id="hookDashboardZoneThree">
            <div class="row">
                <?php echo $_smarty_tpl->tpl_vars['hookDashboardZoneThree']->value;?>

				<?php if ((isset($_smarty_tpl->tpl_vars['upgrade_info']->value)) && $_smarty_tpl->tpl_vars['upgrade_info']->value) {?>
					<div class="col-sm-12">
						<section class="widget panel">
							<?php echo $_smarty_tpl->tpl_vars['upgrade_info']->value->dash_upgrade_panel;?>

						</section>
					</div>
				<?php }?>
                <div class="col-sm-12">
                    <section class="dash_links widget panel">
                        <h3><i class="icon-link"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Help Center"),$_smarty_tpl ) );?>
</h3>
                            <dl>
                                <dt><a href="https://qloapps.com/qlo-reservation-system/" class="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Official Documentation"),$_smarty_tpl ) );?>
</a></dt>
                                <dd><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"QloApps User Guide"),$_smarty_tpl ) );?>
</dd>
                            </dl>
                            <dl>
                                <dt><a href="https://forums.qloapps.com/" class="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"QloApps Forum"),$_smarty_tpl ) );?>
</a></dt>
                                <dd><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Connect with the QloApps community"),$_smarty_tpl ) );?>
</dd>
                            </dl>
                            <dl>
                                <dt><a href="https://qloapps.com/addons/" class="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"QloApps Addons"),$_smarty_tpl ) );?>
</a></dt>
                                <dd><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Enhance your store QloApps modules"),$_smarty_tpl ) );?>
</dd>
                            </dl>
                            <dl>
                                <dt><a href="https://qloapps.com/contact/" class="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Contact Us!"),$_smarty_tpl ) );?>
</a></dt>
                                <dd><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Contact us for any help"),$_smarty_tpl ) );?>
</dd>
                            </dl>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
