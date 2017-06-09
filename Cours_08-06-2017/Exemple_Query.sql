--Tous les articles et commentaires du membre id = 2

SELECT article.titre_art
FROM article
JOIN membre ON membre.id = article.Membre_id
AND MC.id = 1

-- Tous les articles et commentaires de catégorie web

-- Tous les commentaires du membre id=3 avec le nom du membre
-- auteur du commentaire et l'auteur de l'article relié


SELECT 
 A.id,
 A.titre_art
 C.titre_co,
 MC.pseudo AS auteur_co
 MA.pseudo AS auteur_art
 FROM commentaire as C 
 JOIN membre AS MC ON C.Membre_id = MC.id 
 JOIN article AS A ON C.Membre_id = a.id 
 JOIN membre AS MA ON C.Membre_id = MC.id
AND MC.id = 1