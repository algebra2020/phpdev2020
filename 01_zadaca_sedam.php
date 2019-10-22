<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo 'Ovo je stranica s odgovorom na sedmi zadatak';


$a = 4;
$b = 2;

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
echo 'Kraj!';