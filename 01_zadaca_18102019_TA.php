<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//PRVI ZADATAK
echo 'Zadaci za ponavljanje - zadaća s predavanja od 18.10.2019.<br><br>';
echo "1. Koji je od navedenih operatora aritmetički operator?";
?>
<div id="pitanje1">
    <ol type="a">
        <li>%</li>
        <li>&&</li>
        <li>-</li>
    </ol>
</div>

<div style="background-color:lightgrey;">
    <?php
    echo "Odgovor: c <br><br>";
    ?>

</div>
<?php
//DRUGI ZADATAK
echo '<br>2. Definirajte dvije varijable, $ime i $prezime,'
 . " u koje ćete upisati vaše ime i prezime. "
 . "Ispišite te dvije varijable koristeći se operatorom"
 . " za nastavljanje nizova.<br><br>";

echo "Odgovor:<br><br>";

echo '1. korak: Definiranje varijabli: <br>';
?>
<div style="background-color:lightgreen;">
    KOD u PHP-u<br>
    $ime = 'Tatjana';<br>
    $prezime = 'Antić';<br>
</div>

<?php
$ime = 'Tatjana';
$prezime = 'Antić';

echo '<br>2. korak: upotreba operatora . za povezivanje varijabli. Operator za '
 . 'povezivanje varijabli se umeće između teksta i varijable (tekst je u ovom '
 . 'slučaju i praznina/bjelina između imena i prezimena, a tekst se obavezno'
 . ' stavlja u jednostruke'
 . ' navodnike. Kod izgleda ovako:<br><br>';
?>
<div style="background-color:lightgreen;">
    KOD2 u PHP-u<br>
    echo 'Moje ime i prezime je: '.$ime.' '.$prezime.'.';<br>
</div>

<?php
echo '<br>Izvođenje KOD2 na stranici izgleda ovako:<br><br>';
?>
<div style="background-color:lightgrey;">
    <?php
    echo 'Moje ime i prezime je: ' . $ime . ' ' . $prezime . '.';
    ?>

</div>

<?php
//TREĆI ZADATAK   
echo '<br><br>3. Postavite vrijednost varijable $a na 5. Korištenjem operatora '
 . 'automatskog povećavanja i smanjivanja najprije povećajte vrijednost '
 . 'varijable $a te ispišite, a nakon toga smanjite vrijednost i ispišite.';

echo "<br>Odgovor:<br><br>";
$a = 5;
echo '1.korak: Postavljanje vrijednosti varijable i definiranje operatora koji '
 . 'će se koristiti: <br>';
?>
<div style="background-color:lightgreen;">
    KOD3 u PHP-u za postavljanje vrijednosti varijable $a<br>
    $a =5;<br>
    <p>Operator automatskog povećavanja je: (++), a operator automatskog 
        smanivanja je: (--). Varijabla se povećava tako da se operator napiše 
        prije ili poslije varijable, a mogućnosti su sljedeće:<br>
        ++$a<br>
        $a++<br>
        --$aa<br>
        $a--<br>
    </p>
</div>
<?php
$a = 5;
echo '2.korak: Upotreba operatora za povećanje vrijednosti i ispis te'
 . ' smanjivanje i ispis <br>';
?>
<div style="background-color:lightgreen;">
    KOD3.2. u PHP-u za povećavanje vrijednosti varijable $a i ispis:<br>
    $a =++$a;<br>
    echo 'Rezultat nakon automatskog povećavanja varijable $a kojoj je
    inicijalna vrijednost 5 je: '.$a;
    <br>
    <br>
    <p style="italic"> KOD3.3. u PHP-u za povećavanje vrijednosti varijable $a i ispis:</p><br>
    $a =--$a;<br>
    echo 'Rezultat nakon smanjivanje varijable $a koja je prethodno ispisana 
    je: '.$a;
</div>

<?php
echo '<br>Izvođenje KOD3.2. i KOD 3.3. na stranici izgleda ovako:<br><br>';
?>
<div style="background-color:lightgrey;">
    <?php
    $a = ++$a;
    echo 'Rezultat nakon automatskog povećavanja varijable $a kojoj je inicijalna '
    . 'vrijednost 5 je: ' . $a;
    echo '<br>';

    $a = --$a;
    echo '<br>Rezultat nakon smanjivanje varijable $a koja je prethodno ispisana '
    . 'je: ' . $a;
    echo '<br>';
    ?>

</div>

<?php
//ČETVRTI ZADATAK
echo '4. Varijablu iz prethodnog zadatka operatorom pretvorbe pretvorite u broj'
. ' s pomičnim zarezom (float) i ispišite na ekran<br>';
echo '1.korak: Pretvaranje varijable iz prethodnog zadatka ($a) u broj s '
. 'pomičnim zarezom uz pomoć operatora pretvorbe (float): <br>';
?>
<div style="background-color:lightgreen;">
    KOD4 u PHP-u za pretvorbu varijable $a i ispis na ekranu<br>
    $a =(float)$a;<br>
    echo $a;
    <br>
</div>

<?php
echo '<br>Izvođenje KOD4 na stranici izgleda ovako:<br><br>';
?>
<div style="background-color:lightgrey;">
    <?php
    $a =(float)$a;
    echo'<br>';
    var_dump($a);
    echo'<br>';
    echo $a;
     
    ?>
</div>


<?php

//PETI ZADATAK
echo '<br>5. Varijablu $a iz prethodnog zadatka operatorom dodjeljivanja s operacijom'
. ' uvećajte za 5';
?>
<div style="background-color:lightgreen;">
    KOD5 u PHP-u za uvećanje varijable $a za 5 uz pomoć operatora dodjeljivanja
    s operacijom:
    <br>
    $a=$a+5;<br>
    echo $a;
    <br>
</div>

<?php
echo '<br>Izvođenje KODA 5 na stranici izgleda ovako:<br><br>';
?>
<div style="background-color:lightgrey;">
    <?php
    $a=$a+5;
    echo '<br>';
    echo $a;
        ?>

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


