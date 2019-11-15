<?php


class Autoservis implements IPosao {
    private $auti=["audi",2,"bmw",3];
    
    function __construct() {
        
    }
    function ispis(){
        foreach ($this->auti as $key => $value) {
            echo " -- ".$value;
        }
    }
}
