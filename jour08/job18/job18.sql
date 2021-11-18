SELECT salles.nom as `Biggest Room`, etage.nom, MAX(`capacite`) 
FROM `salles` 
INNER JOIN `etage` 
ON id_etage = etage.id