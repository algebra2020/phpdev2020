<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*3.3.1 Definirajte nekoliko različitih brojčanih varijabli i ispišite ih.
 */
$a=5;
$b=6.5;
echo $a."<br>";
echo $b."<br>";

/* 3.3.2 Definirajte dvije varijable, ai b. Zamijenite im vrijednosti 
 * pomoću pomoćne varijable pom
 */
unset($a,$b);
echo $b."<br>";

$a = 3;
$b = 5;
$pom = $a;
$a = $b;
$b = $pom;
echo "a= ",$a,", b= ",$b,"<br>";

/*3.3.3 Kreiraj tekstualnu varijablu i ispiši ju
 * 
 */

$teksualnaVarijabla = "Ognjen Vidaček";
echo $teksualnaVarijabla;
?>