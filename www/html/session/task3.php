<?php
session_start();
$answer2 = $_POST['answer2'];
$_SESSION['answer2'] = $answer2;
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
<h3>4 + 4  = ?</h3>
<form action="resault.php" method="post">
    <input type="number" name="answer3">
    <input type="submit" name="sbm">
</form>
</body>
</html>