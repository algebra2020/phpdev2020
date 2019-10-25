<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 *  
 */

/* 1. Koji je od navedenih operatora aritmetički operator:
 * a: %
 * b: &&
 * c: .
 */
echo "Aritmetički operator je % (Modulo)";
echo "<br>";
echo "<br>";
/* 2. Definirajte dvije varijable $Ime i $Prezime u koje ćete upisati vaše ime
 * i prezime. Ispišite te dvije varijable koristeći se operatorom za
 * nastavlajnje nizova.
 */

$Ime= "Ognjen";
$Prezime= "Vidaček";

echo "Moje ime je ".$Ime." ".$Prezime.".";
echo "<br>";
echo "<br>";

/*3. Postavite vrijednost avriajble a na 5. Korištenjem operatora automatskog
 * povečavanja i smanjivanja najprije povećajte vrijednost varijable a i 
 * ispišite je, a onda smanjite vrijednost i ispišite.
 */
echo "Postavite vrijednost avriajble a na 5. Korištenjem operatora automatskog
 povečavanja i smanjivanja najprije povećajte vrijednost varijable a i 
 ispišite je, a onda smanjite vrijednost i ispišite."."<br>";
$a=5;
echo "Varijabla a je: ".(++$a)."<br>";
echo "Varijabla a je: ".(--$a)."<br>";
echo "Varijabla a je: ".($a++)."<br>";  //samo test
echo "<br>";
/* 4. Varijablu iz prethodnog zadatka pretvorite u float pomoču operatora
 * pretvorbe i ispišite.
 */
echo "Varijablu iz prethodnog zadatka pretvorite u float pomoču operatora
 pretvorbe i ispišite."."<br>";
$a =(float)$a;
if(is_float($a)== true){
    echo "Varijabla a je tipa float. ".$a;
}
else{
    echo "Varijabla a nije tipa float. ".$a;
}
echo "<br>";
echo "<br>";
/* 5. Varijablu iz prethodnog zadatka operatorom dodjeljivanja s operacijom
 * uvećavajte za 5.
 */
echo "Varijablu iz prethodnog zadatka operatorom dodjeljivanja s operacijom
 * uvećavajte za 5."."<br>";
echo "Varijabla a je uvečana za 5: ".($a+= 5);
echo "<br>";
echo "<br>";
/*Napravite stranicu sa dvije varijable. Zatim ispišite rezultate aritmetičkih
 * operacija +. -. *. /, i modulo.
 */

unset($a);
$a = 7;
$b = 3;
echo "Napravite stranicu sa dvije varijable. Zatim ispišite rezultate aritmetičkih
 operacija +, -, *, /, i modulo."."<br>";
echo "a. ".$a." + ".$b." = ".($a + $b)."<br>";
echo "b. ".$a." - ".$b." = ".($a - $b)."<br>";
echo "c. ".$a." * ".$b." = ".($a * $b)."<br>";
echo "d. ".$a." / ".$b." = ".($a / $b)."<br>";
echo "e. ".$a." % ".$b." = ".($a % $b)."<br>";
