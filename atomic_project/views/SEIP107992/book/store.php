<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>store</title>
</head>
<body>
<?php
include_once("../../../"."vendor/autoload.php");
use \src\bitm\SEIP107992\book\book;
$book=new book();
echo $book->store();


?>
</body>
</html>