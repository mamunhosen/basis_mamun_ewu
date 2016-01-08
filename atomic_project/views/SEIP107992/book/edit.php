<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="../public/myStyle.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<?php
include_once("../../../"."vendor/autoload.php");
use \src\bitm\SEIP107992\book\book;
$book_id=$_GET['var'];
$book=new book();
$books=$book->view($book_id);
?>
<div class="container">
	<div class="row">
		<div class="com-sm-12">
			<div class="jumbotron header">
				<h3>Update Book Name</h3>
			</div>
		</div>
	</div>

    <div class="row">
    	<div class="col-sm-6 col-sm-offset-3">
    		<form action="update.php?var=<?php echo $book_id ?>" method="post">
    		   <div class="form-group">
			     <label for="isbn">ISBN:</label>
			     <input type="text" class="form-control" id="isbn" name="isbn" value="<?php echo $books['ISBN']?>" required>
			   </div>
    			<div class="form-group">
			     <label for="book_title">New Book Title:</label>
			     <input type="text" class="form-control" id="book_title" name="book_title" value="<?php echo $books['book_title']?>" required>
			   </div>
			   <div class="form-group">
			     <label for="book_author">Author Name:</label>
			     <input type="text" class="form-control" id="book_author" name="book_author" value="<?php echo $books['book_author']?>" required>
			   </div>
			     <input type="submit" class="btn btn-warning" value="update">
    		</form>
    	</div>
    </div>

</div>



<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>