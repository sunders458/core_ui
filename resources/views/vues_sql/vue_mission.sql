CREATE VIEW vue_mission AS
SELECT m.id AS id, m.libelle AS libelle, m.duree AS duree, m.pays AS pays, m.ville AS ville, m.pasteur_id AS pasteurId,
m.montant AS montant, m.status AS status, m.created_at AS createdAt, u.name AS pasteur,
u.eglise_id AS egliseId, u.phone AS telephone
FROM missions m
INNER JOIN users u ON m.pasteur_id = u.id