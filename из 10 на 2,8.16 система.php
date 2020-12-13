<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset='utf-8'>
</head>
<body>
<?php
$year = 202020;
$month = 12;
$day = 13;
$isodate = sprintf("%06s-%02s-%02s", $year, $month, $day);
echo ($isodate);
?>
</body>
</html>