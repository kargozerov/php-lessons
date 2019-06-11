<?php
//require_once "IParamHandler.php";
require_once "ParamHandler.php";
// расширение интерфейсов реализуется
// словом implements
// один класс может расширять несколько интерфейсов
// классы, расширающие интерфейсы должны
// реализовать все методы интерфейса

// наследование от абстрактного класса ParamHandler
class TxtHandler extends ParamHandler //implements IParamHandler
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

    public function read(){
        echo "Чтение из TXT файла <br>";
    }
    public function write(){
        echo "Запись в TXT файл <br>";
    }

}