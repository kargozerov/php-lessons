<?php
session_start();
if (!isset($_SESSION['auth'])) {
    header('Location: page.php');
}
$login = $_SESSION['login'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="#">Страница 1</a></li>
        <li><a href="#">Страница 2</a></li>
        <li><a href="logout.php">Выйти</a></li>
    </ul>
</nav>

<h2><?php echo $login; ?>, здесь Ваш личный кабинет</h2>

</body>
</html>