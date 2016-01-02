<?php
namespace src\bitm\SEIP107992\book;
class Book{

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
		$_book=array();
		
		$query = "SELECT * FROM book ORDER BY book_id DESC";
		$result = mysql_query($query);
		while ($row=mysql_fetch_assoc($result)) {
			$_book[]=$row;
		}
		return $_book;


	}
	public function create(){
		return "I am creating data";
		
	}
	public function store($add_book){

		$sql="INSERT INTO book (book_title)
        VALUES ('$add_book')";
        if (mysql_query($sql)) {
        	header('location:index.php?updation successful!');
        }


	
		
	}
	public function edit(){
		return "I am editing data";
	}
	public function update($title){
		$new_book_title=$title;
		$book_id=$_GET['var'];
		//echo $book_id;
		$sql = "UPDATE book SET book_title='$new_book_title' WHERE book_id=$book_id";
		if (mysql_query($sql)) {
			header('location:index.php?updation successful!');
		}
		else{
			echo "update cancelled";
		}

		
	}
	public function delete(){
		$book_id=$_GET['var'];
		$sql="DELETE FROM book WHERE book_id=$book_id;";
		if (mysql_query($sql)) {
			header('location:index.php?successfully Deleted!');
		}
		
	}


}

?>