<?php

echo "<hr>Dvostruka petlja (tablica mnozenja)<br>";
echo "Uz primjenu continue<br>";

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
