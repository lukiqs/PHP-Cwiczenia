<?php

class Person{
    private $name;
    private $age;
    
    function __construct($name,$age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    public function getName(){}
    
    public function setName($name){}

    public function getAge(){
        return $this->age;
    }
    
    public function setAge($age){}
    
    public function isAdult(){
        if($this->age >= 18) return true;
        else return false;
    }
}

class AdultException extends Exception{
    private $age;
    
    function __construct($age) {
        $this->age = 18 - $age;
    }
    
    public function info(){        
        echo "Osobie brakuje $this->age roku/lat do pelnoletnosci";
    }
}

$person = new Person('John', 15);

try{
    if(!$person->isAdult())
        throw new AdultException($person->getAge());
    if($person->getAge() == 18)
        throw new Exception('Osoba ma dokładnie 18 lat');
    
    echo "sprzedaj";
}catch (AdultException $ex) {
    $ex->info();
} catch (Exception $ex) {
    echo $ex->getMessage();
}
