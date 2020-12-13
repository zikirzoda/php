<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset='utf-8'>
</head>
<body>
<?php 
$st = "this is test";
$st1=crypt($st)."<br/>";
$st2=crypt($st)."<br/>";
if($st1==$st2)echo "баробар";
echo md5($st)."<br/>";
echo md5($st)."<br/>";
?>
</body>
</html>