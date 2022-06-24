<?php

namespace App;

class Article{
private $title;

public function __construct($title){
	
	$this->title = $title;
}	

public function getSlug(){
	
	if( $this->title == NULL){
		
		Return  '';
	}
	else if($title === ''){
		
		return '';
	}
	
	return 	str_replace(' ', '-' ,$this->title);
	
}	
	
}

?>