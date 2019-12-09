<?php

session_start();

?>
Trenutno stanje vašeg salda je <?=$_SESSION['saldo']?>.<br>

Kupili ste <?=$_POST['komada']?> po cijeni od <?=$_POST['cijena']?><br>
<hr>
ukupan račun je <?=($_POST['komada']*$_POST['cijena'])?><br>


<?php
$_SESSION['saldo']-=$_POST['komada']*$_POST['cijena'];
?>
Novi saldo na vašem računu je <?=$_SESSION['saldo']?>
<br>
<a href="sessoon_prva.php">Vrati me na pocetak</a>
<a href="session_kill.php">obrisi session</a>

