<?php
require_once "Utils.php";

// обращение к статичеким свойствам
var_dump(Utils::$staticProp);
$res = Utils::sum(3, 5);
var_dump($res);