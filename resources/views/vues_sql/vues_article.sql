CREATE VIEW vue_article AS
SELECT a.id AS id, a.user_id AS userId, a.categorie_id AS categorieId, a.title AS title, a.slug AS slug, a.image AS photo, a.like AS likeArticle, a.description AS description, a.created_at AS created_at, u.name AS userName, u.lastname AS lastname, c.libelle AS categorie
FROM articles a
INNER JOIN categories c ON a.categorie_id = c.id
INNER JOIN users u ON a.user_id = u.id