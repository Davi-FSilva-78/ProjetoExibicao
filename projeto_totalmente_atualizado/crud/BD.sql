http://localhost/phpmyadmin

create database projeto01

use projeto01;

create table contato(
	idContato int PRIMARY KEY AUTO_INCREMENT,
    contatoNome varchar(50) not null,
    contatoEmail varchar(50) not null,
    contatoAssunto varchar(100) not null,
    contatoMsg varchar(1000) not null
);

create table contato(
    idContato int PRIMARY KEY AUTO_INCREMENT,
    contatoEmail varchar(50) not null,
    contatoAssunto varchar(500) not null,
    conatatoFile longblob not null
)

create table login(
   idLogin int PRIMARY key AUTO_INCREMENT,
   loginNome varchar(500) not null,
   loginEmail varchar(40) not null unique,
   loginSenha varchar(500) not null,
   loginCelular int not null,
   loginGenero varchar(50) not null
);

