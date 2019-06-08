<?php
// подключили файл User.php
require_once "User.php";
require_once "Article.php";

// объекты создаются только
// на основе заранее созданных классов
// при помощи ключевого слова new

// создадим объект класса User
$qwe = new User();
// создадим еще один объект класса User
$asd = new User();

//доступ к доступным свойствам и методам
// осуществляется через -> имя_объекта->имя_свойства

// установим значение свойства $name для объектов
// доступ к приватным свойствам только внутри класса
//$qwe->name = "Mike";
$qwe->setName("Mike");
var_dump($qwe);

$asd->setName("Alex");
var_dump($asd);

// получим значение свойства $name у объектов
// доступ к приватным свойствам только внутри класса
//var_dump($asd->name);
var_dump($qwe->getName());
var_dump($asd->getName());

$qwe->setLogin("qwe");
$asd->setLogin("asd");

var_dump($qwe->getLogin());
var_dump($asd->getLogin());

$artile1 = new Article(); //вызов конструктора
//$artile1->setDate();
$artile1->setTitle("Статья 1");
$artile1->setAuthor($qwe);

$artile2 = new Article(); //вызов конструктора
//$artile2->setDate();
$artile2->setTitle("Статья 2");
$artile2->setAuthor($qwe);

$artile3 = new Article(); //вызов конструктора
//$artile3->setDate();
$artile3->setTitle("Статья 3");
$artile3->setAuthor($asd);

var_dump($artile1->getAuthor()->getLogin());

$qwe->addArticle($artile1);
$qwe->addArticle($artile2);

