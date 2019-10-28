<?php 

$fruits=array(
0=>'limun',
'a'=>'naranca',
1=>'banana',
'b'=>'jabuka');
echo "<hr> Original polje<br>";
print_r($fruits);
echo "<hr> <h3>Nakon operacije sort()</h3><br>";

sort($fruits);

print_r($fruits);

echo "<hr> <h3>Nakon operacije rsort()</h3><br>";
$fruits=array(
0=>'limun',
'a'=>'naranca',
1=>'banana',
'b'=>'jabuka');
rsort($fruits);

print_r($fruits);

echo "<hr> <h3>Nakon operacije asort()</h3><br>";
$fruits=array(
0=>'limun',
'a'=>'naranca',
1=>'banana',
'b'=>'jabuka');
asort($fruits);

print_r($fruits);

echo "<hr> <h3>Nakon operacije arsort()</h3><br>";
$fruits=array(
0=>'limun',
'a'=>'naranca',
1=>'banana',
'b'=>'jabuka');
arsort($fruits);

print_r($fruits);

echo "<hr> <h3>Nakon operacije ksort()</h3><br>";
$fruits=array(
0=>'limun',
'a'=>'naranca',
1=>'banana',
'b'=>'jabuka');
ksort($fruits);

print_r($fruits);

echo "<hr> <h3>Nakon operacije krsort()</h3><br>";
$fruits=array(
0=>'limun',
'a'=>'naranca',
1=>'banana',
'b'=>'jabuka');
krsort($fruits);

print_r($fruits);

echo "<br>SORT_REGULAR:".SORT_REGULAR;
echo "<br>SORT_NATURAL:".SORT_NATURAL;

echo "<hr> <h3>PONOVI sa SORT_NATURAL Nakon operacije ksort()</h3><br>";
$fruits=array(
0=>'limun',
'a'=>'naranca',
1=>'banana',
'b'=>'jabuka');

ksort($fruits,SORT_NATURAL);

print_r($fruits);

echo "<hr> <h3>PONOVI sa SORT_REGULAR Nakon operacije ksort()</h3><br>";
$fruits=array(
0=>'limun',
'a'=>'naranca',
1=>'banana',
'b'=>'jabuka');

//ksort($fruits,SORT_REGULAR);
ksort($fruits,0);
print_r($fruits);

echo "<hr> <h3>PONOVI sa SORT_LOCALE_STRING  Nakon operacije ksort()</h3><br>";
$fruits=array(
0=>'limun',
'a'=>'naranca',
1=>'banana',
'b'=>'jabuka');

ksort($fruits,SORT_LOCALE_STRING );

print_r($fruits);
echo "<hr> <h3>PONOVI sa  Nakon operacije natsort ()</h3><br>";
$fruits=array(
0=>'limun',
'a'=>'naranca',
1=>'banana',
'b'=>'jabuka');

natsort ($fruits );

print_r($fruits);