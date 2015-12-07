<?php
namespace bitm;
class Duster{
	public $color='';
	public $weight='';

	public function __construct($color,$weight){

		$this->color=$color;
		$this->weight=$weight;

	}

	public function sweep(){
		echo "I am, sweeping";
	}

}



//$shuvo->sayGreeting();
?>