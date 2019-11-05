<?php

require_once './Covjek.php';

class Kupac extends Covjek {

    private $lova = 0;

    function kupi(&$trgovac, $proizvod, $kolicina) {
        // nadji trgovca
        // udji u skladiste
        // nadji proizvod pod imenom "kruh"
        // Umanji za 2 komada
        // Spremi natrag u skladiste
        $racun = $trgovac->dohvati($proizvod, $kolicina);
        $this->lova -= $racun;
    }

    function uplati($iznos) {
        $this->lova += $iznos;
    }

    public function izlistaj_konto() {
        printf("<br>Trenutno stanje konta je:%.2fkn", $this->lova);
    }

}
