SELECT DISTINCT pred.nazPred
FROM pred
LEFT JOIN 
ispit
ON pred.sifPred=ispit.sifPred
WHERE ispit.sifPred IS NOT NULL;