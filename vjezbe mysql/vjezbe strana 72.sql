/* Zadaca sa strane 72 */
-- Z5.1 ime, prez i mjesto rođ svih sa početnim slovom F
SELECT
imeStud,
prezStud,
nazMjesto
FROM stud
JOIN mjesto ON mjesto.pbr=stud.pbrRod
WHERE LEFT (imeStud,1) = "F" 
ORDER BY imeStud ASC ;

-- Z5.2 ime i prez nasta koji zive u mjestu koje na 3. mjestu ima slovo 'z'

SELECT
imeNastavnik,
prezNastavnik,
mjesto.nazMjesto
FROM nastavnik
JOIN mjesto ON mjesto.pbr=nastavnik.pbrStan
WHERE SUBSTRING(nazMjesto, 3, 1) = "Z" 
ORDER BY imeNastavnik ASC;

-- z 5.3 ime, prez studentan te ime i prez nastavnika koji 
-- u imenu na 5. mjestu imaju isto slovo
SELECT
imeStud,
prezStud,
imeNastavnik,
prezNastavnik
FROM stud
JOIN ispit
ON ispit.mbrStud = stud.mbrStud
JOIN nastavnik
ON ispit.sifNastavnik = nastavnik.sifNastavnik
WHERE SUBSTRING(imeStud, 5, 1) = SUBSTRING(imeNastavnik, 5, 1)
AND LENGTH(imeStud)>4
AND LENGTH(imeNastavnik)>4;

-- Z5.4 imena zupanija veca od 13 manja od 20
SELECT
nazZupanija
FROM
zupanija
WHERE LENGTH(nazZupanija) BETWEEN 14 AND 19 
ORDER BY nazZupanija ASC ;

-- drugi nacin...
SELECT *
FROM zupanija 
WHERE  LENGTH(zupanija.nazZupanija)>13 
AND LENGTH(zupanija.nazZupanija)<20;

-- Z5.5 ime i pre studenata rodjenjih u svibnju
SELECT
imeStud,
prezStud,
stud.datRodStud
FROM stud
WHERE DATE_FORMAT(datRodStud, "%M") = "May" 
ORDER BY prezStud ASC ;

-- drugi nacin
SELECT stud.imeStud,stud.prezStud,stud.datRodStud
FROM stud
WHERE MONTH(stud.datRodStud)=5;

-- treci nacin?
-- SUBSTRING(imeStud, 5, 1) 
SELECT stud.imeStud,stud.prezStud,stud.datRodStud
FROM stud
WHERE SUBSTRING(stud.datRodStud, 6, 2)='05'; 

-- Z5.6 ime i prez stud koji su na 
-- ispit izisli izmeju 10. i 20. u mjesecu
SELECT
DISTINCT
imeStud
,prezStud
,ispit.datIspit
FROM stud
JOIN ispit ON stud.mbrStud = ispit.mbrStud
WHERE DAY(datIspit) BETWEEN 10 AND 20 
ORDER BY prezStud ASC;


-- Z5.7 podatke o nastavnicima moji su u lipnju ispitivali studente cije je
-- mjesto rodjenja jednako m jestu nastavnikova stanovanja.
-- ispisite imena, prez...
SELECT
imeNastavnik,
prezNastavnik,
m1.nazMjesto,
imeStud,
prezStud,
m2.nazMjesto
FROM nastavnik
JOIN ispit ON ispit.sifNastavnik = nastavnik.sifNastavnik
JOIN mjesto m1 ON m1.pbr = nastavnik.pbrStan
JOIN stud ON stud.mbrStud = ispit.mbrStud
JOIN mjesto m2 ON m2.pbr = stud.pbrRod
WHERE MONTH (datIspit) = 6 
AND stud.pbrRod=nastavnik.pbrStan
-- AND m1.nazMjesto = m2.nazMjesto
ORDER BY m1.nazMjesto ASC ;

-- Drugi nacin:
SELECT ispit.datIspit,
nastavnik.imeNastavnik,
nastavnik.prezNastavnik,
m2.nazMjesto AS 'Mjesto stanovanja nastavnika',
stud.imeStud,stud.prezStud,
m1.nazMjesto AS 'Mjesto rođenja studenta'
FROM stud INNER JOIN ispit ON stud.mbrStud =ispit.mbrStud
LEFT JOIN nastavnik ON ispit.sifNastavnik=nastavnik.sifNastavnik
LEFT JOIN mjesto m1 ON stud.pbrRod=m1.pbr 
LEFT JOIN mjesto m2 ON nastavnik.pbrStan=m2.pbr 
WHERE MONTH(ispit.datIspit)=6 
AND m1.pbr=m2.pbr;