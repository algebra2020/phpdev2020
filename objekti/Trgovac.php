<?php

require_once './Kupac.php';

class Trgovac extends Kupac {

    private $zarada = 0;
    public $skladiste = array();

    public function __construct($novo_ime='John') {
        parent::__construct($novo_ime);
        $p1 = new Proizvod('kruh', 9.99, 50);
        $p2 = new Proizvod('mlijeko', 7.29, 30);
        
        $this->skladiste[] = $p1;
        $this->skladiste[] = $p2;
        $this->skladiste[] = new Proizvod('sladoled', 5, 100);
        $this->skladiste[] = new Proizvod('cokolada', 6, 300);
    }

    public function dohvati($ime, $kolicina,&$kupac) {  // uzima sa skladista proizvod
        //Pretrazivac proizvoda vraca proizvod na skladista
        $item = null;
        foreach ($this->skladiste as $p) {
            if ($ime == $p->ime) {
                $item = $p;
                break;
            }
        }
        // echo "proizvod je pod " . $item->kolicina;
        if ($item->kolicina >= $kolicina && $kupac->get_lova()>=$item->cijena * $kolicina) {
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
        echo "<br>Trgovac:<b>".$this->get_ime()."</b>";
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
