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
echo 'Zadaci za ponavljanje - zadaća s predavanja od 24.10.2019.<br><br>';
?>
</div>

<div>
    <h1>5. Kontrolne strukure i petlje</h1>
    <h2>Zadaci za ponavljanje</h2>
    1.	Koristeći se operatorima uspredbe veće od i maje od i iskazom
    <i>if-else</i> provjerite odnos varijabli $a=4 i $b=2 i ispišite prikladnu 
    poruku.<br>
    2.	Napišite program koji rabi dvije varijable $a i $b. Definirajte im
    proizvoljne brojčane vrjednost. Ako je $a veće od $b, onda uvećajte 
    vrijednost $a za jedan, a ako je veća varijabla $b, onda je umanjite za 
    jedan koristeći se operatorima automatskog povećavanja i smanjivanja.
    Ispišite na kraju vrijednosti varijabli<br>
    3.	S pomoću petlje <i>while</i> ispišite brojeve 1 do 50 na ekran,
    jedan ispod drugog.<br>
    4. S pomoću petlje <i>for</i> zbrojite brojeve od 20 do 30 te zbroj ispišite na 
    ekran.<br>
</div>
<div>
    <br>
    Odgovori:<br>
<?php

//PRVI ZADATAK
?>
<div class="pitanje">
1. Koristeći se operatorima uspredbe veće od i maje od i iskazom
    <i>if-else</i> provjerite odnos varijabli $a=4 i $b=2 i ispišite prikladnu 
    poruku.<br>
</div>

<div class='odgovor'>
    Odgovor:<br><br>
<?php
$a = 2;
$b =4;
 echo 'Zadane numeričke varijable su: $a= ' . $a . ' i $b= ' . $b . '.<br>';
 echo 'Ispitivanjem if-else petljom utvrđeno je da je ';
        if ($a==$b)
        {echo 'varijabla $a jednaka varijabli $b.<br>';}
        else {
            if ($a>$b)
                {echo 'varijabla $a veća od varijable $b.<br>';}       
            else
                {echo 'varijabla $a manja od varijable $b.<br>';}
            }
        
?>
    
      <div class='kod'>
        <code>
         //KOD u PHP-u<br>
         $a = 2;<br>
         $b =4;<br>
 echo 'Zadane numeričke varijable su: $a= ' . $a . ' i $b= ' . $b . '
 .'<span class="cm-m-xml cm-tag cm-bracket">&lt;</span>
   <span class="cm-m-xml cm-tag">br</span>
   <span class="cm-m-xml cm-tag cm-bracket">&gt;</span>';<br>
   echo 'Ispitivanjem if-else petljom utvrđeno je da je ';<br>
   if ($a==$b)<br>
   {echo 'varijabla $a jednaka varijabli $b.
   <span class="cm-m-xml cm-tag cm-bracket">&lt;</span>
   <span class="cm-m-xml cm-tag">br</span>
   <span class="cm-m-xml cm-tag cm-bracket">&gt;</span>';}<br>
  else {<br>
        <div class=tab>
            if ($a>$b)<br>
            {echo 'varijabla $a veća od varijable $b.
            <span class="cm-m-xml cm-tag cm-bracket">&lt;</span>
            <span class="cm-m-xml cm-tag">br</span>
            <span class="cm-m-xml cm-tag cm-bracket">&gt;</span>';}<br>       
            else<br>
            {echo 'varijabla $a manja od varijable $b.
            <span class="cm-m-xml cm-tag cm-bracket">&lt;</span>
            <span class="cm-m-xml cm-tag">br</span>
            <span class="cm-m-xml cm-tag cm-bracket">&gt;</span>';}<br>
             }
        </div>
     
            </code>
    </div>

</div>
    
    <?php
//DRUGI ZADATAK
    ?>
<div class="pitanje">
    
    2. Napišite program koji rabi dvije varijable $a i $b. Definirajte im
    proizvoljne brojčane vrijednost. Ako je $a veće od $b, onda uvećajte 
    vrijednost $a za jedan, a ako je veća varijabla $b, onda je umanjite za 
    jedan koristeći se operatorima automatskog povećavanja i smanjivanja.
    Ispišite na kraju vrijednosti varijabli.<br>
</div>
<div class='odgovor'>
    Odgovor:<br><br>
    
<?php
   $a=11;
   $b=10;
 echo 'Zadane numeričke varijable su: $a= ' . $a . ' i $b= ' . $b . '.<br>';
 echo 'Ispitivanjem if-else petljom utvrđeno je da je ';
        if ($a==$b)
        {echo 'varijabla $a jednaka varijabli $b pa je objemama vrijednost'
            . ' ostala nepromijenjena i sada vrijednosti varijabli iznose:'
            . '<br> $a= '.$a.' i $b='.$b.'.<br>';}      
        else{
            if ($a>$b)
            {$a++;
             echo 'varijabla $a veća od varijable $b pa je vrijednost varijable'
            . ' $a povećana za 1 i sada vrijednosti varijabli iznose:'
            . '<br> $a= '.$a.' i $b='.$b.'.<br>';}       
            else
            {$a--;
            echo 'varijabla $a manja od varijable $b pa je vrijednost varijable'
            . ' $a umanjena za 1 i sada vrijednosti varijabli iznose:'
            . '<br> $a= '.$a.' i $b='.$b.'.<br>';}  
        }
?>

    <div class='kod'>
        <code>
            //KOD u PHP-u<br>
            $a=11;<br>
            $b=10;<br>
 echo 'Zadane numeričke varijable su: $a= ' . $a . ' i $b= ' . $b . '.
 <span class="cm-m-xml cm-tag cm-bracket">&lt;</span>
 <span class="cm-m-xml cm-tag">br</span>
 <span class="cm-m-xml cm-tag cm-bracket">&gt;</span>';<br>
 echo 'Ispitivanjem if-else petljom utvrđeno je da je ';<br>
 if ($a==$b)<br>
        {echo 'varijabla $a jednaka varijabli $b pa je objemama vrijednost'<br>
        . ' ostala nepromijenjena i sada vrijednosti varijabli iznose:'<br>
            . '<span class="cm-m-xml cm-tag cm-bracket">&lt;</span>
            <span class="cm-m-xml cm-tag">br</span>
            <span class="cm-m-xml cm-tag cm-bracket">&gt;</span> $a= '.$a.' i $b='.$b.'.<span class="cm-m-xml cm-tag cm-bracket">&lt;</span>
            <span class="cm-m-xml cm-tag">br</span>
            <span class="cm-m-xml cm-tag cm-bracket">&gt;</span>';}<br>     
            else{<br>
            <div class=tab>
            if ($a>$b)<br>
            {$a++;<br>
            echo 'varijabla $a veća od varijable $b pa je vrijednost varijable'<br>
            . ' $a povećana za 1 i sada vrijednosti varijabli iznose:'<br>
            . '<span class="cm-m-xml cm-tag cm-bracket">&lt;</span>
            <span class="cm-m-xml cm-tag">br</span>
            <span class="cm-m-xml cm-tag cm-bracket">&gt;</span>
            $a= '.$a.' i $b='.$b.'.<span class="cm-m-xml cm-tag cm-bracket">&lt;</span>
            <span class="cm-m-xml cm-tag">br</span>
            <span class="cm-m-xml cm-tag cm-bracket">&gt;</span>';}<br>      
            else{<br>
            $a--;<br>
            echo 'varijabla $a manja od varijable $b pa je vrijednost varijable'<br>
            . ' $a umanjena za 1 i sada vrijednosti varijabli iznose:'<br>
            . '<span class="cm-m-xml cm-tag cm-bracket">&lt;</span>
            <span class="cm-m-xml cm-tag">br</span>
            <span class="cm-m-xml cm-tag cm-bracket">&gt;</span> $a= '.$a.' i $b='.$b.'.<span class="cm-m-xml cm-tag cm-bracket">&lt;</span>
            <span class="cm-m-xml cm-tag">br</span>
            <span class="cm-m-xml cm-tag cm-bracket">&gt;</span>';}<br>
            </div>
            }
        </code>
    </div>
</div>


<?php
//TREĆI ZADATAK   
        ?>
<div class="pitanje">
3. S pomoću petlje <i>while</i> ispišite brojeve 1 do 50 na ekran,
    jedan ispod drugog.<br>
</div>

<div class='odgovor'>
 Odgovor:<br><br>
    <?php
  $a=1;
  while($a<=50)
  {echo $a.'<br>';
  $a++;}
    ?>
    <div class='kod'>
        <code>
            KOD u PHP-u<br>
            $a=1;<br>
            while($a<=50)<br>
            {echo $a.'<span class="cm-m-xml cm-tag cm-bracket">&lt;</span>
            <span class="cm-m-xml cm-tag">br</span>
            <span class="cm-m-xml cm-tag cm-bracket">&gt;</span>';<br>
            $a++;}
        </code>
       
    </div>
</div>
    
<?php
//ČETVRTI ZADATAK
?>
    
    
    <div class="pitanje">
4. S pomoću petlje <i>for</i> zbrojite brojeve od 20 do 30 te zbroj ispišite na 
    ekran.<br>
</div>

<div class='odgovor'>
 Odgovor:<br><br>
    <?php
   $zbroj=0;
   for ($index = 20; $index <= 30; $index++) 
   {
    $zbroj=$zbroj+$index;
   }
  echo 'Zbroj brojeva od 20 do 30 je '.$zbroj.'.';
    ?>
 <br>
    <div class='kod'>
        
        <code>
            KOD u PHP-u<br>
            $zbroj=0;<br>
            for ($index = 20; $index <= 30; $index++) <br>
            {<br>
            $zbroj=$zbroj+$index;<br>
            }<br>
            echo 'Zbroj brojeva od 20 do 30 je '.$zbroj.'.';<br>
        </code>
       
    </div>
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
    5. Napišite program koji će s pooćupetlje <i>for</i> automatski stvoriti 
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
    

    

    