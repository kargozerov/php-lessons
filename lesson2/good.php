<?php


$goods = [
    [
        'id'=>1,
        'title'=>'Piano',
        'price'=>2345
    ],
    [
        'id'=>2,
        'title'=>'Guitar',
        'price'=>1753
    ],
    [
        'id'=>3,
        'title'=>'Drum',
        'price'=>1224
    ],
];

$get = $_GET;
$id = $get['id']; // получаем id товара

// TODO: получить товар из массива $goods по id, сохранить в переменную $good


$isAuth = false; // флаг - авторизован пользователь или нет

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<section>
<!--    TODO: вывести информацию о товаре $good-->
</section>


<!--    TODO: если пользователь авторизован $isAuth - отобразить блок для добавления комментариев, в противном случае, сообщить, что ему нужно авторизоваться-->




</body>
</html>
