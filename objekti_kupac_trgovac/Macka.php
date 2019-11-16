<?php
require_once './AZivobice.php';
require_once './IBuhe.php';
/**
 * Klasa Pas, 
 * @author John Doe <john.doe@example.com>
 * @access public
 * @property String $ime Ime Psa
 */
class Macka extends AZivobice implements IBuhe {
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
    function __construct($novo_ime='garfield') {
        echo '<br>--- Kreiran je novi macak! ---<br>';
        $this->set_ime($novo_ime);
    }
    function __destruct() {
        echo '<br>--- macak je unisten! ---<br>';
    }


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
    function glasaj_se() {
        
        echo "<br><b>Mijauuu</b>";
    }

    public function ceskaj_se() {
        echo "<br>greb, greb... ?";
    }
        public function masi_repom() {
        echo "<br>mašem repom... ?";
    }
    function jedi() {
        echo "<br>   Jedem miseve"; 
    }
}
