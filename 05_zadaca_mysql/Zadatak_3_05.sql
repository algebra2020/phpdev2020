SELECT 
nastavnik.imeNastavnik, 
nastavnik.prezNastavnik,
(nastavnik.koef+0.4)*800 AS placa
FROM nastavnik;