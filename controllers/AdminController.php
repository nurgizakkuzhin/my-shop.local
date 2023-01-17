<?php

/**
 *
 * AdminController.php
 * Контроллер бэкэнда сайта (/admin/)
 */

//подключаем модели
include_once __DIR__ . '/../models/CategoriesModel.php';
include_once __DIR__ . '/../models/ProductsModel.php';
include_once __DIR__ . '/../models/OrdersModel.php';
include_once __DIR__ . '/../models/PurchaseModel.php';

$smarty->setTemplateDir(TemplateAdminPrefix);
$smarty->assign('templateWebPath', TemplateAdminWebPath);

/**
 * @param $smarty ObjectSmarty
 */
function indexAction($smarty)
{
    $rsCategories = getAllMainCategories();

    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('pageTitle', 'Управление сайтом');

    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'admin');
    loadTemplate($smarty, 'adminFooter');
}

function addnewcatAction()
{
    $catName = $_POST['newCategoryName'];
    $catParentId = $_POST['generalCatId'];

    $res = insertCat($catName, $catParentId);

    if ($res) {
        $resData['success'] = 1;
        $resData['message'] = 'Категория добавлена';
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка добавления категории';
    }

    echo json_encode($res);
    return;
}