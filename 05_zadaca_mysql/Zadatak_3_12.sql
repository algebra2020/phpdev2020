SELECT *
FROM stud
WHERE
stud.imeStud NOT RLIKE '^[aeiouAEIOU].*' AND stud.imeStud NOT RLIKE '^.*[aeiouAEIOU]$';