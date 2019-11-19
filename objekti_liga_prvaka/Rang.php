<?php
require_once './Susret.php';
//require_once './Savez.php';

/**
 * Description of Rang
 *
 * @author Office10
 */
class Rang {
    // TODO  $rez=["Dinamo"=>4,"Liverpol"=>3,"Bayern"=>6];
    private $polje_susreta=array();
    private $rang=array();
    private $polje_timova=array();
    
       
        //put your code here
    public function dodaj(Susret $s) {
        $this->polje_susreta[]=$s;
    }
   
   //Tatjana dodano
   
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
            
            
            echo "<tr style='width:70%; border: 1px solid black'>
                  <td style='width:10%; text-align:center; border: 1px solid white'>".$i++."</td>
                  <td style='width:15%; text-align:left; border: 1px solid white'>".$s->get_team_one()->get_ime()."</td>
                  <td style='width:10%; text-align:left; border: 1px solid white'>".$s->get_team_one()->get_ime_saveza()."</td>
                  <td style='width:15%; text-ali02gn:left; border: 1px solid white'>". $s->get_team_two()->get_ime()."</td>
                  <td style='width:10%; text-align:left; border: 1px solid white'>".$s->get_team_two()->get_ime_saveza()."</td>
                  <td style='width:10%; text-align:center; border: 1px solid white'>".$s->rezultat()."</td>
                  <td style='width:10%; text-align:center; border: 1px solid white'>(".$s->get_polu_rezultat().")</td>
                  <td style='width:10%; text-align:right; border: 1px solid white'>".$s->get_sudac_utakmice()."</td>
            </tr>";
        }
        echo "</table>";
    }
 
 //kreranje arraya za rang 
    public function dodaj_timove(Team $tim) {
        $this->polje_timova[]=$tim;
       }
    
  public function ispisi_tablicu() {
      
      //kreiranje polja za rangiranje
           $rang=array();
           $i=0;
       foreach ($this->polje_timova as $key=>$tim) {           
           
            $rang[$i]= array('tim'=>$tim->get_ime()
                    ,'savez'=>$tim->get_ime_saveza()
                    ,'bodovi'=>$tim->get_bodovi()
                    ,'zabijeni'=>$tim->get_golovi()
                    ,'primljeni'=>$tim->get_primljeni()
                    ,'golrazlika'=>$tim->get_golovi()-$tim->get_primljeni()
                    );
            $i++;                               
        }
        
     //sortiranje za ispis rang tablice            
     usort($rang, function($a, $b) {
        $retval = $b['bodovi'] <=> $a['bodovi'];
        if ($retval == 0) {
            $retval = $b['golrazlika'] <=> $a['golrazlika'];
            if ($retval == 0) {
                $retval = $b['zabijeni'] <=> $a['zabijeni'];
            }
        }
        return $retval;
      });
         
      //ispis tablice   
      echo "<h2>Tablica nakon odigranih utakmica: </h2>";
        
        $i=0;
                                    
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
                  <td style='width:20%; text-align:center;border-right: 1px solid black'>".($i+1)."</td>
                  <td style='width:25%; text-align:left; border-right: 1px solid black'>".$rang[$i]['tim']."</td>
                  <td style='width:25%; text-align:left; border-right: 1px solid black'>".$rang[$i]['savez']."</td>
                  <td style='width:20%; text-align:right; border-right: 1px solid black'>".$rang[$i]['bodovi']."</td>
                  <td style='width:10%; text-align:center; border-right: 1px solid black'>(".$rang[$i]['zabijeni'].":".$rang[$i]['primljeni'].")</td>
                </tr>";
               $i++;
                                    
        }
       echo" </table>";
       echo "<br>";
    }
        
        
  } 
