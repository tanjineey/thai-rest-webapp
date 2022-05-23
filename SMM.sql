create table SMM_Customers
(  customer_id int unsigned not null auto_increment primary key,
   name char(50) not null,
   email char(50) not null,
   address char(100) not null,
   postalcode char(100) not null
);

create table SMM_Food_order_items
(  
order_id int unsigned not null auto_increment primary key,
foodid int unsigned not null,
quantity int unsigned,
amount float(6,2) not null,
customer_id int unsigned not null
);

create table SMM_Customers_ratings
(  customer_id int unsigned not null auto_increment primary key,
   rating int unsigned,
   `comments` char(100) 
);

CREATE TABLE `SMM_Contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT primary key,
  `name` char(50) NOT NULL,
  `email` char(50) NOT NULL,
  `type_enquiry` char(50) NOT NULL,
  `msg` char(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS `food_menu` (
  `foodid` int(10) unsigned NOT NULL AUTO_INCREMENT primary key,
  `foodname` char(50) NOT NULL,
  `description` char(100) DEFAULT NULL,
  `imageid` char(100) DEFAULT NULL, 
  `category` char(50) NOT NULL,
  `amount` float(4,2) DEFAULT NULL
);
use f32ee;
INSERT INTO food_menu VALUES
(1, 'Thai Special Set A (2 pax)', '1x tomyum red chicken, 1x green curry seafood, 2x rice, 2x thai milk tea', '1.png','Bundles', 23.00),
(2, 'Thai Special Set B (4 pax)', '1x tomyum red chicken, 1x green curry seafood, 1x Pad thai chicken, 3x rice, 4x thai milk tea', '2.png','Bundles', 48.00),
(3, 'Thai Special Set C (8 pax)', '2x tomyum red chicken, 2x green curry seafood, 2x Pad thai chicken, 3x rice, 8x thai milk tea', '3.png','Bundles', 96.00),
(4, 'Tomyam Clear Soup (Chicken)', 'Savoury soup with chicken','4.png','Soup', 6.90),
(5, 'Tomyam Clear Soup (Seafood)', 'Savoury soup with seafood: clams & prawns', '5.png','Soup', 7.90),
(6, 'Tomyam Red Soup (Chicken)', 'Savoury soup with chicken', '6.png','Soup', 6.90),
(7, 'Tomyam Red Soup (Seafood)', 'Savoury soup with seafood: clams, squid & prawns', '7.png','Soup', 7.90),
(8, 'Green Curry Soup (Chicken)', 'Savoury soup with chicken and veggies', '8.png','Soup', 6.90),
(9, 'Green Curry Soup (Seafood)', 'Savoury soup with seafood: prawns', '9.png','Soup', 6.90),
(10, 'Phad Thai (Chicken)', 'Flat thai noodles with chicken chunks (Nuts included)', '10.png','Mains', 8.90),
(11, 'Phad Thai (Seafood)', 'Flat thai noodles with prawn and squid (Nuts included)', '11.png','Mains', 9.90),
(12, 'Tomyam Fried Rice', 'Tom yam spiced rice with chicken chunks', '12.png','Mains', 8.90),
(13, 'Pineapple Fried Rice', 'Fresh pineapple stir fried with rice and crabmeat', '13.png','Mains', 9.90),
(14, 'Thai Basil Chicken Rice', 'Minced Basil with rice','14.png','Mains', 8.90),
(15, 'Tom Yum Glass Noodle Soup', 'Tomyam soup with seafood: prawns and squid','15.png', 'Mains', 8.90),
(16, 'White Rice', 'Jasmine white rice','16.png', 'Mains', 0.50),
(17, 'Mango Sticky Rice', 'Sliced mango, coconut milk, and sticky jasmine rice','17.png', 'Dessert', 3.50),
(18, 'Thai Milk Tea', 'Sweet thai aromatic milk tea','18.png', 'Dessert', 2.50);

