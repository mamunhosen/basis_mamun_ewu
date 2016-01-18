<?php
//ini_set("display_errors","On");
error_reporting(E_ALL &  ~E_NOTICE & ~E_DEPRECATED);
include_once("../"."vendor/autoload.php");
use \src\student\student;
$id=$_GET['var'];
$student=new student();
$theStudent=$student->edit($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create</title>
	<link rel="stylesheet" type="text/css" href="../public/style.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="com-sm-12">
			<div class="jumbotron header">
				<h3>Edit Student Information</h3>
			</div>
		</div>
	</div>

	<div class="row">
    	<div class="col-sm-6 col-sm-offset-3">
    		<form action="update.php?id=<?php echo $theStudent['id']?>" method="post">
    			<div class="form-group">
			     <label for="student_id">Student ID</label>
                <input type="text" class="form-control" id="student_id" name="student_id" value="<?php echo $theStudent['student_id']?>" required>
			    </div>
			    <div class="form-group">
			     <label for="student_name">Student Name:</label>
			     <input type="text" class="form-control" id="student_name" name="student_name" value="<?php echo $theStudent['student_name']?>" required>
			    </div>
			    <h5 class="gender">Gender:</h5> 
			    <label class="radio-inline"><input type="radio" name="gender" value="Male" <?php echo ($theStudent['gender']=='Male')?'checked':'' ?>>Male</label>
                <label class="radio-inline"><input type="radio" name="gender" value="Female" <?php echo ($theStudent['gender']=='Female')?'checked':'' ?>>Female</label><br/>
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