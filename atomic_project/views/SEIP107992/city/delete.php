<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delete</title>
</head>
<body>
<?php
include_once("../../../"."vendor/autoload.php");
use \src\bitm\SEIP107992\city\city;
$city=new city();
echo $city->delete();


?>
</body>
</html>