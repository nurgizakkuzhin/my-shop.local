<?php
/**
 * Инициализация подключения к БД
 */

function dbConnect()
{
    $db_config = [
        'db_host' => '127.0.0.1',
        'db_name' => 'myshop',
        'db_user' => 'root',
        'db_password' => 'root'
    ];

    // соединяемся с БД
    $db = mysqli_connect(
        $db_config['db_host'],
        $db_config['db_user'],
        $db_config['db_password'],
        $db_config['db_name']
    );

    if (!$db) {
        return 'Ошибка доступа к MySQL';
    }

    mysqli_set_charset($db, 'utf-8');

    if (!mysqli_select_db($db, $db_config['db_name'])) {
        return 'Ошибка доступа к базе данных ' . $db_config['db_name'];
    }

    return $db;
}