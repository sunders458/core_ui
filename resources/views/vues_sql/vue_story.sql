CREATE VIEW vue_stories AS
SELECT s.id AS id, s.user_id AS userId, s.detail AS detail, s.photo AS photo, s.status AS status, u.name AS name, u.lastname AS lastname
FROM stories s
INNER JOIN users u ON s.user_id = u.id
