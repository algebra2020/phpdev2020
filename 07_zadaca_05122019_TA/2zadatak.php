<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<style>

    #naslov{
        display: block;
        width: 95%;
        padding: 0.9em 0;
        margin: 0.5em;
        text-align: center;
        background: #E7717D;
        border-radius: 5%;
        font-size: 18pt;
    }

    .pitanje{
        display: inline-block;
        width: 95%;
        padding: 0.9em 0;
        margin: 0.5em;
        text-align: left;
        font-weight: bolder;
        border: 1pt black dotted;
    }

    .odgovor{
        display: inline-block;
        width: 95%;
        padding: 0.9em 0;
        margin: 0.5em;
        text-align: left;
        background: lightgray;
        font-weight: normal;
    }



    .kod{
        display: inline-block;
        width: 66%;
        padding: 0.9em 0;
        margin: 0.5em;
        text-align: left;
        background: #AFD275;
        font: italic;
    }

    .izvod{

        display: inline-block;

        width: 50%;

        padding: 0.9em 0;

        margin: 0.5em;

        text-align: left;

        background: white;

        font: italic;

    }

    .tab { margin-left: 40px; }

    table, th, td {

        border: 1px solid black;

    }
.gumb{
    float:center;
     border: 1pt black solid;
     border-radius: 10pt;
     padding: 1%;
     background-color: darkgrey;
     color:#000;}

.button1 {
    background-color: white;
    color: black;
    border: 2px solid #4CAF50;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left: 20px;
}


/* mouse over link */
a:hover {
  color: hotpink;
}


</style>

<!-- Naslov -->
<html>

<div style="height:100%";>
       <a id="vrh"></a>
<div id="naslov">
     Zadaci za ponavljanje - zadaća s predavanja od 05.12.2019.
</div>


<div class='zadaci'>

   <div class="pitanje">2. Kreirajte obrazac u kojem korisnik sam definira koliko će imena upisati.
        Najprije upisuje broj imena koja želi upisati. Nakon toga mu se prikazuje 
        obrazac s brojem polja za upis koji je jednak broju koji je korisnik upisao.
        Nakon što upiše sva imena, ispišite ih na ekran.<br></div>
   
    
    <div class="odgovor">
           <?php  if(!isset($_POST['broj_btn'])){?> 
        <form method="POST" action="2zadatak.php">
        Koliko imena i prezimena želite upisati: <input required="true" type="number" name="broj" value="<?=$_POST['broj']?>"><Br>
        <input type="submit" name="broj_btn" value="Potvrdi broj">
        </form> 
        <?php } ?>          
            <?php
            if(isset($_POST['broj_btn'])){
              echo "<h3>Upišite podatke u donja polja:</h3>";  
             // echo "<pre>";
            //  var_dump($_POST['broj']);
            //  echo "</pre>";
              echo '<form method="POST" action="2zadatak.php">';
              for ($index = 0; $index <= $_POST['broj']-1; $index++) {
                    echo           
          'Ime '.($index+1).': <input required="true" type="text" name="ime[]" value='.((isset($_POST['ime'][$index]))?$_POST['ime'][$index]:' ').'>
           Prezime '.($index+1).':  <input  required="true" type="text" name="prezime[]" value='.((isset($_POST['prezime'][$index]))?$_POST['prezime'][$index]:' ').'>';
                echo "<br>";
            }
            echo '<br><input type="submit" name="potvrdi_btn" value="Potvrdi"><br>
            </form>';
            }
                       
            ?>
    
         <div>
            
           <?php
            if(isset($_POST['potvrdi_btn'])){
              echo "<h3>Primljeni podaci:</h3>";  
            // echo "<pre>";
            // var_dump($_POST);
            // echo "</pre>";
            
                 $brele=count($_POST['ime']);
                 echo 'Ukupno je primljeno ';
                if(isset($brele)){
                    switch($brele){
                        case 1: echo $brele.' ime i prezime i to:<br>';break;
                        default: echo $brele.' imena i prezimena i to:<br>';break;
                    }
                }
                         
                for ($index = 0; $index <= ($brele-1); $index++) {
                 echo ($index+1).'. '.ucfirst($_POST['ime'][$index]).' '.ucfirst($_POST['prezime'][$index]).'<br>';
               }
            echo "<br><br>";
            }
                              
            ?>
            
             <br><br>          
           
    </div>
    </div>
            
        
    <button class='gumb'>
        <a href="01_Uvod.php">Povratak na zadatke</a>
</button>
        
    </div>