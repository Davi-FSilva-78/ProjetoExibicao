http://localhost/phpmyadmin

create database projeto01

use projeto01;

create table contato(
    idContato int PRIMARY KEY AUTO_INCREMENT,
    contatoEmail varchar(50),
    contatoAssunto varchar(500),
    conatatoFile longblob
)

create table login(
   idLogin int PRIMARY key AUTO_INCREMENT,
   loginNome varchar(500),
   loginEmail varchar(40)unique,
   loginSenha varchar(500),
   loginCelular int,
   loginGenero varchar(50)
);

