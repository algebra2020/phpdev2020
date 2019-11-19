<?php

class Covjek {
    public $ime;
    public $savez="nepoznato";
    
    function __construct($novo_ime) {
        $this->ime=$novo_ime;
        //$this->savez=$savez;
    }
    
    function get_ime(){
        return $this->ime;
    }
    
    
    function set_ime_saveza($ime='') {  // Metoda, Method
       
/** @var type $ime */
        switch ($ime) {
            case "Bayern":
                $savez= "njemački";
                return $savez;
                //return $this->savez="njemački";
                
                
                break;
            case "Liverpool":
                $savez='engleski';
                   return $savez;
               //return $this->savez="engleski";
              break;
          case "Dinamo":
              $savez='hrvatski';
                   return $savez;
               //return $this->savez="hrvatski";
              break;
         default:
             $savez='nepoznat';
             return $savez;
           //return $this->savez="nepoznat savez";
                }
    }
    
    
    function get_savez_ime(){
        echo $this->savez;
    }
}