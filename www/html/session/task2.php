<?php
session_start();
$answer1 = $_POST['answer1'];
$_SESSION['answer1'] = $answer1;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Первый вопрос</title>
</head>
<body>
<h3>3 + 3  = ?</h3>
<form action="task3.php" method="post">
    <input type="number" name="answer2">
    <input type="submit" name="sbm">
</form>
</body>
</html>