<?php

/* 
 * petlja ispisuje brojeve 0,1,2... 99
 */

for ($index = 0; $index < 100; $index++) {
    echo $index." ";
}

echo "<hr>";
/* 
 * petlja ispisuje brojeve 0,1,2... 100
 */

for ($index = 0; $index <= 100; $index++) {
    echo $index." ";
}

echo "<hr>";
/* 
 * petlja ispisuje brojeve 0,2,4,6 ... 100
 */

for ($index = 0; $index <= 100; $index+=2) {
    echo $index." ";
}

echo "<hr>";
/* 
 * petlja ispisuje brojeve 0,7,14,21 ... 100
 */

for ($index = 0; $index <= 100; $index+=7) {
    echo $index." ";
}

echo "<hr>";
/* 
 * petlja ispisuje brojeve -32 -29 -26 -23 -20 ....  19
 */

for ($index = -32; $index <= 20; $index+=3) {
    echo $index." ";
}

echo "<hr>";
/* 
 * petlja ispisuje brojeve 40, 37, 34, 31 ... 20
 */

for ($index = 40; $index >= 20; $index-=3) {
    echo $index." ";
}

echo "<hr>";
/* 
 * petlja ispisuje brojeve 0,1,2...  <preskoci sve od 35-77> 99
 */

for ($index = 0; $index < 100; $index++) {
    if($index>34 && $index<78){
        echo ".";
        continue;
    }
    echo $index." ";
}