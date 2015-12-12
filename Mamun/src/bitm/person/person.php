<?php
namespace bitm\person;

class Person
{
	public $name='';
	public function __construct($name)
	{
	$this->name=$name;	
	}

	public function greeting(){
		echo "Mr ".$this->name." Says to Everyone,Good Morning! ";
	}
}


?>