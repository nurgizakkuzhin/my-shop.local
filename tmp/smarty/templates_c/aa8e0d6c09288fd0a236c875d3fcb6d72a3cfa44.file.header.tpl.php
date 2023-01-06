<?php /* Smarty version Smarty-3.1.6, created on 2023-01-01 19:24:57
         compiled from "D:\OSPanel\domains\my-shop.local\config/../views/default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11652219963b1b3d9abbad9-62950752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa8e0d6c09288fd0a236c875d3fcb6d72a3cfa44' => 
    array (
      0 => 'D:\\OSPanel\\domains\\my-shop.local\\config/../views/default\\header.tpl',
      1 => 1672186846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11652219963b1b3d9abbad9-62950752',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_63b1b3d9b1d56',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63b1b3d9b1d56')) {function content_63b1b3d9b1d56($_smarty_tpl) {?><!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css">
    <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
</head>
<body>
    <div id="header">
        <h1>my shop - интернет магазин</h1>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <div id="centerColumn"><?php }} ?>