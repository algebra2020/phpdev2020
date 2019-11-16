<?php


class Petshop implements IPosao {
    private $pets=[1,2,3,3];
    
    function __construct() {
        
    }
    function ispis(){
        foreach ($this->pets as $key => $value) {
            echo "Ljubimci";
        }
    }
}
