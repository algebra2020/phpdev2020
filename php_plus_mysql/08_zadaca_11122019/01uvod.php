<?php
include '../mysql_proc_conn.php';
?>

<style>

    #naslov{
        display: block;
        width: 95%;
        padding: 0.9em 0;
        margin: 0.5em;
        text-align: center;
        background:  #4F7849;
        border-radius: 10pt;
        font-size: 18pt;
        color:white;
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
        background:  #4F7849;
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
     background-color: lightgray;
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
        color: red;
    }
 table {
  font-family: "Comic Sans MS", cursive, sans-serif;
  border: 2px solid #4F7849;
  background-color: #EEEEEE;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
table td, table.comicGreen th {
  border: 1px solid #4F7849;
  padding: 3px 2px;
}
table tbody td {
  font-size: 19px;
  font-weight: bold;
  color: #4F7849;
}
table tr:nth-child(even) {
  background: #CEE0CC;
}
table tfoot {
  font-size: 21px;
  font-weight: bold;
  color: #FFFFFF;
  background: #4F7849;
  background: -moz-linear-gradient(top, #7b9a76 0%, #60855b 66%, #4F7849 100%);
  background: -webkit-linear-gradient(top, #7b9a76 0%, #60855b 66%, #4F7849 100%);
  background: linear-gradient(to bottom, #7b9a76 0%, #60855b 66%, #4F7849 100%);
  border-top: 1px solid #444444;
}
table tfoot td {
  font-size: 21px;
}

</style>

<!-- Naslov -->
<html>

<div style="height:100%";>
       <a id="vrh"></a>
<div id="naslov">
     Zadaci za ponavljanje - zadaća s predavanja od 11.12.2019.
</div>


<!-- Zadaci -->
<body>
<div class='zadaci'>

    <h1>PHP i mySQL</h1>
<h2>PHP/MySQL FUNKCIJE</h2>
    <h3>3.10. Zadaci za ponavljanje</h3>

    <div>
        <div class=pitanje style="width:50%; font-weight:normal;background: lightgray;">
        1. Napišite program koji se spaja na bazu fakultet i iz tablice stud 
        dohvaća sve studente koji se zovu Ivan. Zatim treba ispisati matične 
        brojeve i prezimena tih studenata.
        </div>
    <button class='gumb'>
        <a href="1zadatak.php">Rješenje</a>
    </button><br>
    </div>
    
    <div>
         <div class=pitanje style="width:50%; font-weight:normal;background: lightgray;">
        2. Napišite program koji se spaja na bazu fakultet, iz tablice pred 
        dohvatite sve predmete i ispišite ih abecednim redom.
        </div>
    <button class='gumb'>
        <a href="2zadatak.php">Rješenje</a>
    </button><br>
    </div>
    
    <div>
        <div class=pitanje style="width:50%; font-weight:normal;background: lightgray;">
        3. Napišite program koji iz tablice stud dohvaća sve studente čije prezime 
        počinje slovom B i ispisuje njihova imena i prezimena.
        </div>
    <button class='gumb'>
        <a href="3zadatak.php">Rješenje</a>
    </button><br>
    </div>
    
    <div>
        <div class=pitanje style="width:50%; font-weight:normal;background: lightgray;">
        4. Napišite program koji će iz baze fakultet dohvatiti sve studente 
        koji su rođeni u Zagrebu i ispisati njihova imena i prezimena.
        </div>
    <button class='gumb'>
        <a href="4zadatak.php">Rješenje</a>
    </button><br>
    </div>
    
    <div>
       <div class=pitanje style="width:50%; font-weight:normal;background: lightgray;">
        5. Napišite program koji će s pomoću PHP funkcije mysql_num_rows ispisti 
      koliko studenata iz tablice stud ima ime koje počinje s A.
        </div>
    <button class='gumb'>
        <a href="5zadatak.php">Rješenje</a>
    </button><br>
    </div>
    
    <div>
        <div class=pitanje style="width:50%; font-weight:normal;background: lightgray;">
        6. Napišite program koji s pomoću SQL funkcije COUNT prebrojava nastavnike 
     čije prezime počinje slovom M i ispisuje taj broj.
        </div>
    <button class='gumb'>
        <a href="6zadatak.php">Rješenje</a>
    </button><br>
    </div>
    
</body>