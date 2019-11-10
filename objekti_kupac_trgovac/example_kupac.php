<?php
require_once './Kupac.php';
require_once './Trgovac.php';


$k1=new Kupac();  
echo "<br>Ime nepoznatog (bez imena) kupca: " . $k1->get_ime();

$k1->uplati(1000);  // Uplati na svoj racun

// Kreiramo prvog trgovca
$t1=new Trgovac("Stipe");
$t1->izlistaj_skladiste();

// Kreiramo drugog trgovca
$t2=new Trgovac("Jure");
$t2->izlistaj_skladiste();


// Izlistaj konto kupca prije shoppinga
$k1->izlistaj_konto();


// Shopping kod prvog
$k1->kupi($t1,"kruh", 2);  // Kupi od Trgovca $t1, proizvod $p1,komada 2
$k1->kupi($t1,"mlijeko", 10);  // Kupi od Trgovca $t1, proizvod $p1,komada 2

$t1->izlistaj_skladiste();
$k1->izlistaj_konto();

// Shopping kod drugog
$k1->kupi($t2,"sladoled", 10);  // Kupi od Trgovca $t1, proizvod $p1,komada 2
$k1->kupi($t2,"cokolada", 10);  // Kupi od Trgovca $t1, proizvod $p1,komada 2

$t2->izlistaj_skladiste();
$k1->izlistaj_konto();

$k1->uplati(20);
$k1->izlistaj_konto();


