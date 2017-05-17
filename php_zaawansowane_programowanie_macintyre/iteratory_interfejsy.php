<?php

class Table implements Iterator{
	private $elements;
	private $index = 0;	

	public function __construct(array $elements){
		$this->elements = $elements;
	}

	public function rewind(){
        $this->index = 0;
	}

	public function next(){
        $this->index++;
        if(isset($this->elements[$this->index])){
            return ($this->elements[$this->index]);
        }
        else
            return null;
	}

	public function key(){
        return ($this->index);
	}

	public function current(){
        return ($this->elements[$this->index]);
	}

	public function valid(){
        return (isset($this->elements[$this->index]));
	}
}

$x = new Table([4,6,3,24,5,323,5]);

foreach($x as $key => $value)
    echo "klucz: $key wartosc: $value <br>";

