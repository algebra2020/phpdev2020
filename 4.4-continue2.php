<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$x=0;
$y=0;
while ($x <= 10) {
    $x++;  // $x=$x+1
    while ($y <= 10) {
        $y++;
        if ($y == 5) {
            continue 2;
            
            $y++;
        }
        echo "<br>".$x." ".$y;
    }
}