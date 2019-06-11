<?php
require_once "IParamHandler.php";
// 1. Абстрактный класс может содержать
// абстрактные методы и методы с реализацией.
// 2. Классы, которые наследуются от абстрактного должны
// реализовать все его абстрактные методы или класс сам
// должен стать абстрактным.
abstract class ParamHandler implements IParamHandler
{
    // вынесли дублирующийся код
    // из файлов TxtHandler и JsonHandler
    protected $filename;
    protected $params = [];

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
    }

    // абстрактные методы (методы без реализации)
    abstract public function read();
    abstract public function write();
}