SELECT stud.imeStud AS ime, stud.prezStud AS prezime, pred.nazPred AS predmet, ispit.ocjena
FROM stud
LEFT JOIN
ispit
ON stud.mbrStud=ispit.mbrStud
LEFT JOIN
pred
ON ispit.sifPred=pred.sifPred WHERE pred.nazPred IS NOT NULL
ORDER BY stud.imeStud ASC;