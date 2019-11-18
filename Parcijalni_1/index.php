<?php

include './data.php';


function date_trans($datum){
            if(isset($datum)){
                $datum_polje=explode("-",$datum);
                echo $datum_polje[2].".".$datum_polje[1].".".$datum_polje[0].".";}
            }


//Ispis tablice
echo "<h2>Pregled prijava na konferenciju </h2>";
                                   
            echo "
                <div style='margin-left: auto; margin-right: auto; width: 50%'>
                <table style='width:100%; font-size:15pt; border: 1px solid black; align:center'>
                <tr>
                  <th style='width:10%; text-align:center; border: 1px solid black; background:lightgray'>Rbr.</th>
                  <th style='width:20%; text-align:center; border: 1px solid black; background:lightgray'>Prezime</th>
                  <th style='width:25%; text-align:center; border: 1px solid black; background:lightgray'>Ime</th>
                  <th style='width:25%; text-align:center; border: 1px solid black; background:lightgray'>Datum prijave</th>
                  <th style='width:20%; text-align:center; border: 1px solid black; background:lightgray'>Placeno</th>
                  
                </tr>";
             $i=1;
                 foreach ($data as $key => $value) {
                     
               echo "
               <tr>
                  <td style='width:10%; text-align:center;border: 1px solid black'>".($i).".</td>
                  <td style='width:20%; text-align:left; border: 1px solid black'>".$data[$i]['prezime']."</td>
                  <td style='width:25%; text-align:left; border: 1px solid black'>".$data[$i]['ime']."</td>
                  <td style='width:25%; text-align:left; border: 1px solid black'>"; echo date_trans($data[$i]['datum']); echo "</td>
                  <td style='width:20%; text-align:center; border: 1px solid black'>"
                  ?>
                            <select>
                                <option value='Da'
                                    <?php 
                                         if ($data[$i]['placeno']=='Da'){echo 'selected="selected"';}
                                    ?>
                              >Da</options>
                            <option value='Ne'
                                <?php
                                if ($data[$i]['placeno']=='Ne'){echo 'selected="selected"';}
                                ?>
                            >Ne</options>
                            </select>
                           
                            
                  <?php
                echo "</td>
                    </tr>";
               $i++;
                                    
        }
        echo" </table>"
        . "</div>";
        

?>
