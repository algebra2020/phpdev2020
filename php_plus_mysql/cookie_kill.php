<?php
setcookie('var1', '1234', time()-1 );  // nestati će za mjesec dana
setcookie('var2', '987654321', time()-1 ); 
header("Location: cookie_two.php");
die();

