<?php
//PDO
//mysql -u имя_пользователя -p
//база данных pdo
//CREATE DATABASE pdo;
//USE pdo;
//таблица Book
//id
//title
//pageCount
//CREATE TABLE book (
//    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
//    title TEXT NOT NULL,
//    pageCount INT NOT NULL
//);

//INSERT INTO book (title, pageCount) VALUES ('Азбука', 100);
//INSERT INTO book (title, pageCount) VALUES ('Сказки', 700);

// данные, необходимые для соединения с бд
$server = 'localhost'; // адрес сервера
$dbName = 'pdo'; // имя бд
$username = 'root'; // имя пользователя бд
$pwd = ''; // пароль пользователя бд

// дополнительные опции соединения (использовать не обязательно)
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // отображать ошибки
//    PDO::ATTR_PERSISTENT => true // держать соединение открытым
];
// создание объекта PDO - соединение с бд
$connection = new PDO("mysql:host=$server;dbname=$dbName",
    $username, $pwd, $options);
var_dump($connection);

//sudo apt-get install php7.x-mysql
//sudo service php7.x-fpm restart


// неподготовленные запросы
$sql = 'SELECT * FROM book'; // строка запроса
//query(строка запроса) - вернет объект PDOStatement
$statement = $connection->query($sql);
// получаем данные
$data = $statement->fetchAll(PDO::FETCH_ASSOC);
//PDO::FETCH_ASSOC - данные вида [[key=>value],[key=>value]]
var_dump($data);

// подготовленные запросы (именованные параметры)
// использовать, когда в строку запроса
// передаются данные от клиента (пользователя)
$sql = 'SELECT * FROM book WHERE id=:id';
$id = 2;
$params = [
    'id' => $id
    ];
// метод prepare вернкт объект PDOStatement
$statement = $connection->prepare($sql);
// выполняем запрос
$statement->execute($params);
// получение данных
$data = $statement->fetch(PDO::FETCH_ASSOC);
var_dump($data);

$sql = 'INSERT INTO book (title, pageCount) 
                    VALUES (:bookTitle, :bookPageCount)';
//1. title и pageCount - названия столбцов в таблице book
//2. : - используются именованные параметры
//3. bookTitle и bookPageCount - имена параметров,
// должны соответствовать ключам в массиве с параметрами
$title = 'Колобок';
$pageCount = 70;

$params = [
    'bookTitle' => $title,
    'bookPageCount' => $pageCount
];
$statement = $connection->prepare($sql);
//if ($statement->execute($params)) {
//    echo "Данные успешно добавлены<br>";
//}

// задание: обновление записи с id = 3 (новые title и pageCount)

// подготовленные запросы (неименованные параметры)
$sql = 'SELECT * FROM book WHERE title=? AND id=?';
$id = 1;
$title = 'Азбука';
// порядок элементов в массиве с параметрами имеет значение:
// на место первого ? подставляется элемент массива с индексом 0,
// на место второго ? подставляется элемент массива с индексом 1 и тд
$params = [$title, $id];
$statement = $connection->prepare($sql);
$statement->execute($params);
$data = $statement->fetch(PDO::FETCH_ASSOC);
var_dump($data);

// методы query, prepare, execute, fetch, fetchAll
// возвращают false в случае ошибки


// транзакции
//$connection->beginTransaction();
// запрос 1 execute() | exec() | query()
// запрос 2
// и тд
//$connection->rollBack(); //в случае ошибки, откат транзакции,
   // не будет выполнен ни однин запрос
//$connection->commit(); //выполнение (фиксация) всех запросов в бд

