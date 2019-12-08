<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <form method="GET" action="#">
                
               Ime: <input required="true" type="text" name="ime" value="<?=(isset($_GET['ime']))?$_GET['ime']:''?>"><Br> 
                Prezime:  <input  required="true" type="text" name="prezime" value="<?=(isset($_GET['prezime']))?$_GET['prezime']:''?>"><Br>
                Spol:<br>
                <!-- (postojispol)? true:false  
                if true (je li spol M)? true:false
                -->
                M<input type="radio" name="spol" value="M" <?=(isset($_GET['spol']))?($_GET['spol']=='M')?'checked':'':''?>><br>
                Ž<input type="radio" name="spol" value="Ž"<?=(isset($_GET['spol']))?($_GET['spol']=='Ž')?'checked':'':''?>><br>
                Županija:<br>
                <input type="color" name="omiljena_boja" value="<?=$_GET['omiljena_boja']?>">
                <select name="zupanija">
                    <?php
                    if(isset($_GET['zupanija'])){
                       echo '<option  selected="true" value="'.$_GET['zupanija'].'">predodabrano</option>'; 
                    }
                    ?>
                    <option value="10000">Zagreb</option>
                    <option value="31000">Osijek</option>
                    <option value="21000">Rijeka</option>
                    <option value="33000">Split</option>                    
                    <option value="44000" >Šibenik</option>
                    <option value="44000">Zadar</option>                                  
                </select>               
                <br>
                interesi: <br>
                <!--
                Da bi smo zadržali prethodno stanje od ovih checkboxa 
                potrebno ih je generirati dinamički ispisom iz php-a
                -->
                <input type="checkbox" name="interesi[]" value="1">sport<br>
                <input type="checkbox" name="interesi[]" value="2">muzika<br> 
                <input type="checkbox" name="interesi[]" value="3">racunala<br>  
                
                <textarea  required="true" name="napomena" cols="50"><?=$_GET['napomena']?></textarea><br><br>
                <input type="submit" name="potvrdi_btn" value="potvrdi">
            </form>
        
        <?php
                    if(isset($_GET['potvrdi_btn'])){
              echo "<h3>Primljeni podaci:</h3>";  
              echo "<pre>";
              print_r($_GET);
              echo "</pre>";
                    }
        ?>
    </body>
</html>
