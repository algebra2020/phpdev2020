<?php
spl_autoload_register(function ($class) {
    include './' . $class . '.php';
});


 $c1=Life::ressurect();
 echo $c1->get_ime();
echo $c1->get_posao();

$c2=new Covjek();
 $c2=Life::ressurect_json();
 echo $c2->get_ime();
echo $c2->get_posao();


