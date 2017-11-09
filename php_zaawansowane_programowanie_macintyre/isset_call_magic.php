<?php

class Test{
    public $testElement;
    
    public function __construct($testElement = false) {
        $this->testElement = $testElement;
    }
    
    public function __isset($name) {
        echo "Element '$name' nie istnieje. ";
    }
    
    public function __call($name, $arguments) {
        echo "Brak metody '$name'";
        var_dump($arguments);
    }

    public function __destruct() {
        
    }
}

$t = new Test();
$t->mymethod(0,2,3,3,4,null,false);
isset($t->testElement2);

