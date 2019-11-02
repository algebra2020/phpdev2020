<?php

/**  
 * PHPDOC FORMAT 
 * Parametri funkcije
 * @todo &$val, 
 * func_num_args(), 
 * func_get_arg($i), 
 * func_get_args(), 
 * function_exists()
 */

// Predaja parametara putem vrijednosti
// sum(2,3)  --> 5
function pot_v($val=7){ // Prosljedjujemo adresu varijable, 7 je defoultna vrijednost
    $val=$val*$val;  // ostalo je u lokalnom scopeu
    return $val;
}

// Predaja putem reference
function pottt(&$val){ // Prosljedjujemo adresu varijable
    $val=$val*$val;  // vratilo se na adresu poziva
}

$broj=5;
$broj=pot_v($broj);
echo "nakon pot_v<br>".$broj;
echo "<hr>";

$broj=5;
pottt($broj);
echo "nakon pottt<br>".$broj;
echo "<hr>";


// Zadani parametri

$broj=5;
pottt($broj);
echo "nakon pottt<br>".$broj;
echo "<hr>";


// Predefinirana vrijednost, zadani parametar
$broj=5;
$broj=pot_v(); // pozivamo vbez parametara??
echo "nakon pot_v<br>".$broj;
echo "<hr>";

















