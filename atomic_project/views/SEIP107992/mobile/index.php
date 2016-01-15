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
use \src\bitm\SEIP107992\mobile\mobile;
use \src\bitm\SEIP107992\message\message;
$mobile=new mobile();
 $mobiles=$mobile->index();
 

?>
<div class="container">
	<div class="row">
		<div class="com-sm-12">
			<div class="jumbotron header">
				<h3>Mobile List</h3>
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
				        <th>Mobile Serial NO</th>
				        <th>Mobile Name</th>
				        <th>Action</th>
                    </tr>
               </thead>
               <tbody>
               <?php 
                 foreach ($mobiles as $mobilelist) {
                 ?>
                 
               
               	  <tr>
			        <td><?php echo $mobilelist['mobile_serial']?></td>
			        <td><?php echo $mobilelist['mobile_name']?></td>
			        <td>
			        <a class="btn btn-default" href="view.php?var=<?php echo $mobilelist['mobile_id']?>">Views</a>
			        <a class="btn btn-warning" href="edit.php?var=<?php echo $mobilelist['mobile_id']?>">Edit</a>
			        <a class="btn btn-danger" id="dlt_item" href="delete.php?var=<?php echo $mobilelist['mobile_id']?>">Delete</a>
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