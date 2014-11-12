#						comments on sql: 
#drop table = removes table:
#
#select: select *criterion from user;
#
#insert or adding to a table:
#mysql> insert into user (id, firstname) value (40, "Matt");
#insert into user (firstname,lastname) values ('fred','green');
#id column creation:
#id: type int:what not null: value cannot be null auto_increment:adds itself 1 by default primary key: makes this primary key;
#
#
#
#
#
#
#
#
#
#
#SCRIPT TO CREATE TABLE
#






CREATE TABLE `lineitem` (
  `invoice_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
  );

CREATE TABLE table1 (
	table1_id int not null auto_increment primary key,
	id INT not null,
	name VARCHAR(255)
);

CREATE TABLE customer (
	customer_id int not null auto_increment primary key,
	total DECIMAL (7,2) not null,
	date DATE NOT NULL,
	password VARCHAR(255)
);

insert into invoice (customer_id, total) values ('1', 519.95);



#insert scripts:
insert into customer (firstname,lastname, age, gender) values ('Rick','Rogers',21,'male');
insert into inventory (item, price, description) values ('hunting rifle',899.95,'A high powered hunting rifle');
insert into inventory (item, price, description) values ('laser cannon',30000.00,'Melts anything, Fast.');

	select * from user,pet,pet_type where user.id = pet.user_id and pet.pet_type_id = pet_type.id;




insert into items (food,calories,price,menu_id,ingredient_id) values ("Hamburger",350,"$4.50",2,2);

insert into ingredients (name) values ('dough');
insert into restaurants (name) values ('Luigi\'s');

creating a join table:

CREATE TABLE menuItemIngredient (
	menuID INT NOT NULL,
	ingredientID INT NOT NULL
)

insert into menuItemIngredient (menuID,ingredientID) values (1,1);
insert into menuItemIngredient (menuID,ingredientID) values (2,1);


select and join:

#print out menu item name and ingredient name:
this is the general format, reference things like this:join:
where format?
WHERE FORMAT:

select 
	items.food as "item name", 
	ingredients.name as "ingredients" 
from 
	items, 
	ingredients 
Where 
	items.ingredient_id=ingredients.id;



INNER JOIN METHOD:

select
	items.food,
	ingredients.name
from 
	items INNER JOIN ingredients
	ON items.ingredient_id = ingredients.id;


innerjoin vs. wherejoin ^above.

WHERE FORMAT:

select 
	items.food as "item name", 
	ingredients.name as "ingredients" 
from 
	items, 
	ingredients,
	menuItemIngredient 
Where 
	items.id = menuItemIngredient.menuID
	AND ingredients.id = menuItemIngredient.ingredientID
;


select
	items.food,
	ingredients.name
from 
	items
inner join menuItemIngredient
	on items.id = menuItemIngredient.menuID
left join ingredients
	on ingredients.id=menuItemIngredient.ingredientID;


money creation table: DECIMAL (7,2)  means 7 total characters, 2 floated points.



sql password:

insert into user (firstname, lastname, username, password) values ("rob", "white", "robber", password('abc123');






SELECT 
FROM table1, table2, tabel3,
WHERE table1.user_id = table2.user_id
AND tabel1.purchase_id = table2.purchase_id;

daniel's method above^


SELECT *
FROM user
JOIN user_purchase USING(user_id)
JOIN product USING (product_id)
GROUP BY user_id

SELECT *, SUM(price) or AVG or COUNT or other    <--- grouping functions for sql
FROM user
JOIN user_purchase USING(user_id)
JOIN product USING (product_id)
GROUP BY user_id
ORDER BY (OPTIONAL)





(order of sql statements)

SELECT
FROM----primary table, most important table, although
JOIN or LEFT JOIN
WHERE or AND
GROUP BY
ORDER BY





