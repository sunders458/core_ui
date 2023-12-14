CREATE VIEW userbyrole AS SELECT 
model_has_roles.model_type,
users.id as codeUser,
users.name,
users.phone,
roles.name as role
FROM model_has_roles
JOIN users ON model_has_roles.model_id=users.id
JOIN roles ON model_has_roles.role_id = roles.id
WHERE 1