-- Z3.15 ime , prez stud te naz pred i ocjena za svaki ispit
SELECT 
stud.imeStud,
stud.PrezStud,
pred.nazPred,
ispit.ocjena

-- FROM stud, pred, ispit  -- NE SMIJEMO OVO, KARTEZIJSKI PRODUKT
FROM stud INNER JOIN ispit ON stud.mbrstud =ispit.mbrStud
LEFT JOIN pred ON ispit.sifPred=pred.sifPred
WHERE ocjena>1;

-- Prosječna ocjena PREDMETA
SELECT 
-- stud.imeStud,
-- stud.PrezStud,
pred.nazPred,
AVG(ispit.ocjena) AS pros_ocjena

-- FROM stud, pred, ispit  -- NE SMIJEMO OVO, KARTEZIJSKI PRODUKT
FROM stud INNER JOIN ispit ON stud.mbrstud =ispit.mbrStud
LEFT JOIN pred ON ispit.sifPred=pred.sifPred
WHERE ocjena>1
GROUP BY pred.nazPred;

-- Prosječna ocjena STUDENTA
SELECT 
CONCAT(stud.imeStud,' ',stud.PrezStud) AS ime_stud,
-- pred.nazPred,
AVG(ispit.ocjena) AS pros_ocjena,
COUNT(ispit.ocjena) AS broj_ocjena,
AVG(ispit.ocjena)*COUNT(ispit.ocjena)*1.2 AS RANG
-- FROM stud, pred, ispit  -- NE SMIJEMO OVO, KARTEZIJSKI PRODUKT
FROM stud INNER JOIN ispit ON stud.mbrstud =ispit.mbrStud
LEFT JOIN pred ON ispit.sifPred=pred.sifPred
WHERE ocjena>1
GROUP BY ime_stud
ORDER BY RANG DESC, broj_ocjena DESC,pros_ocjena DESC;

