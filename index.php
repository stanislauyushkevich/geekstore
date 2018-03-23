<?php
    // общие настройки
    ini_set('display_errors',1);//показываем ошибки
    error_reporting(E_ALL);

    // ПОДКЛЮЧЕНИЕ ФАЙЛОВ СИСТЕМЫ
    define("ROOT", dirname(__FILE__));

    require_once (ROOT . '/components/Autoload.php');
    session_start();
    $router = new router();
    $router -> run();


?>
