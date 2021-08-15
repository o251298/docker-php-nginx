<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unserialize array</title>
</head>
<body>
<?php
$res = $_COOKIE['userData'];

var_dump($res);

$arr = unserialize($res); // переводим строку в массив
print_r($arr);
echo $arr['name']
?>

</body>
</html>