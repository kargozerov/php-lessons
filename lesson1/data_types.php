<?php
// однострочный комментарий
/*
 * многострочный
 * комментарий
 */
# комментарий в стиле unix


//все инструкции разделяются ;

// вывод обной или более строк на экран
//используется для отображения данных в html
//выводимые данные преобразует к строке
echo "Выводимая через ECHO информация";

// функция для отладки
var_dump("Информация для отладки: var_dump()", 45);

echo 'Переменные';
// объявление переменных
$login = 'qwe';
// создали переменную с именем логин,
// присвоили переменной значение qwe
var_dump($login);

$login = 'asd';
// переопределили значение переменной
var_dump($login);

// empty(переменная) | isset(переменная)
var_dump('empty', empty($login));
var_dump('isset', isset($login));

$pwd; // = null;
var_dump('empty', empty($pwd));
var_dump('isset', isset($pwd));

$auth = false; // 0 ''
var_dump('empty', empty($auth));
var_dump('isset', isset($auth));

// empty() проверяет, является ли переменная пустой
// (переменная не существуе или ее значение равно false).
// isset() определяет, установлено ли значение переменной

unset($login); // уничтожает переменную
var_dump($login); // null

// Типы данных
// Скалярные типы данных
echo "Тип Boolean";
// выражает истинность,
// принимает значение либо true либо false
$active = true;
$connected = false;

// при приведении к типу boolean, к false преобразуются:
// 0 | -0 | 0.0 | -0.0 | '' | '0' | пустой массив | null

// приведение к типу boolean (bool) (boolean) перед переменной
$login = (bool) $login;
var_dump($login);

// проверка на тип boolean is_bool();
var_dump(is_bool($login));

echo "Тип Integer";
// целые числа
var_dump(PHP_INT_MAX);
var_dump(PHP_INT_MIN);
var_dump(PHP_INT_SIZE);

// приведение к типу integer (int) (integer) перед переменной
$login = (int) $login;
var_dump($login);

// проверка на integer is_int();
var_dump(is_int($login));

echo "Тип Float | Double | Real";
// числа с плавающей точкой
var_dump(PHP_FLOAT_MAX);
var_dump(PHP_FLOAT_MIN);

// преобразование к числу с плавающей точкой
// (double), (float), (real) перед переменной

$login = (float) $login;
var_dump($login);
// проверка на тип Float is_float()
var_dump(is_float($login));

echo "Тип String";
// строка - (набор символов) массив байт
$first_string = 'Строка отображает все, как текст: \n и $login';
$second_string = "Строка в двойных кавычках распознает 
специальные символы \n и обрабатывает переменные $login";
var_dump($first_string);
var_dump($second_string);

// приведение к строке (string) перед переменной
$login = (string) $login;
var_dump($login);

// проверка на тип string is_string()
var_dump(is_string($login));

var_dump(gettype($login)); // вернет строку с типом данных

// создать три переменные: возраст, имя, фамилия
//вывод на экран: Студент: имя фамилия, возраст лет

/* Смешанные типы
array - массив
object - объкт
callable
iterable*/

/*специальные типы
null
resource - дескриптор ресурсов*/

echo "Константы";
// значение констант нельзя изменить
define('STATUS_OK', 'Ok');
// объявили константу STATUS_OK со значением OK
const STATUS_ERROR = 'Error';
// объявили константу STATUS_ERROR со значением Error

var_dump(STATUS_ERROR);
var_dump(STATUS_OK);
//var_dump(get_defined_constants());

// с версии 5.6 возможно задать константу массивом, используя const
// с версии 7 возможно задать константу массивом, используя define


//gettype()