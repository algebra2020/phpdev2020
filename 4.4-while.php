<?php

$i = 1;
$zbroj = 0;
while ($i <= 100) {
    $zbroj += $i;
    echo "<br> " . $i;
    if ($zbroj >= 80) {
        break;
    }
    $i++;
}
echo "<br>Zbroj je " . $zbroj;
echo "<br>Stali smo kod broja " . $i;



//  DANGER beskonacna petlja
// while (true) {
//   echo "Nema kraja"; 
// }

echo "<hr>Dvostruka petlja (tablica mnozenja)<br>";

$x = 1;
$y = 1;
while ($x <= 10) {
    while ($y <= 10) {
     if($x*$y>=40){
         break;
     }
     echo " ".($x*$y);
     $y++;
    }
    echo "<br>";
    $y = 1;
    $x++;
}
