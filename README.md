### Project

## This is a Users Table named project from phpmyadmin in a PHP-based application, the users table in the database is typically used to store and manage user data such as authentication credentials, profile details, roles, and other metadata. This table allows the application to authenticate users, personalize content, and manage user access.  

## Steps in Creating Users Table
Go to phpmyadmin and Create Table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    address VARCHAR(255)    ,
    phone_number VARCHAR(100),
    email VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,   
);

## Visual Studio Editor was used to run the PHP code.



