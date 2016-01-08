<?php
namespace src\bitm\SEIP107992\mobile;
class Mobile{

	public $id='';
	public $title='';
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
	public function store($mobile_serial,$mobile_name){
		$sql="INSERT INTO mobile (mobile_serial,mobile_name)
        VALUES ('$mobile_serial','$mobile_name')";
        if (mysql_query($sql)) {
        	header('location:index.php?updation successful!');
        }
		
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