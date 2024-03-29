<?php
var_dump(realpath('some_dir/file1.txt'));
var_dump(getcwd()); // текущее местоположение
//chdir("имя папки");

// копирование
if (copy('some_dir/file1.txt', 'some_dir/file2.txt')) {
    echo "Копирование завершено <br>";
}

// переименование
/*if (rename('some_dir/file3.txt',
    'some_dir/new_file.txt')){
    echo "Файл переименован <br>";
}*/

// удаление файла
/*if (unlink('some_dir/new_file.txt')){
    echo "Файл удален <br>";
}*/

// создание директории
mkdir("new_dir");
// удаление директории
rmdir("new_dir");

function read_dir($dirname){
    if (is_dir($dirname)){
        if ($dh = opendir($dirname)) {
            var_dump($dh);
            while (($file = readdir($dh)) !== false){
                echo 'file: ' . $file .
                    ' type: ' . filetype($dirname . '/' . $file) . "<br>";
            }
            closedir($dh);
        }
    }
}

read_dir("some_dir");

// чтение из файла
function read_file_fread($filename){
    $fp = fopen($filename, 'r');
//    $contents = fread($fp, filesize($filename));
    // чтение с буфером
    $contents = null;
    while (!feof($fp)){
        $contents .= fread($fp, 8192);
    }
    fclose($fp);
    return $contents;
}
$filename = 'some_dir/file1.txt';
echo read_file_fread($filename);

// fgets()
function read_file_fgets($filename){
    $buf = null;
    $fp = fopen($filename, 'r');
    if (!$fp){
        return false;
    }
    while (!feof($fp)){
        $buf .= fgets($fp, 4096);
    }
    fclose($fp);
    return $buf;
}
read_file_fgets($filename);




file_get_contents($filename);
file_put_contents($filename,
    "то, что нужно записать",
    FILE_APPEND | LOCK_EX);

// чтение в массив
$arr = file($filename, FILE_IGNORE_NEW_LINES  |
    FILE_SKIP_EMPTY_LINES);
var_dump($arr);

function write_file($filename, $data){
    $fp = fopen($filename, 'a');
    fwrite($fp, $data);
    fclose($fp);
}

//открывает файл для чтения или записи,
//возвращает дескриптор ресурсов
//$fp = fopen(имя_файла, режим);
//режим: запись в конец файла 'a', чтение 'r' и тд
//$fp - дескриптор ресурсов (канал связи между php программой и файлом)
//fread($fp, length) - читает из канала $fp на length
//fgets($fp) - читает одну строку из канала $fp
//fgets($fp, length) - читает на length из канала $fp
//fwrite($fp, данные_для_записи) - записывает 'данные_для_записи'
//в канал $fp
//fclose($fp) закрывает дескриптор ресурсов
//(канал связи между php программой и файлом)
//
//file_get_contents = fopen() + fread() + fclose()
//file_put_contents = fopen() + fwrite() + fclose()