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
include_once("../../../"."vendor/autoload.php");
use \src\bitm\SEIP107992\mobile\mobile;
$id=$_GET['var'];
$mobile=new mobile();
$mobiles=$mobile->view($id);
 

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
      <?php //var_dump($mobiles)?>
      <h4>Mobile ID:<small><?php echo ' '.$mobiles['mobile_id']?></small></h4>
      <h4>Mobile Serial:<small><?php echo ' '.$mobiles['mobile_serial']?></small></h4>
      <h4>Mobile Name:<small><?php echo ' '.$mobiles['mobile_name']?></small></h4>
      <h4>Entry Time:<small><?php echo ' '.$mobiles['add_time']?></small></h4>
      
    </div>
     </div>
</div>
</body>
</html>
