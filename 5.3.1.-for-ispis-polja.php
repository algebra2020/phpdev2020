<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$polje= array(
    77
    ,'brojPI'=>3.14
    ,'sljiva'
    ,'banana'
    ,'kiwi'
    );
// PReformatirani ispis:
echo '<hr>Preformatirani <span>print_r</span><br>';
echo '<pre>';
print_r($polje);
echo '</pre>';

// Ne može se koristiti for petlja za asocijativna polja
/*
 for ($index = 0; $index < count($polje); $index++) {
    echo $polje[$index];
}
*/

echo "<hr> sortiramo polje pa ga pokusamo ispisati<br>";

sort($polje); // Sortiranje ubija keyeve!

echo '<pre>';
print_r($polje);
echo '</pre>';

// Sad moze proci for petlja
 for ($index = 0; $index < count($polje); $index++) {
    echo " ".$polje[$index];
}

$polje= array(
    77
    ,'brojPI'=>3.14
    ,'sljiva'
    ,'banana'
    ,'kiwi'
    );

echo '<hr>redefinicija kljuca ';
echo '<pre>';
print_r($polje);
echo '</pre>';
$polje[]=3.14;  // DODAVANJE NOVOG ELEMNTA
echo '<pre>';
echo "Ubacimo još jedan 3.14\n";
print_r($polje);
echo '</pre>';

echo "Izbacimo jedan 3.14<br>";
unset($polje['brojPI']);  // IZBACIVANJE ELEMENTA POLJA
echo "Ponovo ispisemo<br>";
echo '<pre>';
print_r($polje);
echo '</pre>';