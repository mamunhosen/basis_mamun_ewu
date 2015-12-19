<?php
namespace bitm\pencil;
class Pencil
{
public $pencilId=5;
public $pencilName='';
public $pencilManufec='';
public $color='';
	
	

	public function pencilDetails($pencilName,$pencilManufec,$color){
		$this->pencilName=$pencilName;
		$this->pencilManufec=$pencilManufec;
		$this->color=$color;
		
	}
	public function show_pencil_details(){
	 echo "This is the Pencil details Class"."<br/>";
     echo "Pencil Name: ".$this->pencilName."<br/>";
     echo "Manufecturer Name: ".$this->pencilManufec."<br/>";
     echo "Pencil Color: ".$this->color."<br/><br/>";

	}

}


?>