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
				<h3>Add Student Information</h3>
			</div>
		</div>
	</div>

	<div class="row">
    	<div class="col-sm-6 col-sm-offset-3">
    		<form action="store.php" method="post">
    			<div class="form-group">
			     <label for="student_id">Student ID</label>
			     <input type="text" class="form-control" id="student_id" name="student_id" required>
			    </div>
			    <div class="form-group">
			     <label for="student_name">Student Name:</label>
			     <input type="text" class="form-control" id="student_name" name="student_name" required>
			    </div>
			    <h5 class="gender">Gender:</h5> 
			    <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
                <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label><br/>
			     <input type="submit" class="btn btn-primary" value="Submit">
    		</form>
    	</div>
    </div>

</div>
</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>