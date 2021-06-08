-- Set root user (It is not mysql)
$ mysql -u root -p

-- Create database
> CREATE DATABASE pace_db;

-- Create new user
> GRANT ALL PRIVILEGES ON pace_db.* to testuser@localhost IDENTIFIED BY '12345';

-- Check users
> SELECT Host, User FROM mysql.user;

-- Show database list
> SHOW DATABASE;

-- Select database to use
> USE pace_db;