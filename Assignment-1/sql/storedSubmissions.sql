CREATE DATABASE assignment1;

CREATE TABLE applications(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(25) NOT NULL,
    lname VARCHAR(35) NOT NULL,
    email VARCHAR(200) NOT NULL,
    age INT NOT NULL,
    phone VARCHAR(15) NOT NULL
);