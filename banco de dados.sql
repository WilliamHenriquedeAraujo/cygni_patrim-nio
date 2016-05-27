insert into BemPatrimonial
values (00001, 'Notebook Dell', 1010, '2016-10-10', 'DELL Brasil', 2500, 'U', 01, 01);

insert into Categoria 
values(01, 'Moveis', 'Moveis localizados dentro da empresa'),
      (02, 'Eletro Eletronicos', 'Eletro Eletronicos localizados dentro da empresa'),
      (03, 'Materias de escritorio', 'Materias de escritorio localizados dentro da empresa'),
      (04, 'Carros automotores', 'Carros pertencentes a empresa'),
      (05, 'Motos', 'Motos pertencentes a empresa');

insert into usuario
values('william', 'William Henrique de Araujo', '12345', 'g'),
      ('diego', 'Diego Benigno', '12345', 'g'),
      ('hiego', 'Hiego Filipe', '12345', 'f'),
      ('filipe', 'Filipe Santoro', '12345', 'f');

insert into Departamento
values('ADM', 'Administrativo', 'hiego'),
      ('TI', 'Tecnologia da Informção', 'diego'),
      ('DIR', 'Diretoria', 'william'),
      ('FIN', 'Financeiro', 'filipe');

insert into Predio
values(01, 'Prédio 01', 'Rua 04 número 200 Bairro Jardim Florido'),
      (02, 'Prédio 02', 'Rua 03 número 1410 Bairro Jardim Florido');


insert into Sala
values (01, 10.0, 5.0, 01, 'ADM'),
       (02, 10.0, 8.0, 01, 'FIN'),
       (03, 15.0, 10.0, 02, 'TI'),
       (04, 15.0, 7.0, 02, 'DIR');




-----------------------------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------------------------------------

--CONSULTAS

select * from BemPatrimonial;