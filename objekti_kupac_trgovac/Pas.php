<?php
//require_once './Zivobice.php';
//require_once './IBuhe.php';

spl_autoload_register(function ($class) {
    //include 'classes/' . $class . '.class.php';
    include './' . $class . '.php';
});

/**
 * Klasa Pas, 
 * @author John Doe <john.doe@example.com>
 * @access public
 * @property String $ime Ime Psa
 */
class Pas extends AZivobice implements IBuhe{
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
    function __construct($novo_ime='Rex') {
        echo '<br>--- Kreiran je novi pas! ---<br>';
        $this->set_ime($novo_ime);
    }
    function __destruct() {
        echo '<br>--- Pas je unisten! ---<br>';
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
       // parent::glasaj_se();
        echo "<br><b>vau vau</b>";
    }

    public function ceskaj_se() {
        echo "<br>češ, češ... ?";
    }

    public function masi_repom() {
        echo "<br>mašem repom... ?";
    }
    function jedi() {
        parent::jedi();
    }

}
