<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Greeting</title>
</head>
<body>
<?php
/*function __autoload($className){
	//var_dump($className);
   include_once($className.".php");
}*/
include_once("vendor/autoload.php");

use bitm\person\person;
use bitm\age\age;

$mamun=new person('Mamun');
$age=new age(24);

$mamun->greeting();
$age->personAge();


?>

</body>
</html>