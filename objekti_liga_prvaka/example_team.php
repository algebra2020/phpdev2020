<?php
//require_once './Savez.php';
require_once './Team.php';

$tim= new Team('Liverpool');
echo '<br>';
var_dump($tim);
echo "<pre>";
print_r($tim);
echo "</pre>";
echo $tim->get_ime_saveza();




            
