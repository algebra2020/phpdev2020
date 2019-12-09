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

.button1 {
    background-color: white;
    color: black;
    border: 2px solid #4CAF50;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left: 20px;
}


/* mouse over link */
a:hover {
  color: hotpink;
}


</style>

<!-- Naslov -->
<html>

<div style="height:100%";>
       <a id="vrh"></a>
<div id="naslov">
     Zadaci za ponavljanje - zadaća s predavanja od 05.12.2019.
</div>


<!-- Zadaci -->
<body>
<div class='zadaci'>

    <h1>PHP i mySQL</h1>
<h2>WEB OBRAZAC I OBRADA PODATAKA</h2>
    <h3>1.6. Zadaci za ponavljanje</h3>

    <h4>1. Napravite obrazac za unos pet imena i prezimena. Ispišite unesene podatke.<br></h4>
    <button class='gumb'>
        <a href="1zadatak.php">Rješenje</a>
</button><br>
   <h4>2. Kreirajte obrazac u kojem korisnik sam definira koliko će imena upisati.
        Najprije upisuje broj imena koja želi upisati. Nakon toga mu se prikazuje 
        obrazac s brojem polja za upis koji je jednak broju koji je korisnik upisao.
        Nakon što upiše sva imena, ispišite ih na ekran.<br></h4>
    <button class='gumb'>
        <a href="2zadatak.php">Rješenje</a>
</button><br>
    <h4>3. Napravite novu PHP skriptu naziva skripta.php. S pomoću petlje <i>for</i>
    ispišite pet stringova. Svaki od njih predstavlja poveznicu na PHP skriptu. 
    Svaka poveznica je oblika <span class="zagrada_otv">&lt;</span>a href="skripta?broj=1">1<span class="zagrada_otv">&lt;</span>/a> <br>
    U vrijednost broj= upisuje se vrijednost koraka petlje <i>for</i>. 
    Odabirom bilo koje poveznice ispisuje se poruka, npr. Odabrali ste broj: 1.</h4>
<button class='gumb'>
        <a href="skripta.php">Rješenje</a>
</button><br>

    <h4>4. Napišite program koji se sastoji od nekoliko koraka. U prvom koraku 
        morate odabrati broj datoteka koje želite prebaciti na poslužitelj. 
        Broj datoteka ne smije biti veći od 5. Nakon što se odabere željeni broja
    datoteka, prelazi se na drugi korak u kojem se ispisuje obrazac za odabir 
    broja datoteka koje se želi prebaciti. Zatim se prelazi na treći korak i
     sve se datotee prebacuju na poslužitelj.</h4>

<button class='gumb'>
    <a href="4zadatak.php">Rješenje</a>
</button><br>
    