<?php
namespace src\bitm\SEIP107992\mobile;

use \src\bitm\SEIP107992\message\message;
use \src\bitm\SEIP107992\utility\utility;
class Mobile{

	public $serial_id='';
	public $mobile_name='';
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
		$_mobile=array();
		
		$query = "SELECT * FROM mobile ORDER BY mobile_id DESC";
		$result = mysql_query($query);
		while ($row=mysql_fetch_assoc($result)) {
			$_mobile[]=$row;
		}
		return $_mobile;
	}
	public function create(){
		return "I am creating data";
		
	}
	public function store($mobile_data=array()){
	    if (is_array($mobile_data) & array_key_exists('m_name',$mobile_data)) {
    	$this->serial_id=$mobile_data['m_serial'];
    	$this->mobile_name=$mobile_data['m_name'];
		$sql="INSERT INTO mobile (mobile_serial,mobile_name)
        VALUES ('$this->serial_id','$this->mobile_name')";
        if (mysql_query($sql)) {
        	message::set('Mobile data is added successfully.');
        }
        else{
        	message::set('There is an error while storing mobile information, please try again.');

        }

    }
    utility::redirect('index.php');
		
	}
	public function edit(){
		return "I am editing data";
	}
	public function update($serial,$name){
		$mb_id=$_GET['var'];
		//echo $book_id;
		$sql = "UPDATE mobile SET mobile_serial='$serial',mobile_name='$name' WHERE mobile_id=$mb_id";
		if (mysql_query($sql)) {
			header('location:index.php?update success!');
		}
		else{
			echo "update cancelled";
		}
		
	}
	public function delete(){
	    $mobile_id=$_GET['var'];
		$sql="DELETE FROM mobile WHERE mobile_id=$mobile_id;";
		if (mysql_query($sql)) {
			header('location:index.php?successfully Deleted!');
		}
		
	}
	public function view($id){
		$query = "SELECT * FROM mobile WHERE mobile_id=$id;";
		$result = mysql_query($query);
		$row=mysql_fetch_assoc($result);

		return $row;

	}


}

?>