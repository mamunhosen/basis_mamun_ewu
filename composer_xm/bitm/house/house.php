<?php
namespace bitm\house;
class House
{
public $houseId=5;
public $houseName='';
public $houseOwner='';
public $color='';
	
	

	public function houseDetails($houseName,$houseOwner,$color){
		$this->houseName=$houseName;
		$this->houseOwner=$houseOwner;
		$this->color=$color;
		
	}
	public function show_house_details(){
	 echo "This is the house details Class"."<br/>";
     echo "House Name: ".$this->houseName."<br/>";
     echo "Owner Name: ".$this->houseOwner."<br/>";
     echo "House Color: ".$this->color."<br/><br/>";

	}

}


?>