<?php 

class Animal {
    public $name;
    public $legs = 4;
    public $cold_blooded = "no";

    public function __construct($name, $legs, $cold_blooded) 
    {
        $this->name = "Name :" . $name;
        $this->legs = "Legs :" . $legs;
        $this->cold_blooded = "cold blooded :" . $cold_blooded;
    }

    
}

