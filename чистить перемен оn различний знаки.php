<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset='utf-8'>
</head>
<body>
<?php
$example = <<<EXAMPLE
<?php
echo "Hello, world!";
?>
EXAMPLE;
echo htmlspecialchars($example);
?>
</body>
</html>