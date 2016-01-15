<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../public/myStyle.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
session_start();
include_once("../../../"."vendor/autoload.php");
use \src\bitm\SEIP107992\birthday\birthday;
use \src\bitm\SEIP107992\message\message;
$birthday=new birthday();
$birthday=$birthday->index();
 

?>
<div class="container">
	<div class="row">
		<div class="com-sm-12">
			<div class="jumbotron header">
				<h3>Birthday List</h3>
			</div>
		</div>
	</div>
</div>



<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3 add_item">
		  <?php if (message::get()!=NULL) {   ?>

		  <div class="alert alert-success">
		  	<strong><?php echo message::flash();?></strong>
		  </div>

		  <?php } ?>
		

		  <h4 id="dwnld">Download as a PDF <a href=""><img src="../public/images/pdf.jpg"></a></h4>
		   <a class="btn btn-primary pull-right" href="create.php">Create New</a>
			<table class="table table-bordered table-hover">
               <thead>
                    <tr>
				        <th>Name</th>
				        <th>Birth Day</th>
				        <th>Action</th>
                    </tr>
               </thead>
               <tbody>
                <?php 
                 foreach ($birthday as $birthlist) {
                 ?>
                 
               
               	  <tr>
               			        <td><?php echo $birthlist['name']?></td>
               			        <td><?php echo $birthlist['birthday']?></td>
               			        <td>
               			        <a class="btn btn-warning" href="edit.php?var=<?php echo $birthlist['birth_id']?>">Edit</a>
              			        <a class="btn btn-danger" id="dlt_item" href="delete.php?var=<?php echo $birthlist['birth_id']?>">Delete</a>
               			        </td>
               			      </tr>
               			      <?php } ?>
               
                             </tbody>
             </table> 
             <a class="btn btn-default" href="../../../index.php">Back to Project List</a>
		</div>
	</div>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="../public/custom.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
</body>
</html>