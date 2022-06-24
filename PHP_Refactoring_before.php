<?php

namespace App;class Article{
private $title;

function __construct( $title ){	
	$this->title = $title;
}	

public function getSlug  () {
	
	IF( $this->title == NULL){
		
		Return  '';
	}
	else if($title === ''){
		
		return '';
	}
	
	return 	str_replace(' ','-',$this->title);
	
}	
	
}

?>