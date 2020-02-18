SELECT UPPER(`last_name`) AS `NAME`, `first_name`, `price`
FROM `user_card`
INNER JOIN `subscription` ON subscription.id_sub = user_card.id_user
WHERE (`price` > '42')
ORDER BY `last_name` ASC,`first_name` ASC;