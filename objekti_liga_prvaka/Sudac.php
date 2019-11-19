<?php

/**
 * Klasa Sudac
 * @author Tatjana <tatjana.antic@sb.t-com.hr>
 * @access public
 * @property String $sudac_ime Ime suca
 */

class Sudac {
     /**
     * <pre><code>
     * <?php
     * $sudac= new Sudac();
     * $sudac->ime="HR sudac";
     * ?>
     * </code></pre>
     * @var String Ime suca
     */
    public $sudac_ime;  // Svojstvo, property
    public $rand_keys;
    public $suci=array();
    
    function __construct($sudac_ime="") {
        //echo '<br>--- Kreiran je novi sudac! ---<br>';
        $this->set_sudac_ime($sudac_ime);
    }
    
    function __destruct() {
        //echo '<br>--- Sudac je unisten! ---<br>';
    }


    /**
     * Promjena imena pomoću metode
     * Ovakvo postavljanje svojstava zovemo SETTER metoda
     * @param String $sudac_ime
     */
    function set_sudac_ime($sudac_ime) {  // Metoda, Method
        $suci = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
        $rand_keys = array_rand($suci, 1);  // povratna vrijednost je value 
        //$rand_keys = array_rand($suci, 2); ako vadimo dva člana vraca nam polje
        
        $this->sudac_ime=ucfirst($suci[$rand_keys] . "\n");
           
    }
     /**
     * Dohvaćamo ime pomoću metode --> GETTER
     * @return String Ime suca
     */
    function get_sudac_ime(): string {  // Getter
         return sprintf("%s",$this->sudac_ime) ;
    }
}