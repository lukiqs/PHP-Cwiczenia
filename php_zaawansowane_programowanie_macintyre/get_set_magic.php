<?php

class Point2D{
    public $x;
    public $y;
    
    public function __construct($x,$y) {
        $this->x = $x;
        $this->y = $y;
    }
    
    public function __get($name) {
        return "Klasa Point2D posiada tylko 2 elementy: x , y . '$name' - nie jest elementem tej klasy ";
    }
    
    public function __set($name,$value) {
        echo "Klasa Point2D posiada tylko 2 elementy: x , y . '$name' - nie jest elementem tej klasy, wartość '$value' nie zostanie zapisana ";
    }
}

$p1 = new Point2D(5, 6);
echo $p1->z;
$p1->a = 55;
