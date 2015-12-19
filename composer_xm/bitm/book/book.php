<?php
namespace bitm\book;



class Book
{
public $bookId=2;
public $bookName='';
public $authorName='';
public $ISBN=354345;
	
	public function __construct()
	{
		echo "This is the Book Class details"."<br/>";
	}

	public function bookDetails($authorName,$ISBN,$bookName){
		$this->bookName=$bookName;
		$this->authorName=$authorName;
		$this->ISBN=$ISBN;
		
	}
	public function show_book_details(){
     echo "BookName: ".$this->bookName."<br/>";
     echo "AuthorName: ".$this->authorName."<br/>";
     echo "ISBN: ".$this->ISBN."<br/><br/>";

	}

}

?>