<?php

class Apple{
	private $element = "Hello";

	public function __construct(){
		
	}

	public function getElement(){
		return $this->element;
	}

	public function __clone(){
		$this->element.=" Clone";
	}
	
	public function __destruct(){
		echo "Usuwam obiekt<br>";
	}
}
//kopiowanie płytkie
$n = new Apple();
$m = new Apple();
$m = $n;
echo "Koniec skryptu <br>";

//kopiowanie głębokie
$k = clone $n;
$p = clone $k;
$c = clone $n;

echo $p->getElement()."<br>";

