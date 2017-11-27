<?php

class Test{
    public $p;
    private $b;
    
    function __construct() {
        $this->p=646464;
        $this->b=47574757;
    }
}

$p['cos']['test'] = 24235;
$p['cos']['ppr'] = true;
$p['cos']['dfg'] = 5.675;
$data[0] = $p;
$data[1] = false;
$data[2] = "hello";
$data[3] = "54684hj5484";

$json = json_encode($data);
$json_obj = json_encode(new Test());

echo $json."<br><br><br>";
echo $json_obj."<br><br><br>";

$dane = json_decode($json,TRUE);
$dane2 = json_decode($json_obj);

var_dump($dane);
var_dump($dane2);
