<?php

use PHPUnit\Framework\TestCase;

class FileINITest extends TestCase{
    
    public function testCreateObject(){
        $n = new FileINI('conf.ini');
        
        $this->assertFileExists(FileINI::$PATH.'conf.ini');
    }
    
    public function testSave(){
        $n = new FileINI('confSave.ini');
        
        $n->set('ev', '//home/desc/info/');
        $n->set('count', 52263);
        $n->set('coins', 115.856);
        $n->set('other', FALSE);
        $n->set('hidden', TRUE);
        
        $n->save();
        
        $n = new FileINI('confSave.ini');
        
        $this->assertEquals($n->get('ev'), '//home/desc/info/');
        $this->assertEquals($n->get('count'),52263);
        $this->assertEquals($n->get('coins'),115.856);
        $this->assertEquals($n->get('other'),FALSE);
        $this->assertEquals($n->get('hidden'),TRUE);
        
    }   
    
    public function testSaveSections(){
        $n = new FileINI('confSave1.ini','main');
        
        $n->set('ev', '//home/desc/info/');
        $n->set('count', 52263);
        $n->set('coins', 115.856);
        $n->set('other', FALSE);
        $n->set('hidden', TRUE);
        
        $n->set('ev_1', '//home/desc/info1/','part1');
        $n->set('count_1', 522631,'part1');
        $n->set('coins_1', 115.8561,'part1');
        $n->set('other_1', FALSE,'part1');
        $n->set('hidden_1', TRUE,'part1');
        
        $n->save();
        
        $n = new FileINI('confSave1.ini','main');
        
        $this->assertEquals($n->get('ev'), '//home/desc/info/');
        $this->assertEquals($n->get('count'),52263);
        $this->assertEquals($n->get('coins'),115.856);
        $this->assertEquals($n->get('other'),FALSE);
        $this->assertEquals($n->get('hidden'),TRUE);
        
        $this->assertEquals($n->get('ev_1','part1'), '//home/desc/info1/');
        $this->assertEquals($n->get('count_1','part1'),522631);
        $this->assertEquals($n->get('coins_1','part1'),115.8561);
        $this->assertEquals($n->get('other_1','part1'),FALSE);
        $this->assertEquals($n->get('hidden_1','part1'),TRUE);
    }  
}


