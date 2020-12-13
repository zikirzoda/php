<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset='utf-8'>
</head>
<body>


<?php
$str = "php<?trhehtyj<>";
if (strpos($str, "<?") !== false)
	echo "это php-програма";
?>
</body>
</html>