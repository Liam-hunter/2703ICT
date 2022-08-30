select blog.title from blog, article
where blog.id = article.blogid and article.author = blog.creator

select name from customers
where address like '%nathan%';

select customers.name from customers, stock, orders
where customers.id = orders.custid and stock.id = orders.itemid and stock.name like "%marcel's morsels%";