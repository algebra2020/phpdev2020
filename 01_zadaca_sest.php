<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo 'Ovo je stranica s odgovorom na šesti zadatak';


$a = 7;
$b = 3;
?>

<div style="background-color:lightgrey;">
    <ol type="a">
        <li><?php echo $a . ' + ' . $b . ' = ' . ($a + $b) ?> </li>
        <li><?php echo $a . ' - ' . $b . ' = ' . ($a - $b) ?> </li>
        <li><?php echo $a . ' * ' . $b . ' = ' . ($a * $b) ?> </li>
        <li><?php echo $a . ' / ' . $b . ' = ' . ($a / $b) ?> </li>
        <li><?php echo $a . ' % ' . $b . ' = ' . ($a % $b) ?> </li>

    </ol>

</div>
<?php
echo '7. Postavite sada vrijednosti varijabla $a i $b iz prethodnog zadatka na'
 . ' vrijednosti 4 i 2 i ponovno učitajte stranicu';
?>


<ul>
    <li><a href="01_zadaca_sedam.php">Kliknite da osvježite stranicu s 
            novim vrijednostima $a=4 i $b=2</a></li>

</ul>

