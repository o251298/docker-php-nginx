<?php 

include_once('../function/func.php');

$keys = ['sky', 'grass', 'orange'];
$values = ['blue', 'green', 'orange'];


echo "array_combine";
$arr = array_combine($keys, $values);
debager($arr);


echo "array_values";
$val = array_values($arr);
debager($val);


echo "array_keys";
$key = array_keys($arr);
debager($key);


echo "array_flip";
$flip = array_flip($arr);
debager($flip);



echo "list" . '<br>';
$listArr = ['qqq', '222'];
list($a, $b, $c) = $listArr;
echo $a . $b . $c;


echo "extract" . '<br>';
extract($arr);
echo $grass;


echo "compact" . '<br>';
$arr = compact('grass', 'sky', 'orange');
debager($arr);


echo "array_filter" . '<br>';
$numArr = [1, 2, 3, 5, 7, 3, 5, 6, 8, 10, 11, 43, 55];
$midlle = 5;

$task = array_filter($numArr, function($number){
	return $number > 5;
});
debager($task);


echo "array_unique" . '<br>';
$result = array_unique($numArr);
debager($result);
unset($result);


echo "array_column(input, column_key)";
$arr = [
	['id' => 1, 'name' => 'Oleg'],
	['id' => 2, 'name' => 'Nadia'],
	['id' => 3, 'name' => 'Alex'],
	['id' => 4, 'name' => 'Tatiana'],
	['id' => 5, 'name' => 'Roma'],
];

$id = array_column($arr, 'name');
debager($id);



echo "array_diff(array1, array2)";
$arr1 = ['oleg', '222', '444', '2', '43'];
$arr2 = ['oleg', '222', '442', '3', '33'];

$result = array_diff($arr2, $arr1);
debager($result);



echo "array_intersect(array1, array2)";
$arr1 = ['oleg', '222', '444', '2', '43'];
$arr2 = ['oleg', '222', '442', '3', '33'];

$result = array_intersect($arr2, $arr1);
debager($result);



echo "array_count_values(input)";
$arr = ['www', 'eee', 'rrr', 'rrr', 'www', 'www', 'd', 'rr'];
$count = array_count_values($arr);
debager($count);


echo "array_fill(start_index, num, value)";
$arr = array_fill(0, 7, "rr");
debager($arr);