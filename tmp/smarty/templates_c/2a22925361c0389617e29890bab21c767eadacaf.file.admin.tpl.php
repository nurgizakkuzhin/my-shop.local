<?php /* Smarty version Smarty-3.1.6, created on 2023-01-15 23:49:05
         compiled from "D:\OSPanel\domains\my-shop.local\config/../views/admin\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183225965763c45f432ff446-33993220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a22925361c0389617e29890bab21c767eadacaf' => 
    array (
      0 => 'D:\\OSPanel\\domains\\my-shop.local\\config/../views/admin\\admin.tpl',
      1 => 1673815737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183225965763c45f432ff446-33993220',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_63c45f433032c',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63c45f433032c')) {function content_63c45f433032c($_smarty_tpl) {?><div id="blockNewCategory">
    Новая категория:
    <input type="text" name="newCategoryName" id="newCategoryName" value=""><br><br>

    Является подкатегорией для
    <select name="generalCatId">
        <option value="0">Главная Категория
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
            <?php } ?>
        </option>
    </select><br>
    <input type="button" onclick="newCategory();" value="Добавить категорию">
</div><?php }} ?>