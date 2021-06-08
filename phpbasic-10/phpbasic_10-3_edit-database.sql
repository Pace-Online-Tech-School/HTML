-- Create database table
> CREATE TABLE dog (id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(255) NOT NULL, size VARCHAR(255));

-- Check table detail
> SHOW FIELD FROM dog;

-- Insert record
> INSERT INTO dog (id, name, size) VALUES (1, 'shiba', 'M');

-- Check record detail
> SELECT * FROM dog;

-- Update record
> UPDATE dog SET name = 'Corgi', size ='S', WHERE id = 1;

-- Delete record
> DELETE FROM dog WHERE name = 'Pug';