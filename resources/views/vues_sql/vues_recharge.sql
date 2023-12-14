CREATE VIEW vue_recharge AS
SELECT r.id AS id, r.user_id AS userId, r.montant AS montantRecharge, r.created_at AS dateRecharge, u.name AS userName, u.solde AS soldeUser
FROM recharges r
INNER JOIN users u ON r.user_id = u.id
