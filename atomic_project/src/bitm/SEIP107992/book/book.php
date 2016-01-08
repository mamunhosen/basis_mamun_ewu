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
	public function store($add_book,$author,$isbn){

		$sql="INSERT INTO book (book_title,book_author,ISBN)
        VALUES ('$add_book','$author','$isbn')";
        if (mysql_query($sql)) {
        	header('location:index.php?updation successful!');
        }

}
	public function edit(){
		return "I am editing data";
	}
	public function update($title,$author_name,$isbn){
		$new_book_title=$title;
		$new_author_name=$author_name;
		$new_isbn=$isbn;
		$book_id=$_GET['var'];
		//echo $book_id;
		$sql = "UPDATE book SET book_title='$new_book_title',book_author='$new_author_name',ISBN='$isbn' WHERE book_id=$book_id";
		if (mysql_query($sql)) {
			header('location:index.php?update success!');
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

	public function view($id){
		$query = "SELECT * FROM book WHERE book_id=$id;";
		$result = mysql_query($query);
		$row=mysql_fetch_assoc($result);
		return $row;

	}


}

?>