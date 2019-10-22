<?php

/* 
 * if-else
 * switch-case
 * while
 * for
 * foreach
 */

$a=2;
if($a==1){
    echo "Varijabla je jednaka 1";
}
 else {
    echo "Varijabla nije jednaka 1";
}

echo "<hr>";

$naziv="alge123456";

if(strlen($naziv)>=10){
    echo "naziv ima 10 ili vise znakova"; 
}
elseif(strlen($naziv)>=5 && strlen($naziv)<10){
    echo "broj znakova u nazivu je izmedju 5 i 10"; 
}
else{
    echo "broj znakova u nazivu je premali";
}
echo "<hr>";
echo "skraceni izraz<br>";

$a=3;

echo ($a>5)?-1:1;


