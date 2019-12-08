-- Z 3.16 stud ime, prez te mjesto i zup rodjenjaonda još i mjesto i zup stanovanja
SELECT
stud.imeStud,
stud.prezStud,
m1.nazMjesto AS 'Mjesto rodjenja',
z1.nazZupanija AS "Zupanija rodjenja",
m2.nazMjesto AS `Mjesto stanovanja`,
z2.nazZupanija AS `Zupanija stanovanja` 
FROM stud LEFT JOIN mjesto m1 ON stud.pbrRod = m1.pbr
LEFT JOIN zupanija z1 ON m1.sifZupanija=z1.sifZupanija
LEFT JOIN mjesto m2 ON stud.pbrStan = m2.pbr
LEFT JOIN zupanija z2 ON m2.sifZupanija=z2.sifZupanija;

-- Z. 3.17
-- naziv pred i org jed za one koje imaju vise od 20 upisanih stud
SELECT 
pred.nazPred,
orgjed.nazOrgjed
FROM pred LEFT JOIN orgjed ON pred.sifOrgjed=orgjed.sifOrgjed
WHERE pred.upisanoStud>20;

-- Z 3.18 sve nazive mjesta u kojima stanuje barem jedan stud. 
-- Imena mjesta se ponavljaju samo jednom
SELECT
DISTINCT mjesto.nazMjesto
FROM 
stud INNER JOIN mjesto ON stud.pbrStan = mjesto.pbr
ORDER BY mjesto.nazMjesto ASC;

-- Z 3.19 naziv mjesta u kojem bar jedan stud i rodjen i stanuje (isto mjesto),
-- mjesta se smiju pojaviti samo jednom
SELECT 
mjesto.nazMjesto,
COUNT(mjesto.nazMjesto) AS `Broj studenata koji su ovdje rodjeni i ovdje zive`
FROM 
stud INNER JOIN mjesto ON stud.pbrStan = mjesto.pbr
WHERE stud.pbrRod=stud.pbrStan
GROUP BY mjesto.nazMjesto
ORDER BY mjesto.nazMjesto ASC;

-- Z 3.20 oznake dvorane i naz kolegija koji imaju vise od dva sata predavanja tjedno
-- PAROVI dvorane i kolegiji se ne smiju ponavljati
SELECT
DISTINCT rezervacija.oznDvorana, 
pred.nazPred
FROM pred RIGHT JOIN rezervacija ON rezervacija.sifPred=pred.sifPred
WHERE pred.brojSatiTjedno>2;

-- Z 3.21 naz kojegij, ozn dvorane u kojoj je rezerviran termin,
-- ispisi i naz org jed kojima pripada

SELECT
DISTINCT rezervacija.oznDvorana, 
pred.nazPred,
orgjed.nazOrgjed
FROM pred RIGHT JOIN rezervacija ON rezervacija.sifPred=pred.sifPred
LEFT JOIN orgjed ON pred.sifOrgjed=orgjed.sifOrgjed;

-- Z 3.22 podaci o nastavnicima koji su ispitivali studente koji stanuju u
-- istoj zupaniji u kojoj stanuje nastavnik (ROĐO)

SELECT 
*
FROM stud INNER JOIN ispit ON stud.mbrStud = ispit.mbrStud
INNER JOIN nastavnik ON ispit.sifNastavnik=nastavnik.sifNastavnik
WHERE stud.pbrStan=nastavnik.pbrStan
AND stud.pbrStan != 10000;


-- Z 3.23 studiraju na mjestu razloicitom od rodjenja ali unutar iste zupanije
SELECT
stud.imeStud,
stud.prezStud,
m1.nazMjesto AS 'Mjesto rodjenja',
z1.nazZupanija AS "Zupanija rodjenja",
m2.nazMjesto AS `Mjesto stanovanja`,
z2.nazZupanija AS `Zupanija stanovanja` 
FROM stud LEFT JOIN mjesto m1 ON stud.pbrRod = m1.pbr
LEFT JOIN zupanija z1 ON m1.sifZupanija=z1.sifZupanija
LEFT JOIN mjesto m2 ON stud.pbrStan = m2.pbr
LEFT JOIN zupanija z2 ON m2.sifZupanija=z2.sifZupanija
WHERE m1.nazMjesto != m2.nazMjesto 
AND 
z1.nazZupanija = z2.nazZupanija;


-- Z 3.26 sve info o nastavnicima koju su ispitivali stud i dali ocjene 2 i 3
SELECT 
*
FROM stud INNER JOIN ispit ON stud.mbrStud = ispit.mbrStud
INNER JOIN nastavnik ON ispit.sifNastavnik=nastavnik.sifNastavnik 
WHERE ispit.ocjena= 2 OR ispit.ocjena= 3;



