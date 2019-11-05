<?php

require_once './Covjek.php';

class Trgovac extends Covjek {

    private $zarada = 0;
    public $p;
    public $skladiste = array();

    public function __construct() {
        $this->p = new Proizvod('kruh', 9.99, 5);
        $this->skladiste[] = $this->p;
    }

    public function dohvati($ime, $kolicina) {  // uzima sa skladista proizvod
        if ($this->skladiste[0]->kolicina >= $kolicina) {
            $this->skladiste[0]->kolicina -= $kolicina;
            return $this->skladiste[0]->cijena*$kolicina;
        }
    }

    public function izlistaj_skladiste() {
        echo "<ul>";
        foreach ($this->skladiste as $p) {
            printf("<li>%s, kolicina:%d cijena:%.2fkn</li>"
                    , $p->ime
                    , $p->kolicina
                    , $p->cijena);
        }
        echo "</ul>";
    }

}

class Proizvod {

    function __construct($ime, $cijena, $kolicina) {
        $this->ime = $ime;
        $this->cijena = $cijena;
        $this->kolicina = $kolicina;
    }

    public $ime;
    public $cijena;
    public $kolicina;

}
