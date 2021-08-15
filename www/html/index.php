<!DOCTYPE html>
<head>
    <title>Hello World!</title>
</head>

<body>
<h1>Hello World!</h1>
<?php


?>
<?
echo "wwww" . '<br>';

$a = 5;
$b = $a;

echo $a . ' ' . $b . '<br>';
$a = 10;
echo $a . ' ' . $b . '<br>';

$c = 10;
$y = &$c;

echo $c . ' ' . $y . '<br>';

$c = 13;

echo $c . ' ' . $y . '<br>';
unset($y, $c, $a, $b);




$str = "Hi, bitch! How are you?" . '<br>';
$search_arr = ['bitch', 'cyka', 'fuck'];
echo str_replace($search_arr, '*', $str);




$arr = [1, 2, 3, 4, 5, 6, 10, 9, 8, 7]; // unsort


for ($i = 0; $i < count($arr); $i++){
    echo $arr[$i] . '<br>';
}
unset($i);
$i = 0;



while ($i < count($arr)){
    echo $arr[$i] . '<br>';
    $i++;
}
unset($i);
$i = 0;


do{
    echo $arr[$i] . '<br>';
    $i++;
} while($i <= 3);

var_dump(get_defined_vars());


?>




<p><?php echo 'We are running PHP, version: ' . phpversion();
?></p>

<?
$database ="dbphp";
$user = "root";
$password = "secret";
$host = "mysql";

$connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
$query = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
$tables = $query->fetchAll(PDO::FETCH_COLUMN);

if (empty($tables)) {
    echo "<p>There are no tables in database \"{$database}\".</p>";
} else {
    echo "<p>Database \"{$database}\" has the following tables:</p>";
    echo "<ul>";
    foreach ($tables as $table) {
        echo "<li>{$table}</li>";
    }
    echo "</ul>";
}
?>
</body>
</html>