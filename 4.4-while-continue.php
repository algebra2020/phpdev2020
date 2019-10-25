<?php
/**
 * Zadaca:
 * Izbaciti iz rjesenja sve slucajeve kad je $x paran!!!
 * Izbaciti iz rjesenja sve slucajeve kad je umnožak $x*$y > 40 !!!
 * Uz pomoc CONTINUE
 * @example path description 
 * 
 * 1 2 3 4 5 6 7 8 9 10
 * 3 6 9 12 15 18 21 24 27 30
 * 5 10 15 20 25 30 35
 * 7 14 21 28 35
 * 9 18 27 36
 *  */

echo "<hr>Dvostruka petlja (tablica mnozenja)<br>";
echo "Uz primjenu continue<br>";

$x = 1;
$y = 1;
while ($x <= 10) 
  {
    if($x%2==0)    
       {
        $x++;
        continue;
       }
       else
       {
        while ($y <= 10)
            {
             if($x*$y>=40)
               {
                 break;
               }  
               echo " ".($x*$y);
               
               $y++;
            }
            echo "<br>";
            $y = 1;
            $x++;
        }
  }
