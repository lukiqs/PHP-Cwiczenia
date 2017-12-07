<?php

use PHPUnit\Framework\TestCase;

class CalcTest extends TestCase{
    
    public function testDivision(){
        
        for($i=0;$i<50;$i++){
            $a = rand(0, 999);
            $b = rand(1, 999);
            $this->assertEquals(Calc::division($a, $b,2), round($a/$b,2));
        }        
        
    }
    
    public function testZeroDiv(){
        $this->expectException(Exception::class);
        
        Calc::division(12, 0);
    }
    
    public function testStringDiv(){
        $this->assertFalse(Calc::division('fds', 'dff'));
        $this->assertFalse(Calc::division(5, 'dff'));
        $this->assertFalse(Calc::division('fds', 8));
    }
    
    public function testObjectDiv(){
        //$n = new class {public $p;}; //<<< in php 7.0
        $n = new tt;
        $this->assertEquals(Calc::division($n, $n),'METHOD NOT DIVISION OBJECTS');
        $this->assertEquals(Calc::division($n, 'dsf'),'METHOD NOT DIVISION OBJECTS');
        $this->assertEquals(Calc::division(555, $n),'METHOD NOT DIVISION OBJECTS');        
    }
}

class tt{
    public function __toString() {
        return $this;
    }
}


