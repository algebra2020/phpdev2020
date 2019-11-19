<?php

spl_autoload_register(function ($class) {
    include './' . $class . '.php';
});

$c1=new Cat();
$c2=new Cat();


//$c1=Cat::getInstance(); // umjesto new Cat() koristimo staticki poziv
$c1->ime="aaaa";

//$c2=Cat::getInstance();
$c2->ime="bbbb";



echo $c1->ime;
echo $c2->ime;

if ($c1==$c2){
    echo "isti su po vrijednosti";
}
else{
    echo "nisu isti po vrijednosti";
}

if ($c1===$c2){
    echo "indenticni su";
}
else{
    echo "nisu indenticni";
}