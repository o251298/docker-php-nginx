<?php
function printFullName($name, $age, $lastName){
    echo "Пользователь {$name} {$lastName} возраст которого является {$age} успешно добавлен";
}
function selectMethod(){
    $res = '';
    if (isset($_GET['submit'])){
        return $res = "GET";
    } elseif (isset($_POST['submit'])){
        return $res = "POST";
    } else {
        return $res = "WELLCOME";
    }
}
function isGuest(){
    if (isset($_COOKIE['username'])){
        return $name = $_COOKIE['username'];
    } else {
        return $name = "Гость";
    }
}