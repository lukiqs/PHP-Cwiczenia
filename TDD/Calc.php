<?php

class Calc{  
    
    public static function division($a,$b,$precision = 0){
        if(is_object($a) || is_object($b))
            return  "METHOD NOT DIVISION OBJECTS";
        else if(is_string($a) || is_string($b))
            return FALSE;
        
        if($b == 0)
            throw new Exception('Div. by zero');
            
        return round($a/$b,$precision);
        
    }

}

