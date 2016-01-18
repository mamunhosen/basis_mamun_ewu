<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="public/style.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<?php
error_reporting(E_ALL &  ~E_NOTICE & ~E_DEPRECATED);
include_once("vendor/autoload.php");
use \src\student\student;
$student=new student();
$student_info=$student->index();
 

?>
<div class="container">
	<div class="row">
		<div class="com-sm-12">
			<div class="jumbotron header">
				<h3>Student Information</h3>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3 add_book">
		 
		   <a class="btn btn-primary pull-right" href="views/create.php">Create New</a>
			<table class="table table-bordered table-hover">
               <thead>
                    <tr>
				        <th>Student ID</th>
				        <th>Student Name</th>
				        <th>Gender</th>
				        <th>Action</th>
                    </tr>
               </thead>
               <tbody>
               <?php 
                 foreach ($student_info as $student) {
                 ?>
                 
               
               	  <tr>
			        <td><?php echo $student['student_id']?></td>
			        <td><?php echo $student['student_name']?></td>
			        <td><?php echo $student['gender']?></td>
			        <td>
			        <a class="btn btn-warning" href="views/edit.php?var=<?php echo $student['id']?>">Edit</a>
              		<a class="btn btn-danger" id="dlt_item" href="views/delete.php?var=<?php echo $student['id']?>">Delete</a>

			        </td>
			      </tr>
			      <?php } ?>

              </tbody>
             </table> 
             
		</div>
	</div>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
</body>
</html>