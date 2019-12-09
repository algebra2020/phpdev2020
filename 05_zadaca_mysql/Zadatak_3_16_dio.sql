SELECT stud.imeStud AS ime,
stud.prezStud AS prezime,
mjesto.nazMjesto AS Mjesto_rođenja,
zupanija.nazZupanija AS Zupanija_rođenja
FROM stud
LEFT JOIN
mjesto
ON stud.pbrRod=mjesto.pbr
LEFT JOIN
zupanija
ON mjesto.sifZupanija=zupanija.sifZupanija;