<?php
require_once './Savez.php';


$t1="Bayern";
$savez1=new Savez();
$savez1->set_ime_saveza($t1);
var_dump ($t1);
var_dump($savez1);
echo "<br>Savez tima ".$t1." se zove " . $savez1->get_ime_saveza($t1)."<br>";

$t2="Liverpool";
$savez2=new Savez();
$savez2->set_ime_saveza($t2);
var_dump ($t2);
var_dump($savez2);
echo "<br>Savez tima ".$t2." se zove " . $savez2->get_ime_saveza($t2)."<br>";


$t3="Dinamo";
$savez3=new Savez();
$savez3->set_ime_saveza($t3);
var_dump ($t3);
var_dump($savez3);
echo "<br>Savez tima ".$t3." se zove " . $savez3->get_ime_saveza($t3)."<br>";

$t4="Hajduk";
$savez4=new Savez();
$savez4->set_ime_saveza($t4);
var_dump ($t4);
var_dump($savez4);
echo "<br>Savez tima ".$t4." se zove " . $savez4->get_ime_saveza($t4)."<br>";