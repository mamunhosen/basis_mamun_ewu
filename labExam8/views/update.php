<?php
//ini_set("display_errors","On");
error_reporting(E_ALL &  ~E_NOTICE & ~E_DEPRECATED);
include_once("../"."vendor/autoload.php");
use \src\student\student;
$student=new student();
$update=$student->update($_REQUEST);



?>