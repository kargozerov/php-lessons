<?php
declare(strict_types=1);

class Pet
{
    // значение свойств по-умолчанию
    // модификатор protected означает, что свойство или метод
    // доступны внутри родительского и дочерних классов
    protected $name = 'Без имени';
    private $age;

    public function __construct(int $age)
    {
        $this->age = $age;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    public function run(){
        echo "$this->name бежит<br>";
    }

    public function stop(){
        echo "$this->name остановился<br>";
    }

}