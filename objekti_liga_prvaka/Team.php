<?php

require_once './Savez.php';

/**
 * Description of Team
 *
 * @author Office10
 */
class Team {
    private $ime;
    private $bodovi;
    private $golovi;   // dani golovi
    private $golovip;  // primljeni golovi
    private $savez;
    
    
         
    public function __construct($ime="") {
        $this->ime=$ime;
       
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
    
       
    
    //Pitati kako upotrijebiti da se setira savez tima!!!!
    public function set_savez_ime() {
        //$savez=new Savez();
        return $this->savez->set_savez($ime);
        
        //$this->sudac_ime=ucfirst($suci[$rand_keys[1]] . "\n");
    }
    public function get_savez_ime() {
        //$savez=new Savez();
        return $this->savez;
        
        //$this->sudac_ime=ucfirst($suci[$rand_keys[1]] . "\n");
    }
}
