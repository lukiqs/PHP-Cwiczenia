<?php

abstract class Person{ 
    abstract function setName($name);
    abstract function getName();
}

class Worker extends Person{
    private $name;
    private $salary;
    
    public function __construct($name, $salary = 200) {
        $this->setName($name);
        $this->setSalary($salary);
    }

    final public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
    
    final protected function setSalary($salary){
        $this->salary = $salary;
    }
    
    final public function getSalary(){
        return $this->salary;
    }

}

class Cleaner extends Worker{
    
    public function __construct($name, $salary = 200) {
        parent::__construct($name, $salary);
    }
    
    function getName() {
        return "Cleaner: ".parent::getName();
    }
}

$j =new Cleaner('John',300);
echo $j->getName();

var_dump($j);