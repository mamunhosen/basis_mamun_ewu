<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>create</title>
	<link rel="stylesheet" type="text/css" href="public/myStyle.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<?php /*
include_once("../../../"."vendor/autoload.php");
use \src\bitm\SEIP107992\mobile\mobile;
$mobile=new mobile();
echo $mobile->create(); */
?>
<div class="container">
	<div class="row">
		<div class="com-sm-12">
			<div class="jumbotron header">
				<h3>Mobile Name Input</h3>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<form action="store.php" method="post">
			    <div class="form-group">
				    <label for="m_serial">Mobile Serial:</label>
				    <input type="text" class="form-control input-lg" id="m_serial" name="m_serial" placeholder="Enter Mobile Serial" required>
			    </div>
				<div class="form-group">
				    <label for="m_name">Mobile Name:</label>
				    <input type="text" class="form-control input-lg" id="m_name" name="m_name" placeholder="Enter Mobile Name" required>
			    </div>
			    <input type="submit" class="btn btn-primary" value="Submit">
			</form>
		</div>
	</div>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
</body>
</html>