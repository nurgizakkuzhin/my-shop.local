<?php /* Smarty version Smarty-3.1.6, created on 2023-01-01 19:25:02
         compiled from "D:\OSPanel\domains\my-shop.local\config/../views/default\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188582173063b1b3de438ba4-85579124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4ca937437e01e1fa0253d066ffc1eed4a14eaf6' => 
    array (
      0 => 'D:\\OSPanel\\domains\\my-shop.local\\config/../views/default\\product.tpl',
      1 => 1672192806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188582173063b1b3de438ba4-85579124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rsProduct' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_63b1b3de4c55c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63b1b3de4c55c')) {function content_63b1b3de4c55c($_smarty_tpl) {?>
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