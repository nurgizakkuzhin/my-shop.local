<?php

/**
 * Модель для таблицы пользователей(users)
 */

/**
 * Регистрация нового пользователя
 *
 * @param string $email почта
 * @param string $pwdMD5 пароль зашифрованный в MD5
 * @param string $name имя пользователя
 * @param string $phone телефон
 * @param string $adress адрес пользователя
 * @return array массив данных нового пользователя
 *
 */
function registerNewUser($email, $pwdMD5, $name, $phone, $adress)
{
    $email = htmlspecialchars(mysqli_real_escape_string($email));
    $name = htmlspecialchars(mysqli_real_escape_string($name));
    $adress = htmlspecialchars(mysqli_real_escape_string($adress));
    $phone = htmlspecialchars(mysqli_real_escape_string($phone));

    $sql = "INSERT INTO users (`email`, `pwd`, `name`, `phone`, `adress`) 
            VALUES ('{$email}', '{$pwdMD5}', '{$name}', '{$phone}', '{$adress}')";

    $rs = mysqli_query(dbConnect(), $sql);

    if ($rs) {
        $sql = "SELECT * FROM users WHERE (`email` = '{$email}' and `pwd` = '{$pwdMD5}') LIMIT 1";

        $rs = mysqli_query(dbConnect(), $sql);
        $rs = createSmartyRsArray($rs);

        if (isset($rs[0])) {
            $rs['success'] = 1;
        } else {
            $rs['success'] = 0;
        }
    } else {
        $rs['success'] = 0;
    }

    return $rs;
}