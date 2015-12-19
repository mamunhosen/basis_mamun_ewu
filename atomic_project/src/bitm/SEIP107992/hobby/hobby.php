<?php
namespace src\bitm\SEIP107992\hobby;
class Hobby{

	public $id='';
	public $title='';
	public $created='';
	public $modified='';
	public $created_by='';
	public $modified_by='';
	public $deleted_at='';

	public function __construct(){

	}
		public function index(){
		return "I am listing data";
	}
	public function create(){
		return "I am creating data";
		
	}
	public function store(){
		return "I am storing data";
		
	}
	public function edit(){
		return "I am editing data";
	}
	public function update(){
		return "I am updating data";
		
	}
	public function delete(){
		return "I am deleting data";
		
	}


}

?>