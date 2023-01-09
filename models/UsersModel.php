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
    $email = htmlspecialchars(mysqli_real_escape_string(dbConnect(), $email));
    $name = htmlspecialchars(mysqli_real_escape_string(dbConnect(), $name));
    $adress = htmlspecialchars(mysqli_real_escape_string(dbConnect(), $adress));
    $phone = htmlspecialchars(mysqli_real_escape_string(dbConnect(), $phone));

    $sql = "INSERT INTO users 
            (`email`, `pwd`, `name`, `phone`, `adress`) 
            VALUES ('{$email}', '{$pwdMD5}', '{$name}', '{$phone}', '{$adress}')";

    $rs = mysqli_query(dbConnect(), $sql);

    if ($rs) {
        $sql = "SELECT * FROM users 
                WHERE (`email` = '{$email}' and `pwd` = '{$pwdMD5}') LIMIT 1";

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

/**
 * Проверка параметров для регистрации пользователя
 *
 *
 * @param string $email email
 * @param string $pwd1 пароль
 * @param string $pwd2 повтор пароля
 *
 * @return array результат
 */
function checkRegisterParams($email, $pwd1, $pwd2)
{
    $res = null;

    if (!$email) {
        $res['success'] = false;
        $res['message'] = 'Введите email';
    }

    if (!$pwd1) {
        $res['success'] = false;
        $res['message'] = 'Введите пароль';
    }

    if (!$pwd2) {
        $res['success'] = false;
        $res['message'] = 'Введите повтор пароля';
    }

    if ($pwd1 != $pwd2) {
        $res['success'] = false;
        $res['message'] = 'Пароли не совпадают';
    }

    return $res;
}

/**
 * Проверка почты (есть ли email адрес в БД)
 *
 * @param string $email
 * $return array массив - строка из таблицы users, либо пустой массив
 */
function checkUserEmail($email)
{
    $email = mysqli_real_escape_string(dbConnect(), $email);
    $sql = "SELECT id FROM users WHERE email = '{$email}'";

    $rs = mysqli_query(dbConnect(), $sql);
    $rs = createSmartyRsArray($rs);

    return $rs;
}

/**
 * Авторизация пользователя
 *
 * @param string $email почта (логин)
 * @param string $pwd пароль
 * @return array массив данных пользователя
 */
function loginUser($email, $pwd)
{
    $email = htmlspecialchars(mysqli_real_escape_string(dbConnect(), $email));
    $pwd = md5($pwd);

    $sql = "SELECT * FROM users WHERE (`email` = '{$email}' and `pwd` = '{$pwd}') LIMIT 1";
    $rs = mysqli_query(dbConnect(), $sql);

    $rs = createSmartyRsArray($rs);
    if (isset($rs[0])) {
        $rs['success'] = 1;
    } else {
        $rs['success'] = 0;
    }

    return $rs;
}

/**
 * Изменение данных пользователя
 *
 * @param string $name имя пользователя
 * @param string $phone телефон
 * @param string $adress адрес
 * @param string $pwd1 новый пароль
 * @param string $pwd2 повтор нового пароля
 * @param string $curPwd текущий пароль
 * @return boolean true/false в случае успеха или провала
 */
function updateUserData($name, $phone, $adress, $pwd1, $pwd2, $curPwd)
{

}