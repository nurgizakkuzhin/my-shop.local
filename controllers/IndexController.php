<?php
/**
 * Контроллер главной страницы
 */

//> подключаем модели
include_once __DIR__ . '/../models/CategoriesModel.php';
include_once __DIR__ . '/../models/ProductsModel.php';
//<

/**
 * Формирование главной страницы сайта
 *
 * @param object $smarty Шаблонизатор Smarty
 */
function indexAction($smarty)
{
    $rsCategories = getAllMainCatsWithChildren(); //получить все главные категории
    $rsProducts = getLastProducts(16);

    //> Инициализируем переменную
    $smarty->assign('pageTitle', 'Главная страница сайта');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);
    //<

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}

function testAction()
{
    echo 'привет';
}
