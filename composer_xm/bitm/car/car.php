<?php
namespace bitm\car;



class Car
{
public $carId=2;
public $carName='';
public $manufecName='';
public $location='';
	
	

	public function carDetails($carName,$manufecName,$location){
		$this->carName=$carName;
		$this->manufecName=$manufecName;
		$this->location=$location;
		
	}
	public function show_car_details(){
	 echo "This is the Car details Class"."<br/>";
     echo "Car Name: ".$this->carName."<br/>";
     echo "Manufecturer Name: ".$this->manufecName."<br/>";
     echo "Location: ".$this->location."<br/><br/>";

	}

}

?>