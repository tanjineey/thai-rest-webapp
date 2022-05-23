CREATE TABLE `SMM_Contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT primary key,
  `name` char(50) NOT NULL,
  `email` char(50) NOT NULL,
  `type_enquiry` char(50) NOT NULL,
  `msg` char(100) NOT NULL
);