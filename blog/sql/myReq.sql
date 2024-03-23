SELECT image, updatedAt, title, A.slug, LEFT(content, 150), name,C.slug, firstName,lastName,  
FROM posts A
INNER JOIN categories C ON A.id_categories= C.id
INNER JOIN users ON A.id_users = users.id
ORDER BY updatedAt DESC;