use contador;

select * from contador;
insert contador values('xixi'); 
insert contador values('agua');
insert contador values ('biscoitos', 7, null);
update contador set Nome = "copo d'agua" where Codigo = 2;
update contador set Numero = 9 where Codigo = 2;
update contador set Numero = Numero + 1 where Codigo = 1; 
