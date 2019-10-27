<?php

/* 
 * Multidim polje je polje polja
 */
//ucionice $U1 i $U2
//Fakultet $F1

$U1=array(
    'Marko',
    'Marica',
    'Janko',
    'Janica'
    );

$U2=['Lara',65=>'Tara','Mara'];

var_dump($U1);
var_dump($U2);


echo "<hr>";
$F1=array($U1,$U2);
echo "<pre>";
var_dump($F1);
echo "</pre>";
// Multidim ispis 
foreach ($F1 as $u) {
    foreach ($u as $s) {
        echo " ".$s;
    }
    echo "<br>";
}