<?php

/**
 * Klasa Covjek, nasljedjuje ju klasa Kupac
 * @author John Doe <john.doe@example.com>
 * @access public
 * @property String $ime Ime covjeka
 */
class Covjek {
    function __construct($novo_ime='Jane Doe') {
        echo '<br>--- Kreiran je novi covjek! ---<br>';
        $this->set_ime($novo_ime);
    }
    function __destruct() {
        echo '<br>--- Covjek je unisten! ---<br>';
    }

    /**
     * <pre><code>
     * <?php
     * $kupac= new Covjek();
     * $kupac->ime="Pero";
     * ?>
     * </code></pre>
     * @var String Ime čovjeka
     */
    public $ime;  // Svojstvo, property
    /**
     * Promjena imena pomoću metode
     * Ovakvo postavljanje svojstava zovemo SETTER metoda
     * @param String $novo_ime
     */
    function set_ime($novo_ime) {  // Metoda, Method
        $this->ime=ucfirst($novo_ime);
    }
     /**
     * Dohvaćamo ime pomoću metode --> GETTER
     * @return String Ime kupca
     */
    function get_ime(): string {  // G"etter
        //return $this->ime.", ".$this->ime." Bond" ;
        return sprintf("%s, %s Bond",$this->ime,$this->ime) ;
    }
}
