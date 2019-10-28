<?php
// GLOBAL SCOPE
$a=2;  // možemo definirati a i ne moramo

function inc_a(){ // Start LOCAL SCOPE
	global $a;  // EXPLICITNO Ubačena varijabla iz GLOBAL SCOPEA
	$a++;
	echo $a;
}// End LOCAL SCOPE

inc_a();
echo $a;


function inc_b(){ // Start LOCAL SCOPE
	static $b=0;  // STATICKA VAR MORA BITI DEFININIRANA!
	$b++;
	echo $b;
}// End LOCAL SCOPE

inc_b();
echo $b;

