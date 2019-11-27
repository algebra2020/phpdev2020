SELECT *
FROM stud
WHERE
stud.imeStud RLIKE '^[aeiouAEIOU].*' OR stud.imeStud RLIKE '^.*[aeiouAEIOU]$';