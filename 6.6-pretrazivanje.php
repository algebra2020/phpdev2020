<?php

//6.6-pretrazivanje.php

echo "<hr> Pronadji bananu</h3><br>";
$fruits=array(
0=>'limun',
'a'=>'naranca',
1=>'banana',
'b'=>'jabuka');

foreach($fruits as $key=>$value){
	if($value=='banana'){
		break;
	}
}

echo "<br> Pronasao sam pojam '".$value."' pod kljucem ".$key;


$value='jabuka';
$key=array_search($value,$fruits);
echo "<br> Pronasao sam pojam '".$value."' pod kljucem ".$key;


// Postoji li pojam u polju?

if(in_array($value,$fruits)){
	echo "<br> Pronasao sam pojam";
	}

