<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Store</title>
</head>
<body>
<?php
session_start();
include_once("../../../"."vendor/autoload.php");
use \src\bitm\SEIP107992\birthday\birthday;
$birthday=new birthday();
$birthday->store($_REQUEST);


?>
</body>
</html>