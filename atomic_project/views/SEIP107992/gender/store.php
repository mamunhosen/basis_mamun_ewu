<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Store</title>
</head>
<body>
<?php
include_once("../../../"."vendor/autoload.php");
use \src\bitm\SEIP107992\gender\gender;
$gender=new gender();
echo $gender->store();


?>
</body>
</html>