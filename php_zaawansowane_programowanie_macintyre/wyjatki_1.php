<?php

$a = 12;
$b = 3;

try{
    if(!is_numeric($a))
        throw new Exception("Parametr A nie jest liczba");
    if(!is_numeric($b))
        throw new Exception("Parametr B nie jest liczba");
    if($b==0)
        throw new Exception("Nie mozna dzilic przez 0");
    
    echo "Wynik ".$a/$b;
} catch (Exception $ex) {
    echo $ex->getMessage();
}
