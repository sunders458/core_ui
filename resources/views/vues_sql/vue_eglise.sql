CREATE VIEW vue_eglise AS
SELECT e.id AS id, e.name AS egliseName, e.region_id AS regionId, e.ville_id AS villeId, r.name AS regionName, v.name AS villeName
FROM eglises e
INNER JOIN regions r ON e.region_id = r.id
LEFT JOIN villes v ON e.ville_id = v.id