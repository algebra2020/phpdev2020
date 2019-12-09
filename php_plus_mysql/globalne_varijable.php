<?php
$polje_brojeva= array();

function showpolje(){
    global $polje_brojeva;
$polje_brojeva[]=11;
$polje_brojeva[]=000;
print_r($polje_brojeva);
}

$polje_brojeva[]=12;
$polje_brojeva[]=2222;
print_r($polje_brojeva);

showpolje();

print_r($_ENV);
echo "Mysql je instaliran ovdje:".$_SERVER['MYSQL_HOME'];

print_r($_SERVER);


