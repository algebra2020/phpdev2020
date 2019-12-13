<?php

$var="Marko Marulić $%&#123";
$var2="Marko2";






if(ctype_alnum($var)){
    // ne smkije imati razmak ili slovo ćčšžđ
    echo "<br>Varijabla su alfanumerički znaklovi";
}
if(ctype_alnum($var2)){
    echo "<br>Varijabla2 su alfanumerički znaklovi";
}
if(ctype_alpha($var2)){
    // samo a-Z BEZ brojeva!
    echo "<br>Varijabla2su alfa znaklovi";
}
if(is_string($var)){
    // nvarijabla je string, NE SMIJE BITI BROJ
    echo "<br>Varijabla1 s je string";
}