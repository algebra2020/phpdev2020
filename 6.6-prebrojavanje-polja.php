<?php

//Prebrojavanje elemenata polja

$fruits=array(
0=>'limun',
'a'=>'naranca',
1=>'banana',
'b'=>'jabuka');

$br_elem=0;

foreach($fruits as $val){
	$br_elem++;
}

echo "<br>broj elemenata polja fruits je: ".$br_elem;

echo "<br>broj elemenata polja fruits je: ".count($fruits);

echo "<br>Zadnji elemenat polja fruits je: ".end($fruits);

echo "<br>Zadnji elemenat polja fruits je: ".$val;

