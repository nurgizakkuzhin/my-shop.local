<?php /* Smarty version Smarty-3.1.6, created on 2023-01-06 14:46:51
         compiled from "D:\OSPanel\domains\my-shop.local\config/../views/default\leftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105179474663b1b3d9bb5b02-10173043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e768c5d886cc1144619ea597f53da457f20e80e9' => 
    array (
      0 => 'D:\\OSPanel\\domains\\my-shop.local\\config/../views/default\\leftcolumn.tpl',
      1 => 1673005521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105179474663b1b3d9bb5b02-10173043',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_63b1b3d9c175a',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
    'itemChild' => 0,
    'cartCntItems' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63b1b3d9c175a')) {function content_63b1b3d9c175a($_smarty_tpl) {?>    <div id="leftColumn">
        <div id="leftMenu">
            <div class="menuCaption">Меню:</div> 
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br>
                <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])){?>
                    <?php  $_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemChild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->key => $_smarty_tpl->tpl_vars['itemChild']->value){
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
?>
                        --<a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a><br>
                    <?php } ?>
                <?php }?>
            <?php } ?>
        </div>

        <div id="registerBox">
            <div class="menuCaption showHidden" onclick="showRegisterBox();">Регистрация</div>
            <div id="registerBoxHidden">
                email: <br>
                <input type="text" id="email" name="email" value=""><br>
                пароль: <br>
                <input type="password" id="pwd1" name="pwd1" value=""><br>
                повторить пароль: <br>
                <input type="password" id="pwd2" name="pwd2" value=""><br>
                <input type="button" onclick="registerNewUser();" value="Зарегистрироваться">
            </div>
        </div>

        <div class="menuCaption">Корзина</div>
        <a href="/cart/" title="Перейти в корзину">В корзине</a>
        <span id="cartCntItems">
            <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value>0){?>
                <?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>

            <?php }else{ ?>
                пусто
            <?php }?>
        </span>

    </div><?php }} ?>