<?php

/**
 * Контроллер работы с корзиной (/cart/)
 */

//подключаем модели
include_once __DIR__ . '/../models/CategoriesModel.php';
include_once __DIR__ . '/../models/ProductsModel.php';

/**
 * Добавление продукта в корзину
 *
 * @param int id GET параметр - ID добавляемого продукта
 * @return json информация об операции (успех, кол0во элементов в корзине)
 */
function addtocartAction()
{
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if (!$itemId) {
        return null;
    }

    $resData = [];

    //если значение не найдено, то добавляем
    if (isset($_SESSION['cart']) && array_search($itemId, $_SESSION['cart']) === false) {
        $_SESSION['cart'][] = $itemId;
        $resData['cntItems'] = count($_SESSION['cart']);
        $resData['success'] = 1;
    } else {
        $resData['success'] = 0;
    }

    echo json_encode($resData);

}

/**
 * Удаление продукта из корзины
 *
 * @param integer id GET параметр - ID удаляемого из корзины продукта
 * @return json информация об операции (успех, кол-во элементов в корзине)
 */
function removefromcartAction()
{
   $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
   if (!$itemId) {
       exit();
   }

   $resData = [];
   $key = array_search($itemId, $_SESSION['cart']);
   if ($key !== false) {
       unset($_SESSION['cart'][$key]);
       $resData['success'] = 1;
       $resData['cntItems'] = count($_SESSION['cart']);
   } else {
       $resData['success'] = 0;
   }

   echo json_encode($resData);
}

/**
 * Формирование страницы корзины
 * @link /cart/
 */
function indexAction($smarty)
{
   $itemsIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

   $rsCategories = getAllMainCatsWithChildren();
   $rsProducts = getProductsFromArray($itemsIds);

   $smarty->assign('pageTitle', 'Корзина');
   $smarty->assign('rsCategories', $rsCategories);
   $smarty->assign('rsProducts', $rsProducts);

   loadTemplate($smarty, 'header');
   loadTemplate($smarty, 'cart');
   loadTemplate($smarty, 'footer');
}

/**
 * Формирование страницы заказа
 */
function orderAction($smarty)
{
    //получаем массив идентификаторов (ID) продуктов корзины
    $itemsIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;

    //если корзина пуста то редиректим в корзину
    if (! $itemsIds) {
        redirect('/cart/');
        return;
    }
}