<?php
session_start(); // инициализация сессии
// сессии,  сохранение данных между последовательными
// пользовательскими запросами
// суперглобальный массив $_SESSION

/*$arr = [];
$arr['username'] = 'qwe';*/

// хранит данные между последовательными запросами
// записываем данные сессии
$_SESSION['auth'] = true;
$_SESSION['username'] = 'qwe';

var_dump($_SESSION);

// проверка наличия переменной в массиве
var_dump(isset($_SESSION['username']));
// удалить переменную
unset($_SESSION['username']);
$_SESSION = [];
// закрытие сесии
session_destroy();
var_dump($_SESSION);

var_dump(session_name());// имя сессии
var_dump(session_id()); // id сессии
var_dump(session_save_path()); // имя каталога с сессиями

//var_dump(session_name(имя));// задать имя сессии
//var_dump(session_id(id)); //задать id сессии
//var_dump(session_save_path(каталог)); //задать имя каталога с сессиями
//session_regenerate_id(); // перегенерация id
?>
<p><a href="session2.php">Session 2</a></p>
