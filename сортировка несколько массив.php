<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset='utf-8'>
</head>
<body>
<?php 
$arr1 = [3, 4, 2, 7, 1, 5];
$arr2 = ["world", "hello", "yes", "no", "apple", "wet"];

array_multisort($arr1, $arr2);

print_r($arr1);
print_r($arr2);
?>
</body>
</html>