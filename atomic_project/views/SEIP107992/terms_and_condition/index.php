<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
</head>
<body>
<?php
include_once("../../../"."vendor/autoload.php");
use \src\bitm\SEIP107992\terms_and_condition\terms_and_condition;
$terms_and_condition=new terms_and_condition();
echo $terms_and_condition->index();


?>
</body>
</html>