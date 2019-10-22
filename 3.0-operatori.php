<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// aritmeticki operatori
$a=33;
$b=8;

echo 'varijable a i b:'.$a.' '.$b;
echo '<br>zbroj:'.($a + $b);
echo '<br>razlika:'.($a - $b);
echo '<br>umnozak:'.($a * $b);
echo '<br>kvocijent:'.($a / $b);
echo '<br>modulo:'.($a % $b);


// nastavak nizova

// .


// automatsko povecavanje i smanjivanje
$a++;
echo 'varijable a i b:'.$a.' '.$b;

echo "<hr>";
echo "<br>".$b++;
echo $b;

echo "<hr>";
echo "<br>".++$b;
echo $b;

echo "<hr>";
echo "<br>".--$b;
echo $b;


// 3.2.4 operatori usporedbe
unset($a,$b);
$a="3";
$b=3.;

echo '<br>$a is '.gettype($a);
echo '<br>$b is '.gettype($b);

if($a==$b){  // usporedba po vrijednosti  ISTO
    echo '<br>varijable su jednake vrijednosti';
}
else{
    echo '<br>varijable su razlicite vrijednosti';
}

// ISTO NIJE INDENTICNO !!!

if($a===$b){  // usporedba po tipu i vrijednosti INDENTICNO
    echo '<br>varijable su jednakog tipa i vrijednosti';
}
else{
    echo '<br>varijable su razlicitog  tipa ili vrijednosti';
}

if($a!==$b){  // NEJEDNAKO // NEINDENTICNOST
    echo '<br>varijable su razlicite!!';
}
else{
    echo '<br>varijable su jednake ';
}
///  VECI ili MANJI

if($a < $b){
    echo '<br>a je manji od b';
}
elseif ($a > $b) {
echo '<br>a je veci od b';
}
else{
    echo '<br>varijable su jednake vrijednosti';
}
