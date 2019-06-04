<?php
session_start();
$auth = $_SESSION['auth'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav>
    <ul>
        <li><a href="#">Страница 1</a></li>
        <li><a href="#">Страница 2</a></li>
        <li>
            <?php if($auth): ?>
            <a href="logout.php">Выйти</a>
            <?php else: ?>
            <a id="open_modal">Войти</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>

<!--модальное окно-->
<div class="modal">
    <p id="errors"></p>
    <form name="auth_form" action="form_handler.php" method="post">
        <p><input class="validate" type="text" name="login" placeholder="логин"></p>
        <p><input class="validate" type="password" name="password"
                  placeholder="пароль"></p>
        <p>
            <input type="submit" value="Отправить">
            <input id="cancel" type="button" value="Отмена">
        </p>
    </form>
</div>

<h3>Страница доступна всем пользователям</h3>

<?php if(!$auth): ?>
<script src="js/form.js"></script>
<?php endif;?>

</body>
</html>

