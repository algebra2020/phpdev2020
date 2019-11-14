<?php
/**
 * @todo 3 tima medjusobno igraju
 * @todo random rezultat poluvrijeme i kraj
 * @todo sudac fali?
 * @todo rang lista
 */

require_once './Team.php';
require_once './Susret.php';
require_once './Rang.php';
require_once './Sudac.php';
require_once './Savez.php';

$t1=new Team("Liverpool");
$t2=new Team("Bayern");
$t3=new Team("Dinamo");
$sudac1=new Sudac();
$sudac2=new Sudac();
$sudac3=new Sudac();
$savez=new Savez();


$susret1= new Susret($t1,$t2,$sudac1);
$susret1->odigraj(new DateTime('NOW'));

$susret2= new Susret($t2,$t3,$sudac2);
$susret2->odigraj(new DateTime('NOW'));

$susret3= new Susret($t3,$t1,$sudac3);
$susret3->odigraj(new DateTime('NOW'));


$r=new Rang();
$r->dodaj($susret1);
$r->dodaj($susret2);
$r->dodaj($susret3);

//$r->ispisi_tablicu();


// Rezultat Liverpol-Bayern(1:0)
//echo "Rezultat je:".$susret1->get_rezultat();
//echo "Rezultat poluvremena je:".$susret1->get_polu_rezultat();


//Tatjana dodano


$ulistaj = $r->ulistaj($t1,$t2,$t3,$savez);
$pomocna1=$r->pomocna($savez);
$pregled_utakmica=$r->pregled();



//echo "<br><br>Pregled utakmica u ligi:<br>";
//echo "Utakmica 1: ".$susret1->get_rezultat()."(".$susret1->get_polu_rezultat().") Sudac utamice je: ".$sudac1->get_sudac_ime();
//echo "<br>Utakmica 2: ".$susret2->get_rezultat()."(".$susret2->get_polu_rezultat().") Sudac utamice je: ".$sudac2->get_sudac_ime();
//echo "<br>Utakmica 3: ".$susret3->get_rezultat()."(".$susret3->get_polu_rezultat().") Sudac utamice je: ".$sudac3->get_sudac_ime();


//kraj