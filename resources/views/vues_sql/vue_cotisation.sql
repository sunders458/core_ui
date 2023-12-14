CREATE VIEW vue_cotisation AS
SELECT c.id AS id, c.user_id AS userId, c.type_cotisation_id AS typeCotisationId, 
c.montant AS montant, c.created_at AS createdAt, u.name AS name, u.lastname AS lastname, u.phone AS phone, t.name AS typesCotisation
FROM cotisations c
INNER JOIN users u ON c.user_id = u.id
INNER JOIN type_cotisations t ON c.type_cotisation_id = t.id