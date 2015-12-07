<?php
namespace advising;
class Advisor{
	public $student_Name='';
	public $advisor_Name='';
	public function __construct($student_Name,$advisor_Name){
		$this->student_Name=$student_Name;
		$this->advisor_Name=$advisor_Name;

	}

	/*public function student_Name($student_Name){
      $this->student_Name=$student_Name;
	}
	public function advisor_Name($advisor_Name){
      $this->advisor_Name=$advisor_Name;
	}*/

	public function show_studentName_with_advisorName(){
		echo "The Student name is ".$this->student_Name." and his/her Advisor Name is ". $this->advisor_Name;
	}
}
//use advising\advisor;
$advisor_Obj = new advisor('Hossain Mamun','Rezwanul Huq');
//$advisor_Obj->student_Name('Hossain Mamun');
//$advisor_Obj->advisor_Name('Rezwanul Huq');
$advisor_Obj->show_studentName_with_advisorName();





?>