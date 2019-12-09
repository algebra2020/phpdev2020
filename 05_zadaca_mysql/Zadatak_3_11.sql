SELECT *
FROM stud
WHERE
stud.imeStud RLIKE '^[aeiouAEIOU].*' AND stud.imeStud RLIKE '^.*[aeiouAEIOU]$';