<?php
if (isset($_POST['username']) && (!empty($_POST['username']))){
    // если форма заполнена, добавляем данные в куки
    $name = $_POST['username'];
    setcookie('username', $name);
} elseif (isset($_COOKIE['username'])){
    $name = $_COOKIE['username'];
} else {
    $name = 'Гость';
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<h2>Привет <?= $name; ?></h2>
<form method="post">
    <label>Name</label>
    <input type="text" name="username">
    <input type="submit" name="submit" value="Post">
</form>
<hr>
<a href="index.php">Главная</a>
</body>
</html>