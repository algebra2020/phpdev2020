<?php

require_once './Savez.php';

/**
 * Description of Team
 *
 * @author Office10
 */
class Team extends Savez{
    //public $ime;
    private $bodovi;
    private $golovi;   // dani golovi
    private $golovip;  // primljeni golovi
    //private $savez;
    
    
         
    public function __construct($ime="") {
        $this->ime=$ime;
        $savez = $this->set_ime_saveza($ime);
    }

    public function get_ime() {
        return $this->ime;
    }
     public function set_bodovi($bod) {
        return $this->bodovi+=$bod;
    }   
     public function get_bodovi() {
        return $this->bodovi;
    }
   
    
    //Tatjana dodano
    public function set_golovi($gol) {
        return $this->golovi+=$gol;
    }  
    
    public function get_golovi() {
        return $this->golovi;
    }
    
    public function set_primljeni($golp) {
        return $this->golovip+=$golp;
    }  
    
    public function get_primljeni() {
        return $this->golovip;
    }
    
    
   function set_ime_saveza($ime=''){
       switch ($ime) {
          case "Bayern":
               $savez= "njemački";
               return $this->savez=$savez;
                //return $this->savez="njemački";
               break;
           case "Liverpool":
                $savez='engleski';
                 return $this->savez=$savez;
               //return $this->savez="engleski";
              break;
         case "Dinamo":
              $savez='hrvatski';
              return $this->savez=$savez;
               //return $this->savez="hrvatski";
             break;
         case "Lion":
              $savez='francuski';
              return $this->savez=$savez;
               //return $this->savez="hrvatski";
             break;
         default:
             $savez='nepoznat';
            return $this->savez=$savez;
            break;
           //return $this->savez="nepoznat savez";
               }
    }
    
    public function get_ime_saveza() {
        
     return $this->savez;
    }
    
   
    
   
        
    }

