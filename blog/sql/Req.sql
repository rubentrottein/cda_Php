
INSERT INTO `employees` 
	(
		`employeeNumber`, 
		`lastName`, 
		`firstName`, 
		`extension`, 
		`email`, 
		`officeCode`, 
		`reportsTo`, 
		`jobTitle`
	) 
VALUES 
	(
		'1001', 
		'Giraud2', 
		'Philippe2', 
		'ext', 
		'phgiraud@cogitium.com', 
		'3', 
		'1000', 
		'Super Marketer'
	);

UPDATE `employees` 
SET 
	`employeeNumber` = '1000', 
	`extension` = 'ext2' 
WHERE `employees`.`employeeNumber` = 0;

DELETE FROM employees 
WHERE `employees`.`employeeNumber` = 1000

SELECT lastName, firstName 
FROM employees;

SELECT DISTINCT jobTitle FROM employees;

SELECT lastName 
FROM employees
WHERE jobTitle = 'Sales Rep';

SELECT * 
FROM `offices` 
WHERE country = 'USA';

SELECT * 
FROM `orders` 
WHERE orderDate < '2003-04-01';

SELECT * 
FROM `orders` 
WHERE orderDate >= '2003-02-01'
	AND orderDate <= '2003-02-28';

SELECT * 
FROM `orders` 
WHERE orderDate BETWEEN  '2003-02-01' AND '2003-04-01';

SELECT * 
FROM `employees`
WHERE jobTitle IN ('VP Sales', 'VP Marketing');

SELECT * 
FROM `orders`
WHERE comments IS NOT NULL;

SELECT * 
FROM `offices`
ORDER BY city;

SELECT * 
FROM `offices`
ORDER BY country, city;

SELECT * 
FROM `offices`
ORDER BY country ASC, city DESC;

SELECT * FROM `orders`
LIMIT 25 OFFSET 50;

SELECT lastName, city 
FROM employees, offices
WHERE employees.officeCode = offices.officeCode;

SELECT lastName, city 
FROM employees
INNER JOIN offices ON employees.officeCode = offices.officeCode;

SELECT lastName, city 
FROM employees
LEFT JOIN offices ON employees.officeCode = offices.officeCode;

SELECT lastName, city 
FROM employees
RIGHT JOIN offices ON employees.officeCode = offices.officeCode;

SELECT customerName, orderNumber, orderDate, comments
FROM customers
INNER JOIN orders ON orders.customerNumber = customers.customerNumber
WHERE comments IS NOT NULL
ORDER BY customerName;

SELECT A.lastName, A.jobTitle, B.lastName, B.jobTitle 
FROM employees A
LEFT JOIN employees B ON A.reportsTo = B.employeeNumber;

SELECT lastName, jobTitle 
FROM employees
WHERE jobTitle NOT LIKE "Sale%";

SELECT paymentDate, amount, customerName
FROM payments A
INNER JOIN customers B ON A.customerNumber = B.customerNumber
ORDER BY customerName ASC, paymentDate DESC;

=======================================
Exercice facture :
On veut générer la facture de la commande 10100

1ère req pour récupérer les infos de la commande ET du client :

SELECT * 
FROM orders A
INNER JOIN customers B ON A.customerNumber = B.customerNumber
WHERE orderNumber = 10100;

2ème req pour récupérer les lignes de la commande avec le libellé du produit

SELECT 
	quantityOrdered, 
    productName, 
    priceEach, 
    quantityOrdered * priceEach AS totalLigne
FROM orders A
INNER JOIN orderdetails B ON B.orderNumber = A.orderNumber
INNER JOIN products C ON B.productCode = C.productCode
WHERE A.orderNumber = 10114;
========================================

SELECT AVG(quantityOrdered * priceEach) AS TotalLigneMoyen
FROM orderdetails;

SELECT SUM(quantityOrdered * priceEach) AS Cumul
FROM orderdetails A
INNER JOIN orders B ON A.orderNumber = B.orderNumber
WHERE orderDate BETWEEN '2003-01-01' AND '2003-12-31';

SELECT orderNumber, COUNT(*), SUM(quantityOrdered * priceEach) AS TotalCde
FROM orderdetails
GROUP BY orderNumber;

SELECT lastName, SUM(quantityOrdered * priceEach) AS total
FROM employees A
INNER JOIN customers B ON salesRepEmployeeNumber = employeeNumber
INNER JOIN orders C ON C.customerNumber = B.customerNumber
INNER JOIN orderDetails D ON D.orderNumber = C.orderNumber
WHERE orderDate BETWEEN '2004-01-01' AND '2004-12-31'
GROUP BY employeeNumber
ORDER BY total DESC
LIMIT 1;

SELECT orderNumber, quantityOrdered * priceEach AS TotalLigne
FROM orderDetails
WHERE (quantityOrdered * priceEach) > (
	SELECT AVG(quantityOrdered * priceEach)
	FROM orderdetails
);

SELECT customerName
FROM customers
WHERE customerNumber IN (
	SELECT customerNumber 
	FROM orders
	WHERE shippedDate IS NULL
);

SELECT 
	(SELECT COUNT(*) FROM employees) AS Employés,
    (SELECT COUNT(*) FROM orders) AS Commandes,
    (SELECT COUNT(*) FROM products) AS Produits,
    (SELECT COUNT(*) FROM customers) AS Clients;