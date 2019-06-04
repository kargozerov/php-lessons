<?php
session_start();
//echo 'hello ' . $arr['username'];

var_dump($_SESSION);

$username = $_SESSION['username'];
var_dump($username);

?>

<p><a href="session1.php">Session 1</a></p>
