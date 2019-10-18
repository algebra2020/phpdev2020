<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$a=5;

if ($a > 0 &&  $a < 10){  // AND LOGICKI OPERATOR (KONJUKCIJA)
    echo 'broj je u trazenom nizu';
}
 else {
     echo 'broj nije u trazenom nizu';
}

if ($a < 0 ||  $a > 10){  // OR LOGICKI OPERATOR (DISJUNKCIJA)
    echo '<br>2. broj je u trazenom nizu';
}
 else {
     echo '<br>2. broj nije u trazenom nizu';
}
