-- Drop banco de dados

-- drop database projeto01;

-- Criação do banco de dados
create database projeto01;

-- Selecionar banco de dados

use projeto01;

-- Criação da tabela usuario 
create table usuario (
	id_Usuario		int 		not null auto_increment,
    nome_usuario	varchar(100)	not null,
    email_usuario	varchar(100)    not null,
    fone_usuario	varchar(30)  not null,
    primary key (id_usuario)
);
    

