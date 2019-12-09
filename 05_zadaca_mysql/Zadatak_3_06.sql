SELECT * FROM(
SELECT 
nastavnik.imeNastavnik, 
nastavnik.prezNastavnik,
(nastavnik.koef+0.4)*800 AS placa
FROM nastavnik) AS temp_placa
WHERE placa<3500 OR placa>8000;