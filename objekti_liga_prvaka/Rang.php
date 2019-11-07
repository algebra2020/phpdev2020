<?php
require_once './Susret.php';
/**
 * Description of Rang
 *
 * @author Office10
 */
class Rang {
    // TODO  $rez=["Dinamo"=>4,"Liverpol"=>3,"Bayern"=>6];
    private $polje_susreta=array();
    private $rang=array();
    //put your code here
    public function dodaj(Susret $s) {
        $this->polje_susreta[]=$s;
    }

    /**
     * pobjeda 3
     * nerješeno svaki 1
     * gubitak 0
     * Liverpol 3 1 -> 4
     * Bayern 0 0 -> 0
     * Dinamo 3 1 -> 4
     */
    public function ispisi_tablicu() {
        foreach ($this->polje_susreta as $key=>$s) {
            unset($golovi);
            echo $s->rezultat(); 
            
            $golovi=explode(":",$s->rezultat());
            echo "<br>t1 (bod):".$s->get_team_one()->get_bodovi();
            echo "<br>t2 (bod):".$s->get_team_two()->get_bodovi();
            echo "<pre>";
            print_r($golovi);
            echo "</pre>";
        }
        echo "<pre>";
        print_r($this->polje_susreta);
        echo "</pre>";
    }

}
