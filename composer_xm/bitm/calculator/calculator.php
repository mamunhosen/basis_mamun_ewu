<?php
namespace bitm\calculator;
class Calculator{

public $value1=1;
public $value2=1;
public $sum=1;
public $subtract=1;
public $multi=1;
public $division=1;

public function __construct($value1,$value2){


    $this->sum=$value1+$value2;
    $this->subtract=$value1-$value2;
    $this->multi=$value1*$value2;
    $this->division=$value1/$value2;

}


public function show_result(){
	echo "sum: ".$this->sum."<br/>";
	echo "subtraction: ".$this->subtract."<br/>";
	echo "Multiplication: ".$this->multi."<br/>";
	echo "Division: ".$this->division."<br/>";
}

}


?>
