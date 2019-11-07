<?php

require_once './Trgovac.php';

// Kreiramo dva trgovca
$t5=new Trgovac("Ljubomir");
echo "<br>".$t5->get_ime();
$t5->set_ime("Ljubo");
echo "<br>".$t5->get_ime();

$t7=new Trgovac("Gisela");
echo "<br>".$t7->get_ime();


// t5 kupuje od t7
$t5->izlistaj_konto();
$t7->izlistaj_skladiste();

// pokusaj kupovine bez dovoljno novca
$t5->kupi($t7, "sladoled", 10);

$t5->izlistaj_konto();
$t7->izlistaj_skladiste();

// uplata na racun t5
$t5->uplati(200);
$t5->izlistaj_konto();

// Ponovo pokušamo kupovinu
$t5->kupi($t7, "sladoled", 10);

$t5->izlistaj_konto();
$t7->izlistaj_skladiste();


