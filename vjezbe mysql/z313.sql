-- Z 3.13
-- ispisi sve podeatke o stud kojima ime ili počinje ili završava samoglasnikom

SELECT *
FROM stud
WHERE stud.imeStud RLIKE '^[aeiouAEIOU].*' 
OR stud.imeStud RLIKE '^.*[aeiouAEIOU]$';

SELECT *
FROM stud
WHERE stud.imeStud RLIKE '^[aeiou].*[aeiou]$'; 
--OR stud.imeStud RLIKE '^.*[aeiouAEIOU]$';

SELECT *
FROM stud
WHERE LEFT(stud.imeStud,1) IN ('a','e','i','o','u')
OR RIGHT(stud.imeStud,1) IN ('a','e','i','o','u');

-- Z 3.14
-- ispisi sve podeatke o stud kojima ime ili počinje ili završava samoglasnikom
SELECT *
FROM stud
WHERE stud.imeStud RLIKE 'nk'; --regular expression

SELECT *
FROM stud
WHERE stud.imeStud LIKE '%nk%'; -- asterisk



