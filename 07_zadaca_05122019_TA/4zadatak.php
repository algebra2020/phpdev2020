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


     <div class="pitanje">4. Napišite program koji se sastoji od nekoliko koraka. U prvom koraku 
        morate odabrati broj datoteka koje želite prebaciti na poslužitelj. 
        Broj datoteka ne smije biti veći od 5. Nakon što se odabere željeni broj
    datoteka, prelazi se na drugi korak u kojem se ispisuje obrazac za odabir 
    broja datoteka koje se želi prebaciti. Zatim se prelazi na treći korak i
     sve se datoteke prebacuju na poslužitelj.</div>
   
    <div class="odgovor">
           
        <form method="POST" action="4zadatak.php">
        Koliko datoteka želite prebaciti na poslužitelj (maksimalno je dozvoljeno 5): <input required="true" type="number" name="broj" min="1" max="5" value="<?=$_POST['broj']?>"><Br>
        <br>
        <input type="submit" name="broj_btn" value="Potvrdi broj">
        </form> 
        
        <?php
            if(isset($_POST['broj_btn'])){
              echo "<h3>Odaberite datoteke:</h3>";  
             // echo "<pre>";
            //  var_dump($_POST['broj']);
            //  echo "</pre>";
              echo 
            '<form method="POST" action="4zadatak.php" enctype="multipart/form-data">';
                        
              for ($index = 0; $index <= $_POST['broj']-1; $index++) {
                    echo  
                'Datoteka '.($index+1).':
                <input type="file" name="datoteka[]" value=""><br><br>';
              }
             echo
            '<br><input type="submit" name="submit_btn" value="Potvrdi prijenos"><br>
            </form>';
            }
                       
            ?>
        
        <?php
        if (isset($_POST['submit_btn'])) {
            //echo '<pre>';
            // var_dump($_FILES);
            //echo '</pre>';
            //print_r($_FILES);

            $brele=count($_FILES['datoteka']['name']);
            //echo $brele;
            echo '<br>';
            for ($index = 0; $index <= ($brele-1); $index++) {
                //1. direktorij u koji će se uploadati
                $upload_dir = "uploads/";
                //2. dohvat datoteke za upload
                $uploadfile = basename($_FILES["datoteka"]["name"][$index]);
                //var_dump($uploadfile);
                echo '<br>';
                
                //4.i 5. uzimamo ekstenziju datoteke
                $file_array= explode(".", $uploadfile);
                $file_ext = end($file_array);
                //var_dump($file_ext);
                //echo '<br>';
                
                //7. definiranje novog naziva datoteke
                $file_onserver="Datoteka_".($index+1)."_".time().".".$file_ext;
                //var_dump($file_onserver);
                //echo '<br>';
                
                //9. definiranje putanju do nove datoteke na poslužitelju
                $new_file_name=$upload_dir.$file_onserver;
                //var_dump($new_file_name);
                //echo '<br>';
                
                //echo basename($_FILES["datoteka"]["name"][$index]);
               // echo '<br>';
                if(move_uploaded_file($_FILES["datoteka"]["tmp_name"][$index], $new_file_name)){
                echo 'Datoteka broj '.($index+1).' pod originalnim nazivom "<i>'.$_FILES["datoteka"]["name"][$index].'</i>" je uploadana pod imenom "<i>'
                       .$file_onserver.'"</i>';
                echo '<br>';
               }
            }

        }
        ?>
    </div>
        <br><br>             
<button class='gumb'>
        <a href="01_Uvod.php">Povratak na zadatke</a>
</button>