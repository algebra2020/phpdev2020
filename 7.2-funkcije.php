<?php

$fruits=array(
0=>'limun',
'a'=>'naranca',
1=>'banana',
'b'=>'jabuka');


///array_fill ( int $start_index , int $num , mixed $value ) : array
$voce=array_fill ( 10 , 5, 'Šljiva' );

print_r($voce);


$timestamp=time();
echo $timestamp;

echo '<br>danas je mjesec '.date('F',$timestamp);

echo '<br>ovaj mjesec ima '.date('t',$timestamp)." dana.";

// 7.3 definiranje funkcije

function hr_day(){
	switch(date('N')){
		case '1': $day='Pon'; break;
		case '2': $day='Uto'; break;		
		case '3': $day='Sri'; break;		
		case '4': $day='Cet'; break;		
		case '5': $day='Pet'; break;		
		case '6': $day='Sub'; break;		
		default:$day='Ned'; break;	
	}
	echo "<br> danas je ".$day;
}

hr_day();



$polje_imena=array('Maja','Kaja', 'Vida', 'Anđa');

function ispis_imena($ulaz){
 	echo "<table border='1' width='500'>";
	echo "<tr><th>Broj:</th><th>Ime:</th></tr>";
 foreach($ulaz as $key=>$ime){
 	printf( "<tr><td>%d</td><td>%s</td></tr>",$key,$ime);
 }
 	echo "</table>";	
}

ispis_imena($polje_imena);
ispis_imena($voce);
ispis_imena($fruits);

