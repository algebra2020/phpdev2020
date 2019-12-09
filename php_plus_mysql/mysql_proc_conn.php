<?php
$host='localhost';
$user='root'; 
$password=''; 
$database='fakultet'; 
$port=3306;
$link= mysqli_connect($host, $user, $password, $database, $port);
if(mysqli_connect_errno()){
  echo "<br><h3>Ne mogu se spojiti na bazu podataka, je li server podignut?</h3><br>";
  echo mysqli_connect_error();
  exit;  
}
mysqli_set_charset($link,'utf8');