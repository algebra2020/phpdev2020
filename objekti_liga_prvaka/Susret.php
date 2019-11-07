<?php

require_once './Team.php';

/**
 * Description of Susret
 *
 * @author Office10
 */
class Susret {

    private $t1;
    private $t2;
    private $rezultat = NULL;
    private $polu_rezultat = NULL;
    private $dt; // vrijeme utakmice

    public function __construct(Team &$t1, Team &$t2) {
        $this->t1 = $t1;
        $this->t2 = $t2;
    }

    public function get_rezultat() {
//"Rezultat Liverpol-Bayern(1:0)"
        return sprintf("%s-%s (%s)<br>"
                , $this->t1->get_ime()
                , $this->t2->get_ime()
                , $this->rezultat());
    }

    public function rezultat() {
        return $this->rezultat;
    }

    public function odigraj(DateTime $dt) {
// random 0-10
        $b1 = rand(0, 3);
        $b2 = rand(0, 3);
        $this->polu_rezultat = $b1 . ":" . $b2;

// random 0-5
        $b3 = rand(0, 2);
        $b4 = rand(0, 2);
        $this->rezultat = ($b1 += $b3) . ":" . ($b2 += $b3);
        if ($b1 > $b2) {
            $this->t1->set_bodovi(3);
            $this->t2->set_bodovi(0);
        } elseif ($b1 < $b2) {
            $this->t1->set_bodovi(0);
            $this->t2->set_bodovi(3);
        } else {
            $this->t1->set_bodovi(1);
            $this->t2->set_bodovi(1);
        }
    }

    public function get_polu_rezultat() {
        return $this->polu_rezultat;
    }

    public function get_team_one() {
        return $this->t1;
    }
    public function get_team_two() {
        return $this->t2;
    }
}
