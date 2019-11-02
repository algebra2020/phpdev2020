<?php

/* 
 * citanje datoteke
 */
$filename="ucenici.txt";

$handle= fopen($filename, 'a+');
$contents= fread($handle, filesize($filename));
fclose($handle);

echo $contents;