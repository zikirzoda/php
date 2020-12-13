<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset='utf-8'>
</head>
<body>
<?php 
$A = [
"a" => "Zero",
"b" => "Weapon",
"c" => "Alpha",
"d" => "Processor"
];
asort($A);
print_r($A);
echo("<br/>");
arsort($A);
print_r($A);

?>
</body>
</html>