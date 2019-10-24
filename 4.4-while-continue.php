<?php
/**
 * Zadaca:
 * Izbaciti iz rjesenja sve slucajeve kad je $x paran!!!
 * Uz pomoc CONTINUE
 */
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
