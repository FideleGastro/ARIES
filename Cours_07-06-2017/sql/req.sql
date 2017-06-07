SELECT * FROM musiciens ORDER By nom DESC

SELECT prenom , nom FROM musiciens;

SELECT * FROM musiciens ORDER By nom DESC

SELECT * FROM musiciens WHERE style='Grunge' AND pays='France'

SELECT DISTINCT instrument FROM musiciens;

SELECT nom, style, pays FROM musiciens WHERE YEAR(naissance)=1967 

SELECT nom, YEAR(naissance) AS année  FROM musiciens WHERE YEAR(naissance) BETWEEN 1000 AND 2000

SELECT nom, instrument FROM musiciens WHERE instrument LIKE "%uit%";

SELECT nom, prenom, DATE_FORMAT(naissance, "%d/%m/%Y") AS date FROM musiciens;

SELECT
	DAY(naissance) AS jour,
	MONTH(naissance) AS mois,
	YEAR(naissance) AS annee
FROM musiciens	

SELECT COUNT(*) AS nb FROM musiciens

SELECT pays, COUNT(pays) AS nombre FROM musiciens  GROUP BY pays

SELECT pays FROM
(SELECT pays, COUNT(pays) AS nombre FROM musiciens  GROUP BY pays) AS pay_min
WHERE nombre = 1

SELECT * FROM musiciens WHERE pays
IN (SELECT pays FROM
	(SELECT pays, COUNT(pays) AS nombre FROM musiciens  GROUP BY pays) AS pay_min
	WHERE nombre = 1
)

INSERT INTO musiciens (id, nom, prenom, instrument, style, pays, naissance, detail) 
VALUES (null, 'insert','here', '0', '0', '0', '1928-10-10', '0')

UPDATE musiciens SET nom="update" WHERE nom="insert"

DELETE FROM musiciens WHERE nom="update"