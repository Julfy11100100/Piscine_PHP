SELECT COUNT(*) as `films`
FROM `member_history`
WHERE `date` BETWEEN '2006-10-30' and '2007-07-27'
OR (MONTH(`date`) = '12' and DAY(`date`));