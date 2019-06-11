<?php

class Article
{
    private $title;
    private $text;
    private $date;
    private $author;

    // конструктор класса вызывается автоматически
    // при создании объекта
    function __construct()
    {
        $this->date = date_create();
    }


    public function setDate(DateTime $date)
    {
        $this->date = $date;
    }


    public function getDate(){
        return $this->date;
    }



    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }





    public function setAuthor(User $author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }



}