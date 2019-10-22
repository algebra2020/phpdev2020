<?php

$naziv="pet";

switch ($naziv) {
    case "pon": 
    case "uto":     
    case "sri":     
    case "cet":     
    case "pet":         
        echo 'Radni dan'; break;
    case "sub":    
    case "ned":         
        echo 'Vikend!!!'; break;
    default:
        echo 'Nisi pogodio dan'; 
        break;
}

echo "<hr>";


switch ($naziv) {
    case "sub":    
    case "ned":         
        echo 'Vikend!!!'; break;
    default:
        echo 'Radni dan'; 
        break;
}