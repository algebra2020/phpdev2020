<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$a=2;
$b=(float)$a;
$c=(string)$a;  // kao da smo napisali $c="2.12"

echo '<br>'.$b;
echo '<br>'.$c;

if($a===$b){  // usporedba po tipu i vrijednosti INDENTICNO
    echo '<br>varijable su jednakog tipa i vrijednosti';
}
else{
    echo '<br>varijable su razlicitog  tipa ili vrijednosti';
}

