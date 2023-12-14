CREATE VIEW vue_besoin AS
SELECT b.id AS id, b.libelle AS libelle, b.pasteur_id AS pasteur_id, b.mission_id AS mission_id, b.montant AS montant, b.observation AS observation, b.delais AS delais, b.status AS status, b.created_at AS createdAt, u.name AS pasteurName, u.lastname AS pasteurLastname,
u.eglise_id AS eglise_id, m.libelle AS mission, m.pays AS pays, m.duree AS duree, m.ville AS ville
FROM besoins b
INNER JOIN users u ON b.pasteur_id = u.id
LEFT JOIN missions m ON b.mission_id = m.id