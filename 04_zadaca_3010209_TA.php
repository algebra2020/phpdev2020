<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<style>

    #naslov{
        display: block;
        width: 95%;
        padding: 0.9em 0;
        margin: 0.5em;
        text-align: center;
        background: #E7717D;
        border-radius: 5%;
        font-size: 18pt;
    }

    .pitanje{
        display: inline-block;
        width: 95%;
        padding: 0.9em 0;
        margin: 0.5em;
        text-align: left;
        font-weight: bolder;
        border: 1pt black dotted;
    }

    .odgovor{
        display: inline-block;
        width: 95%;
        padding: 0.9em 0;
        margin: 0.5em;
        text-align: left;
        background: lightgray;
        font-weight: normal;
    }



    .kod{
        display: inline-block;
        width: 66%;
        padding: 0.9em 0;
        margin: 0.5em;
        text-align: left;
        background: #AFD275;
        font: italic;
    }

    .izvod{

        display: inline-block;

        width: 50%;

        padding: 0.9em 0;

        margin: 0.5em;

        text-align: left;

        background: white;

        font: italic;

    }

    .tab { margin-left: 40px; }

    table, th, td {

        border: 1px solid black;

    }
.gumb{
    float:center;
     border: 1pt black solid;
     border-radius: 10pt;
     padding: 1%;
     background-color: darkgrey;
     color:#000;}




</style>

<!-- Naslov -->
<div style="height:100%";>
       <a id="vrh"></a>
<div id="naslov">
     Zadaci za ponavljanje - zadaća s predavanja od 30.10.2019.
</div>


<!-- Zadaci -->

<div class='zadaci'>

    <h1>8. Rad s datotekama</h1>

    <h2>Zadaća</h2>

    <h3>1. Proći sve funkcije sa stranice 90<br></h3>
    Poglavlje 8.4. Korisne funkcije - stranica 90<br>
    <ul>
        <li><a href="#prva">8.4.1. Funkcija <i>is_file</i></a></li>
        <li><a href="#druga">8.4.2. Funkcija <i>is_dir</i></a></li>
        <li><a href="#treca">8.4.3. Funkcija <i>mkdir</i></a></li>
        <li><a href="#cetvrta">8.4.4. Funkcija <i>rmdir</i></a></li>
        <li><a href="#peta">8.4.5. Funkcija <i>unset</i></a></li>
        
    </ul>
    
     <h3>2. Zadaci za ponavljanje 8.5.</h3>
    1.	Napišite program koji čita sadržaj iz neke tekstualne datoteke.
    <button class='gumb'>
 <a href="#citac">Rješenje</a>
</button><br>
    2. Pripremite obrazac (formu) u koju korisnik upisuje neki tekst i nakon
    predavanja (engl. <i>submit</i>) podataka tog obrasca zapišite tekst u neku 
    datoteku. Ako datoteka ne postoji napravite ju.
    <button class='gumb'>
 <a href="#obrazac">Rješenje</a>
</button><br>

    3. Napišite program preko kojeg korisnik dohvaća sadržaj neke tekstualne
    datoteke, uređuje ga i ponovno sprema u istu datoteku.
    <button class='gumb'>
 <a href="#dohvat">Rješenje</a>
</button><br>
   
</div>
</div>
<div>
    ODGOVORI
</div>
    
<!--PRVI ZADATAK PRVA FUNKCIJA is_file -->


<div class="pitanje">
    <a id="prva">
8.4.1. Funkcija <i>is_file</i>
    </a><br>
</div>

<div class='odgovor'>
Ova funkcija prima jedan parametar, a to je naziv datoteke, odnosno cijela
putanja do datoteke ako datoteka nije u istom direktoriju te provjerava je li
datoteka regularna i postoji li.<br>

<h4>1. primjer uporabe funkcije <i>is_file()</i> </h4>
za provjeru da li u folderu kojem se nalazi funkcija postoji datoteka 
<i>ucenici.txt</i> (postoji jer je kreirana tijekom predavanja):<br>
 <br>

    <div class='kod'>

        <code>
        KOD u PHP-u<br><br>

        if(is_file('ucenici.txt')){<br>
        <span style="color: gray;">//blok koda koji će se izvršiti</span> <br>
       
        <div class="tab">
        echo 'Datoteka <span class="zagrada_otv">&lt;</span>i>ucenici.txt<span class="zagrada_otv">&lt;</span>/i> 
        postoji u folderu u kojem se nalazi '<br>
        . 'ova funkcija. <span class="zagrada_otv">&lt;</span>br>';<br>
       }<br>
       else {<br>
       echo 'Datoteka <span class="zagrada_otv">&lt;</span>i>ucenici.txt<span class="zagrada_otv">&lt;</span>/i> ne postoji u folderu u kojem se nalazi '<br>
       . 'ova funkcija. <span class="zagrada_otv">&lt;</span>br>';<br>
       }
        </div>
        </code>
    </div>
 
  <?php
 echo '<br>Izvođenje koda na stranici izgeda ovako:<br>';
 ?>
 <div class="izvod">
 <?php
   
   if(is_file('ucenici.txt')){
       //blok koda
       echo 'Datoteka <i>ucenici.txt</i> postoji u folderu u kojem se nalazi '
       . 'ova funkcija. <br>';
       //var_dump(is_file('/Users/LAAN/Code/phpdev2020/ucenici.txt')) . "\n";
   }
   else{
       echo 'Datoteka <i>ucenici.txt</i> ne postoji u folderu u kojem se nalazi '
       . 'ova funkcija. <br>';
   }

   ?>
</div>
  
 <h4>2. primjer uporabe funkcije <i>is_file()</i> </h4>
za provjeru da li u folderu kojem se nalazi funkcija postoji datoteka 
<i>popis.pdf</i> (ne postoji jer nije kreirana):<br>
 <br>

    <div class='kod'>

        <code>
        KOD u PHP-u<br><br>

        if(is_file('popis.pdf')){<br>
        <span style="color: gray;">//blok koda koji će se izvršiti</span> <br>
       
        <div class="tab">
        echo 'Datoteka <span class="zagrada_otv">&lt;</span>i>popis.pdf<span class="zagrada_otv">&lt;</span>/i> postoji u folderu u kojem se nalazi '<br>
        . 'ova funkcija. <span class="zagrada_otv">&lt;</span>br>';<br>
       }<br>
       else {<br>
       echo 'Datoteka <span class="zagrada_otv">&lt;</span>i>popis.pdf<span class="zagrada_otv">&lt;</span>/i> ne postoji u folderu u kojem se nalazi '<br>
       . 'ova funkcija. <span class="zagrada_otv">&lt;</span>br>';<br>
       }
        </div>
        </code>
    </div>
 <?php
 echo '<br>Izvođenje koda na stranici izgeda ovako:<br>';
 ?>
 <div class="izvod">
    <?php
    
    
   if(is_file('popis.pdf')){
       //blok koda
       echo 'Datoteka <i>popis.pdf</i> postoji u folderu u kojem se nalazi '
       . 'ova funkcija. <br>';
   }
   else{
       echo 'Datoteka <i>popis.pdf</i> ne postoji u folderu u kojem se nalazi '
       . 'ova funkcija. <br>';
   }

   ?>
</div>
 <button class='gumb'>
 <a href="#vrh">Povratak na zadatke</a>
</button>
</div>
    

<!-- PRVI ZADATAK DRUGA FUNKCIJA is_dir -->

<div class="pitanje">
     <a id="druga">
8.4.2. Funkcija <i>is_dir</i>
</a><br>
</div>

<div class='odgovor' style="height:100%;">
Funkcija <i>is_dir</i> za proslijeđeni parametar govori je li direktorij.

<h4>Primjer uporabe funkcije <i>is_dir()</i> </h4>
za provjeru da li je proslijeđeni parametar direktorij:<br>
 <br>
<?php
if (is_dir('ucenici')){
rmdir('ucenici');
}
?>
    <div class='kod'>

        <code>
        KOD u PHP-u<br><br>

        if(is_dir('ucenici')){<br>
        <span style="color: gray;">//blok koda koji će se izvršiti</span> <br>
       
        <div class="tab">
        echo 'Zadani parametar <span class="zagrada_otv">
            &lt;</span>i>ucenici<span class="zagrada_otv">&lt;</span>/i> 
        je direktorij. <span class="zagrada_otv">&lt;</span>br>';<br>
       }<br>
       else {<br>
      echo 'Zadani parametar <span class="zagrada_otv">
          &lt;</span>i>ucenici<span class="zagrada_otv">&lt;</span>/i> 
        nije direktorij. <span class="zagrada_otv">&lt;</span>br>';<br>
       }
        </div>
        </code>
    </div>
 
 <div class="izvod">
    <?php

   if(is_dir('ucenici')){
       //blok koda
       echo 'Zadani parametar <i>ucenici</i> je direktorij. <br>';
       //var_dump(is_file('/Users/LAAN/Code/phpdev2020/ucenici.txt')) . "\n";
   }
   else{
       echo 'Zadani parametar <i>ucenici</i> nije direktorij. <br>';
   }

   ?>
</div>
 <button class='gumb'>
 <a href="#vrh">Povratak na zadatke</a>
</button>
</div>

<!-- PRVI ZADATAK TREĆA FUNKCIJA mkdir -->

<div class="pitanje">
     <a id="treca">
8.4.3. Funkcija <i>mkdir</i>
     </a><br>
</div>

<div class='odgovor' style="height:100%;">
Ako želimo kreirati neki direktorij ili direktorij koji tražimo ne postoji,
možemo ga kreirati fukcijom <i>mkdir</i>:


<h4>Primjer uporabe funkcije <i>mkdir()</i> </h4>
za stvaranje direktorija 'ucenici' koji nije potvrđen u prethodnom zadatku i
provjeru da li je nakon kreiranja 'ucenici' direktorij :<br>
 <br>

    <div class='kod'>

        <code>
        KOD u PHP-u<br><br>

        if(is_dir('ucenici')){<br>
        <span style="color: gray;">//blok koda koji će se izvršiti</span> <br>
       
        <div class="tab">
            <span style="color: gray;"> //stvaranje direktorija "ucenici"</span><br>
            mkdir('ucenici');<br>
            <span style="color: gray;">//ponovna provjera postojanja direktorija "ucenici"</span><br>
            if(is_dir('ucenici')){<br>
            echo 'Zadani parametar <span class="zagrada_otv">
            &lt;</span>i>ucenici<span class="zagrada_otv">
            &lt;</span>/i> je direktorij. <span class="zagrada_otv">
            &lt;</span>br>';<br>
            }<br>
            else{<br>
            echo 'Zadani parametar <span class="zagrada_otv">
            &lt;</span>i>ucenici<span class="zagrada_otv">
            &lt;</span>/i> nije direktorij. <span class="zagrada_otv">
            &lt;</span>br>';<br>
            }<br>
        </div>
        }<br>
        </code>
    </div>
 
 <div class="izvod">
    <?php
//stvaranje direktorija "ucenici"
   mkdir('ucenici');
//ponovna provjera postojanja direktorija "ucenici"
   if(is_dir('ucenici')){
       //blok koda
       echo 'Zadani parametar <i>ucenici</i> je direktorij. <br>';
   }
   else{
       echo 'Zadani parametar <i>ucenici</i> nije direktorij. <br>';
   }

   ?>
</div>
 <button class='gumb'>
 <a href="#vrh">Povratak na zadatke</a>
</button>

</div>
 

<!-- PRVI ZADATAK ČETVRTA FUNKCIJA rmdir -->

<div class="pitanje">
     <a id="cetvrta">
8.4.3. Funkcija <i>rmdir</i>
     </a><br>
</div>

<div class='odgovor' style="height:100%;">
Ako direktorij postoji, a mi ga ne želimo, možemo ga obrisati funkcijom
<i>rmdir</i>:


<h4>Primjer uporabe funkcije <i>rmdir()</i> </h4>
Sva zadaci i rješenja (kod) u ovoj zadaći nalaze se na jednoj stranici.

Funkcija <i>rmdir</i> je upotrijebljena za brisanje direktorija "ucenici" kreiranog u
<a href="#treca">trećem</a> zadatku.
Jednom kreirani direktorij ostaje do brisanja, no prije koda koji provjerava da
li direktorij postoji u <a href="#druga">drugom</a> zadatku napravljeno je 
brisanje direktorija 'ucenici' tako da rezultat u <a href="#druga">drugom</a>
zadatku bude da direktorij ne postoji. Kasnije u kodu direktorij se kreira pa
se u <a href="#treca">trećem</a> zadatku pojavljuje rezultat da direktorij 
'ucenici' postoji.<br>
 <br>

    <div class='kod'>

        <code>
        KOD u PHP-u<br><br>

        if (is_dir('ucenici')){<br>
        rmdir('ucenici');<br>
}
        </code>
    </div>
 
<button class='gumb'>
 <a href="#vrh">Povratak na zadatke</a>
</button>


</div>
  

<!-- PRVI ZADATAK PETA FUNKCIJA unset -->

<div class="pitanje">
     <a id="peta">
8.4.3. Funkcija <i>unset</i>
     </a><br>
</div>

<div class='odgovor'>
Za brisanje datoteke koja se nalazi u nekom direktoriju ili za brisanje
vrijednosti neke varijable koristi se funkcija <i>unset</i>:


<h4>1. Primjer uporabe funkcije <i>unset()</i> - brisanje datoteke u direktoriju </h4>
Kreirat će se direktorij 'popisi' i u njega će se pohraniti datoteka
<i>predmeti.txt</i> u koju će se upisati podatak 'matematika i ispisati na ekranu
te će se potom datoteka 'predmeti' obrisati.
 <br>
<!-- KOD -->
    <div class='kod'>

        <code>
        KOD u PHP-u<br><br>

        <span style="color: gray;">
            //kreiranje direktorija</span><br>
        if(is_dir('popisi')){<br>
        echo '<span class="zagrada_otv">
            &lt;</span>br>Direktorij s imenom "popisi" već postoji.<span class="zagrada_otv">
            &lt;</span>br>';<br>
        }<br>
        else{<br>
        mkdir('popisi');<br>
        echo '<span class="zagrada_otv">
            &lt;</span>br>Direktorij "popisi" je kreiran.<span class="zagrada_otv">
            &lt;</span>br>';<br>
        }<br>
        <br>
        <span style="color: gray;">
 //kreiranje datoteke predmeti.txt u direktoriju popisi i zapisivanje 
 teksta u tu datoteku</span><br>
 function upis(){<br>
 $datoteka_iil='popisi/predmeti.txt'; //iil = ime i lokacija datoteke<br>

 $handle= fopen($datoteka_iil, 'a+');<br>
 fwrite($handle, ' matematika');<br>
 fclose($handle);<br>
 }<br>
 upis();<br><br>
 <span style="color: gray;">
 //ispis sadržaja datoteke predmeti.txt u direktoriju popisi</span><br>
 function citanje(){<br>
 $datoteka_iil='popisi/predmeti.txt'; //iil = ime i lokacija datoteke<br>

 $handle= fopen($datoteka_iil, 'a+');<br>
 $contents= fread($handle, filesize($datoteka_iil));<br>
 fclose($handle);<br>
 echo 'Sadržaj datoteke predmeti u direktoriju popisi je: '.$contents;<br>
 }<br>
 citanje();<br><br>
<span style="color: gray;">
    //brisanje datoteke predmeti.txt u direktoriju popisi</span><br>
 function brisanje(){<br>
 $datoteka_iil='popisi/predmeti.txt'; //iil = ime i lokacija datoteke<br>
 if(is_file($datoteka_iil)){<br>
    <span style="color: gray;">
 //unset($datoteka_iil);<br>
//VAŽNO iz nekog razloga unset() nije radilo pa je upotrijebljena
druga funkcija za brisanje unlink()</span><br>

unlink($datoteka_iil);<br>
echo '<span class="zagrada_otv">
            &lt;</span>br>Datoteka "predmeti" u direktoriju s imenom "popisi" '<span class="zagrada_otv">
            &lt;</span>br>
. 'postoji i obrisana je.<span class="zagrada_otv">
            &lt;</span>br>';<br>
}<br>
else{     <br>
echo '<br>Datoteka "predmeti" u direktoriju s imenom "popisi" '<span class="zagrada_otv">
            &lt;</span>br>
. 'ne postoji i nije se mogla obrisati.<span class="zagrada_otv">
            &lt;</span>br>';<br>
}<br>
}<br>

brisanje();<br><br>

        
        </code>
    </div>
<div class='izvod'>
 <?php
 
 //kreiranje direktorija
 if(is_dir('popisi')){
     echo '<br>Direktorij s imenom "popisi" već postoji.<br>';
 }
 else{
     mkdir('popisi');
     echo '<br>Direktorij "popisi" je kreiran.<br>';
 }
 
 //kreiranje datoteke predmeti.txt u direktoriju popisi i zapisivanje teksta u tu datoteku
 function upis(){
 $datoteka_iil='popisi/predmeti.txt'; //iil = ime i lokacija datoteke

$handle= fopen($datoteka_iil, 'a+');
fwrite($handle, ' matematika');
fclose($handle);
 }
 upis();

//ispis sadržaja datoteke predmeti.txt u direktoriju popisi
function citanje(){
$datoteka_iil='popisi/predmeti.txt'; //iil = ime i lokacija datoteke

$handle= fopen($datoteka_iil, 'a+');
$contents= fread($handle, filesize($datoteka_iil));
fclose($handle);
echo 'Sadržaj datoteke predmeti u direktoriju popisi je: '.$contents;
}
citanje();

//brisanje datoteke predmeti.txt u direktoriju popisi
function brisanje(){
     $datoteka_iil='popisi/predmeti.txt'; //iil = ime i lokacija datoteke
if(is_file($datoteka_iil)){
    
//unset($datoteka_iil);
//VAŽNO iz nekog razloga unset() nije radio pa je upotrijebljena druga funkcija za brisanje unlink()

    unlink($datoteka_iil);
    echo '<br>Datoteka "predmeti" u direktoriju s imenom "popisi" '
    . 'postoji i obrisana je.<br>';
 }
 else{     
     echo '<br>Datoteka "predmeti" u direktoriju s imenom "popisi" '
     . 'ne postoji i nije se mogla obrisati.<br>';
 }
}

brisanje();

 ?>
</div>
<button class='gumb'>
 <a href="#vrh">Povratak na zadatke</a>
</button>
</div>


 <!-- DRUGI ZADATAK PRVI PODZADATAK -->

<div class="pitanje" id="citac">
     
     1.	Napišite program koji čita sadržaj iz neke tekstualne datoteke.
    <br>
</div>

<div class='odgovor'>
Kreirana je datoteka elementi.txt koja je pohranjena u direktorij 'popisi'
koji je napravljen u prethodnom dijelu.

<h4>1. način: čitanje uz pomoć <i>$handle</i></h4> <br>
<!-- KOD -->
    <div class='kod'>

        <code>
        KOD u PHP-u<br><br>

        echo '<span class="zagrada_otv">
            &lt;</span>br>';<br>
        $dato_eleme='zadaci/elementi.txt';
        <span style="color: gray;">//lokacija/ime datoteke</span><br>
        $handle= fopen($dato_eleme, 'r');<br>
        $sadrzaj= fread($handle, filesize($dato_eleme));<br>
        fclose($handle);<br>

        echo $sadrzaj;<br>
        
        
        </code>
        <br>
    </div>
<div class='izvod'>
 <?php
  echo '<br>';
   
$dato_eleme='zadaci/elementi.txt'; //lokacija/ime datoteke
$handle= fopen($dato_eleme, 'r');
$sadrzaj= fread($handle, filesize($dato_eleme));
fclose($handle);

echo $sadrzaj;
 ?>
</div>
<h4>2. način: čitanje uz pomoć <i>foreach</i> petlje </h4><br>
<!-- KOD -->
    <div class='kod'>

        <code>
        KOD u PHP-u<br><br>

        $dato_ime='zadaci/elementi.txt';
        <span style="color: gray;">//lokacija/ime datoteke</span><br>
        $datoteka=file($dato_ime);<br>
        foreach ($datoteka as $line_num => $redak){<br>
        
        echo 'Linija #'.$line_num.' '.$redak.'<span class="zagrada_otv">
            &lt;</span>br>';<br>
        }<br>
        
        
        </code>
    </div>
<div class='izvod'>
 <?php
 
$dato_ime='zadaci/elementi.txt'; //lokacija/ime datoteke
$datoteka=file($dato_ime);
foreach ($datoteka as $line_num => $redak){

    echo 'Linija #'.$line_num.' '.$redak.'<br>';
}
 ?>
</div>

<button class='gumb'>
 <a href="#vrh">Povratak na zadatke</a>
</button>
</div>

 <!-- DRUGI ZADATAK DRUGI PODZADATAK -->

<div class="pitanje" id="obrazac">
     
     2. Pripremite obrazac (formu) u koju korisnik upisuje neki tekst i nakon
    predavanja (engl. <i>submit</i>) podataka tog obrasca zapišite tekst u neku 
    datoteku. Ako datoteka ne postoji napravite ju.
    <br>
</div>

<div class='odgovor'>
    
    <h4>Odgovor</h4> <br>
<!-- KOD -->
    <div class='kod'>

        <code>
            <b> KOD u HTML-u</b><br>
<span class="zagrada_otv">&lt;</span>div><br>
  <span class="zagrada_otv">&lt;</span>
  h4>Pohrana podataka u .txt datoteku
  <span class="zagrada_otv">&lt;</span>/h4><br>
  
  <span class="zagrada_otv">&lt;</span>/div><br>
<span class="zagrada_otv">
    &lt;</span>div class='izvod'><br>
<span class="zagrada_otv">
            &lt;</span>form method="post">
    Upišite e-mail adresu:<span class="zagrada_otv">
    &lt;</span>input type="text" name="mailadresa"><br>
    <span class="zagrada_otv">
        &lt;</span>input type="submit" name="submit" value="Potvrdi upis"><br>
    
  <span class="zagrada_otv">
      &lt;</span>/form><br>
    
<div class='tab'>
    <b> KOD u PHP-u</b><br>

<span class="zagrada_otv">
    &lt;</span>?php<br>

if(isset($_POST['mailadresa'])){<br>
<div class='tab'>
function upisadrese(){<br>
$mailadrr=$_POST['mailadresa'];<br>
$handle= fopen('popisi/adrese.txt', 'a+');<br>
fwrite($handle, $mailadrr);<br>
fclose($handle);    <br>
}<br>
    </div>
if(is_file('popisi/adrese.txt')){<br>
upisadrese();<br>
echo '<br>Datoteka <i>adrese.txt</i> postoji u folderu zadaci i u nju smo upisali Vašu adresu.<span class="zagrada_otv">
        &lt;</span>br>';<br>
     
}<br>
else{<br>
upisadrese();<br>
echo '<span class="zagrada_otv">
    &lt;</span>br>Čestitamo!!!!'<br>
.' Vi ste prvi ostavili podatak o e-mail adresi, pa smo zbog Vas'<span class="zagrada_otv">
    &lt;</span>br><br>
. ' kreirali datoteku <i>adrese.txt</i> jer nije postojala '<span class="zagrada_otv">
    &lt;</span>br><br>
. 'u našem folderu zadaci.';<br>
}<br>
}<br>


?></div><br>
 <b> KOD u HTML-u</b><br>
<span class="zagrada_otv">
    &lt;</span>/div><br><br>
        </code>
    </div>

<div>
  <h4>Pohrana podataka u .txt datoteku</h4>
  
</div>
<div class='izvod'>
<form method="post" action="">
    Upišite e-mail adresu:<input type="text" name="mailadresa"><br>
    <input type="submit" name="submit" value="Potvrdi upis">
    
  </form>
    <br>




<?php

if(isset($_POST['mailadresa'])){
    
  function upisadrese(){
     $mailadrr=$_POST['mailadresa'];
     $handle= fopen('zadaci/adrese.txt', 'a+');
     fwrite($handle, $mailadrr);
     fclose($handle);    
    }
    
    if(is_file('zadaci/adrese.txt')){
        upisadrese();
       echo '<br>Datoteka <i>adrese.txt</i> postoji u folderu zadaci i u nju smo upisali Vašu adresu. <br>';
     
    }
    else{
        upisadrese();
       echo '<br>Čestitamo!!!!'
       .' Vi ste prvi ostavili podatak o e-mail adresi, pa smo zbog Vas'
       . ' kreirali datoteku <i>adrese.txt</i> jer nije postojala '
       . 'u našem folderu zadaci.';
    }
    
}


?>
</div>
<button class='gumb'>
 <a href="#vrh">Povratak na zadatke</a>
</button>

</div>

 
 <div class="pitanje">
     <a id="dohvat">
3. Napišite program preko kojeg korisnik dohvaća sadržaj neke tekstualne
    datoteke, uređuje ga i ponovno sprema u istu datoteku.
</a><br>
</div>

<div class='odgovor' style="height:100%;">
Korisnik dohvaća tekstualnu datoteku elementi.txt u direktoriju zadaci, 
uređuje ju i sprema u istu datoteku.


    <div class='kod'>

        <code>
        KOD u PHP-u<br><br>

        $file = 'zadaci/elementi.txt';<br>

        echo '<span class="zagrada_otv">
            &lt;</span>form method="POST" action="">'<br>
   . 'Tekst:<span class="zagrada_otv">
    &lt;</span>br>'
           . '<span class="zagrada_otv">
               &lt;</span>textarea name="txt" rows="10" cols="50">';<br>
  
               $current = file_get_contents($file);<br>
   echo $current;
   echo '<span class="zagrada_otv">
    &lt;</span>/textarea><span class="zagrada_otv">
    &lt;</span>br><span class="zagrada_otv">
    &lt;</span>input type="submit" name="btn" value="spremi"/><span class="zagrada_otv">
        &lt;</span>/form>';<br>
   
        if(isset($_POST["btn"])){<br>
        echo 'Promijenili ste sadržaj i spremili u datoteku. <span class="zagrada_otv">
    &lt;</span>br>'<br>
    . 'Novi sadržaja (u nastavku detaljno) će se pojaviti u gornjem prozoru'<br>
               . ' kada osvježite stranicu :<span class="zagrada_otv">
                   &lt;</span>br>';<br>
                   echo $_POST["txt"];<br>
                   // novi sadržaj<br>
         $novi = $_POST["txt"];<br>
         // pohrana sadržaja u istu datoteku<br>
         file_put_contents($file, $novi);<br>
      
         }<br>
   
      
        </code>
    </div>
 
 <div class="izvod">
<?php
     
$file = 'zadaci/elementi.txt';

   echo '<form method="POST" action="">'
   . 'Tekst:<br>'
           . '<textarea name="txt" rows="10" cols="50">';
  
   $current = file_get_contents($file);
   echo $current;
   echo '</textarea><br><input type="submit" name="btn" value="spremi"/></form>';
   
   if(isset($_POST["btn"])){
       echo 'Promijenili ste sadržaj i spremili u datoteku. <br>'
       . 'Novi sadržaja (u nastavku detaljno) će se pojaviti u gornjem prozoru'
               . ' kada osvježite stranicu :<br>';
       echo $_POST["txt"];
         // novi sadržaj
        $novi = $_POST["txt"];
         // pohrana sadržaja u istu datoteku
        file_put_contents($file, $novi);
      
         }
   
   ?>
 



</div>
 <button class='gumb'>
 <a href="#vrh">Povratak na zadatke</a>
</button>
</div>
