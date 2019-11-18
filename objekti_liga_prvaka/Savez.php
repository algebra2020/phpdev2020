<?php

/**
 * Klasa Savez
 * @author Tatjana <tatjana.antic@sb.t-com.hr>
 * @access public
 * @property String $savez Ime saveza
 */



class Savez {
    public $ime;
    public $savez="nepoznato"; // Svojstvo, property
    
    function __construct($novo_ime) {
        $this->ime=$novo_ime;
        //$this->savez=$savez;
    }
       
    
}