<?php

class Book {
	public $isbn;
	public $title;
	public $author;
	public $description;
	
	public function __construct($isbn, $title, $author, $description)  
    {
		$this->isbn = $isbn;
		$this->title = $title;
		$this->author = $author;
		$this->description = $description;
    }
}
