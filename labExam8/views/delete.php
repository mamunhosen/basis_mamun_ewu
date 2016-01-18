<?php
//ini_set("display_errors","On");
error_reporting(E_ALL &  ~E_NOTICE & ~E_DEPRECATED);
include_once("../"."vendor/autoload.php");
use \src\student\student;
$id=$_GET['var'];
$student=new student();
$student->delete($id);



?>