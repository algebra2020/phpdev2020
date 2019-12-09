<?php
include './mysql_proc_conn.php';
?>
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
        <?php
        $query = "SELECT * FROM stud LIMIT 15";
        $result = mysqli_query($link, $query);
        //var_dump($result);
        //print_r($result);
        // Ovime smo dobili indeksirano i asocijativno polje
        while ($row = mysqli_fetch_array($result)) {
            //print_r($row);
            printf("%s %s, MBR=%d email=<span style='color:#FF0000'>%s</span><br>"
                    , $row[1]
                    , $row[2]
                    , $row[0]
                    , $row[10]);
        }

echo '<hr>';
        mysqli_data_seek($result, 0);  // vrati me opet na početak 

        while ($row = mysqli_fetch_array($result)) {
            //print_r($row);
            printf("%s %s, MBR=%d email=<span style='color:#FF0000'>%s</span><br>"
                    , $row['imeStud']
                    , $row['prezStud']
                    , $row['mbrStud']
                    , $row['email']);
        }
 echo '<hr>';
        mysqli_data_seek($result, 0);  // vrati me opet na početak 

        while ($row = mysqli_fetch_row($result)) {
            print_r($row);
            printf("%s %s, MBR=%d email=<span style='color:#FF0000'>%s</span><br>"
                    , $row[1]
                    , $row[2]
                    , $row[0]
                    , $row[10]);
        }
  echo '<hr>';
        mysqli_data_seek($result, 0);  // vrati me opet na početak 

        while ($row = mysqli_fetch_assoc($result)) {
            print_r($row);
            printf("%s %s, MBR=%d email=<span style='color:#FF0000'>%s</span><br>"
                    , $row['imeStud']
                    , $row['prezStud']
                    , $row['mbrStud']
                    , $row['email']);
        }
                      
        
        
        
        ?>
        
        
        
    </body>
</html>
