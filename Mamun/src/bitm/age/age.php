<?php

namespace bitm\age;

use bitm\person\person;
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