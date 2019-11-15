<?php

/**
 * Klasa Savez
 * @author Tatjana <tatjana.antic@sb.t-com.hr>
 * @access public
 * @property String $savez Ime saveza
 */



class Savez {
    private $t1;
    public $savez;  // Svojstvo, property
    
    public function __construct(string $savez="") {
                //echo '<br>--- Savez je kreiran! ---<br>';
          $this->set_savez($savez);
       }
    
    public function __destruct() {
        //echo '<br>--- Savez je unisten! ---<br>';
    }
   
    
    /**
     * Promjena imena pomoću metode
     * Ovakvo postavljanje svojstava zovemo SETTER metoda
     * @param String $savez
     */
    function set_savez($t1) {  // Metoda, Method
        
               switch ($t1) {
            case "Bayern":
                return $this->savez="njemački";
                break;
            case "Liverpool":
               return $this->savez="engleski";
              break;
         default:
           return $this->savez="hrvatski";
                }
        
        
    //    if ($t1=="Bayern") {    
    //     return $this->savez="njemački";}
    //    else{
    //       if ($t1=="Liverpool"){
    //       return $this->savez="engleski";}
    //      else{
    //        return  $this->savez="hrvatski";}
        
    //   }
      
           
    }
     /**
     * Dohvaćamo ime pomoću metode --> GETTER
     * @return String Ime saveza
     */
   public static function get_savez(): string {  // Getter
         return sprintf("%s",$this->savez) ;
       
   }
}