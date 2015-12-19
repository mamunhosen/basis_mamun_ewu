<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update</title>
</head>
<body>
<?php
include_once("../../../"."vendor/autoload.php");
use \src\bitm\SEIP107992\mobile\mobile;
$mobile=new mobile();
echo $mobile->update();


?>
</body>
</html>