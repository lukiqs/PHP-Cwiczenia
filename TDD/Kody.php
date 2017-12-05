<?php

class Kody{
    private $kod;
    
    public function __construct($kod) {
        if(!is_numeric($kod))
            throw new Exception ('Kod musi byc int');

        if($kod>=100 && $kod <=999)
            $this->kod = $kod;
        else
            throw new Exeption('Kod nie poprawny');
    }
    
    public static function fromKey($kod)
    {
        return new self($kod);
    }
}

