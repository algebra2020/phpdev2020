<?php

abstract class AZivobice{
    function disi(){
        echo "<br>   ...udahni";
        echo "<br>   ...izdahni";
    }
    abstract function glasaj_se();  // Ova metoda se MORA overridate
    
    function jedi(){  // Ovo se može i ne mora overridate
        echo "<br>   Jedem masline"; 
    }
}

