<?php

use PHPUnit\Framework\TestCase;

class KodyTest extends TestCase{
//  
    public function testInstance()
    {
        $this->assertInstanceOf(
            Kody::class,
            Kody::fromKey(125)
        );
    }
    
    public function testNewObjectfromString(){
        $this->expectException(Exception::class);
        
        Kody::fromKey('kod');
    }
}

