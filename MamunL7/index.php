<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="public/myStyle.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<?php
ini_set("display_errors", "0");
error_reporting(E_ALL & ~E_DEPRECATED);
include_once("vendor/autoload.php");
use \src\profession\profession;
$pro=new profession();
$info=$pro->index();
 

?>
<div class="container">
	<div class="row">
		<div class="com-sm-12">
			<div class="jumbotron header">
				<h3>Person Biography</h3>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3 add_book">
		 
		   <a class="btn btn-primary pull-right" href="view/index.php">Create New</a>
			<table class="table table-bordered table-hover">
               <thead>
                    <tr>
				        <th>ID</th>
				        <th>Person Name</th>
				        <th>Profession</th>
                    </tr>
               </thead>
               <tbody>
               <?php 
                 foreach ($info as $info) {
                 ?>
                 
               
               	  <tr>
			        <td><?php echo $info['id']?></td>
			        <td><?php echo $info['name']?></td>
			        <td><?php echo $info['profession']?></td>
			        
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