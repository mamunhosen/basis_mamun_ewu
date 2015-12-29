<?php
 if (isset($_POST['submit'])) {
 	$year=$_POST['year'];
 	$month=$_POST['month'];
 	$day=$_POST['day'];
 	if ($year!='' && $month!='' && $day!='') {
 		$birthYMD=$year.'-'.$month.'-'.$day;
 		
 		$time=strtotime($birthYMD);
 		$birthYMD=date('Y-m-d',$time);
 		echo $birthYMD;
 		$currentY=date('Y');
 		$currentM=date('m');
 		$currentD=date('d');

 		//echo $currentY.'-'.$currentM.'-'.$currentD;
 		

 	}
 }


?>