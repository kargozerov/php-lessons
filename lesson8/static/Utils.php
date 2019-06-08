<?php
/**
 * Created by PhpStorm.
 * User: АУД-201
 * Date: 08.06.2019
 * Time: 21:41
 */

class Utils
{
    private $someProp;
    public static $staticProp = 'Статическое свойство';

    // статические методы и свойства класса
    // принадлежат классу, а не объекту
    // чтобы обратиться к статическим свойствам и методам
    // не нужно создавать объект
    public static function sum($a, $b){
//        1. статические методы не имеют $this
//        2. $someProp - из статического метода нельзя
//        обращаться к нестатическим свойствам и методам
//        3. для обращения к статическим переменным и константам
//        внутри статических методов используется static::
        var_dump(static::$staticProp);
        return $a + $b;
    }
    public static function div($a, $b) {
        return $a / $b;
    }
}