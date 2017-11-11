<?php

class Test{
	private $element = "base ";
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
$n = new Test();
$m = new Test();
$m = $n; //jeden obszar w pamieci
echo "Koniec skryptu <br>";
//kopiowanie głębokie
$k = clone $n;
$p = clone $k;
$c = clone $n;
echo $p->getElement()."<br>";



