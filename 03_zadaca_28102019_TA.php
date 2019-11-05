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

  

    //$polje=array();

    $polje=array('Tatjana', 'Ognjen', 5=>'Jelena', 2=>'Marin', 'Dino');

    

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

    for($i=1; $i<=100; $i++){

        $polje[]=$i;   

    }

        

   echo 'Ispis sadržaja polja:<br>';

    

   foreach ($polje as $value) {

       echo $value.' <br>';     

   }



   

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

function tablica_ispis($imena)

{

    echo '<table>'

    . '<thead><tr>

        <th style="width:100px"> Ime </th>

        <th style="width:100px"> Prezime </th>

        </tr></thead><tbody>';

        

 foreach ($imena as $key => $ucenik){

           // echo '<table>'

            echo '<tr>

                <td style="width:100px">'.$ucenik["ime"].'</td>

                <td style="width:100px">'.$ucenik["prezime"].'</td>

                </tr>';

 }

            echo '</tbody></table>';

        }



 $ucenici=array();    

        

$ucenici[1]["ime"]='Dino';

$ucenici[1]["prezime"]='Lipić';

        

$ucenici[2]["ime"]='Jelena';

$ucenici[2]["prezime"]='Šinko Jagačić';

        

$ucenici[3]["ime"]='Marin';

$ucenici[3]["prezime"]='Vlahović';

        

$ucenici[4]["ime"]='Ognjen';

$ucenici[4]["prezime"]='Vidaček';

        

$ucenici[5]["ime"]='Tatjana';

$ucenici[5]["prezime"]='Antić';



print_r($ucenici);

tablica_ispis($ucenici);

?>





 <div class='kod'>

<code>

        KOD u PHP-u<br><br>

    

        function tablica_ispis($imena)<br>

{

echo '<span class="cm-m-xml cm-tag cm-bracket">&lt;</span>table>'<br>

. '<span class="cm-m-xml cm-tag cm-bracket">&lt;</span>tr><br>

<span class="cm-m-xml cm-tag cm-bracket">&lt;</span>th style="width:100px"> Ime  <span class="cm-m-xml cm-tag cm-bracket">&lt;</span>/th><br>

<span class="cm-m-xml cm-tag cm-bracket">&lt;</span>th style="width:100px"> Prezime <span class="cm-m-xml cm-tag cm-bracket">&lt;</span>/th><br>

<span class="cm-m-xml cm-tag cm-bracket">&lt;</span>/tr>';<br>

        

 foreach ($imena as $key => $ucenik){

 echo '<span class="cm-m-xml cm-tag cm-bracket">&lt;</span>table>'<br>

            . '<span class="cm-m-xml cm-tag cm-bracket">&lt;</span>tr><br>

            <span class="cm-m-xml cm-tag cm-bracket">&lt;</span>td style="width:100px">'.$ucenik["ime"].'<span class="cm-m-xml cm-tag cm-bracket">&lt;</span>/td><br>

            <span class="cm-m-xml cm-tag cm-bracket">&lt;</span>td style="width:100px">'.$ucenik["prezime"].'<span class="cm-m-xml cm-tag cm-bracket">&lt;</span>/td><br>

            <span class="cm-m-xml cm-tag cm-bracket">&lt;</span>/tr>';<br>

 }

 echo '<span class="cm-m-xml cm-tag cm-bracket">&lt;</span>/table>';<br>

            }<br>



            $ucenici=array();    <br>

        

            $ucenici[1]["ime"]='Dino';<br>

            $ucenici[1]["prezime"]='Lipić';<br>

        

            $ucenici[2]["ime"]='Jelena';<br>

            $ucenici[2]["prezime"]='Šinko Jagačić';<br>

        

            $ucenici[3]["ime"]='Marin';<br>

            $ucenici[3]["prezime"]='Vlahović';<br>

        

            $ucenici[4]["ime"]='Ognjen';<br>

            $ucenici[4]["prezime"]='Vidaček';<br>

        

            $ucenici[5]["ime"]='Tatjana';<br>

            $ucenici[5]["prezime"]='Antić';<br>



  

tablica_ispis($ucenici);

    

    </code>

     

 </div>

    <div class="code">

        <h3>Zadatak 7.8 točka 3 funkcije plus minus pta pod</h3>

        <code>

            <?php

function sum($a,$b)

{

    return $a+$b;

}

function raz($a,$b)

{

    return $a-$b;

}

function mnoz($a,$b)

{

    return $a*$b;

}

function djel($a,$b)

{

    return $a/$b;

}

function sve($a,$b)

{

    echo "zbroj:".$a." + ".$b." = ".sum($a,$b)."<br>";

    printf("razlika:%d - %d = %d<br>",$a,$b,raz($a,$b)) ;

    echo mnoz($a,$b);

    echo djel($a,$b);

}

// NE KORISTITI varijable imena: $i, $j, $k, $ii, $jj, $kk, $iii, jjj...

$prvi_broj = 4;

$drugi_broj = 2;

sve($prvi_broj,$drugi_broj);

?>

        </code>

    </div>

</div>