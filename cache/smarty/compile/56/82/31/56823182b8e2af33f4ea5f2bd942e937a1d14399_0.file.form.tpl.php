<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:47
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\request_sql\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f37b57177_70265504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56823182b8e2af33f4ea5f2bd942e937a1d14399' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\request_sql\\helpers\\form\\form.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f37b57177_70265504 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1162072324659e3f37b4dfa5_73271019', "after");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_850971711659e3f37b525c8_52400360', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "after"} */
class Block_1162072324659e3f37b4dfa5_73271019 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_1162072324659e3f37b4dfa5_73271019',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
	<div class="col-lg-3">
		<div class="panel">
			<h3><i class="icon-list"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of MySQL Tables'),$_smarty_tpl ) );?>
</h3>
			<div class="form-group" id="selectTables">
				<select id="table" size="10">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tables']->value, 'table');
$_smarty_tpl->tpl_vars['table']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['table']->value) {
$_smarty_tpl->tpl_vars['table']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
			<div class="form-group">
				<button type="button" id="add_table" class="btn btn-default"><i class="icon-plus-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add table name to SQL query'),$_smarty_tpl ) );?>
</button>
			</div>
		</div>
	</div>
	<div class="col-lg-9">
		<div class="panel">
			<h3><i class="icon-list"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of attributes for this MySQL table'),$_smarty_tpl ) );?>
</h3>
			<div id="listAttributes">
				<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please choose a MySQL table'),$_smarty_tpl ) );?>
</div>
			</div>
		</div>
	</div>
</div>
	
<?php
}
}
/* {/block "after"} */
/* {block "script"} */
class Block_850971711659e3f37b525c8_52400360 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_850971711659e3f37b525c8_52400360',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	$(document).ready(function() {
		$('#selectTables select option').click(function(){
			var table = $(this).val();
			//list attributes:
			$.ajax({
				url: 'index.php',
				data: {
					table: table,
					controller: 'adminrequestsql',
					token: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
',
					action: 'addrequest_sql',
					ajax: true
				},
				context: document.body,
				dataType: 'json',
				context: this,
				async: false,
				success: function(data){
					var html = "<table class='table'>";
						html += "<thead>";
							html += "<tr>";
								html += "<th><span class=\"title_box\"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attribute'),$_smarty_tpl ) );?>
</span></th>";
								html += "<th class=\"fixed-width-md\"><span class=\"title_box\"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type'),$_smarty_tpl ) );?>
</span></th>";
								html += "<th class=\"fixed-width-md\"><span class=\"title_box\"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Action'),$_smarty_tpl ) );?>
</span></th>";
							html += "</tr>";
						html += "</thead>";
						html += "<tbody>";
						for (var i=0; i < data.length; i++)
						{
							html += "<tr>";
								html += "<td>"+data[i].Field+"</td>";
								html += "<td>"+data[i].Type+"</td>";
								html += "<td><button type=\"button\" class=\"btn btn-default\" onclick=\"javascript:AddRequestSql('"+data[i].Field+"');\"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add attribute to SQL query'),$_smarty_tpl ) );?>
</button></td>";
							html += "</tr>";
						}
						html += "</tbody>";
					html += "</table>";
					$('#listAttributes').html(html);
				}
			});
		});

		$('#add_table').click(function(){
			var table = $('#selectTables select').val();

			if (!table)
				jAlert("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please choose a table.','js'=>1),$_smarty_tpl ) );?>
");
			else
				AddRequestSql(table);
		});
	});

	function AddRequestSql(string)
	{
		var sql = $('#sql').val();
		$('#sql').val(sql+' '+string);
		return false;
	}
<?php
}
}
/* {/block "script"} */
}
