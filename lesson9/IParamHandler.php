<?php
// интерфейс
// на основе интерфейса нельзя создать объект
// интерфейсы содержат только абстрактные методы,
// т.е. методы без реализации
// классы, расширающие интерфейсы должны
// реализовать все методы интерфейса
interface IParamHandler
{
    public function read();
    public function write();
    public function addParam($key, $value);
    public function getAllParams();
    public function getParamByKey($key);
}