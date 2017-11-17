<?php
//local goto 

$i=10;
LAB:
    echo "i=".$i--."<br>";
    if($i>0) goto LAB;
    
echo "Koniec petli";

