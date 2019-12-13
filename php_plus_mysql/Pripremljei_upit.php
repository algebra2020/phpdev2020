<?php
include './mysqli_conn.php';


     
      $query ="SELECT * FROM stud LIMIT 5";
      $result= $mysqli->query($query);
      
      $query_tpl="SELECT studIme,studPrezime FROM stud WHERE pbrRod=? LIMIT 5";
      
      $postazg=5;
      echo "sdsd";
      if($stmt=$mysqli->prepare($query_tpl)){
          $stmt->bind_param('d',$postazg);
          $stmt->execute();
          
          $stmt->bind_results($sime,$sprez);
          $stmt->fetch();
          
    printf("Number of rows: %d.\n", $stmt->num_rows);
          echo $sime." ".$sprez;
          $stmt->close();
      }
          
   

