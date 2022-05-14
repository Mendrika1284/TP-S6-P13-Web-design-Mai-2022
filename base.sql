DROP DATABASE Rechauffement;
CREATE DATABASE Rechauffement;
use Rechauffement;

CREATE TABLE Question(
    id int not null primary key auto_increment,
    question varchar(256)
)

CREATE TABLE Detail(
    id int not null primary key auto_increment,
    detail text
)
