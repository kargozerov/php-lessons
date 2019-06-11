<?php
require_once "TxtHandler.php";

$filename = 'config.txt';

$file_type = pathinfo($filename, PATHINFO_EXTENSION);

$handler = null;
if ($file_type == 'txt'){
    $handler = new TxtHandler($filename);
} else {
    $handler = new JsonHandler($filename);
}
$handler->read();
$handler->write();

//function some (IParamHandler $handler){
//    $handler->read();
//}