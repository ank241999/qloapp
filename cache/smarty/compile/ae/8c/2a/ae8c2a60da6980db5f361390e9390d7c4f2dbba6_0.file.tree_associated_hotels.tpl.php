<?php
/* Smarty version 3.1.39, created on 2024-01-10 07:54:45
  from 'C:\xampp\htdocs\cslhotel\cslhotel\admin\themes\default\template\controllers\normal_products\helpers\tree\tree_associated_hotels.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_659e3f3554c673_82389669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae8c2a60da6980db5f361390e9390d7c4f2dbba6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cslhotel\\cslhotel\\admin\\themes\\default\\template\\controllers\\normal_products\\helpers\\tree\\tree_associated_hotels.tpl',
      1 => 1681739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659e3f3554c673_82389669 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">
	<?php if ((isset($_smarty_tpl->tpl_vars['header']->value))) {
echo $_smarty_tpl->tpl_vars['header']->value;
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['nodes']->value))) {?>
	<ul id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="cattree tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var currentToken="<?php echo addslashes($_smarty_tpl->tpl_vars['token']->value);?>
";
	var treeClickFunc = function() {
		var newURL = window.location.protocol + "//" + window.location.host + window.location.pathname;
		var queryString = window.location.search.replace(/&id_category=[0-9]*/, "") + "&id_category=" + $(this).val();
		location.href = newURL+queryString; // hash part is dropped: window.location.hash
	};
	function addDefaultCategory(elem)
	{
		$('select#id_category_default').append('<option value="' + elem.val()+'">' + (elem.val() !=1 ? elem.parent().find('label').html() : home) + '</option>');
		if ($('select#id_category_default option').length > 0)
		{
			$('select#id_category_default').closest('.form-group').show();
			$('#no_default_category').hide();
		}
	}

	<?php if ((isset($_smarty_tpl->tpl_vars['use_checkbox']->value)) && $_smarty_tpl->tpl_vars['use_checkbox']->value == true) {?>
		function checkAllAssociatedCategories($tree)
		{
			$tree.find(':input[type=checkbox]').each(function(){
				$(this).prop('checked', true);

				addDefaultCategory($(this));
				$(this).parent().addClass('tree-selected');
			});
		}

		function uncheckAllAssociatedCategories($tree)
		{
			$tree.find(':input[type=checkbox]').each(function(){
				$(this).prop('checked', false);

				$('select#id_category_default option[value='+$(this).val()+']').remove();
				if ($('select#id_category_default option').length == 0)
				{
					$('select#id_category_default').closest('.form-group').hide();
					$('#no_default_category').show();
				}

				$(this).parent().removeClass('tree-selected');
			});
		}

		function checkAllRoomTypeOfHotel(node)
		{
			$(node).find(':input[type=checkbox]').each(function(){
				$(this).prop('checked', true);
				$(this).parent().addClass('tree-selected');
			});
		}

		function unCheckAllRoomTypeOfHotel(node)
		{
			$(node).find(':input[type=checkbox]').each(function(){
				$(this).prop('checked', false);
				$(this).parent().removeClass('tree-selected');
			});
		}
	<?php }?>
	$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
').find('.select_hotel').on('click', function(){
		if ($(this).is(":checked")) {
			checkAllRoomTypeOfHotel($(this).closest('li.tree-folder').find('ul.tree'));
		} else {
			unCheckAllRoomTypeOfHotel($(this).closest('li.tree-folder').find('ul.tree'));
		}
	});

	$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
').find(':input[type=checkbox].select_room_type').on('change', function(){
		var totalNodes = $(this).closest('ul.tree').find('li.tree-item');
		var checkedNodes = $(this).closest('ul.tree').find('li.tree-item :input[type=checkbox].select_room_type:checked');
		if (totalNodes.length == checkedNodes.length) {
			$(this).closest('li.tree-folder').find(':input[type=checkbox].select_hotel').prop('checked', true).parent().addClass('tree-selected');
		} else {
			$(this).closest('li.tree-folder').find(':input[type=checkbox].select_hotel').prop('checked', false).parent().removeClass('tree-selected');
		}
	});
	<?php if ((isset($_smarty_tpl->tpl_vars['use_search']->value)) && $_smarty_tpl->tpl_vars['use_search']->value == true) {?>
		$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-categories-search').bind('typeahead:selected', function(obj, datum){
			var match = $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
').find(':input[value="'+datum.id_category+'"]').first();
			if (match.length)
			{
				match.each(function(){
						$(this).prop("checked", true);
						$(this).parent().addClass("tree-selected");
						$(this).parents('ul.tree').each(function(){
							$(this).show();
							$(this).prev().find('.icon-folder-close').removeClass('icon-folder-close').addClass('icon-folder-open');
						});
						addDefaultCategory($(this));
					}
				);
			}
			else
			{
				var selected = [];
				that = this;
				$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
').find('.tree-selected input').each(
					function()
					{
						selected.push($(this).val());
					}
				);
				
				$.get(
					'ajax-tab.php',
					{controller:'AdminNormalProducts',token:currentToken,action:'getCategoryTree', fullTree:1, selected:selected},
					function(content) {
				
						$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
').html(content);
						$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
').tree('init');
						$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
').find(':input[value="'+datum.id_category+'"]').each(function(){
								$(this).prop("checked", true);
								$(this).parent().addClass("tree-selected");
								$(this).parents('ul.tree').each(function(){
									$(this).show();
									$(this).prev().find('.icon-folder-close').removeClass('icon-folder-close').addClass('icon-folder-open');
								});
								full_loaded = true;
							}
						);
					}
				);
			}
		});
	<?php }?>
	function startTree() {
		if (typeof $.fn.tree === 'undefined') {
			setTimeout(startTree, 100);
			return;
		}

		$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
').tree('expandAll');
		$('#expand-all-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
').hide();
		$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
').find(':input[type=radio]').click(treeClickFunc);

		<?php if ((isset($_smarty_tpl->tpl_vars['selected_hotels']->value))) {?>
			$('#no_default_category').hide();
			<?php $_smarty_tpl->_assignInScope('imploded_selected_hotels', implode('","',$_smarty_tpl->tpl_vars['selected_hotels']->value));?>
			var selected_hotels = new Array("<?php echo $_smarty_tpl->tpl_vars['imploded_selected_hotels']->value;?>
");



			$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
').find(':input.select_hotel').each(function(){
				if ($.inArray($(this).val(), selected_hotels) != -1)
				{
					$(this).prop("checked", true);
					$(this).parent().addClass("tree-selected");
					$(this).parents('ul.tree').each(function(){
						$(this).show();
						$(this).prev().find('.icon-folder-close').removeClass('icon-folder-close').addClass('icon-folder-open');
					});
				}
			});
		<?php }?>

		<?php if ((isset($_smarty_tpl->tpl_vars['selected_roomtypes']->value))) {?>
			$('#no_default_category').hide();
			<?php $_smarty_tpl->_assignInScope('imploded_selected_hotels', implode('","',$_smarty_tpl->tpl_vars['selected_roomtypes']->value));?>
			var selected_roomtypes = new Array("<?php echo $_smarty_tpl->tpl_vars['imploded_selected_hotels']->value;?>
");



			$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
').find(':input.select_room_type').each(function(){
				if ($.inArray($(this).val(), selected_roomtypes) != -1)
				{
					$(this).prop("checked", true);
					$(this).parent().addClass("tree-selected");
					$(this).parents('ul.tree').each(function(){
						$(this).show();
						$(this).prev().find('.icon-folder-close').removeClass('icon-folder-close').addClass('icon-folder-open');
					});
				}
			});
		<?php }?>
	}
	startTree();
<?php echo '</script'; ?>
>
<?php }
}
