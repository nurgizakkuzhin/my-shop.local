<?php /* Smarty version Smarty-3.1.6, created on 2022-12-28 05:27:04
         compiled from "D:\OSPanel\domains\shop.local\config/../views/default\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113425572262a5cc842047a5-51902839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c0c5c6bee0b50b386085c59611c4a85378c63e8' => 
    array (
      0 => 'D:\\OSPanel\\domains\\shop.local\\config/../views/default\\product.tpl',
      1 => 1672192806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113425572262a5cc842047a5-51902839',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_62a5cc8423743',
  'variables' => 
  array (
    'rsProduct' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a5cc8423743')) {function content_62a5cc8423743($_smarty_tpl) {?>
<h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>

<img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
" width="575">
Стоимость: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>



<a id="removeCart<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value){?>class="hideme"<?php }?> href="#" onclick="removeFromCart
        (<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
);
return false;">Удалить из
    корзины</a>
<a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value){?>class="hideme"<?php }?> href="#" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
);
return false;
        ">Добавить в
    корзину</a>
<p>Описание: <br>
    <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>

</p><?php }} ?>