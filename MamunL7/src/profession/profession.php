<?php
namespace src\profession;

class Profession{

public $name='';
public $profession='';
public $connection='';
public function __construct(){


		$connection=mysql_connect('localhost','root','');
		if ($connection->connect_error) {
			 die("Connection failed: " . $connection->connect_error);
		}
		else{
			//echo "Connected successfully";
		}
		mysql_select_db('exampdb13');

	}

public function index(){

        $_info=array();
		$query = "SELECT * FROM examtbl ORDER BY id DESC";
		$result = mysql_query($query);
		while ($row=mysql_fetch_assoc($result)) {
			$_info[]=$row;
		}
		return $_info;
}

public function store($name,$profession){

    $sql="INSERT INTO examtbl (name,profession)
    VALUES ('$name','$profession')";
    if (mysql_query($sql)) {
	header('location:../index.php?Created!');
}
}



}




?>
		