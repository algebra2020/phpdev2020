SELECT stud.imeStud AS ime,
stud.prezStud AS prezime
FROM stud
INNER JOIN 
ispit
ON stud.mbrStud=ispit.mbrStud
WHERE (ispit.ocjena=3);