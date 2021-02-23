CREATE DATABASE workshop5;

USE workshop5;

CREATE TABLE rol(
    id INT(11) NOT NULL AUTO_INCREMENT,
    rol VARCHAR(40) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE user(
    id INT(11) NOT NULL AUTO_INCREMENT,
    user VARCHAR(15) NOT NULL,
    password VARCHAR(30) NOT NULL,
    id_rol INT(11) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_rol) REFERENCES rol(id)
);

INSERT INTO rol(rol) VALUES ('Administrator');
INSERT INTO rol(rol) VALUES ('Student');

INSERT INTO user(user, password, id_rol) VALUES ('lvras', 'lvras', 1);
INSERT INTO user(user, password, id_rol) VALUES ('cvargas', 'cvargas', 2);