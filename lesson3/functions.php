<?php
declare(strict_types=1);
// именованые и анонимные функции

// объявление функции
/*function имя_функции($arg1, &$arg2, $arg='default', ...$args){
    тело функции;
    return 'возвращаемое значение';
}*/

// вызов функции
//имя_функции(параметры);

// аргументы, передаваемые по значению
function div($a, $b){
    if(!$b) {
        return 'Деление на 0, введите другое число';
    }
    return $a / $b;
}

var_dump(div(34, 0));
var_dump(div(34, 2));

// аргументы, передаваемые по ссылке
$str = 'Строка';

function change_str(&$string) {
    $string .= ' После преобразование в функции';
}

var_dump($str);
change_str($str);
var_dump($str);

// аргументы по умолчанию

function greeting_user($username='Гость'){
    echo "<h3> Добро пожаловать $username </h3>";
}

greeting_user();
greeting_user('Alex');

// переменное количество аргументов
function get_sum(...$nums){ // $nums - массив с параметрами
    return array_sum($nums);
}

var_dump(get_sum(3, 7, 8, 1));
var_dump(get_sum(3, 7));

// функции для работы с аргументами
function show_func_args(){
    var_dump(func_get_args());
    var_dump(func_get_arg(1));
    var_dump(func_num_args());
}

show_func_args(23, "srt", null, [1, 5]);


// тип аргументов, тип возвращаемого значения
// PHP5 тип аргумента: array, имя класса
// PHP7.0 тип аргумента: array, имя класса + скалярные типы
// PHP7.0 тип возвращаемого значения

function sum(int $a, int $b):int
{
    return $a + $b;
}

//var_dump(sum(false, 4.5));
var_dump(sum(4, 2));


// static переменная в функциях
function counter(){
    static $counter = 0;
    $counter++;
    return $counter;
}

var_dump(counter());
var_dump(counter());
var_dump(counter());
var_dump(counter());

// область видимости
$some_var = 'переменная вне функции';
const OUT_CONST = 'Константа вне функции';

function some_function(){
    // обращение к внешней переменной внутри функции не доступно
    var_dump($some_var);
    $some_var = 'локальная переменна функции';
    // обращение к константе внутри функции
    var_dump(OUT_CONST);
}
var_dump($some_var);
some_function();

// вернуть несколько значений из функции
function return_num_arr(){
    $a = 2;
    $b = 3;
    return [$a, $b];
}

function return_assoc_arr(){
    $a = 2;
    $b = 3;
    return [
        'first' => $a,
        'second'=> $b,
    ];
}
var_dump(return_num_arr(), return_assoc_arr());



