CREATE VIEW vue_user AS
SELECT u.id AS id, u.name AS userName, u.firstname AS firstname, u.birthday AS birthday, u.bapteme AS bapteme, u.genre AS genre, u.solde AS solde, u.eglise_id AS egliseId, u.roles_id AS rolesId, u.phone AS phone, u.photo AS photo, u.status AS status, u.email AS email, r.name AS roleName, e.egliseName AS egliseName, e.regionName AS regionName, e.villeName AS villeName
FROM users u
INNER JOIN roles r ON u.roles_id = r.id
LEFT JOIN vue_eglise e ON u.eglise_id = e.id