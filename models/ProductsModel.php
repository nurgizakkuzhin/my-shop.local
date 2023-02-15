<?php

/**
 * Модель для таблицы продукции (products)
 */

/**
 * Получаем последние добавленные товары
 *
 * @param integer $limit Лимит товаров
 * @return array Массив товаров
 */
function getLastProducts($limit)
{
    $sql = 'SELECT * FROM products ORDER BY id DESC';

    if ($limit) {
        $sql .= ' LIMIT ' . $limit;
    }

    $rs = mysqli_query(dbConnect(), $sql);

    return createSmartyRsArray($rs);
}

/**
 * Поулчить продукты для категории $itemId
 *
 * @param integer$itemId ID категории
 * @return array|bool массив продуктов
 */
function getProductsByCat($itemId)
{
    $itemId = intval($itemId);
    $sql = 'SELECT * FROM products WHERE category_id = ' . $itemId;
    $rs = mysqli_query(dbConnect(), $sql);

    return createSmartyRsArray($rs);
}

/**
 * Получить данные продукта по ID
 *
 * @param integer $itemId ID продукта
 * @return array массив данных продукта
 */
function getProductById($itemId)
{
    $itemId = intval($itemId); //оптимизация. формирует значение int
    $sql = 'SELECT * FROM products WHERE id = ' . $itemId;

    $rs = mysqli_query(dbConnect(), $sql);
    return mysqli_fetch_assoc($rs);
}

/**
 * Получить список продуктов из массива идентификаторов (ID's)
 *
 * @param array $itemsIds массив идентификаторов продуктов
 * @return array|bool|null массив данных продуктов
 */
function getProductsFromArray($itemsIds)
{
    if (!$itemsIds) {
        return null;
    }
    $sql = 'SELECT * FROM products WHERE id IN (' . implode(', ', $itemsIds) . ')';
    $rs = mysqli_query(dbConnect(), $sql);

    return createSmartyRsArray($rs);
}

/**
 * Выбрать все продукты из Б
 * @return array|bool
 */
function getProducts()
{
    $sql = "SELECT * FROM `products` ORDER BY category_id";
    $rs = mysqli_query(dbConnect(), $sql);

    return createSmartyRsArray($rs);

}

/**
 * Добавление нового товара
 *
 * @param $itemName Название продукта
 * @param $itemPrice Цена
 * @param $itemDesc Описание
 * @param $itemCat ID категории
 * @return bool|mysqli_result
 */
function insertProduct($itemName, $itemPrice, $itemDesc, $itemCat)
{
    $sql = "INSERT INTO products SET `name`='{$itemName}', `price`='{$itemPrice}', `description`='{$itemDesc}', `category_id`='{$itemCat}'";

    $rs = mysqli_query(dbConnect(), $sql);
    return $rs;

}

function updateProduct($itemId, $itemName, $itemPrice, $itemStatus, $itemDesc, $itemCat, $newFileName = null)
{
    $set = [];

    if ($itemName) {
        $set[] = "`name` = '{$itemName}'";
    }

    if ($itemPrice > 0) {
        $set[] = "`price` = '{$itemPrice}'";
    }

    if ($itemStatus !== null) {
        $set[] = "`status` = '{$itemStatus}'";
    }

    if ($itemDesc) {
        $set[] = "`description` = '{$itemDesc}'";
    }

    if ($itemCat) {
        $set[] = "`category_id` = '{$itemCat}'";
    }

    if ($newFileName) {
        $set[] = "`image` = '{$newFileName}'";
    }

    $setStr = implode(', ', $set);
    $sql = "UPDATE products SET {$setStr} WHERE id = '{$itemId}'";

    $rs = mysqli_query(dbConnect(), $sql);
    return $rs;
}