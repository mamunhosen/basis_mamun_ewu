<?php
//ini_set("display_errors","On");
error_reporting(E_ALL &  ~E_NOTICE & ~E_DEPRECATED);
include_once("../"."vendor/autoload.php");
use \src\profession\profession;
$profession=new profession();
$profession=$profession->store($_POST['p_name'],$_POST['p_profession']);



?>