SELECT * FROM `products` INNER JOIN categories 
ON products.productID = categories.categoryID 
WHERE categories.categoryName = "Guitars" AND products.listPrice > 500
-- -----------
SELECT * FROM `products` 
WHERE `dateAdded` 
LIKE '2014-07-__%' AND `listPrice` > 300 
ORDER BY `listPrice` DESC

SELECT * FROM `products` 
INNER JOIN categories ON products.categoryID = categories.categoryID
WHERE categories.categoryName = "Basses" AND products.productName LIKE '%o%'
ORDER BY products.productName DESC


SELECT * FROM `products`
INNER JOIN orderitems ON products.productID = orderitems.productID
INNER JOIN orders ON orderitems.orderID = orders.orderID
INNER JOIN customers ON customers.customerID = orders.customerID
WHERE customers.emailAddress LIKE '%gmail.com'

SELECT * FROM `products`
WHERE listPrice > 300 AND dateAdded LIKE '2014-%'
ORDER BY discountPercent DESC
LIMIT 4

SELECT city FROM `addresses`
INNER JOIN customers ON addresses.customerID = customers.customerID
INNER JOIN orders ON orders.customerID = customers.customerID
INNER JOIN orderitems ON orderitems.orderID = orders.orderID
INNER JOIN products ON orderitems.productID = products.productID
WHERE products.productName = "Yamaha FG700S"