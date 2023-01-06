<?php
/**
 * Файл настроек приложения
 */

//> Константы для обращения к контроллерам
define('PathPrefix', __DIR__ . '/../controllers/');
define('PathPostfix', 'Controller.php');
//<

//> Используем шаблон
$template = 'default';

// пути к файлам шаблонов (*.tpl)
define('TemplatePrefix', __DIR__ . '/../views/' . $template . '/');
define('TemplatePostfix', '.tpl');

// пути к файлам шаблонов в вебпространстве
define('TemplateWebPath', '/templates/' . $template . '/');
//<

//> Инициализация шаблонизатора Smarty
// pull full path to Smarty.class.php
require __DIR__ . '/../library/Smarty/libs/Smarty.class.php';
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix); //Здесь будет храниться файлы
$smarty->setCompileDir(__DIR__ . '/../tmp/smarty/templates_c'); //куда складывать откомпилированные шаблоны
$smarty->setCacheDir(__DIR__ . '/../tmp/smarty/cache'); //кэширования файлов
$smarty->setConfigDir(__DIR__ . '/../library/Smarty/configs'); //где объявляется конфигурации

$smarty->assign('templateWebPath', TemplateWebPath);
//<