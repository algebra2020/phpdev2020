<?php

/*
  spl_autoload_register(function ($class) {
  include './mysqli_conn.php';
  });
 */
include './mysqli_conn.php';
$error_num = 0; // brojimo greške

$query = "BEGIN";
$result = $mysqli->query($query);

$query = "INSERT INTO mjesto1(pbr,nazMjesto,sifZupanija)";
$query .= " VALUES (44444,'Zanzibar',21)";
// $query="INSERT INTO `fakultet`.`mjesto1` (`pbr`, `nazMjesto`, `sifZupanija`, `created_at`) VALUES ('44444', 'Zanzibar', 'Burundi', '2019-12-11 19:06:57')" ;      
$result = $mysqli->query($query);

// ukoliko je greska $result će biti BOOLEAN FALSE
if (!$result) {
    $error_num++;
}
$query = "INSERT INTO mjesto1(pbr,nazMjesto,sifZupanija)";
$query .= " VALUES (55555,'Zanzibar2',21)";
// $query="INSERT INTO `fakultet`.`mjesto1` (`pbr`, `nazMjesto`, `sifZupanija`, `created_at`) VALUES ('44444', 'Zanzibar', 'Burundi', '2019-12-11 19:06:57')" ;      
$result = $mysqli->query($query);
if (!$result) {
    $error_num++;
}
$query = "INSERT INTO mjesto1(pbr,nazMjesto,sifZupanija)";
$query .= " VALUES (55554,'Zanzibar3',21), (55553,'Zanzibar4',21)";
// $query="INSERT INTO `fakultet`.`mjesto1` (`pbr`, `nazMjesto`, `sifZupanija`, `created_at`) VALUES ('44444', 'Zanzibar', 'Burundi', '2019-12-11 19:06:57')" ;      
$result = $mysqli->query($query);
if (!$result) {
    $error_num++;
}

echo $error_num;
echo "Ukupno affected rows: ".$mysqli->affected_rows;

if ($error_num <= 0) {
    $query = "COMMIT";
    $result = $mysqli->query($query);
    
} else {
    $query = "ROLLBACK";
    $result = $mysqli->query($query);
}
       


