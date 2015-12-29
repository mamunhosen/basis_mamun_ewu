
<form action="age.php" method="post">   

Enter your date of birth:
<select name="month" >
<?php
$month=array('January','February','March','April','May','June','July','August','September','October','November','December');
$length=count($month);
$value=0;
for ($i=0; $i <$length ; $i++) { ?>
 <option value="<?php echo ++$value;?>"><?php echo $month[$i]?></option>

<?php	
}
?>



</select>
<select name="day" id="day">
<?php  
$value=0;
while ( ++$value<= 31) { ?>
	<option value="<?php echo $value?>"><?php echo $value ?></option>
<?php
} ?>

</select>

<select name="year" id="year">
<?php  
$value=1900;
while ( ++$value<= 2015) { ?>
	<option value="<?php echo $value?>"><?php echo $value ?></option>
<?php
} ?>
</select>
<input type="submit" name="submit" value="age" >
</form>