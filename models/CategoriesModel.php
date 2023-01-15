<?php
/**
 * Модель для таблицы категорий (categories)
 */

/**
 * Получить дочернии категории для категории $catId
 *
 * @param integer $catId id категории
 * @return array массив дочерних категорий
 */
function getChildrenForCat($catId)
{
    $sql = 'SELECT * FROM categories WHERE parent_id = ' . $catId;
    $rs = mysqli_query(dbConnect(), $sql);

    return createSmartyRsArray($rs);
}

/**
 * Получить главные категории с привязками дочерних
 *
 * @return array массив категорий
 */
function getAllMainCatsWithChildren()
{
    $sql = 'SELECT * FROM categories WHERE parent_id = 0';
    $rs = mysqli_query(dbConnect(), $sql);


    $smartyRs = [];
    while ($row = mysqli_fetch_assoc($rs)) {

        $rsChildren = getChildrenForCat($row['id']);

        if ($rsChildren) {
            $row['children'] = $rsChildren;
        }

        $smartyRs[] = $row;
    }

    return $smartyRs;
}

/**
 * Получить данные категории по id
 *
 * @param integer $catId ID категории
 * @return array|bool массив - строка категории
 */
function getCatById($catId)
{
    $catId = intval($catId);
    $sql = 'SELECT * FROM categories WHERE id = ' . $catId;
    $rs = mysqli_query(dbConnect(), $sql);


    return mysqli_fetch_assoc($rs);

}

/**
 * Получить все главные категории (категорий которые не являются дочерними)
 *
 * @return array массив категорий
 */
function getAllMainCategories()
{
    $sql = 'SELECT * FROM categories WHERE parent_id = 0';

    $rs = mysqli_query(dbConnect(), $sql);

    return createSmartyRsArray($rs);
}
