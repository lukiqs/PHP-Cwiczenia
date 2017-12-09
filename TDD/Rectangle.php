<?php

/**
 * Klasa prostokąt
 */
class Rectangle{
    private $width;
    private $hight;
    
    /**
     * Tworzy instancję klasy Rectangle. Domyślne parametry to 0
     * @param number $width - szerokość
     * @param number $hight - wysokość
     */
    public function __construct($width = 0, $hight = 0) {
        if($width > 0 && $hight > 0){
            $this->width = $width;
            $this->hight = $hight;
        }
        else{
            $this->width = 0;
            $this->hight = 0;
        }
    }
    
    /**
     * Ustawia szerokość prostokąta
     * @param number $width - szerokość
     * @return boolean Zwraca TRUE gdy wartosć jest poprawna, w przeciwnym wypadku FALSE
     */
    public function setWidth($width){
        if($width > 0){
            $this->width = $width;
            return true;
        }            
        else
            return false;
    }
    
    /**
     * Ustawia Wysokość prostokąta
     * @param number $hight - szerokość
     * @return boolean Zwraca TRUE gdy wartosć jest poprawna, w przeciwnym wypadku FALSE
     */
    public function setHight($hight){
        if($hight > 0){
            $this->hight = $hight;
            return true;
        }            
        else
            return false;
    }
    
    /**
     * Pobiera szerokośc prostokąta
     * @return number szerokosć
     */
    public function getWidth(){
        return $this->width;
    }
    
    /**
     * Pobiera wysokość prostokąta
     * @return number wysokość
     */
    public function getHight(){
        return $this->hight;
    }
    
    /**
     * Wylicza pole prostokąta
     * @return number pole 
     */
    public function getField(){
        return $this->width*$this->hight;
    }
    
    /**
     * Wylicza obwód prostokąta
     * @return number obwód
     */
    public function getCircuit(){
        return ($this->width*2) + ($this->hight*2);
    }
    
}

