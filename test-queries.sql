# Query1
SELECT u.*, COUNT(m.id) as messageCount FROM user u LEFT JOIN message m ON m.user_id = u.id GROUP BY u.id;
# Query2
SELECT u.*, COUNT(m.id) as messageCount FROM user u LEFT JOIN message m ON m.user_id = u.id
WHERE m.message_date_time > '2020-01-01'
GROUP BY u.id