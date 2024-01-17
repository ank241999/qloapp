<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:50
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\recomended-banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f3a6c7137_65784502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3b4ecaeb8af1f6c4a59318324a80f06c6bfc3ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\recomended-banner.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f3a6c7137_65784502 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="recommendation-wrapper-skeleton" style="display:none">
    <?php echo '<script'; ?>
>
        loadRecommendation();
    <?php echo '</script'; ?>
>
    <div class="col-sm-12">
        <div class="banner panel">
            <div class="row">
                <div class="col-sm-12">
                    <div class="skeleton-loading-pulse loading-container-bar"></div>
                    <div class="loading-container-bar"></div>
                    <div class="skeleton-loading-pulse loading-container-bar"></div>
                    <div class="loading-container-bar"></div>
                    <div class="skeleton-loading-pulse loading-container-bar"></div>
                    <div class="loading-container-bar"></div>
                    <div class="skeleton-loading-pulse loading-container-bar"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="recommendation-wrapper" style="display:none">
</div><?php }
}
