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

    public static function getHandler($filename){
        $file_type = pathinfo($filename, PATHINFO_EXTENSION);
        if (!$file_type) {
            echo "Тип файла не известен";
            return false;
        }

        // формируем имя класса
        $classname = ucfirst(strtolower($file_type)) . 'Handler';
        //TxtHandler
        //JsonHandler
        $path = __DIR__ . '/' . $classname . '.php';
        //TxtHandler.php
        //JsonHandler.php

        require_once $path;

        if (!class_exists($classname)){
            echo "Класса не существует <br>";
            return false;
        }

        $obj = new $classname($filename);
        //$obj = new TxtHandler($filename);
        //$obj = new JsonHandler($filename);

        //  Проверяет, содержит ли объект в своем дереве
        // предков указанный класс либо прямо реализует его
        if (!is_subclass_of($obj, 'IParamHandler')){
            echo "Реализован не IParamHandler интерфейс";
            return false;
        }
        return $obj;
    }
}