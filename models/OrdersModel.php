<?php
/**
 * Модель для таблицы заказов(orders)
 */

/**
 * Создание заказа (без привязки товара)
 *
 * @param string $name;
 * @param string $phone;
 * @param string $adress;
 * @return integer ID созданного заказа
 */
function makeNewOrder($name, $phone, $adress)
{
    //>инициализация переменных
    $userId = $_SESSION['user']['id'];
    $comment = "id пользователя: {$userId}<br>
                Имя: {$name}<br>
                Телефон: {$phone}<br>
                Aдрес: {$adress}";
    $dateCreated = date('Y.m.d H:i:s');
    $userIp = $_SERVER['REMOTE_ADDR'];
    //<

    //Формирование запроса к БД
    $sql = "INSERT INTO 
            orders (`user_id`, `date_created`, `date_payment`, `status`, `comment`, `user_ip`)
            VALUES 
            ('{$userId}', '{$dateCreated}', null, '0', '{$comment}', '{$userIp}')";

    $rs = mysqli_query(dbConnect(), $sql);

    //> получить id созданного заказа
    if ($rs) {
        $sql = "SELECT id FROM orders ORDER BY id DESC LIMIT 1";

        $rs = mysqli_query(dbConnect(), $sql);

        // преобразование результатов запроса
        $rs = createSmartyRsArray($rs);

        // возвращаем id созданного запроса
        if (isset($rs[0])) {
            return $rs[0]['id'];
        }
    }
    //<

    return  false;
}