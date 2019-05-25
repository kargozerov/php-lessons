<?php
echo "Массивы";
// создать пустой массив
$arr = array();
$arr = [];

// нумерованные массивы
$arr = array(4, 7, 9, 23);
$arr = [4, 7, 9, 23];
var_dump($arr);

// обращение к элементу массива по индексу
$arrElem = $arr[2];
var_dump($arrElem);

$arr[2] = 2645;
var_dump($arr);

// ассоциативные массивы
$arr = [
    'key1' => 'value 1',
    'key2' => 'value 2',
    'key3' => 'value 3',
];

var_dump($arr);

$arrElem = $arr['key1'];
var_dump($arrElem);

$arr['key1'] = 'новое значение';
var_dump($arr);


// перебрать массив foreach
$arr = [4, 7, 9, 23];
foreach ($arr as $value) {
    // на каждой итерации в $value копируется значение элемента массива
    $value += 50; // нельзя изменить значения элементов массива
    var_dump($value);
}
var_dump($arr);

// начиная с php7
// можно изменить значения элементов массива
// передав их по ссылке
foreach ($arr as &$value) {
    var_dump($value);
    $value += 50;
}
unset($value);
var_dump($arr);

$a = 6;
$b = $a;
var_dump($a);
var_dump($b);
$b = 8;
var_dump($a);
var_dump($b);


$c = 6;
$e = $c;
var_dump($c);
var_dump($e);
$e = 34;
var_dump($c);
var_dump($e);

$userInfo = [
    'id' => 1,
    'login' => 'qwe',
    'pwd' => 123
];

foreach ($userInfo as $key => $value) {
    // на каждой итерации в $key копируется ключ
    // на каждой итерации в $value копируется значение
    var_dump($key . ' = ' . $value);
}

// альтернативный синтаксис (для html)
//foreach(массив as ключ => значение):
//    тело цикла;
//endforeach;
