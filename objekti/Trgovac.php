<?php

require_once './Covjek.php';

class Trgovac extends Covjek {

    private $zarada = 0;
    public $skladiste = array();

    public function __construct() {
        $p1 = new Proizvod('kruh', 9.99, 50);
        $p2 = new Proizvod('mlijeko', 7.29, 30);
        $this->skladiste[] = $p1;
        $this->skladiste[] = $p2;
    }

    public function dohvati($ime, $kolicina) {  // uzima sa skladista proizvod
        //Pretrazivac proizvoda vraca proizvod na skladista
        $item = null;
        foreach ($this->skladiste as $p) {
            if ($ime == $p->ime) {
                $item = $p;
                break;
            }
        }
        // echo "proizvod je pod " . $item->kolicina;
        if ($item->kolicina >= $kolicina) {
            $item->kolicina -= $kolicina;
            return $item->cijena * $kolicina;
        }
        /*
          if ($this->skladiste[0]->kolicina >= $kolicina) {
          $this->skladiste[0]->kolicina -= $kolicina;
          return $this->skladiste[0]->cijena * $kolicina;
          }
         */
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
