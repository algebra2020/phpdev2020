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

$t1=new Team("Liverpol");
$t2=new Team("Bayern");
$t3=new Team("Dinamo");

$susret1= new Susret($t1,$t2);
$susret1->odigraj(new DateTime('NOW'));

$susret2= new Susret($t2,$t3);
$susret2->odigraj(new DateTime('NOW'));

$susret3= new Susret($t3,$t1);
$susret3->odigraj(new DateTime('NOW'));


$r=new Rang();
$r->dodaj($susret1);
$r->dodaj($susret2);
$r->dodaj($susret3);

$r->ispisi_tablicu();


// Rezultat Liverpol-Bayern(1:0)
echo "Rezultat je:".$susret1->get_rezultat();
echo "Rezultat poluvremena je:".$susret1->get_polu_rezultat();
