<?php
require_once "Cat.php";
$cat = new Cat(2);
$cat->setName("Кот");
$cat->run();
$cat->stop();