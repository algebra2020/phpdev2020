<?php

require_once './Team.php';

//Tatjana dodano
require_once './Sudac.php';

//kraj dodavanja

/**
 * Description of Susret
 *
 * @author Office10
 */
class Susret {

    private $t1;  // objekt Team
    private $t2;
    private $rezultat = NULL;
    private $polu_rezultat = NULL;
    private $dt; // vrijeme utakmice
    //Tatjana dodano
    private $sudac;
    

    //kraj

    public function __construct(Team &$t1, Team &$t2, Sudac &$sudac) {
        $this->t1 = $t1;
        $this->t2 = $t2;
        //Tatjana dodano
        
        $this->sudac=$sudac;
        //kraj
    }

    public function get_rezultat() {
//"Rezultat Liverpol-Bayern(1:0)"
        return sprintf("%s - %s:         %s "
                , $this->t1->get_ime() //uzima ime iz klase Team
                , $this->t2->get_ime() //uzima ime iz klase Team
                , $this->rezultat()
                
             ); 
    }

    public function rezultat() {
        return $this->rezultat;
    }

    public function odigraj(DateTime $dt) {
       // zapamti vrijeme utakmice
       $this->dt=$dt;
// random 0-10
// $rand_gol_lookup=[0,0,0,0,0,0,0,0,0,9] 
// 90% vjerojatnost 0 10% vjerojatnost 9 da se zabije 9 golova
       $rand_gol_lookup=[
           0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0
           ,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0
           ,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0
           ,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1
           ,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1
           ,2,2,2,2,2,2,2,2,2,2,2,2,2
           ,2,2,2,2,2,2,2,2,2,2,2,2,2
           ,3,3,3,3,3,3,3,3
           ,3,3,3,3,3,3,3,3
           ,4,4,4,4,4
           ,5,5,5,5,5
           ,6,6,6
           ,7,7,7
           ,8,8
           ,9];
   //   var_dump($rand_gol_lookup);
        $b1 = $rand_gol_lookup[rand(0, 218)];
        $b2 = $rand_gol_lookup[rand(0, 218)];
       // $this->polu_rezultat = $b1 . ":" . $b2;
          $this->polu_rezultat = $b1. ":" . $b2;
          
          
// random 0-5
        $b3 = $rand_gol_lookup[rand(0, 218)];
        $b4 = $rand_gol_lookup[rand(0, 218)];
        $this->rezultat = ($b1 += $b3) . ":" . ($b2 += $b4);
        
         // zapisujemo golove ovisno o rezulatu utakmice
        $this->t1->set_golovi($b1);
        $this->t2->set_golovi($b2);
        $this->t1->set_primljeni($b2);
        $this->t2->set_primljeni($b1);
       
        
                      
        // dijelimo bodove ovisno o rezulatu utakmice
        if ($b1 > $b2) {
            $this->t1->set_bodovi(3); // pobjeda domaći
            $this->t2->set_bodovi(0);
        } elseif ($b1 < $b2) {
            $this->t1->set_bodovi(0);  // pobjeda gosti
            $this->t2->set_bodovi(3);
        } else {
            $this->t1->set_bodovi(1);  // neriješeno
            $this->t2->set_bodovi(1);
        }
    }

    public function get_polu_rezultat() {
        return $this->polu_rezultat;
    }

    public function get_team_one() {
        return $this->t1;
        //return $this->savez->get_savez($t1);
    }
    public function get_team_two() {
        return $this->t2;
        //return $this->savez->get_savez($t2);
    }
    
    public function get_sudac_utakmice(){
        return $this->sudac->get_sudac_ime();
    }

  
}
