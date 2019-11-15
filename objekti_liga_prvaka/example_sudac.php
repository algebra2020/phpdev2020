<?php
require_once './Sudac.php';

$c1 = new Sudac();
echo "<br>Novi sudac se zove " . $c1->sudac_ime;

$c1->set_sudac_ime("marko");
echo "<br>Novi sudac je promjenio ime i sad se zove " . $c1->sudac_ime;

echo "<br>Ime suca pomoću gettera " . $c1->get_sudac_ime();

$c2=new Sudac();
//$c2->set_sudac_ime("marica"); // Postavljanje pomocu SETTERA
echo "<br>Ime suca pomoću gettera " . $c2->get_sudac_ime();

$c3=new Sudac("janica");
//$c3->set_sudac_ime("Marica");
echo "<br>Ime suca pomoću gettera " . $c3->get_sudac_ime();

$c4=new Sudac();  // Postavlja default ime
echo "<br>Ime nepoznatog (bez imena): " . $c4->get_sudac_ime();