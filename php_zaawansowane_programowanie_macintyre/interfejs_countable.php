<?php

class Visits implements Countable{
    private $visits = [];
    
    public function addVisitor($name){
        array_push($this->visits, $name);
    }

    public function count($mode = 'COUNT_NORMAL') {
        return count($this->visits);
    }

}

$v =new Visits();
$v->addVisitor('Ala');
$v->addVisitor('Zenek');
$v->addVisitor('Franek');

echo count($v);

