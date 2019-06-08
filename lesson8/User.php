<?php
declare(strict_types=1);
// объявление класса
class User
{
    // описание класса

    // свойства (характеристики), которыми будут обладать
    // объекты класса User
    // свойства - переменные, объявленные внутри класса
    // модификатор доступа private означает, что свойство
    // $name доступно только внутри класса
    private $name = null;
    private $login = null;
    private $articles = [];

    public function addArticle(Article $article){
        array_push($this->articles, $article);
    }

    public function getArticles(){
        return $this->articles;
    }


    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin(string $login)
    {
        if (strlen($login) < 2) {
            echo "Значение свойства должно быть больше 2 <br>";
            return;
        }
        $this->login = $login;
    }

    // меотод - функция, объявленная внутри класса
    // модификатор доступа public означает, что свойство
    // или метод доступны везде
    public function setName(string $name){
        // если версия PHP  не позволяет задать тип аргумента
        // if (!is_string($name)){ return false; }

        // установка свойства через метод (сеттер)
        // нужна для того, чтобы проверять входящие данные
        // и обезопасить данные свойства
        if (strlen($name) < 4) {
            echo "Значение свойства должно быть больше 4 <br>";
            return;
        }
        // $this - ссылка на текущий объект
        $this->name = $name;
    }

    // геттеры нужны для того, чтобы вернуть значение свойства
    public function getName(){
        return $this->name;
    }
}