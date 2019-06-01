<?php
// подключение php файлов в текущий файл
// если файл на нейден, подключение приведет к ошибке
//require "имя файла";
//require_once "имя файла";
// если файл на нейден, скрипт продолжит работу
//include "имя файла";
//include_once "имя файла";
require_once "data.php";
$article = getArticle();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php include_once "header.php"?>

<h1>Статья: <?php echo $article['title'] ?></h1>

</body>
</html>