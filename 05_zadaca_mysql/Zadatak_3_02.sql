	SELECT 
	stud.mbrStud,
	CONCAT(
	stud.imeStud,
	" ",
	stud.prezStud) AS fullname
	FROM stud;