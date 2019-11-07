<?php
require_once './Covjek.php';

$c1 = new Covjek();
$c1->ime="pero";  // Direktno postavljanje svojstava
echo "<br>Novi covjek se zove " . $c1->ime;

$c1->set_ime("marko");
echo "<br>Novi covjek je promjenio ime i sad se zove " . $c1->ime;

echo "<br>Ime covjeka pomoću gettera " . $c1->get_ime();

$c2=new Covjek();
$c2->set_ime("marica"); // Postavljanje pomocu SETTERA
echo "<br>Ime kupca pomoću gettera " . $c2->get_ime();

$c3=new Covjek("janica");
//$c3->set_ime("Marica");
echo "<br>Ime kupca pomoću gettera " . $c3->get_ime();

$c4=new Covjek();  // Postavlja default ime
echo "<br>Ime nepoznatog (bez imena): " . $c4->get_ime();