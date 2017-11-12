<?php

class Test{
    protected static $numberOfObject;
    function __construct(){
        ++self::$numberOfObject;
    }
    public function getNumber(){
        return self::$numberOfObject;
    }
}



new Test;
new Test;
new Test;
new Test;
new Test;
new Test;
$class = new Test;
new Test;
new Test;
new Test;
new Test;
new Test;
new Test;
echo $class->getNumber();
