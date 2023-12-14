CREATE VIEW projetcotisation AS SELECT 
    cotisations.id,
    cotisations.user_id,
    cotisations.projet_id,
    cotisations.montant,
    cotisations.user_validate_id,
    cotisations.user_delete_id,
    cotisations.created_at,
    users.name,
    users.phone,
    projets.libelle,
    projets.description,
    projets.delais,
    pays.idPays,
    pays.prefixe,
    pays.libelle as nompays

FROM cotisations

INNER JOIN users ON cotisations.user_id = users.id
INNER JOIN projets ON cotisations.projet_id=projets.id
INNER JOIN pays ON users.pays_id = pays.idPays
WHERE 1