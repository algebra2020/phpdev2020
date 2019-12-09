<?php
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
