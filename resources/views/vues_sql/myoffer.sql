CREATE VIEW myoffer AS SELECT 
    cotisations.id,
    cotisations.user_id,
    cotisations.projet_id,
    cotisations.montant,
    cotisations.user_validate_id,
    cotisations.user_delete_id,
    cotisations.created_at,
    users.name,
    users.firstname,
    projets.libelle,
    projets.description,
    projets.delais
    
FROM cotisations

INNER JOIN users ON cotisations.user_id = users.id
INNER JOIN projets ON cotisations.projet_id=projets.id