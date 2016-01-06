<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
	 
		<div class="col-sm-6 col-sm-offset-3">
		 <h2>Create an Item</h2>
		  <form action="store.php" method="post">
			<div class="form-group">
			  <label for="usr">Enter Book Title:</label>
			  <input type="text" class="form-control" name="title" id="usr" autofocus='true'>
			</div>
			<button type="submit" class="btn btn-success">Submit</button>
		  </form> 	
		</div>
	</div>
</div>
	
</body>
</html>