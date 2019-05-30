<?php
// Клиент отправляет запрос серверу (сообщение),
// сервер возвращает ответ (сообщение)
// Сообщение состоит из:
//1. строка запроса (адрес, метод передачи, версия http)
//2. заголовки (для передачи дополнительной информации)
//3. тело сообщения

$server = $_SERVER;
var_dump($server);

// корневая директория сервера
$document_root = $server['DOCUMENT_ROOT'];
var_dump($document_root);

$http_host = $server['HTTP_HOST'];
var_dump($http_host);

$uri = $server['REQUEST_URI'];
var_dump($uri);

$url = 'http://' . $http_host . $uri;

// распарсить строку запроса
$parse_url = parse_url($url);
var_dump($parse_url);

// В строке запроса можно использовать:
// 1. латинские буквы
// 2. цифры
// 3. некоторые знаки препинания
// Все остальные символы должы быть закодированы

$str_url = 'http://host?имя=олег&возраст=33 года';
// функции кодировки
var_dump(urlencode($str_url)); // + для пробела
var_dump(rawurlencode($str_url)); // %20 для пробела

// декодирование
var_dump(urldecode(urlencode($str_url)));
var_dump(rawurldecode(rawurlencode($str_url)));

// формирование запроса для отправки на другой сервер
$data = [
  'id'=>2,
  'login'=>'qwe'
];
$url = 'http://host/page?' . http_build_query($data);
var_dump($url);

// клиент может передавать данные методом get, post и др
// get запрос
// всегда передаются в строке запроса
// имеют ограничения по размеру
// кешируются
// остаются в истории браузера

$get = $_GET;
//http://php-lessons/lesson4/request_response.php?id=23&login=qwe
var_dump($get);

$id = $get['id'];
var_dump($id);

// post запрос
// все передаваемые данные скрыты
// не кешируются
// не остаются в истории браузера

$post = $_POST;
var_dump($post);

$login = $post['login'];
var_dump($login);















