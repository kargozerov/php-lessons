<?php

// класс, который хранит информацию о владельце абонемента
class ClientData
{
    private $name;
    private $surname;
    private $birthDate;

    public function __construct(string $name, string $surname,
                                DateTime $birthDate)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthDate = $birthDate;
    }

    public function getName(){
        return $this->name;
    }
    public function getSurname(){
        return $this->surname;
    }
}

