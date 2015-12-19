<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
</head>
<body>
<?php
include_once("../../../"."vendor/autoload.php");
use \src\bitm\SEIP107992\summary_of_organization\summary_of_organization;
$summary_of_organization=new summary_of_organization();
echo $summary_of_organization->edit();


?>
</body>
</html>