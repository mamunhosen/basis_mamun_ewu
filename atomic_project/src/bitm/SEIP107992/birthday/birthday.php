<?php
namespace src\bitm\SEIP107992\birthday;

use \src\bitm\SEIP107992\message\message;
use \src\bitm\SEIP107992\utility\utility;
class Birthday{

	public $birthday_id='';
	public $name='';
	public $birthday='';
	public $created='';
	public $modified='';
	public $created_by='';
	public $modified_by='';
	public $deleted_at='';

	public function __construct(){

		$connection=mysql_connect('localhost','Hossain','safepassword');
		if ($connection->connect_error) {
			 die("Connection failed: " . $connection->connect_error);
		}
		else{
			//echo "Connected successfully";
		}
		mysql_select_db('atomic_project');
      
	}
	public function index(){
		$_birthday=array();
		
		$query = "SELECT * FROM birthday ORDER BY birth_id DESC";
		$result = mysql_query($query);
		while ($row=mysql_fetch_assoc($result)) {
			$_birthday[]=$row;
		}
		return $_birthday;
	}
	public function create(){
		return "I am creating data";
		
	}
	public function store($birthday=array()){
	    if (is_array($birthday) & array_key_exists('name',$birthday)) {
    	$this->name=$birthday['name'];
    	$this->birthday=$birthday['birthday'];

        $sql="INSERT INTO birthday (name,birthday)VALUES ('$this->name','$this->birthday')";
        if (mysql_query($sql)) {
        	message::set('Birthday is added successfully.');
        }

        else{
        	message::set('There is an error while storing birthday information, please try again.');

        }
        	
        }
		

        utility::redirect('index.php');
		
	}
	public function view($id){
		$query = "SELECT * FROM birthday WHERE birth_id=$id;";
		$result = mysql_query($query);
		$row=mysql_fetch_assoc($result);
		return $row;
	}
	public function update($birthday=array()){
		if (is_array($birthday) & array_key_exists('name',$birthday)) {
		$birth_id=$_GET['var'];
    	$this->name=$birthday['name'];
    	$this->birthday=$birthday['birthday'];
        $sql = "UPDATE birthday SET name='$this->name',birthday='$this->birthday' WHERE birth_id=$birth_id";
		if (mysql_query($sql)) {
			header('location:index.php?update success!');
		}
		else{
			echo "update cancelled";
		}


    }

		
		
	}
	public function delete(){
		$birth_id=$_GET['var'];
		$sql="DELETE FROM birthday WHERE birth_id=$birth_id;";
		if (mysql_query($sql)) {
			header('location:index.php?successfully Deleted!');
		}
		
	}



}

?>