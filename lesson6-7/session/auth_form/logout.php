<?php
session_start();

function logout(){
    // удалить переменные из сессии
    unset($_SESSION['auth']);
    unset($_SESSION['login']);
    // очистить массив целиком
    $_SESSION = [];
    // уничтожение сессии
    session_destroy();
    // перенаправление пользователя на page.php
    // генерация ответа сервера (заголовки отправляются)
    header('Location: page.php');
}
logout();