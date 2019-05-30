<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
<p id="errors"></p>
<form name="someForm" method="post" action="form_handler.php">
    <p><input class="validate" type="text" placeholder="login" name="login"></p>
    <p><input class="validate" type="password" placeholder="password" name="password"></p>
    <p><label>Одиночный чекбокс<input type="checkbox" name="single"></label></p>
    <p>Группа чекбоксов</p>
    <p><label>Синий<input type="checkbox" name="color[]"></label></p>
    <p><label>Красный<input type="checkbox" name="color[]"></label></p>
    <p><label>Зеленый<input type="checkbox" name="color[]"></label></p>
    <select name="country">
        <option value="1">Россия</option>
        <option value="2">Бельгия</option>
    </select>
    <p><input type="submit" value="Отправить"></p>
</form>

<script src="form.js"></script>

</body>
</html>