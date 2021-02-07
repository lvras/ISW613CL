CREATE DATABASE workshop3;

USE workshop3;

CREATE TABLE category(
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(60) NOT NULL,
    description VARCHAR(60) NOT NULL,
    PRIMARY KEY (id)
);