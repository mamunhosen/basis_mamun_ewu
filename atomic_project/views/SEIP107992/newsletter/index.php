<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
</head>
<body>
<?php
include_once("../../../"."vendor/autoload.php");
use \src\bitm\SEIP107992\newsletter\newsletter;
$newsletter=new newsletter();
echo $newsletter->index();


?>
</body>
</html>