<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset='utf-8'>
</head>
<body>
<?php 
$files = [
"img10.gif",
"img1.gif",
"img2.gif",
"img20.gif"
];
natsort($files);
echo "<pre>";
print_r($files);
?>
</body>
</html>