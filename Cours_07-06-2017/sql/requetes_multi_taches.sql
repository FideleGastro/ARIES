SELECT 
	musiciens.nom,
	musiciens.prenom,
	instrument.nom AS instrument
FROM musiciens
JOIN instrument ON musiciens.instrument_id = instrument.id

SELECT 
	M.nom,
	M.prenom,
	I.nom AS instrument
FROM musiciens AS M
JOIN instrument AS I ON musiciens.instrument_id = instrument.id

SELECT 
	M.nom,
	M.prenom,
	I.nom AS instrument
FROM musiciens AS M
JOIN instrument AS I ON musiciens.instrument_id = instrument.id
WHERE I.nom LIKE "%guit%";

SELECT 
	M.id
	M.nom,
	M.prenom,
	M.detail,
	P.nom AS pays,
	I.nom AS style,
	I.nom AS instrument,
FROM musiciens AS M
JOIN pays AS P ON M.pays = P.pays_id
JOIN styles AS S ON M.style = S.style_id
JOIN instrument AS I ON M.instrument = I.instrument
WHERE I.nom LIKE "%guit%";


