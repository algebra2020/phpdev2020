<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$varijablaaa="Algebra"; // postaje string

echo $varijablaaa;

$varijablaaa=35;
echo $varijablaaa;  // sad je cjelobrojna

$varijablaaa=array('rtl','nova','nacional geo', 2,44,'neki text');
// echo $varijablaaa;  // ovako se ne ispisuju polja

echo "<hr>";  // HORIZONTAL RULER
foreach ($varijablaaa as $x) {
    echo $x;
    echo " ";
}

echo "<hr>";  // HORIZONTAL RULER
foreach ($varijablaaa as $x) {
    echo $x." ";
}

echo "<hr>";  // HORIZONTAL RULER // ispis u obliku liste
echo "<ul>";
foreach ($varijablaaa as $x) {
    echo "<li>".$x."</li>";
}
echo "</ul>";