<?php
// данные из формы в массиве $_POST
$post = $_POST;
var_dump($post);

// данные о загружаемых файлах в массиве $_FILES
$files = $_FILES;
var_dump($files);

// имя файла
$name = $files['picture']['name'];
var_dump($name);

// расширение файла
$ext = pathinfo($name, PATHINFO_EXTENSION);
var_dump($ext);

// файл во временной директории
$tmp_name = $files['picture']['tmp_name'];
var_dump($tmp_name);

$name = md5($name); // + дата
var_dump($name);

// обязательно проверить на type
// обязательно проверить на размер

// перемещение файла
if (move_uploaded_file($tmp_name, "img/$name.$ext")){
    echo "Файл успешно загружен";
} else {
    echo "Файл не был загружен";
}






