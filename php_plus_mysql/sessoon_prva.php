<?php

session_start();

$_SESSION['moja_var']='Zara';
if(!isset($_SESSION['saldo'])){
$_SESSION['saldo']=59.99;
}
?>

<a href="session2.php">idi u shopping ---> session2.php</a>