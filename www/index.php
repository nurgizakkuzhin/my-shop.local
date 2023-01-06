<?php
session_start(); //стартуем сессию

//Если в сессии нет массива корзины то сделаем его
if (! isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

/**
 * Инициализация настроек
 */
include_once __DIR__ . '/../config/config.php';

/**
 * Инициализация с базы данных
 */
require_once __DIR__ . '/../config/db_connect.php';

/**
 * Основные функции
 */
include_once __DIR__ . '/../library/mainFunctions.php';

/**
 * Определяем с каким контроллером будем работать
 */
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

/**
 * Определяем с какой функцией будем работать
 */
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

/**
 * загружаем страницу
 */

$smarty->assign('cartCntItems', count($_SESSION['cart']));

loadPage($smarty, $controllerName, $actionName);

