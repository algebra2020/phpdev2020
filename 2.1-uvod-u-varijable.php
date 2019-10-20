<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * @param string $varijablaaa Naziv skole
 */
$varijablaaa = "Algebra"; // postaje string

echo $varijablaaa;

$varijablaaa = 35;
echo $varijablaaa;  // sad je cjelobrojna

$varijablaaa = array('rtl', 'nova', 'nacional geo', 2, 44, 'neki text');
// echo $varijablaaa;  // ovako se ne ispisuju polja

echo "<hr>";  // HORIZONTAL RULER
foreach ($varijablaaa as $x) {
    echo $x;
    echo " ";
}

echo "<hr>";  // HORIZONTAL RULER
foreach ($varijablaaa as $x) {
    echo $x . " ";
}

echo "<hr>";  // HORIZONTAL RULER // ispis u obliku liste
echo "<ul>";
foreach ($varijablaaa as $x) {
    echo "<li>" . $x . "</li>";
}
echo "</ul>";


// Ovo dolje se moze, ali se ne preporucuje
$naziv_var = "iznos";
$$naziv_var = 55;  // isto kao da smo napisali '$iznos'
echo $iznos;

define('SRIJEDA', 3);
define('UTORAK', 2);
define('PI', 3.14);

echo '<br>utorak je ' . UTORAK . ' dan u tjednu';
echo '<br>Ludolfov broj je: ' . PI;

unset($iznos);
//echo $iznos; // ne mogu ispisati ako je nedefinirana


$x = 123;
if (is_float($naziv_var)) {
    echo '<br>varijabla x je broj sa pomičnim zarezom';
}
if (is_int($x)) {
    echo '<br>varijabla $x je cjelobrojna';
    echo "<br>varijabla $x je cjelobrojna";
    echo "<br>varijabla " . $x . ' je cjelobrojna';
    echo "<br>varijabla "
    . $x
    . ' je cjelobrojna';
}
$x = NULL;
unset($x);  // OVO NIJE ISTO

$x = 555;
$y = 33;

echo "<br>zbroj "
 . $x
 . ' plus'
 . $y
 . ' jednako je '
 . ($x + $y);
