<?php
// anonymous function

function func($a){
    global $y;
    $y = $a;
    return function ($x){
        global $y;
        
        return $y + $x;
    };
}