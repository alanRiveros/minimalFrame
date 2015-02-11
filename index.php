<html>
<body>
<h1>
HOLAAAAAA ! !
</h1>
<?php 
print_r('<h1>tambien funciona php</h1>');
echo '<pre>';
print_r($_SERVER);
print_r($_GET);
echo '</pre>';
$asd = explode('/', $_GET['url']);
echo '<pre>';
print_r($asd);
echo '</pre>';
?>
</body>
</html>