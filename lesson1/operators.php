<?php
// операторы PHP
echo "Арифметические операторы";
// + - / *
// % взятие остатка от деления
// ** возведение в степень
// . конкатенация строк

$bool = false;
$int = 44;
$string = 'Строка';
$int_in_str = '2';

echo "44 / на 2, 5, 0";
var_dump($int / 2);
var_dump($int / 5);
var_dump($int / 0);

echo "44 / * - + на строку '2'";
var_dump($int / $int_in_str);
var_dump($int * $int_in_str);
var_dump($int - $int_in_str);
var_dump($int + $int_in_str);

echo "44 / * - + на булевый тип false";
var_dump($int / $bool);
var_dump($int * $bool);
var_dump($int - $bool);
var_dump($int + $bool);

//var_dump($int + $string);
echo "Конкатенация 44 и 'Строка'";
var_dump($int . $string);

echo "Возведение в степень";
var_dump($int ** 2);

echo "Операторы сравнения возвращают true или false,
кроме <=>, который возвращает 0, 1 или -1";
// > < >= <= != !== == ===
var_dump($int > 90);
var_dump($int == '44');
var_dump($int === 44);
var_dump($int === '44');

// <=> начиная с версии 7.0
var_dump($int <=> 44); // 0
var_dump($int <=> 90); // -1
var_dump($int <=> 13); // 1

echo "операторы присваивания ", "= += -= *= /= %= .= <br>";
$login = 'qwe';
$login .= '3'; // эквивалентно записи $login = $login . '3';
var_dump($login);

echo "инкремент(++) и декремент(--) <br>";
// функции округления чисел: round() ceil() floor()







