<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
           <!-- <form method="GET"> -->
           <form method="POST" action="01.2_post_varijabla_form.php">
                
               Ime: <input required="true" type="text" name="ime" value="<?=$_POST['ime']?>"><Br> 
                Prezime:  <input  required="true" type="text" name="prezime" value="<?=$_POST['prezime']?>"><Br>
                Spol:<br>
                M<input type="radio" name="spol" value="M" checked="true"><br>
                Ž<input type="radio" name="spol" value="Ž"><br>
                Županija:<br>
                <input type="color" name="omiljena_boja" value="<?=$_POST['omiljena_boja']?>">
                <select name="zupanija">
                    <?php
                    if(isset($_POST['zupanija'])){
                       echo '<option  selected="true" value="'.$_POST['zupanija'].'">predodabrano</option>'; 
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
                <input type="checkbox" name="interesi[]" value="1" <?=(isset($_POST['interesi'][0])&& $_POST['interesi'][0]==1)?'checked':'' ?> > sport<br>
                <input type="checkbox" name="interesi[]" value="2"<?=(isset($_POST['interesi'][1])&& $_POST['interesi'][1]==2)?'checked':'' ?>> muzika<br> 
                <input type="checkbox" name="interesi[]" value="3"<?=(isset($_POST['interesi'][2])&& $_POST['interesi'][2]==3)?'checked':'' ?>> racunala<br>  
                
                <textarea  required="true" name="napomena" cols="50"><?=$_POST['napomena']?></textarea><br><br>
                <input type="submit" name="potvrdi_btn" value="potvrdi">
            </form>
        
        
        
        </div>
        
        <div>
            
            <?php
            if(isset($_POST['potvrdi_btn'])){
              echo "<h3>Primljeni podaci:</h3>";  
              echo "<pre>";
              print_r($_POST);
              echo "</pre>";
              switch ($_POST['spol']) {
                  case 'M':$spol='Muški';break;
                  default:$spol='Ženski';break;
                      break;
              }
              
              $interesi="<ol>";
              if(isset($_POST['interesi'])){
              foreach ($_POST['interesi'] as $i){
                  switch ($i) {
                      case 1: $interesi.='<li>Sport</li>'; break;
                      case 2: $interesi.='<li>Muzika</li>'; break;
                      case 3: $interesi.='<li>Računala</li>'; break;                                  
                  }
              
              }}
              $interesi.="</ol>";
              
              printf("Ime:<span style='color:%s'> %s %s</span><br> Spol: %s<br>"
                   ,$_POST['omiljena_boja']
                      ,$_POST['ime']
                      ,$_POST['prezime']
                      ,$spol
                      );
               printf("Interesi:<span style='color:green'> %s</span><br>"
                                    ,$interesi);
               printf("Napomena:<span style='color:green'> %s</span><br>"
                                    ,$_POST['napomena']);
                 
              
            }
            
            ?>
            
        </div>
    </body>
</html>
