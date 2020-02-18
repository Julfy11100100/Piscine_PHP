SELECT `name`
FROM `distrib`
WHERE id_distrib = 42
OR id_distrib = 71
OR id_distrib BETWEEN 88 and 90
OR `name` REGEXP ".*Y.*Y"
OR `name` REGEXP ".*y.*y"
LIMIT 2, 5;