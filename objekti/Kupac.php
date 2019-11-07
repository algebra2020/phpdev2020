<?php

require_once './Covjek.php';

class Kupac extends Covjek {

    private $lova = 0;

    /**
     * Funkcija kupi traži adresu trgovca, artikl i količinu
     * kupovina umanjuje raspoloživu lovu kod kupca
     * 
     * @example path $k1->kupi(new Trgovac(),"mlijeko", 10)
     * @param Trgovac $trgovac
     * @param String $proizvod
     * @param int $kolicina
     */
    function kupi(&$trgovac, $proizvod, $kolicina) {
        // nadji trgovca
        // udji u skladiste
        // nadji proizvod pod imenom "kruh"
        // Umanji za 2 komada
        // Spremi natrag u skladiste
        // trgovcu predajemo traženi artikl, količinu 
        // i našu adresu kako bi se uvjerio da imamo 
        // dovoljno sredstava za shopping
        $racun = $trgovac->dohvati($proizvod, $kolicina,$this);
        $this->lova -= $racun;
    }

    function uplati($iznos) {
        $this->lova += $iznos;
    }
 public function get_lova(){
     return $this->lova;
 }
    public function izlistaj_konto() {
        printf("<br>Trenutno stanje konta je:%.2fkn", $this->lova);
    }

}
