<?php
require_once './Susret.php';
require_once './Savez.php';

/**
 * Description of Rang
 *
 * @author Office10
 */
class Rang {
    // TODO  $rez=["Dinamo"=>4,"Liverpol"=>3,"Bayern"=>6];
    private $polje_susreta=array();
    private $rang=array();
    //private $sav=new Savez();
    
        //put your code here
    public function dodaj(Susret $s) {
        $this->polje_susreta[]=$s;
    }
   
    //Tatjana dodano
   public function ulistaj(Team &$t1,Team &$t2,Team &$t3, Savez &$savez) {
        $this->t1 = $t1;
        $this->t2 = $t2;
        $this->t3 = $t3;
        $this->savez=$savez;
                
       $keys=array($this->t1->get_ime(),$this->t2->get_ime(),$this->t3->get_ime());
       $bodovi=array($this->t1->get_bodovi(),$this->t2->get_bodovi(),$this->t3->get_bodovi());
       $golovi=array($this->t1->get_golovi(),$this->t2->get_golovi(),$this->t3->get_golovi());
       $golovip=array($this->t1->get_primljeni(),$this->t2->get_primljeni(),$this->t3->get_primljeni());
       $zabijeni= array_combine($keys, $golovi);
       $primljeni = array_combine($keys, $golovip);
              
       $rang = array_combine($keys, $bodovi);

                    
        echo "<h2>Tablica nakon odigranih utakmica: </h2>";
        arsort($rang);
        $i=1;
                                    
            echo "<table style='width:50%; font-size:28pt; color:yellow; background-image:url(https://image.freepik.com/foto-gratis/fondo-campo-hierba-verde-futbol-deportes-futbol_64749-1823.jpg); background-size:cover'>
                <tr>
                  <th style='width:20%; text-align:center; border-right: 1px solid black'>Pozicija</th>
                  <th style='width:25%; text-align:left; border-right: 1px solid black'>Tim</th>
                  <th style='width:25%; text-align:left; border-right: 1px solid black'>Savez</th>
                  <th style='width:20%; text-align:right; border-right: 1px solid black'>Broj bodova</th>
                  <th style='width:10%; text-align:right; border-right: 1px solid black'>Gol razlika</th>
                </tr>";
                 foreach ($rang as $key => $value) {
                     
               echo " <tr>
                  <td style='width:20%; text-align:center;border-right: 1px solid black'>".$i++."</td>
                  <td style='width:25%; text-align:left; border-right: 1px solid black'>".$key."</td>
                  <td style='width:25%; text-align:left; border-right: 1px solid black'>".$savez->set_savez($key)."</td>
                  <td style='width:20%; text-align:right; border-right: 1px solid black'>".$value."</td>
                  <td style='width:10%; text-align:center; border-right: 1px solid black'>(".$zabijeni[$key].":".$primljeni[$key].")</td>
                </tr>";
                                    
        }
       echo" </table>";
        //print_r($rang);
        echo "<br>";
    }
   
   //kraj
    

    /**
     * pobjeda 3
     * nerješeno svaki 1
     * gubitak 0
     * Liverpol 3 1 -> 4
     * Bayern 0 0 -> 0
     * Dinamo 3 1 -> 4
     */
 //   public function ispisi_tablicu() {
 //   foreach ($this->polje_susreta as $key=>$s) {
 //        unset($golovi);
 //           echo $s->rezultat(); 
 //           
 //       $golovi=explode(":",$s->rezultat());
 //        echo "<br>t1 (bod):".$s->get_team_one()->get_bodovi();
 //         echo "<br>t2 (bod):".$s->get_team_two()->get_bodovi();
 //           
 //          echo "<br>t1 (golovi):".$s->get_team_one()->get_golovi();
 //          echo "<br>t1 (primljeni):".$s->get_team_one()->get_primljeni();
 //            
 //          echo "<pre>";
 //           print_r($golovi);
 //           echo "</pre>";
 //       }
 //     echo "<pre>";
 //      print_r($this->polje_susreta);
 //       echo "</pre>";
               
 //   }
    

//Tatjana dodano
    public function pomocna($tim){
        $savez=new Savez();
      // $this->tim1=$tim1;
       //$tim1='Liverpool';
        return $savez->set_savez($tim);
       
    }
    
    public function pregled(){
        
        echo "<br><h2>Pregled utakmica u ligi:</h2>";
          $i=1;
           echo "<table style='width:80%; color:white; font-size:22pt; border: 1px solid black; background-image:url(https://www.larutadelsorigens.cat/wallpic/full/218-2186932_stadion-wallpaper-signal-iduna-park-dortmund..jpg); background-size:cover; repeat:norepeat; opacity: 0.1)'>
            <tr>
            <th style='width:10%; text-align:center; border: 1px solid white'>Utakmica</th>
            <th style='width:15%; text-align:left; border: 1px solid white'>Prvi tim</th>
            <th style='width:15%; text-align:left; border: 1px solid white'>Savez prvog tima</th>
            <th style='width:15%;text-align:left; border: 1px solid white'>Drugi tim</th>
            <th style='width:15%; text-align:left; border: 1px solid white'>Savez drugog tima</th>
            <th style='width:10%; text-align:center; border: 1px solid white'>Rezultat</th>
            <th style='width:10%; text-align:center; border: 1px solid white'>Poluvrijeme</th>
            <th style='width:10%; text-align:right; border: 1px solid white'>Sudac utakmice</th>
            </tr>";
        foreach ($this->polje_susreta as $key=>$s) {
            
            $tim1=$s->get_team_one()->get_ime();
           // var_dump ($tim1);
            $tim2=$s->get_team_two()->get_ime();
            // var_dump ($tim2);
                     
           echo "<tr style='width:70%; border: 1px solid black'>
                    <td style='width:10%; text-align:center; border: 1px solid white'>".$i++."</td>
                    <td style='width:15%; text-align:left; border: 1px solid white'>".$s->get_team_one()->get_ime()."</td>
                    <td style='width:10%; text-align:left; border: 1px solid white'>".$this->pomocna($tim1)."</td>
                    <td style='width:15%; text-ali02gn:left; border: 1px solid white'>". $s->get_team_two()->get_ime()."</td>
                    <td style='width:10%; text-align:left; border: 1px solid white'>".$this->pomocna($tim2)."</td>
                    <td style='width:10%; text-align:center; border: 1px solid white'>".$s->rezultat()."</td>
                    <td style='width:10%; text-align:center; border: 1px solid white'>(".$s->get_polu_rezultat().")</td>
                    <td style='width:10%; text-align:right; border: 1px solid white'>".$s->get_sudac_utakmice()."</td>
            </tr>";
        }
        echo "</table>";
    }
 
  
}
