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


    <div class="pitanje">3. Napravite novu PHP skriptu naziva skripta.php. S pomoću petlje <i>for</i>
    ispišite pet stringova. Svaki od njih predstavlja poveznicu na PHP skriptu. 
    Svaka poveznica je oblika <span class="zagrada_otv">&lt;</span>a href="skripta?broj=1">1<span class="zagrada_otv">&lt;</span>/a> <br>
    U vrijednost broj= upisuje se vrijednost koraka petlje <i>for</i>. 
    Odabirom bilo koje poveznice ispisuje se poruka, npr. Odabrali ste broj: 1.</div>
   
       <div class="odgovor">
    <?php
        for ($index = 1; $index <=5; $index++) {
            echo  '<a href="skripta.php?broj='.$index.'" class="button1">'.$index.'</a>';
            echo '<br>';
        }
        
        if(isset($_GET['broj'])){
                switch($_GET['broj']){
                    case 1: echo '<br>Odabrali ste broj: <span style="font-size:30px;color:white;background-color:mediumseagreen;border: 2px solid green;">1.</span>';break;
                    case 2: echo '<br>Odabrali ste broj: <span style="font-size:30px;color:white;background-color:mediumseagreen;border: 2px solid green;">2.</span>';break;
                    case 3: echo '<br>Odabrali ste broj: <span style="font-size:30px;color:white;background-color:mediumseagreen;border: 2px solid green;">3.</span>';break;
                    case 4: echo '<br>Odabrali ste broj: <span style="font-size:30px;color:white;background-color:mediumseagreen;border: 2px solid green;">4.</span>';break;
                    case 5: echo '<br>Odabrali ste broj: <span style="font-size:30px;color:white;background-color:mediumseagreen;border: 2px solid green;">5.</span>';break;

                }
            }
       echo " <hr>";
       if(isset($_GET['broj'])){
          echo '<br>Odabrali ste broj: <span style="font-size:30px;color:white;background-color:mediumseagreen;border: 2px solid green;">'.$_GET['broj'].'.</span>'; 
       }
              
    ?>
        
    </div>
        
        
        <br><br>     
        
    <button class='gumb'>
        <a href="01_Uvod.php">Povratak na zadatke</a>
    </button>