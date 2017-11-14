<?php

// przypisanie 
$x = 1;
$y = $x;
++$x;
echo $y;

// przypisanie prze ref
$x = 1;
$y = &$x;
++$x;
echo $y;

//funkcja
function addSeven(&$var){
    $var+=7;
}
$x = 0;
addSeven($x);
echo $x;

