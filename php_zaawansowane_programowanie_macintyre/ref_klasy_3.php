<?php
class A{
    private $x=1;
    
    public function set($x){
        $this->x = $x;
    }
    
    public function &get(){
        return $this->x;
    }
}
//obejscie zab. private
$a = new A();
$b = &$a->get();
$a->set(8);
$b++;
var_dump($a);
var_dump($b);

