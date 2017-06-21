<?php

include_once("model/Book.php");

class Model {
	public function getBookList()

	{


			// here goes some hardcoded values to simulate the database
			return array(
				"12345678" => new Book("12345678", "Jungle Book", "R. Kipling", "A classic book."),
				"23456789" => new Book("23456789", "Moonwalker", "J. Walker", ""),
				"01234567" => new Book("01234567", "PHP for Dummies", "Some Smart Guy", "")
			);



	}
	
	public function getBook($ISBN)
	{
		// we use the previous function to get all the books and then we return the requested one.
		// in a real life scenario this will be done through a db select command
		$allBooks = $this->getBookList();
		return $allBooks[$ISBN];
	}
	
	
}
