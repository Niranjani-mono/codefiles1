<?php

//const BR ='<br/>';
/*  Factory pattern*/
class Book{
	private $bookName;
	private $bookAuthor;
	const BR ='<br/>';
	
	public function __construct($name ,$author)
	{ 
	$this->bookName = $name;
	$this->bookAuthor = $author;	
	}
	
	public function getNameandAuthor(){
		return $this->bookName .'-'.$this->bookAuthor.self::BR;
		
	}
	
}


class BookFactory{
	
	public static function create($name ,$author){		
		return new Abstract Factory Design Pattern($name ,$author);
	}
	
}

$book1 = BookFactory::create('The Humming Effect','Jonathan Goldman');
$book2 = BookFactory::create('The Healing Power of the Breath','Richard p. Brown');


echo $book1->getNameandAuthor();
echo $book2->getNameandAuthor();

?>