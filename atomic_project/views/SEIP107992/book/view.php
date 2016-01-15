<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View</title>
	<link rel="stylesheet" type="text/css" href="../public/myStyle.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
include_once("../../../"."vendor/autoload.php");
use \src\bitm\SEIP107992\book\book;
$id=$_GET['var'];
$book=new book();
 $books=$book->view($id);
 

?>

<div class="container">
	<div class="row">
		<div class="com-sm-12">
			<div class="jumbotron header">
				<h3>Full View</h3>
			</div>
		</div>
	</div>
     <div class="row">
     	<div class="col-sm-6 col-sm-offset-3 bookview">
			<?php //var_dump($books)?>
			<h4>Book ID:<small><?php echo ' '.$books['book_id']?></small></h4>
			<h4>ISBN:<small><?php echo ' '.$books['ISBN']?></small></h4>
			<h4>Book Title:<small><?php echo ' '.$books['book_title']?></small></h4>
			<h4>Author Name:<small><?php echo ' '.$books['book_author']?></small></h4>
			<h4>Entry Time:<small><?php echo ' '.$books['add_time']?></small></h4>
			
		</div>
     </div>
</div>
</body>
</html>