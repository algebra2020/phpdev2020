<?php
/**
 * @todo 3 tima medjusobno igraju
 * @todo random rezultat poluvrijeme i kraj
 * @todo sudac fali?
 * @todo rang lista
 */
//TODO umjesto require implementirati autoload
require_once './Team.php';
require_once './Susret.php';
require_once './Rang.php';
require_once './Sudac.php';
require_once './Savez.php';

$t1=new Team("Liverpool");
$t2=new Team("Bayern");
$t3=new Team("Dinamo");
$t4=new Team("Lion");

$sudac1=new Sudac();
$sudac2=new Sudac();
$sudac3=new Sudac();
$sudac4=new Sudac();
$sudac5=new Sudac();
$sudac6=new Sudac();

$susret1= new Susret($t1,$t2,$sudac1);
$susret1->odigraj(new DateTime('NOW'));

$susret2= new Susret($t2,$t3,$sudac2);
$susret2->odigraj(new DateTime('NOW'));

$susret3= new Susret($t3,$t1,$sudac3);
$susret3->odigraj(new DateTime('NOW'));

$susret4= new Susret($t4,$t1,$sudac4);
$susret4->odigraj(new DateTime('NOW'));

$susret5= new Susret($t2,$t4,$sudac5);
$susret5->odigraj(new DateTime('NOW'));

$susret6= new Susret($t3,$t4,$sudac6);
$susret6->odigraj(new DateTime('NOW'));

$r=new Rang();
$r->dodaj($susret1);
$r->dodaj($susret2);
$r->dodaj($susret3);
$r->dodaj($susret4);
$r->dodaj($susret5);
$r->dodaj($susret6);

$r->dodaj_timove($t4);
$r->dodaj_timove($t3);
$r->dodaj_timove($t2);
$r->dodaj_timove($t1);


$pregled_utakmica=$r->pregled();


$r->ispisi_tablicu();
