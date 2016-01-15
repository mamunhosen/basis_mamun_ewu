<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create</title>
	<link rel="stylesheet" type="text/css" href="../public/myStyle.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
include_once("../../../"."vendor/autoload.php");
use \src\bitm\SEIP107992\birthday\birthday;
$birth_id=$_GET['var'];
$birthday=new birthday();
$birthday=$birthday->view($birth_id);
?>
<div class="container">
	<div class="row">
		<div class="com-sm-12">
			<div class="jumbotron header">
				<h3>Edit Birthday</h3>
			</div>
		</div>
	</div>

	<div class="row">
    	<div class="col-sm-6 col-sm-offset-3">
    		<form action="update.php?var=<?php echo $birth_id ?>" method="post">
    			<div class="form-group">
			     <label for="birthday">Enter Name:</label>
			     <input type="text" class="form-control" id="birthday" name="name" value="<?php echo $birthday['name']?>" required>
			    </div>
			    <div class="form-group">
			     <label for="birthday">Enter Birthday:</label>
			     <input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo $birthday['birthday']?>" required>
			    </div>
			     <input type="submit" class="btn btn-warning" value="Update">
    		</form>
    	</div>
    </div>

</div>
</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>