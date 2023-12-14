CREATE VIEW projetdepense AS SELECT 
    depenses.id,
    depenses.user_id,
    depenses.projet_id,
    depenses.montant,
    depenses.created_at,
    users.name,
    projets.libelle
    
    
FROM depenses

INNER JOIN users ON depenses.user_id = users.id
INNER JOIN projets ON depenses.projet_id=projets.id
WHERE 1