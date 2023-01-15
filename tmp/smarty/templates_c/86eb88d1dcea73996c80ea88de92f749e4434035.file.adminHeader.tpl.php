<?php /* Smarty version Smarty-3.1.6, created on 2023-01-15 23:18:39
         compiled from "D:\OSPanel\domains\my-shop.local\config/../views/admin\adminHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180355292763c45f42c0b942-73326200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86eb88d1dcea73996c80ea88de92f749e4434035' => 
    array (
      0 => 'D:\\OSPanel\\domains\\my-shop.local\\config/../views/admin\\adminHeader.tpl',
      1 => 1673813917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180355292763c45f42c0b942-73326200',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_63c45f4317c86',
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63c45f4317c86')) {function content_63c45f4317c86($_smarty_tpl) {?>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css">
        <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/admin.js"></script>
    </head>
    <body>
        <div id="header">
            <h1>Управление сайтом</h1>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ('adminLeftColumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


        <div id="centerColumn">
<?php }} ?>