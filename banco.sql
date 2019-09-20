create database  if not exists contador ;
use contador; 
CREATE TABLE if not exists contador
(
Nome varchar(15) NOT NUll,
Numero char (15) NOT NUll,
Codigo int  (15) not null auto_increment,
primary key (Codigo)
);
drop table contador;
CREATE USER 'contador'@'localhost' IDENTIFIED BY 'senha123';
GRANT ALL PRIVILEGES ON contador.* TO 'contador'@'localhost';

