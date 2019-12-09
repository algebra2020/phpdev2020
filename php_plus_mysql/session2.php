<?php

session_start();

?>

Dobrodošli u trgovinu <?=$_SESSION['moja_var']?> vaš trenutni oznos na racunu je<br>
<?=$_SESSION['saldo']?>.

Želite li kupiti ugly sweather ($9.99)? 

<form method="POST" action="session3.php" >
    Komada: <input name="komada" type="number" value="0" max="5" min="0"><br>
    <input type="hidden" name="cijena" value="9.99">
    <input type="submit" name="kupi_btn" value="kupi">
</form>



