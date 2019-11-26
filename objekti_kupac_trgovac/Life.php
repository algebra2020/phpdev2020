<?php

/**
 * Uobicajene metode i poruke
 *
 * @author Office10
 */
class Life {
    private static $pozdrav = 'Hello';  // statička varijabla privatna
    public static $isgood="Život Je lijep";
    private $drugipozdrav= 'Ola';       // svojstvo objekta Life
    public static function pozdrav(){
       // echo $this->pozdrav;  // ne može više ovako jer je sad ovo van static djelokruga
        echo self::$pozdrav; // poziva statičku varijablu
    }

    public static function aninhiliraj(&$m1) {
        unset($m1);// pokusaj unistenja objekta, nije uspio
    }
    public static function save(&$m1){
     $saved_object= serialize($m1);  // pretvara objekt u text
     $handle= fopen('./lifesaver.txt', 'a+');
     fwrite($handle,  $saved_object);
     fclose($handle);    
    }

    public static function ressurect() {
        //return new Macka();
     $filename = './lifesaver.txt' ;
     $handle= fopen($filename, 'a+');
     $contents = fread($handle, filesize($filename));
   //  fread($handle,  $saved_object);
     fclose($handle); 
        return unserialize($contents); // pretvara text u objekt
    }
     public static function save_json(&$m1){
     $saved_object= json_encode($m1,JSON_FORCE_OBJECT,512);  // pretvara objekt u text
     $handle= fopen('./lifesaver.json', 'a+');
     fwrite($handle,  $saved_object);
     fclose($handle);    
    }

    public static function ressurect_json() {
        //return new Macka();
     $filename = './lifesaver.json' ;
     $handle= fopen($filename, 'a+');
     $contents = fread($handle, filesize($filename));
   //  fread($handle,  $saved_object);
     fclose($handle); 
        return json_decode($contents,FALSE); // pretvara text u objekt
    }

}
