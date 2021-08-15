<?php
include_once ('../functions.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
</head>
<body>
<h2>Привет <?= isGuest();?> </h2>
<hr>
<a href="login.php">Login</a>
<a href="clear.php">Clear cookie</a>
</body>
