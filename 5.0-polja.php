0<style>
    span{
        font-weight: bold;
        color: crimson;
    }
    
</style>
<?php

/* 
 * POLJA
 */

$polje= array(
    77
    ,'brojPI'=>3.14
    ,'sljiva'
    ,'banana'
    ,'kiwi'
    );
// echo $polje; // Ne možemo ispisivati ovako polja

var_dump($polje);

echo '<hr>';

print_r($polje);

echo '<ol>';
foreach ($polje as $value) {
    echo '<li>'.$value.'</li>';
}
echo '</ol>';

echo '<hr>Uz asocijacije:<br>';
echo '<ul>';
foreach ($polje as $key => $value) {
    echo '<li>'
        ."Pod ključem  <span>"
        .$key
        ."</span> se nalazi vrijednost <span>"
        .$value
        .'</span></li>';
}

echo '</ul>';

// Dodajemo još dva elementa

//$polje=array(2019);  // Ovako prebrisemo sve ostale elemnte

$polje[]=2019;
echo '<hr>Uz asocijacije:<br>';
echo '<ul>';
foreach ($polje as $key => $value) {
    echo '<li>'
        ."Pod ključem  <span>"
        .$key
        ."</span> se nalazi vrijednost <span>"
        .$value
        .'</span></li>';
}

echo '</ul>';

array_push($polje,8.99);
echo '<hr>Uz asocijacije:<br>';
echo '<ul>';
foreach ($polje as $key => $value) {
    echo '<li>'
        ."Pod ključem  <span>"
        .$key
        ."</span> se nalazi vrijednost <span>"
        .$value
        .'</span></li>';
}

echo '</ul>';

$polje['sokic']=4.99;  // OVO JE PREPORUCENI NACIN DODAVANJA
echo '<hr>Uz asocijacije:<br>';
echo '<ul>';
foreach ($polje as $key => $value) {
    echo '<li>'
        ."Pod ključem  <span>"
        .$key
        ."</span> se nalazi vrijednost <span>"
        .$value
        .'</span></li>';
}

echo '</ul>';




$polje=array_merge($polje,array('grickalica'=>'Chips'));
echo '<hr>spojena dva polja sa array_merge:<br>';
echo '<ul>';
foreach ($polje as $key => $value) {
    echo '<li>'
        ."Pod ključem  <span>"
        .$key
        ."</span> se nalazi vrijednost <span>"
        .$value
        .'</span></li>';
}

echo '</ul>';

/**
 * Ispis pojedinih elementa polja
 */
// Ispis 2, 3, i 4 elemanta
echo " ".$polje[2]." ". $polje[3]." ".$polje[4];

echo '<hr>Ispis uz asocijacije pojedinih:<br>';
// Ispis 2, 3, i 4 elemanta
echo " ".$polje['brojPI']." ". $polje['sokic']." ".$polje['grickalica'];


// PReformatirani ispis:
echo '<hr>Preformatirani <span>print_r</span><br>';
echo '<pre>';
print_r($polje);
echo '</pre>';

echo '<hr>Preformatirani <span>var_dump</span><br>';
echo '<pre>';
var_dump($polje);
echo '</pre>';