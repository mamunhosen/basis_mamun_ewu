<?php

namespace bitm\age;


class Age 
{
	public $age='';
	public function __construct($age)
	{
	
	$this->age=$age;

	}
	public function personAge(){

	
		echo  " Person age is ".$this->age;

	}
}


?>