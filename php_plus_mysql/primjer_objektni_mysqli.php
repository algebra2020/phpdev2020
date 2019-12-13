<?php
//include_once './mysqli_conn.php';
$host='localhost'; // ili 127.0.0.1
$user='root'; 
$password=''; 
$database='fakultet'; 
$port=3306;
$mysqli= new mysqli($host, $user, $password, $database, $port);
if(mysqli_connect_errno()){
  echo "<br><h3>Ne mogu se spojiti na bazu podataka, je li server podignut?</h3><br>";
  echo mysqli_connect_error();
  exit;  
}



?>

<!DOCTYPE html>
<html>
  <head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div>
      <?php
      $query ="SELECT * FROM stud LIMIT 5";
      $result= $mysqli->query($query) 
              or die("Greška upita na bazu podataka fakultet: <br>"
              . $mysqli->error
              ." ("
              .$mysqli->errno
              .")");
      while ($row = $result->fetch_assoc()) { // mapoiramo kao asocijativno polje
          echo $row['imeStud']." ".$row['prezStud'].'</br>';
      }
    ?>
      <hr>
      <?php
   
      $result= $mysqli->query($query);
      while ($row = $result->fetch_object()) { // mapiramo kao objekt
          //print_r($row);
         // echo $row['imeStud']." ".$row['prezStud'].'</br>';
          echo $row->imeStud." ".$row->prezStud.'</br>';
      }
    ?>     
            <hr>
      <?php
   
      $result= $mysqli->query($query);
      while ($row = $result->fetch_row()) { // mapiramo kao objekt
//var_dump($row);          
//print_r($row);
         // echo $row['imeStud']." ".$row['prezStud'].'</br>';
          echo $row[1]." ".$row[2].'</br>';
      }
    ?> 
    </div>
  </body>
</html>
<?php  $mysqli->close(); ?>
