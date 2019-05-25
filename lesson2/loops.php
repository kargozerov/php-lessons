<?php
echo "логические операторы", "&& and - и", "|| or - или", "! не", "xor исключающее или";

$a = 23;
$b = 45;
$c = 12;

$res = ($c > $a && $c < $b) ? "значение с между $a и $b": "c вне диапазона $a и $b";
var_dump($res);

$a = 45;
$b = 45;

var_dump($a == 45 xor $b == 45);
var_dump($a == 45 xor $b == 56);

$login;
$login = $login ?? "Значение по-умолчанию";
var_dump($login);
// еквивалентно
$login = isset($login) ? $login : "Значение по-умолчанию";
var_dump($login);


// альтернативный синтиксис if else
/*if (условие):
    code
elseif (условие):
    code
else:
    code
endif;*/


// альтернативный синтаксис switch
/*switch (переменная или выражение):
    case вариант1:
        код;
        break;
    case вариант2:
    case вариант3:
        код;
        break;
    default:
        код;
endswitch; */

// альтернативный синтаксис while и for

//while (условие):
//    тело цикла;
//endwhile;


//for (начало; проверка условие; обновление счетчика):
//    тело цикла;
//endfor;

