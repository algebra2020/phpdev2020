<?php
spl_autoload_register(function ($class) {
    require_once './' . $class . '.php';
});
//require_once './Covjek.php';
//require_once './Zivobice.php';
//require_once './Pas.php';
//require_once './Macka.php';

// ne možemo napraviti instancu ABSTRACT klase !!!
//$zb1= new Zivobice(); // prividna - apstraktna forma objekta
//$zb1->disi();

$c1=new Covjek();  // konačna forma objekta
$c1->disi();

$p1=new Pas();    // konačna forma objekta 
$p1->disi();

$m1= new Macka();

$c1->glasaj_se();
$p1->glasaj_se();
$m1->glasaj_se();

$p1->ceskaj_se();
$m1->ceskaj_se();
//$c1->ceskaj_se();  //undefined method Covjek::ceskaj_se()

$m1->jedi(); // overidana metoda vlastitom
$p1->jedi(); // poziva parent::jedi()

$jez1=new Jez();
$jez1->jedi();

$c1->set_posao(new Petshop());
$c1->get_posao();

$c2=new Covjek();
$c1->set_posao(new Autoservis());
$c1->get_posao();