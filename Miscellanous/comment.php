<!DOCTYPE html>
<html>
<head>
	<title>Different Comment</title>
</head>
<body>
<?php
$a=20;
$b=10;
$c=$a+$b;
$d=$a-$b;
$e=$a*$b;
echo "Summation of a+b: ".$c.'<br/>'; //Summation.
echo "Subtraction of a-b: ".$d.'<br/>';/* this is multiline comment.
yet another line of comment*/
echo "Multiplication of a*b: ".$e.'<br/>';# Shell style comment.

?>
</body>
</html>