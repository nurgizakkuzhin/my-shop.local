<?php /* Smarty version Smarty-3.1.6, created on 2023-01-11 01:10:31
         compiled from "D:\OSPanel\domains\my-shop.local\config/../views/default\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44166866563bd72f5544913-96124119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02dfcb75b0111a83a68c7d1ae7e2639cc8148f91' => 
    array (
      0 => 'D:\\OSPanel\\domains\\my-shop.local\\config/../views/default\\cart.tpl',
      1 => 1673388441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44166866563bd72f5544913-96124119',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_63bd72f58af9d',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63bd72f58af9d')) {function content_63bd72f58af9d($_smarty_tpl) {?>

<h1>Корзина</h1>

<?php if (!$_smarty_tpl->tpl_vars['rsProducts']->value){?>
    В корзине пусто
<?php }else{ ?>
    <form action="/cart/order/" method="post">

            <h2>Данные заказа</h2>
        <table>
            <tr>
                <th>#</th>
                <th>Наименование</th>
                <th>Количество</th>
                <th>Цена за еденицу</th>
                <th>Цена</th>
                <th>Действие</th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'];?>
</td>
                    <td><a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></td>
                    <td><input type="text" name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="1"
                               onchange="conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);"></td>
                    <td>
                        <span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</span>
                    </td>
                    <td>
                        <span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

                        </span>
                    </td>
                    <td>
                        <a id="removeCart<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"  href="#" onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);return false;">Удалить</a>
                        <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="hideme" href="#" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);return false;">Восстановить</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <input type="submit" value="Оформить заказ">
    </form>
<?php }?><?php }} ?>