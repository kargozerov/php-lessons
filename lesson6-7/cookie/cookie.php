<?php
session_name("NEW_SESSION_NAME");
session_id(get_random());
session_start();

session_regenerate_id();

function get_random() {
    return rand(10, 40);
}
// Cookie небольшие наборы данных, с помощью
// которых можно хранить данные на компьютере пользователя

// Данные хранятся в паре: ключ-значение
// можно задавать время хранения данных
// на компьютере пользователя

// задать Cookie: setcookie();
//name - имя cookie
//value - значение cookie
//expire (необязательный параметр) - время жизни
//path (необязательный параметр) - путь к каталогу на сервере,
// для которого будут доступны cookie
// domain (необязательный параметр) - домен,
// для которого будут доступны cookie
// secure (необязательный параметр) (значения true | false)
// - cookie могут передаваться только по HTTPS
//httponly (необязательный параметр) (значения true | false) -
// - cookie не будут доступны в js

// для получения cookie используется суперглобальный массив $_COOKIE

// отправляет cookie в заголовках сообщения
//setcookie("key", "value");

// в массиве $_COOKIE будут доступны только
// после повторного обращения к серверу
//var_dump($_COOKIE);

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_POST['token']) &&
        $_POST['token'] == file_get_contents('token.txt')) {
        setcookie('color', $_POST['color'], time() + 3600);
        // данные не отправятся на клиент (в браузер), не будут сохранены
//    $_COOKIE['color'] = $_POST['color'];
    }
}

//$color = isset($_COOKIE['color']) ? $_COOKIE['color'] : "blue";
// аналогично
$color = $_COOKIE['color'] ?? "blue";

// хранение данных массивом
setcookie('lang[1]', "PHP");
setcookie('lang[2]', "JavaScript");

var_dump($_COOKIE);

if (isset($_COOKIE['lang'])) {
    echo "Выбранные языки  <br>";
    foreach ($_COOKIE['lang'] as $key => $value){
        echo "$key. $value <br>";
    }
}

$token = md5(get_random());
file_put_contents('token.txt', $token);

?>
<body style="background: <?php echo $color ?>">
<form action="cookie.php" method="post">
    <h6>Изменить цвет фона</h6>
    <select name="color">
        <option value="red">Красный</option>
        <option value="yellow">Желтый</option>
    </select>
    <input type="hidden" value="<?php echo $token ?>">
    <input type="submit" value="Изменить цвет">
</form>
</body>
