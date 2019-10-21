<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//PRVI ZADATAK
?>
<div id="naslov">
    <?php
    echo 'Zadaci za ponavljanje - zadaća s predavanja od 18.10.2019.<br><br>';
    ?>
</div>

<style>
    #naslov{
        display: block;
        width: 95%;
        padding: 0.9em 0;
        margin: 0.5em;
        text-align: center;
        background: #E7717D;
        border-radius: 15%;
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
    table, th, td {
     border: 1px solid black;
}


</style>
<div class="pitanje">
    <?php
    echo "1. Koji je od navedenih operatora aritmetički operator?";
    ?>
    
    <ol type="a">
        <li>%</li>
        <li>&&</li>
        <li>-</li>
    </ol>
</div>

<div class='odgovor'>
    <?php
    echo "Odgovor: c <br><br>";
    ?>

</div>
<div class="pitanje">
    <?php
//DRUGI ZADATAK
    echo '<br>2. Definirajte dvije varijable, $ime i $prezime,'
    . " u koje ćete upisati vaše ime i prezime. "
    . "Ispišite te dvije varijable koristeći se operatorom"
    . " za nastavljanje nizova.<br><br>";
    ?>
</div>
    <div class='odgovor'>
        <?php

    echo "Odgovor:<br><br>";

    echo '1. korak: Definiranje varijabli: <br>';
    ?>

<div class='kod'>
    <code>
    KOD u PHP-u<br>
    $ime = 'Tatjana';<br>
    $prezime = 'Antić';<br>
    </code>
</div>
    

<?php
$ime = 'Tatjana';
$prezime = 'Antić';
?>
    <?php
echo '<br>2. korak: upotreba operatora . za povezivanje varijabli. Operator za '
 . 'povezivanje varijabli se umeće između teksta i varijable (tekst je u ovom '
 . 'slučaju i praznina/bjelina između imena i prezimena, a tekst se obavezno'
 . ' stavlja u jednostruke'
 . ' navodnike.<br>';
?>
    
<div class='kod'>
    <code>
      KOD u PHP-u<br>
       
    echo 'Moje ime i prezime je: '.$ime.' '.$prezime.'.';
    </code>
</div>
       
<?php
echo '<br>Izvođenje KOD2 na stranici izgleda ovako:<br><br>';
?>
<div class="izvod">  
            <?php
echo 'Moje ime i prezime je: ' . $ime . ' ' . $prezime . '.';
    ?>

</div>
    </div>

<?php
//TREĆI ZADATAK   
?>
<div class="pitanje">
    <?php
    echo '<br><br>3. Postavite vrijednost varijable $a na 5. Korištenjem operatora '
    . 'automatskog povećavanja i smanjivanja najprije povećajte vrijednost '
    . 'varijable $a te ispišite, a nakon toga smanjite vrijednost i ispišite.';
    ?>
</div>

<div class='odgovor'>
    <?php
    echo "<br>Odgovor:<br><br>";
    echo '1. korak: Postavljanje vrijednosti varijable i definiranje operatora koji '
    . 'će se koristiti: <br>';
     $a =5;
         ?>
    <div class='kod'>
        <code>
    KOD u PHP-u za postavljanje vrijednosti varijable $a<br>
     $a =5;
        </code>
   <br>
    </div>
    <p>
    Operator automatskog povećavanja je: (++), a operator automatskog 
        smanivanja je: (--). Varijabla se povećava tako da se operator napiše 
        prije ili poslije varijable, a mogućnosti su sljedeće:<br>
    </p>
 <table style="width:66%">
        <tr>
          <th>Operator</th>
          <th>Opis</th>
        </tr>
        <tr>
          <td>++$a</td>
          <td>Povećava $a za 1 i onda vraća uvećanu vrijednost</td>
         </tr>
        <tr>
          <td> $a++</td>
          <td> Daje vrijednost $a i onda uvećava vrijednost $a za 1</td>
        </tr>
        <tr>
          <td> --$a</td>
          <td> Umanjuje $a za 1 i onda vraća umanjenu vrijednost</td>
        </tr>
        <tr>
          <td> $a--</td>
          <td> Daje vrijednost $a i onda umanjuje vrijednost $a za 1</td>
        </tr>

        </table>
        <br><br>
        

<?php

echo '2. korak: Upotreba operatora za povećanje vrijednosti i ispis te'
 . ' smanjivanje i ispis <br>';
?>
    <div class="kod">
        <code>
    KOD u PHP-u za povećavanje vrijednosti varijable $a i ispis:<br><br>
    $a =++$a;<br>
    echo 'Rezultat nakon automatskog povećavanja varijable $a kojoj je
    inicijalna vrijednost 5 je: '.$a;
        </code>
    </div>
        
    <div class='kod'>
        <code>
    KOD u PHP-u za povećavanje vrijednosti varijable $a i ispis:<br><br>        
    $a =--$a;<br>
    echo 'Rezultat nakon smanjivanje varijable $a koja je prethodno ispisana 
    je: '.$a;
    </code>
    </div>
    
    <?php
echo '<br>Izvođenje KODA na stranici izgleda ovako:<br><br>';
?>
    <div class='izvod'>
    <?php
    $a =++$a;
    echo 'Rezultat nakon automatskog povećavanja varijable $a kojoj je
    inicijalna vrijednost 5 je: '.$a;
    ?>
        
    </div>
    <div class='izvod'>
        <?php
        $a =--$a;
        echo 'Rezultat nakon smanjivanje varijable $a koja je prethodno ispisana 
        je: '.$a;
        ?>    
    </div>
</div>

<div class="pitanje">
    
<?php
//ČETVRTI ZADATAK
echo '4. Varijablu iz prethodnog zadatka operatorom pretvorbe pretvorite u broj'
 . ' s pomičnim zarezom (float) i ispišite na ekran<br>';
?>
</div>

<div class='odgovor'>
    <?php
    echo "<br>Odgovor:<br><br>";
echo 'Pretvaranje varijable iz prethodnog zadatka ($a) u broj s '
 . 'pomičnim zarezom uz pomoć operatora pretvorbe (float) i ispis na ekranu: <br>';
?>

<div class='kod'>
    KOD u PHP-u za pretvorbu varijable $a i ispis na ekranu<br>
    <code>
    $$a = (float)$a;<br>
    echo $a.'<span class="cm-m-xml cm-tag cm-bracket">&lt;</span>
    <span class="cm-m-xml cm-tag">br</span>
    <span class="cm-m-xml cm-tag cm-bracket">&gt;</span>';<br>
    var_dump($a); </code>
    <br>
</div>

   <?php
echo '<br>Izvođenje KODA na stranici izgleda ovako:<br><br>';
?>
<div class='izvod'>
    <?php
    $a = (float)$a;
     echo $a;
     echo'<br>';
    var_dump($a);   
    ?>
</div>
    
</div>

<div class='pitanje'>
<?php
//PETI ZADATAK
echo '<br>5. Varijablu $a iz prethodnog zadatka operatorom dodjeljivanja s operacijom'
 . ' uvećajte za 5';
?>
</div>


<div class='odgovor'>
    <?php
    echo "<br>Odgovor:<br><br>";
    echo 'Uvećanje varijable $a za 5 uz pomoć operatora dodjeljivanja
    s operacijom: <br>';
              ?>
    <div class='kod'>
        <code>
    KOD u PHP-u za uvećanje varijable $a za 5 uz pomoć operatora dodjeljivanja
    s operacijom:
    <br>
    $a=$a+5;<br>
    echo $a;
    <br></code>
</div>
    
<?php
echo '<br>Izvođenje KODA na stranici izgleda ovako:<br><br>';
?>
<div class='izvod'>
<?php
$a = $a + 5;
echo $a;
?>
</div>

</div>

<?php
//ŠESTI ZADATAK
echo '<br><br>6. Napravite PHP stranicu s dvije varijable $a = 7 i $b = 3. '
 . 'Zatim na ekranu ispišite rezultate aritmetičkih operacija na sljedeći način:';
?>
<div id="pitanje6">
    <ol type="a">
        <li>7 + 3 = 10</li>
        <li>7 - 3 =4</li>
        <li>7 * 3 = 21</li>
        <li>7 / 3 = 2,333333</li>
        <li>7 % 3 = 1</li>
    </ol>
</div>

<?php
echo '<br>Odgovor:<br><br>';
?>
<a href="../01_zadaca_sest.php">Stranica s odgovorom na šesti zadatak</a>


