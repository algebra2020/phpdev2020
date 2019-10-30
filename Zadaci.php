<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*1.Napišite program koji upisuje pet imena u  polje $imena
 *  i ispisuje ih s pomoću petlje foreach.
 */

echo " Polje s pet imena <br>";
$imena=array(
    'Ana'
    ,'Ivana'
    ,'Laura'
    ,'Marko'
    ,'Luka'
);



foreach ($imena as $value){
    echo'<li>'.$value.'</li>';
}



/*2.Polju iz prethodnog zadatka promijenite ključeve
 *  tako da umjesto ključa 1 piše ime5, 
 *  umjesto ključa 2 ime4 itd.
 */



echo "<hr> Promjena ključeva <br>";

$imena=array();
    

$imena["ime5"]="Ana";
$imena["ime4"]="Ivana";
$imena["ime3"]="Laura";
$imena["ime2"]="Marko";
$imena["ime1"]="Luka";


foreach ($imena as $key => $ime){
  echo '<br>';
    echo '</li>'
    ."Pod ključem "
    .$key
    ."naziva se"
    .$ime
     .'</li></br>';
 
}

/*3.Posložite imena u polju iz prvog zadatka abecednim redom i 
 *  ispišite vrijednosti elementa uz pomoć petlje for.
 */

echo "<hr>  Imena prema abecednom redu<br>";
  $imena=array();
    

$imena["ime5"]="Ana";
$imena["ime4"]="Ivana";
$imena["ime3"]="Laura";
$imena["ime2"]="Marko";
$imena["ime1"]="Luka";

sort($imena);

for ($i=0; $i < count($imena); $i++){

echo $imena[$i]."<br/>";
}
/*4.Posložite ključeve u polju abecednim redom i 
 *  ispišite vrijednosti elementa zajedno
 *  s pripadajućim ključevima uz pomoć petlje foreach.
 */

echo "<hr> Ključevi prema abecednom redu <br>";
$imena= array();

$imena["ime5"]="Ana";
$imena["ime4"]="Ivana";
$imena["ime3"]="Laura";
$imena["ime2"]="Marko";
$imena["ime1"]="Luka";

ksort($imena);

foreach ($imena as $key => $value) {
    echo  $value."<br/>";
    
    
}


/*5.Napišite program koji će s pomoću petlje for 
 *  automatski stvoriti polje brojeva od 1 do 100 
 *  te s petljom foreach ispisati sadržaj polja.
 */


 
echo "<hr>Polje brojeva od 1 do 100 te ispis sadržaja polja<br>";

$brojevi=array();

for ($br=1; $br<=100; $br++){
    $brojevi[]=$br;
}
foreach ($brojevi as  $value) {
    echo $value.', ';
    
}


/*1.Napiši funkciju koja vraća hrvatski naziv za trenutačni mjesec.
 *  Parametar koji prosljeđujete funkciji je rezultat funkcije date('n').
 * 
 */
echo '<hr>';


function hr_mjesec(){
    switch (date('n')) {
        case '1': $mj='Siječanj';break;
        case '2': $mj='Veljača';break;
        case '3': $mj='Ožujak';break;
        case '4': $mj='Travanj';break;
        case '5': $mj='Svibanj';break;
        case '6': $mj='Lipanj';break;
        case '7': $mj='Srpanj';break;
        case '8': $mj='Kolovoz';break;
        case '9': $mj='Rujan';break;
        case '10': $mj='Listopad';break;
        case '11': $mj='Studeni';break;
        case '12': $mj='Prosinac';break;
      }
      echo "<br>Trenutačni mjesec je: ".$mj;
}
hr_mjesec();


/*2.Napiši funkciju koja ispisuje HTML tablicu imena i prezimena učenika.
 *  Kao parametar joj se prosljeđuje polje s imenima i prezimenima.
 * 
 */


echo "<hr> Tablica <br>";

$imena_prezimena=array(
    'Ivo Novak'
    ,'Ema Koren'
    ,'Tea Kralj'
    ,'Davor Jagic'
    ,'Jan Ivanusic');

function tablica_ucenika($ulaz){
echo "<table border='3' width='600' >";
echo "<tr><th>Broj:</th><th>Ime_Prezime:</th></tr>";
foreach ($ulaz as $key => $value) {
    printf( "<tr>
     '<td>'.$key.'</td>
            '<td>'.$value.'</td>'
            </tr>");
    
}
            echo "</table>";
}



tablica_ucenika($imena_prezimena);


/*3.Napiši funkcije  za zbrajanje, razliku, umnožak i dijeljenje dva broja.
 *  Zatim napiši funkciju koja će pozivati sve te funkcije odjednom.
 */


echo "<hr> Funkcija za zbrajanje, oduzimanje,množenje i djeljenje<br>";
$a=10;
$b=2;


function zbrajanje($x,$y){
    return $x+$y;
}
       
function oduzimanje($x,$y){
    return $x-$y;
}
        
function mnozenje($x,$y){
    return $x*$y;
}
       
function djeljenje($x,$y){
    return $x/$y;
}

function sve_operacije($x,$y){
    echo "operacija zbrajanja";
    echo zbrajanje($x,$y).'<br/>';
      echo "operacija oduzimanja";
    echo oduzimanje($x,$y).'<br/>';
      echo "operacija mnozenja";
    echo mnozenje($x,$y).'<br/>';
      echo "operacija djeljenja";
    echo djeljenje($x,$y).'<br/>';
    
}

sve_operacije($a,$b);







