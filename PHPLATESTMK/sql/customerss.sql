CREATE TABLE customerinfo (
  id int not null auto_increment, -- Unique identifier for each customer
  fullName varchar(255) NOT NULL, -- Full name of the customer
  addr varchar(255) NOT NULL, -- Address of the customer
  contactNum varchar(255) NOT NULL, -- Contact number of the customer
  size varchar(255) NOT NULL, -- Size of the pizza
  crust varchar(255) NOT NULL, -- Crust type of the pizza
  cheese varchar(255) NOT NULL, -- Cheese type of the pizza
  pizzaToppings varchar(255) NOT NULL, -- Toppings on the pizza
  pizzaDips varchar(255) NOT NULL, -- Dips for the pizza
  primary key (id) -- Primary key constraint on the id column
);
