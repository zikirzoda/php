<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset='utf-8'>
</head>
<body>
<?php
$st =<<<HTML
<b>жирный текст </b>
<tt>Моноширный текст</tt>
<a href='http://wwwdklab.ru'>Ссылка</a>
HTML;
echo "Исходный текст: $st<br/>";
echo "<hr>после удаления тегов: ".strip_tags($st, "<a></a>");


?>
</body>
</html>