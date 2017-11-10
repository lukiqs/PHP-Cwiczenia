<?php

class NumberException extends Exception{
    private $data;
    
    function __construct($data) {
        $this->data = $data;
    }
    
    public function info(){        
        echo "Wartosci '".gettype($this->data)."' nie da sie wykarzystac do rownania.";
    }
}


$a = "12f";
$b = 3;

try{
    if(!is_numeric($a))
        throw new NumberException($a);
    if(!is_numeric($b))
        throw new NumberException($b);
    if($b==0)
        throw new Exception("Nie mozna dzilic przez 0");
    
    echo "Wynik ".$a/$b;
}catch (NumberException $ex) {
    echo $ex->info();
}catch (Exception $ex) {
    echo $ex->getMessage();
}
