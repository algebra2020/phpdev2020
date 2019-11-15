<?php
require_once './Savez.php';


$t1="Bayern";
$savez=new Savez();
$savez->set_savez($t1);
var_dump ($t1);
echo "<br>Savez tima ".$t1." se zove " . $savez->get_savez($t1)."<br>";

$t1="Liverpool";
$savez=new Savez();
$savez->set_savez($t1);
var_dump ($t1);
echo "<br>Savez tima ".$t1." se zove " . $savez->get_savez($t1)."<br>";


$t1="Dinamo";
$savez=new Savez();
$savez->set_savez($t1);
var_dump ($t1);
echo "<br>Savez tima ".$t1." se zove " . $savez->get_savez($t1)."<br>";

