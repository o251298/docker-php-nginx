<?php
session_start();
$answer1 = $_SESSION['answer1'];
$answer2 = $_SESSION['answer2'];
$answer3 = $_POST['answer3'];



echo session_id() . '<br>';
if (($answer1 == 4) && ($answer2 == 6) && ($answer3 == 8)){
    echo '+';
} else {
    echo '-';
}