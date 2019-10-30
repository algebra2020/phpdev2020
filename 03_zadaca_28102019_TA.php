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


</style>

<div id="naslov">
<?php
echo 'Zadaci za ponavljanje - zadaća s predavanja od 28.10.2019.<br><br>';
?>
</div>

<div>
    <h1>6. Polja</h1>
    <h2>Zadaci za ponavljanje</h2>
    1.	Napišite program koji upisuje pet imena u polje $imena i ispisuje ih
    uz pomoć petlje <i>foreach</i>.<br>
    2.	Polju iz prethodnog zadatka promijenite ključeve tako da umjesto ključa 
    1 piše ime5, umjesto ključa 2 ime 4 itd<br>
    3.	Posložite imena u polju iz prvog zadatka abecednim redom i ispišite 
    vrijednosti elemenata zajedno s pripadajućim ključevima uz pomoć petlje
    <i>for</i>.<br>
    4. Posložite ključeve u polju abecednim redom i ispišite vrijednosti
    elemenata zajedno s pripadajućim ključevima s pomoću petlje <i>foreach</i>.<br>
    5. Napišite program koji će s pomoću petlje <i>for</i> automatski stvoriti 
    polje brojeva od 1 do 100 te s petljom <i>foreach</i> ispisati sadržaj polja.<br>
</div>
    
<?php
//PRVI ZADATAK POGLAVLJE 6
?>
    
<div class="pitanje">
1. Napišite program koji upisuje pet imena u polje $imena i ispisuje ih
    uz pomoć petlje <i>foreach</i>.<br>
</div>

<div class='odgovor'>
 Odgovor 1:<br>
    <?php
   $polje=array('Tatjana', 'Ognjen', 'Jelena', 'Marin', 'Dino');
   foreach ($polje as $ime) {
       echo $ime.' ';  }
   ?>
 <br>
    <div class='kod'>
        <code>
            KOD u PHP-u<br>
            $polje=array('Tatjana', 'Ognjen', 'Jelena', 'Marin', 'Dino');<br>
            foreach ($polje as $ime) {<br>
            echo $ime.' ';  }<br>
        </code>
    </div>
</div>
 <div class='odgovor'>
 Odgovor 2:<br>
     <?php
        
     echo 'Ispis vrijednosti i ključeva za isto polje:<br>';
    
     foreach ($polje as $key =>$ime) {
       echo $key.' => '.$ime.'<br>';  }

        
      ?>
    <div class='kod'>
        <code>
            KOD u PHP-u<br>
            echo 'Ispis vrijednosti i ključeva za isto polje:
            <span class="cm-m-xml cm-tag cm-bracket">&lt;</span>
            <span class="cm-m-xml cm-tag">br</span>
            <span class="cm-m-xml cm-tag cm-bracket">&gt;</span>';<br>
            foreach ($polje as $key =>$ime) {<br>
            echo $key.' => '.$ime.'
            <span class="cm-m-xml cm-tag cm-bracket">&lt;</span>
            <span class="cm-m-xml cm-tag">br</span>
            <span class="cm-m-xml cm-tag cm-bracket">&gt;</span>';  }<br>
        </code>
    </div>
</div>
    
<?php
//DRUGI ZADATAK POGLAVLJE 6
?>
    
<div class="pitanje">
2. Polju iz prethodnog zadatka promijenite ključeve tako da umjesto ključa 
    1 piše ime5, umjesto ključa 2 ime 4 itd<br>
</div>

<div class='odgovor'>
 Odgovor:<br><br>
    <?php
  
    
    $polje=array('ime5'=>'Tatjana','ime4'=>'Ognjen','ime3'=>'Jelena','ime2'=>'Marin','ime1'=>'Dino');
        /**
    $polje["ime5"]='Tatjana';
    $polje["ime4"]='Ognjen';
    $polje["ime3"]='Jelena';
    $polje["ime2"]='Marin';
    $polje["ime1"]='Dino';
         * */
         
    
    
   echo 'Ispis vrijednosti i ključeva za polje s izmijenjenim '
    . 'vrijednostima ključeva:<br>';
    
     foreach ($polje as $key =>$ime) {
       echo $key.' => '.$ime.'<br>';  }
    ?>
 <br>
    <div class='kod'>
        
        <code>
            KOD u PHP-u<br>
            $polje=array('ime5'=>'Tatjana','ime4'=>'Ognjen','ime3'=>'Jelena','ime2'=>'Marin','ime1'=>'Dino');<br>
    
    
            echo 'Ispis vrijednosti i ključeva za polje s izmijenjenim '<br>
    . 'vrijednostima ključeva:
            <span class="cm-m-xml cm-tag cm-bracket">&lt;</span>
            <span class="cm-m-xml cm-tag">br</span>
            <span class="cm-m-xml cm-tag cm-bracket">&gt;</span>';<br>
    
            foreach ($polje as $key =>$ime) {<br>
            echo $key.' => '.$ime.'
            <span class="cm-m-xml cm-tag cm-bracket">&lt;</span>
            <span class="cm-m-xml cm-tag">br</span>
            <span class="cm-m-xml cm-tag cm-bracket">&gt;</span>';  }<br>
        </code>
       
    </div>
</div>
    
    
<?php
//TREĆI ZADATAK POGLAVLJE 6
?>
    
<div class="pitanje">
    3.	Posložite imena u polju iz prvog zadatka abecednim redom i ispišite 
    vrijednosti elemenata zajedno s pripadajućim ključevima uz pomoć petlje
    <i>for</i>.<br>
</div>

<div class='odgovor'>
    Odgovor:<br><br>
    <?php
  
    $polje=array();
    $polje=array('Tatjana', 'Ognjen', 'Jelena', 'Marin', 'Dino');
    
    sort($polje);
    
    
   echo 'Ispis vrijednosti i ključeva za polje sortirano po abecednom redu '
    . 'vrijednosti polja:<br>';
    
     for($i=0; $i<count($polje);$i++) {
       echo $polje[$i].'<br>';  }
       
  
    ?>
 <br>
    <div class='kod'>
        
    <code>
    KOD u PHP-u<br>
    $polje=array();<br>
    $polje=array('Tatjana', 'Ognjen', 'Jelena', 'Marin', 'Dino');<br>
    
    sort($polje);<br>
    
    
    echo 'Ispis vrijednosti polja sortirano po abecednom redu '<br>
    . 'vrijednosti polja:
    <span class="cm-m-xml cm-tag cm-bracket">&lt;</span>
    <span class="cm-m-xml cm-tag">br</span>
    <span class="cm-m-xml cm-tag cm-bracket">&gt;</span>';<br>
    
    for($i=0; $i<span class="cm-m-xml cm-tag cm-bracket">&lt;</span>count($polje); $i++) {<br>
       echo $polje[$i].'
       <span class="cm-m-xml cm-tag cm-bracket">&lt;</span>
       <span class="cm-m-xml cm-tag">br</span>
       <span class="cm-m-xml cm-tag cm-bracket">&gt;</span>';  }
        </code>
       
    </div>
</div>

<?php
//ČETVRTI ZADATAK POGLAVLJE 6
?>
    
<div class="pitanje">
    4. Posložite ključeve u polju abecednim redom i ispišite vrijednosti
    elemenata zajedno s pripadajućim ključevima s pomoću petlje <i>foreach</i>.<br>
</div>

<div class='odgovor'>
    Odgovor:<br><br>
    <?php
  
    $polje=array();
    $polje=array('Tatjana', 'Ognjen', 'Jelena', 'Marin', 'Dino');
    
    ksort($polje);
    
    
   echo 'Ispis vrijednosti i ključeva za polje sortirano po abecednom redu '
    . 'vrijednosti ključa:<br>';
    
   foreach ($polje as $key => $value) 
           {echo 'Polje s ključem '.$key.' ima vrijednost '.$value.' <br>';}
       
   
    ?>
 <br>
    <div class='kod'>
        
    <code>
    KOD u PHP-u<br>
    
    $polje=array('Tatjana', 'Ognjen', 'Jelena', 'Marin', 'Dino');<br>
    
    ksort($polje);<br>
    
    
    echo 'Ispis vrijednosti i ključeva za polje sortirano po abecednom redu '<br>
   . 'vrijednosti ključa:
   <span class="cm-m-xml cm-tag cm-bracket">&lt;</span>
    <span class="cm-m-xml cm-tag">br</span>
    <span class="cm-m-xml cm-tag cm-bracket">&gt;</span>';<br>
    
   foreach ($polje as $key => $value) <br>
   {echo 'Polje s ključem '.$key.' ima vrijednost '.$value.'
   <span class="cm-m-xml cm-tag cm-bracket">&lt;</span>
    <span class="cm-m-xml cm-tag">br</span>
    <span class="cm-m-xml cm-tag cm-bracket">&gt;</span>';}<br>
       
    
        </code>
       
    </div>
</div>

<?php
//PETI ZADATAK POGLAVLJE 6
?>
    
<div class="pitanje">
 5. Napišite program koji će s pomoću petlje <i>for</i> automatski stvoriti 
 polje brojeva od 1 do 100 te s petljom <i>foreach</i> ispisati sadržaj polja.<br>   
</div>

<div class='odgovor'>
    Odgovor:<br><br>
    <?php
  
    $polje=array();
    for($i=1; $i<=100; $i++)
    {$polje[]=$i;}
        
   echo 'Ispis sadržaja polja:<br>';
    
   foreach ($polje as $value) 
           {echo $value.' <br>';}
       
   
    ?>
 <br>
    <div class='kod'>
        
    <code>
    KOD u PHP-u<br>
    
    $polje=array();<br>
    for($i=1; $i<=100; $i++)<br>
    {$polje[]=$i;}<br><br>
        
    echo 'Ispis sadržaja polja:
   <span class="cm-m-xml cm-tag cm-bracket">&lt;</span>
    <span class="cm-m-xml cm-tag">br</span>
    <span class="cm-m-xml cm-tag cm-bracket">&gt;</span>';<br>
    
    foreach ($polje as $value)<br>
           {echo $value.'
           <span class="cm-m-xml cm-tag cm-bracket">&lt;</span>
    <span class="cm-m-xml cm-tag">br</span>
    <span class="cm-m-xml cm-tag cm-bracket">&gt;</span>';}
           
   
       
    
        </code>
       
    </div>
</div>


<div>
    <h1>7. Funkcije</h1>
    <h2>Zadaci za ponavljanje</h2>
    1.	Napišite funkciju koja vraća hrvatski naziv za trenutačni mjesec. 
    Parametar koji prosljeđujete funkciji je rezultat funkcije <i>date('n')</i>.<br>
    2.	Napišite funkciju koja ispisuje HTML tablicu imena i prezimena učenika.
    Kao parametar joj se prosljeđuje polje s imenima i prezimenima.<br>
    3.	Napišite funkcije za zbrajanje, razliku, umnožak i dijeljenje dva broja.
    Zatim napišite funkciju koja će pozivati sve te funkcije odjednom.
</div>

<?php
//PRVI ZADATAK POGLAVLJE 7
?>
    
<div class="pitanje">
 1. Napišite funkciju koja vraća hrvatski naziv za trenutačni mjesec. 
    Parametar koji prosljeđujete funkciji je rezultat funkcije <i>date('n')</i>.<br>   
</div>

<div class='odgovor'>
    Odgovor:<br><br>

<?php
    function hr_mjesec(){
	switch(date('n')){
		case '1': $mjesec='siječanj'; break;
		case '2': $mjesec='veljača'; break;		
		case '3': $mjesec='ožujak'; break;		
		case '4': $mjesec='travanj'; break;		
		case '5': $mjesec='svibanj'; break;		
		case '6': $mjesec='lipanj'; break;
                case '7': $mjesec='srpanj'; break;
                case '8': $mjesec='kolovoz'; break;
                case '9': $mjesec='rujan'; break;
                case '10': $mjesec='listopad'; break;
                case '11': $mjesec='studeni'; break;
            	default:$mjesec='prosinac'; break;	
	}
	echo "Danas je mjesec ".$mjesec.'.';
    }
    
hr_mjesec()
   
    ?>
 <br>
    <div class='kod'>
        
    <code>
        KOD u PHP-u<br><br>
    
    function hr_mjesec(){<br>
    <div class="tab">
    switch(date('n')){<br>
    <div class="tab">
    case '1': $mjesec='siječanj'; break;<br>
    case '2': $mjesec='veljača'; break;	<br>	
    case '3': $mjesec='ožujak'; break;	<br>	
    case '4': $mjesec='travanj'; break;	<br>	
    case '5': $mjesec='svibanj'; break;	<br>	
    case '6': $mjesec='lipanj'; break; <br>
    case '7': $mjesec='srpanj'; break; <br>
    case '8': $mjesec='kolovoz'; break; <br>
    case '9': $mjesec='rujan'; break; <br>
    case '10': $mjesec='listopad'; break; <br>
    case '11': $mjesec='studeni'; break; <br>
    default:$mjesec='prosinac'; break;	<br>
    } <br>
    </div>
    </div>
    <div class="tab">
    echo "Danas je mjesec ".$mjesec.".";<br>
    }<br>
    </div> <br>
    hr_mjesec()<br>
    
    </code>
       
    </div>
</div>


<?php
//DRUGI ZADATAK POGLAVLJE 7
?>
    
<div class="pitanje">
 2. Napišite funkciju koja ispisuje HTML tablicu imena i prezimena učenika.
    Kao parametar joj se prosljeđuje polje s imenima i prezimenima.<br>
</div>

<div class='odgovor'>
    Odgovor:<br><br>

<?php

$ucenik=array();
$ucenik[1] = array('ime' => 'Dino', 'prezime' =>'Lipić');
$ucenik[2] = array('ime' => 'Jelena', 'prezime' =>'Šinko Jagačić');
$ucenik[3] = array('ime' => 'Marin', 'prezime' =>'Vlahović');
$ucenik[4] = array('ime' => 'Ognjen', 'prezime' =>'Vidaček');
$ucenik[5] = array('ime' => 'Tatjana', 'prezime' =>'Antić');
$ucenik[6] = array('ime' => 'Jelena', 'prezime' =>'Šinko Jagačić');
$ucenik[7] = array('ime' => 'Jelena', 'prezime' =>'Šinko Jagačić');

foreach ($ucenik as $key =>$ime) {
    foreach ($ime as $value) {
        echo " ".$value;
    }
    echo "<br>";
}







//ovo je dalje zadaća
              
        
function ispis_tablice ($popis){
   echo "Popis učenika u ovoj grupi je: <br>";
   $Rb=1;
   echo '<table border="1>
        <tr>
            <th>Rb</th>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Napomena</th>
        </tr>';
   foreach ($popis as $key => $ucenik)
   {
        echo '<tr>
            
            <td>'.$ucenik["ime"].'</td>
            <td>'.$ucenik["prezime"].'</td>
            <td>  </td>
            </tr>';
        
   }

 echo '</table>';
}

ispis_tablice($ucenik);
?>
</div>
