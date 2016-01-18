<?php
namespace src\student;

class Student 
{
	public $student_id='';
	public $student_name='';
	public $gender='';
	
	public function __construct()
	{

		$connection=mysql_connect('localhost','root','');
		if ($connection->connect_error) {
			 die("Connection failed: " . $connection->connect_error);
		}
		else{
			//echo "Connected successfully";
		}
		mysql_select_db('crudexam');
		
	}

	public function index(){

	    $_studentInfo=array();
		$query = "SELECT * FROM student ORDER BY id DESC";
		$result = mysql_query($query);
		while ($row=mysql_fetch_assoc($result)) {
			$_studentInfo[]=$row;
		}
		return $_studentInfo;

	}

	public function store($data=array()){


		$this->student_id=$data['student_id'];
		$this->student_name=$data['student_name'];
		$this->gender=$data['gender'];
        $sql="INSERT INTO student (student_name,student_id,gender)
        VALUES ('$this->student_name','$this->student_id','$this->gender')";
        if (mysql_query($sql)) {
	    header('location:../index.php?Created!');
        }
        else{

        	header('location:../index.php?Not Created!');
        }

	}

	public function edit($id){

	    $query = "SELECT * FROM student WHERE id=$id;";
		$result = mysql_query($query);
		$row=mysql_fetch_assoc($result);
		return $row;

	}


	public function update($update=array()){
		$id=$_GET['id'];
		$this->student_id=$update['student_id'];
		$this->student_name=$update['student_name'];
		$this->gender=$update['gender'];
		$sql = "UPDATE student SET student_name='$this->student_name',student_id='$this->student_id',gender='$this->gender' WHERE id=$id";
		if (mysql_query($sql)) {
			header('location:../index.php?update success!');
		}
		else{
			echo "update cancelled";
		}

	}
    

	public function delete($id){

		$sql="DELETE FROM student WHERE id=$id;";
		if (mysql_query($sql)) {
			header('location:../index.php?successfully Deleted!');
		}

	}



}
?>