<?php

$a = 5;
$a = $a++ - --$a; // 0

$var = 'false'; // true

$var = 0; // false

$var = -100; // true
$var = ' ';  // true
$var = '000';  // true

$float = 5.897;
$result = ceil($float); // 6

$result = floor($float); // 5

$result = round($float); // 6

$result = round($float, 1); // 5.9

$result = round($float, -2); // 0

$result = round($float, 2, PHP_ROUND_HALF_UP); // 5.9

$result = round($float, 2, PHP_ROUND_HALF_ODD); // 5.9

$float = 4.5;
$result = round($float); // 5

$username = 'Alex';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h3><?php echo 'Hello ' . $username; ?></h3>

</body>
</html>