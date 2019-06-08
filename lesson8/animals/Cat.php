<?php
require_once "Pet.php";
//класс Cat наследует (расширяет) класс Pet,
// и получает доступ ко всем не private свойствам и методам
class Cat extends Pet
{
//    parent::имя_метода()
// - для вызова метода родителя внутри дочернего класса
    public function __construct(int $age)
    {
        parent::__construct($age);
    }

    // переопределение метода родителя
    public function run()
    {
        parent::run(); //  вызов run() родителя
        // расширение метода родителя
        echo "$this->name быстро бежит<br>";
    }

}
