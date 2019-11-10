<?php
/**
 * Description of Team
 *
 * @author Office10
 */
class Team {
    private $ime;
    private $bodovi;
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

}
