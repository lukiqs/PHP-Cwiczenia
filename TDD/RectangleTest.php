<?php

use PHPUnit\Framework\TestCase;

class RectangleTest extends TestCase{
    
    public function testCreateObject(){
        $obj = new Rectangle();
        
        $this->assertEquals(0, $obj->getWidth());
        $this->assertEquals(0, $obj->getHight());
        
        $obj = new Rectangle(-2,1);
        $this->assertEquals(0, $obj->getWidth());
        $this->assertEquals(0, $obj->getHight());
        
        $obj = new Rectangle(2,-1);
        $this->assertEquals(0, $obj->getWidth());
        $this->assertEquals(0, $obj->getHight());
        
        $obj = new Rectangle(-2,-1);
        $this->assertEquals(0, $obj->getWidth());
        $this->assertEquals(0, $obj->getHight());
    }
    
    public function testSetters(){
        $obj = new Rectangle();
        
        $obj->setWidth(2);
        $obj->setHight(5);      
        $this->assertEquals(2, $obj->getWidth());
        $this->assertEquals(5, $obj->getHight());
             
        $this->assertFalse($obj->setWidth(-2));
        $this->assertFalse($obj->setHight(-5));
        $this->assertTrue($obj->setWidth(2));
        $this->assertTrue($obj->setHight(5));
    }
    
    public function testField(){
        $obj = new Rectangle();
        $this->assertEquals(0, $obj->getField());
        $obj->setWidth(-2);
        $obj->setHight(-5); 
        $this->assertEquals(0, $obj->getField());
        $obj->setWidth(2);
        $obj->setHight(5); 
        $this->assertEquals(10, $obj->getField());
    }
    
    public function testCircuit(){
        $obj = new Rectangle();
        $this->assertEquals(0, $obj->getCircuit());
        $obj->setWidth(-2);
        $obj->setHight(-5); 
        $this->assertEquals(0, $obj->getCircuit());
        $obj->setWidth(2);
        $obj->setHight(5); 
        $this->assertEquals(14, $obj->getCircuit());
    }
    
    
}


