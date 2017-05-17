<?php

class Test{
    function __get($name) {
        echo "Brak elementu '$name' w klasie ".get_class($this);
    }
    
    function __set($name,$value) {
        echo "Brak elementu '$name' w klasie ".get_class($this).". Ta klasa nigdzie nie zapisze wartości '$value'";
    }
    
    function __isset($name) {
        echo " Sprawdzam czy istnieje element '$name'. ";
    }
    
    function __call($name, $arguments) {
        echo "Brak metody '$name'";
    }
    
    function __toString() {
        return "To klasa Test nie ma elementów";
    }
}

$j = new Test();
//echo $j->p;
//$j->param =8;
//$j->metoda(0,2);

print $j;