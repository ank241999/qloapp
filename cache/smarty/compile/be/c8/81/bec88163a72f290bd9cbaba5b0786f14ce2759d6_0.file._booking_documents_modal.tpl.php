<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:46
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\orders\_booking_documents_modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f36339125_69783737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bec88163a72f290bd9cbaba5b0786f14ce2759d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\orders\\_booking_documents_modal.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f36339125_69783737 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-body text-center">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-left errors-wrap"></div>
            <div class="documents-list">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview'),$_smarty_tpl ) );?>
</th>
                            <th class="text-left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title'),$_smarty_tpl ) );?>
</th>
                            <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload Date'),$_smarty_tpl ) );?>
</th>
                            <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Actions'),$_smarty_tpl ) );?>
</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="add-new-document-form" style="margin-top: 10px;">
                <div class="text-left add-new-wrap">
                    <a class="btn btn-primary btn-add-new-document">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload new document'),$_smarty_tpl ) );?>

                    </a>
                    <span></span>
                </div>
                <form id="form-add-new-document" class="well" method="post" action="#" style="display: none; margin-top: 5px;">

                    <input type="hidden" name="id_htl_booking" value="0">

                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-sm-2">
                                <span class="label-tooltip" data-toggle="tooltip" title="" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write the title for the document. Invalid characters <>;=#{}'),$_smarty_tpl ) );?>
">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title'),$_smarty_tpl ) );?>

                                </span>
                            </label>
                            <div class="col-sm-10">
                                <div class="input-group fixed-width-xxl">
                                    <input type="text" name="title" value="" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Eg. Passport, Driving license'),$_smarty_tpl ) );?>
" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label required col-sm-2">
                                <span class="label-tooltip" data-toggle="tooltip" title="" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose the document file to be uploaded.'),$_smarty_tpl ) );?>
">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'File'),$_smarty_tpl ) );?>

                                </span>
                            </label>
                            <div class="col-sm-10">
                                <div class="input-file-wrap"></div>
                                <div class="input-group fixed-width-xxl">
                                    <span class="input-group-addon"><i class="icon-file"></i></span>
                                    <input type="text" class="file-name" readonly="">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-add-file">
                                            <i class="icon-folder-open"></i>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add file'),$_smarty_tpl ) );?>

                                        </button>
                                    </span>
                                </div>
                                <p class="text-left" style="margin-top: 4px; font-style: italic;">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload a PDF or an image file. Allowed image formats: .gif, .jpg, .jpeg and .png'),$_smarty_tpl ) );?>

                                </p>
                            </div>
                        </div>
                        <div class="clearfix btn-group-add-new">
                            <button class="btn btn-primary pull-right upload" type="submit" name="submitAddPayment">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload'),$_smarty_tpl ) );?>

                            </button>
                            <button class="btn btn-default pull-left cancel">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $_block_plugin34 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin34, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txt_booking_document_upload_success'));
$_block_repeat=true;
echo $_block_plugin34->addJsDefL(array('name'=>'txt_booking_document_upload_success'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Document uploaded successfully.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin34->addJsDefL(array('name'=>'txt_booking_document_upload_success'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin35 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin35, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txt_booking_document_delete_confirm'));
$_block_repeat=true;
echo $_block_plugin35->addJsDefL(array('name'=>'txt_booking_document_delete_confirm'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure?','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin35->addJsDefL(array('name'=>'txt_booking_document_delete_confirm'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin36 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin36, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txt_booking_document_delete_success'));
$_block_repeat=true;
echo $_block_plugin36->addJsDefL(array('name'=>'txt_booking_document_delete_success'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Document deleted successfully.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin36->addJsDefL(array('name'=>'txt_booking_document_delete_success'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
