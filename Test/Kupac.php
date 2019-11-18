<?php
require_once './Covjek.php';


class Kupac extends Covjek{
    public $id_kupca;
    public $iznos;
        
    function __construct($novo_ime) {
        parent::__construct($novo_ime);
        $this->id_kupca=1234;
    }
    
    function set_ime_saveza($ime=''){
       // ** @var type $ime */
        //unset($savez);
     //   $this->savez='njemački';
   
        switch ($ime) {
          case "Bayern":
               $savez= "njemački";
               return $this->savez=$savez;
                //return $this->savez="njemački";
              break;
           case "Liverpool":
                $savez='engleski';
                 return $savez;
               //return $this->savez="engleski";
              break;
         case "Dinamo":
              $savez='hrvatski';
              return $savez;
               //return $this->savez="hrvatski";
             break;
         default:
             $savez='nepoznat';
             return $savez;
           //return $this->savez="nepoznat savez";
               }
    }
    
    public function get_ime_saveza() {
        
     return $this->savez;
    }
}

$tim= new Kupac('Bayern');
echo '<br>';
var_dump($tim);
echo "<pre>";
print_r($tim);
echo "</pre>";


//echo '<br>'.$tim->ime;


$ime=$tim->ime;
echo '<br>'.$ime;

//function set_savez()
echo '<br>';
$tim->set_ime_saveza($ime);
//$tim->savez=$tim->set_ime_saveza($ime);
echo '<br>'.$tim->savez;
echo '<br>';
var_dump($tim);
echo "<br><pre>";
print_r($tim);
echo "</pre>";

/** @var type $novo_ime */
//echo '<br>'.$tim->get_savez_ime();

