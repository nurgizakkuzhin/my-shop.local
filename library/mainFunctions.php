<?php
/**
 * Основные функции
 */

/**
 * Формирование запрашиваемой страницы
 *
 * @param string $controllerName название контроллера
 * @param string $actionName название функции обработки страницы
 * @param string $smarty шаблонизатор
 */
function loadPage($smarty, $controllerName, $actionName = 'index')
{
    include_once PathPrefix . $controllerName . PathPostfix; //подключаем контроллер

    $function = $actionName . 'Action'; //формируем названия фукнции и вызываем ее
    $function($smarty);
}

/**
 * Загрузка шаблона
 *
 * @param object $smarty объект шаблонизатора
 * @param string $templateName название файла шаблона
 */
function loadTemplate($smarty, $templateName)
{
    $smarty->display($templateName . TemplatePostfix);
}

/**
 * Фукнция отладки. Останавливает работу программы выводя значение перемменной $value
 *
 * @param null $value
 * @param int $die
 */
function d($value = null, $die = 1)
{
    echo 'Debug: <br><pre>';
    print_r($value);
    echo '</pre>';

    if ($die) {
        die;
    }
}

/**
 * Преобразование результата работы функции выборки в ассоциативный массив
 *
 * @param recordset $rs набор строк - результат работы SELECT
 * @retrun array
 */
function createSmartyRsArray($rs)
{
    if (!$rs) {
        return false;
    }

    $smartyRs = [];
    while ($row = mysqli_fetch_assoc($rs)) {
        $smartyRs[] = $row;
    }
    return $smartyRs;
}