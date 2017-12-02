<?php

class test{
    private $private;
    public $pub;
    
    function __construct() {
        $this->private = 5644;
        $this->pub = 5488888;
    }
    
    function go(){
        var_dump($this);
    }
}

$t = new test();
$t->go();


