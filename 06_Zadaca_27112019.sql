-- Zadatak 5.1
-- Ispišite imena i prezimena te mjesta rođenja studenata kojima ime počinje slovom F.

SELECT stud.imeStud, stud.prezStud, mjesto.nazMjesto
FROM stud
LEFT JOIN mjesto ON stud.pbrRod=mjesto.pbr
WHERE stud.imeStud RLIKE '^f.*';



-- Zadatak 5.2 -problem hrvatski znakovi
-- Ispišite imena i prezimena nastavnika koji žive u mjestu koje na trećem mjestu ima slovo Z.

SELECT *
FROM nastavnik
LEFT JOIN mjesto ON nastavnik.pbrStan=mjesto.pbr
WHERE SUBSTRING(mjesto.nazMjesto,3,1) ="z";



-- Zadatak 5.3 problem hrvatski znakovi
-- Ispišite imena i prezimena studenata te nastavnika koji na petom mjestu imaju isto slovo.

SELECT stud.imeStud,stud.prezStud,nastavnik.imeNastavnik,nastavnik.prezNastavnik
FROM stud
LEFT JOIN ispit ON stud.mbrStud =ispit.mbrStud
LEFT JOIN nastavnik ON ispit.sifNastavnik=ispit.sifNastavnik
WHERE SUBSTRING(stud.imeStud,5,1) = SUBSTRING(nastavnik.imeNastavnik,5,1) OR SUBSTRING(stud.prezStud,5,1)=SUBSTRING(nastavnik.prezNastavnik,5,1);


-- Zadatak 5.4
-- Ispišite imena županija kojima je duljina imena duja od 13, a kraća od 20 znakova.

SELECT *
FROM zupanija
WHERE LENGTH(zupanija.nazZupanija)>13 AND LENGTH(zupanija.nazZupanija)<20;




-- Zadatak 5.5
-- Ispišite imena i prezimena studenata koji su rođeni u svibnju.

SELECT stud.imeStud,stud.prezStud,stud.datRodStud
FROM stud
WHERE MONTH(stud.datRodStud)=5;




-- Zadatak 5.6
-- Ispišite imena i prezimena studenata koji su na ispit izašli između 10. i 20. u mjesecu.

SELECT stud.imeStud,stud.prezStud,ispit.datIspit
FROM stud
LEFT JOIN ispit ON stud.mbrStud =ispit.mbrStud
WHERE DAY(ispit.datIspit)>=10 AND DAY(ispit.datIspit)<=20;



-- Zadatak 5.7
-- Pronađite podatke o onim nastavnicima koji su u lipnju ispitivali studente čije je 
-- mjesto rođenja jednako mjestu nastavnikova stanovanja. Ispišite ime i prezime nastavnika,
-- naziv mjesta u kojem stanuje, ime i prezime studenta te naziv mjesta u kojem je rođen.


SELECT nastavnik.imeNastavnik,nastavnik.prezNastavnik,m2.nazMjesto AS 'Mjesto stanovanja nastavnika',stud.imeStud,stud.prezStud,m1.nazMjesto AS 'Mjesto rođenja studenta'
FROM stud
LEFT JOIN ispit ON stud.mbrStud =ispit.mbrStud
LEFT JOIN nastavnik ON ispit.sifNastavnik=ispit.sifNastavnik
LEFT JOIN mjesto m1 ON stud.pbrRod=m1.pbr 
LEFT JOIN mjesto m2 ON nastavnik.pbrStan=m2.pbr 
WHERE MONTH(ispit.datIspit)=6 AND m1.pbr=m2.pbr;
