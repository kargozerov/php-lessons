<?php
session_start();

// варианты ответа сервера
const AUTH_OK = 'ok';
const AUTH_ERROR = 'error';

function check_auth_data($login, $password){
    if (!$login || !$password) return false;
    if (trim($login) != 'qwe' || trim($password) != '123') return false;
    return true;
}

function answer(){
    $post = $_POST;
    $login = $post['login'];
    $password = $post['password'];
    if (!check_auth_data($login, $password)) return AUTH_ERROR;
    $_SESSION['auth'] = true;
    $_SESSION['login'] = $login;
    return AUTH_OK;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo answer();
}