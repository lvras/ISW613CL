CREATE DATABASE workshop2;

USE workshop2;

CREATE TABLE usuario(
    id INT(11) NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(60) NOT NULL,
    last_name VARCHAR(60) NOT NULL,
    email VARCHAR(30) NOT NULL,
    PRIMARY KEY (id)
);