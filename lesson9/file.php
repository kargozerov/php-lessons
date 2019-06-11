<?php
require_once "TxtHandler.php";
require_once "ParamHandler.php";

$filename = 'config.txt';

// В ParamHandler создаем статический  метод getHandler,
// который в зависимости от переданного файла
// вернет объект либо класса TxtHandler, либо JsonHandler
$handler = ParamHandler::getHandler($filename);
$handler->read();
$handler->write();

/*$file_type = pathinfo($filename, PATHINFO_EXTENSION);

$handler = null;
if ($file_type == 'txt'){
    $handler = new TxtHandler($filename);
} else {
    $handler = new JsonHandler($filename);
}
$handler->read();
$handler->write();*/

//IParamHandler -> ParamHandler -> TxtHandler | JsonHandler
//function some_void(Овощь $овощи){
//    $овощи->eat();
//}