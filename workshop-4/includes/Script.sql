CREATE DATABASE workshop4;

USE workshop4;

CREATE TABLE major(
    id INT(11) NOT NULL AUTO_INCREMENT,
    code VARCHAR(10) NOT NULL,
    name VARCHAR(60) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE enrolment(
    id INT(11) NOT NULL AUTO_INCREMENT,
    card VARCHAR(30) NOT NULL,
    name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(60) NOT NULL,
    current_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    id_major INT(11) NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (id_major) REFERENCES major(id)
);

INSERT INTO major(code, name) VALUES ('ISW', 'Software Engineering');
INSERT INTO major(code, name) VALUES ('AGRH', 'Administration and management of human resources');
INSERT INTO major(code, name) VALUES ('IGA', 'environmental management engineering');
INSERT INTO major(code, name) VALUES ('ILE', 'English \as a foreign language');
INSERT INTO major(code, name) VALUES ('AA', 'customs administration');
INSERT INTO major(code, name) VALUES ('ASA', 'Administrative assistance');
INSERT INTO major(code, name) VALUES ('COFI', 'Accounting and Finance');
INSERT INTO major(code, name) VALUES ('ISOA', 'Occupational health and environmental engineering');
INSERT INTO major(code, name) VALUES ('COEX', 'Foreign trade administration');