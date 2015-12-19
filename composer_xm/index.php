<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Composer practices</title>
</head>
<body>
	<?php
include_once("vendor/autoload.php");
use \bitm\book\book;
use \bitm\car\car;
use \bitm\house\house;
use \bitm\pencil\pencil;
use \bitm\calculator\calculator;
$book=new book();
$car=new car();
$house=new house();
$pencil=new pencil();
$calculator=new calculator(8,4);


$book->bookDetails('Rasmus_lerdorf',3452,'PHP');
$book->show_book_details();

$car->carDetails('BMW','German automobile','German');
$car->show_car_details();

$house->houseDetails('Shantir Nir','Hossain Mamun','Light Blue');
$house->show_house_details();

$pencil->pencilDetails('A. Hammer','USSR','Red');
$pencil->show_pencil_details();

$calculator->show_result();



	?>
</body>
</html>