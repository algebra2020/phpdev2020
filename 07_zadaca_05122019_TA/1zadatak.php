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



       <div class="pitanje">1. Napravite obrazac za unos pet imena i prezimena. Ispišite unesene podatke.<br></div>
   
    <div class="odgovor">
           
        <form method="POST" action="1zadatak.php">
            <?php
                       
            for ($index =0; $index <= 4; $index++) {
                echo           
           'Ime '.($index+1).': <input required="true" type="text" name="ime[]" value='.((isset($_POST['ime'][$index]))?$_POST['ime'][$index]:' ').'>
           Prezime '.($index+1).':  <input  required="true" type="text" name="prezime[]" value='.((isset($_POST['prezime'][$index]))?$_POST['prezime'][$index]:' ').'>';
                echo "<br>";
            }
            ?>
            <br><br>
            <input type="submit" name="potvrdi_btn" value="Potvrdi">
             </form>
        
    </div>
        
    
            
             <?php
            if(isset($_POST['potvrdi_btn'])){
              echo "<h3>Primljeni podaci:</h3>";  
             // echo "<pre>";
             // var_dump($_POST);
             // echo "</pre>";
            
             for ($index = 0; $index <= 4; $index++) {
             echo ($index+1).'. '.ucfirst($_POST['ime'][$index]).' '.ucfirst($_POST['prezime'][$index]).'<br>';
            }
            }
                   
            ?>
    
    <br>
    <button class='gumb'>
        <a href="01_Uvod.php">Povratak na zadatke</a>
</button>
    
   