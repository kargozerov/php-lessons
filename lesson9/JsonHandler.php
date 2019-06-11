<?php
//require_once "IParamHandler.php";
require_once "ParamHandler.php";

class JsonHandler extends ParamHandler//implements IParamHandler
{
    // дублирование кода необходимо
    // выносить в отдельный класс
    /*private $filename;
    private $params = [];

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function addParam($key, $value){
        $this->params[$key] = $value;
    }
    public function getAllParams(){
        return $this->params;
    }
    public function getParamByKey($key){
        return $this->params[$key];
    }*/

    // реализация методов read() и write()
    // уникальна для каждого класса
    public function read(){
        echo "Чтение из JSON файла <br>";
    }
    public function write(){
        echo "Запись в JSON файл <br>";
    }
}