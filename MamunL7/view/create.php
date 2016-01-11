<?php
ini_set("display_errors", "0");
error_reporting(E_ALL & ~E_DEPRECATED);
include_once("../"."vendor/autoload.php");
use \src\profession\profession;
$profession=new profession();
$profession=$profession->store($_POST['p_name'],$_POST['p_profession']);



?>