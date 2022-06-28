<?php

//Purpose: To explain the Abstract Factory pattern structure

abstract class AbstractFactory 
{
	public abstract function CreateProduct1();
	public abstract function CreateProduct2();
		
}

class ConcreteFactory1 extends AbstractFactory
{
	public function CreateProduct1(){
		return new Product1_1();
	}
	
	public function CreateProduct2(){
		 return new Product2_1();
	}
}

class ConcreteFactory2 extends AbstractFactory
{
	public function CreateProduct1(){
		return new Product1_2();
	}
	
	public function CreateProduct2(){
		 return new Product2_2();
	}
}

abstract class AbstractProduct1
{
	public abstract function Display();
}

class Product1_1 extends AbstractProduct1{
	 public function Display()
	 {
		 echo "Inside Product1_1::Display()\n";
	 }
	
}

class Product1_2 extends AbstractProduct1{
	 public function Display()
	 {
		 echo "Inside Product1_2::Display()\n";
	 }
	
}


abstract class AbstractProduct2
{
	public abstract function Display();
}

class Product2_1 extends AbstractProduct2{
	 public function Display()
	 {
		 echo "Inside Product2_1::Display()\n";
	 }
	
}

class Product2_2 extends AbstractProduct2{
	 public function Display()
	 {
		 echo "Inside Product2_2::Display()\n";
	 }
	
}

//Series 1 products

$factory1 = new ConcreteFactory1();
$prod1 = $factory1->CreateProduct1();
$prod1->Display();
$prod2 = $factory1->CreateProduct2();
$prod2->Display();




//Series 2 products

$factory2 = new ConcreteFactory2();
$prod1 = $factory2->CreateProduct1();
$prod1->Display();
$prod2 = $factory2->CreateProduct2();
$prod2->Display();

?>
