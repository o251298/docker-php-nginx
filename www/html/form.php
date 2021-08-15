<?php
include_once('functions.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo selectMethod();?>
    </title>
</head>
<body>
<h3>GET</h3>
<form action="form.php" method="get">
    <label>Имя</label>
    <input type="text" name="name">
    <br>
    <label>Возраст</label>
    <input type="text" name="age">
    <br>
    <label>Фамилия</label>
    <input type="text" name="lastName">
    <br>
    <input type="submit" value="Отправить на сервер" name="submit">
    <input type="reset" value="Очистить форму" name="reset">
</form>
<hr>
<h3>POST</h3>
<form action="form.php" method="post">
    <label>Имя</label>
    <input type="text" name="name">
    <br>
    <label>Возраст</label>
    <input type="text" name="age">
    <br>
    <label>Фамилия</label>
    <input type="text" name="lastName">
    <br>
    <input type="submit" value="Отправить на сервер" name="submit">
    <input type="reset" value="Очистить форму" name="reset">
</form>
</body>
</html>
<?php

if (selectMethod() == "GET"){
    $name = $_GET['name'];
    $age = $_GET['age'];
    $lastName = $_GET['lastName'];
    if (!empty($name) && !empty($age) && $lastName){
        printFullName($name, $age, $lastName);
    } else {
        echo "Вы заполнили не все данные";
    }

} elseif (selectMethod() == "POST"){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $lastName = $_POST['lastName'];

    if (!empty($name) && !empty($age) && $lastName){
        printFullName($name, $age, $lastName);
    } else {
        echo "Вы заполнили не все данные";
    }
} else {
    echo "Тут будет отображаться результат";
}
