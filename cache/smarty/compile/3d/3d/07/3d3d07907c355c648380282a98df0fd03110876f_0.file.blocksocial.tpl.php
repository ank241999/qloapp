<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:44
  from 'C:\xampp\htdocs\cslhotel\cslhotel\themes\hotel-reservation-theme\modules\blocksocial\blocksocial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f3408ed00_64770800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d3d07907c355c648380282a98df0fd03110876f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\themes\\hotel-reservation-theme\\modules\\blocksocial\\blocksocial.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f3408ed00_64770800 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <section class="col-xs-12 col-sm-12">
        <div class="row margin-lr-0 footer-section-heading">
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Follow us on','mod'=>'blocksocial'),$_smarty_tpl ) );?>
</p>
            <hr/>
        </div>
        <div class="row margin-lr-0" id="social_block">
            <ul>
                <?php if ((isset($_smarty_tpl->tpl_vars['facebook_url']->value)) && $_smarty_tpl->tpl_vars['facebook_url']->value != '') {?>
                    <li class="facebook">
                        <a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebook_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facebook','mod'=>'blocksocial'),$_smarty_tpl ) );?>
</span>
                        </a>
                    </li>
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['twitter_url']->value)) && $_smarty_tpl->tpl_vars['twitter_url']->value != '') {?>
                    <li class="twitter">
                        <a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['twitter_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Twitter','mod'=>'blocksocial'),$_smarty_tpl ) );?>
</span>
                        </a>
                    </li>
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['rss_url']->value)) && $_smarty_tpl->tpl_vars['rss_url']->value != '') {?>
                    <li class="rss">
                        <a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rss_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'RSS','mod'=>'blocksocial'),$_smarty_tpl ) );?>
</span>
                        </a>
                    </li>
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['youtube_url']->value)) && $_smarty_tpl->tpl_vars['youtube_url']->value != '') {?>
                    <li class="youtube">
                        <a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['youtube_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Youtube','mod'=>'blocksocial'),$_smarty_tpl ) );?>
</span>
                        </a>
                    </li>
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['google_plus_url']->value)) && $_smarty_tpl->tpl_vars['google_plus_url']->value != '') {?>
                    <li class="google-plus">
                        <a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['google_plus_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google Plus','mod'=>'blocksocial'),$_smarty_tpl ) );?>
</span>
                        </a>
                    </li>
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['pinterest_url']->value)) && $_smarty_tpl->tpl_vars['pinterest_url']->value != '') {?>
                    <li class="pinterest">
                        <a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pinterest_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pinterest','mod'=>'blocksocial'),$_smarty_tpl ) );?>
</span>
                        </a>
                    </li>
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['vimeo_url']->value)) && $_smarty_tpl->tpl_vars['vimeo_url']->value != '') {?>
                    <li class="vimeo">
                        <a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vimeo_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vimeo','mod'=>'blocksocial'),$_smarty_tpl ) );?>
</span>
                        </a>
                    </li>
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['instagram_url']->value)) && $_smarty_tpl->tpl_vars['instagram_url']->value != '') {?>
                    <li class="instagram">
                        <a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['instagram_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instagram','mod'=>'blocksocial'),$_smarty_tpl ) );?>
</span>
                        </a>
                    </li>
                <?php }?>
            </ul>
            <div class="clearfix"></div>
        </div>
    </section>
</div>
<?php }
}
