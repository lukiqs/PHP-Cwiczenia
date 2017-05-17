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

class Test2 extends Test{
    protected static $numberOfObject;
    
    function __construct(){
        parent::__construct();
        ++self::$numberOfObject;
    }
}

$t = new Test;
new Test;
new Test2;
echo $t->getNumber();
