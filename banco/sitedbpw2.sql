Create database Clinica;

create table medico (
Id_Medico integer not null primary key auto_increment,
CRM varchar(15) unique not null,
Nome varchar(50) not null,
Idade integer,
Especialidade varchar(30),
CONSTRAINT CHK_idade CHECK (idade > 23 and idade < 70),
CONSTRAINT CHK_especialidade CHECK (especialidade <> 'Ortopedia'));

create table Paciente(
Id_Paciente integer not null primary key auto_increment,
Nome varchar(50) not null,
CPF varchar(14) unique);

create table Consulta(
Id_Consulta integer not null primary key auto_increment,
Data_Consulta date not null,
Hora_Consulta time not null,
Id_Paciente integer not null,
Id_Medico integer not null,
Descrição varchar(200));

alter table consulta add constraint
fk_consulta_paciente foreign key (id_paciente) references paciente (id_paciente);
alter table consulta add constraint
fk_consulta_medico foreign key (id_medico) references medico (id_medico);

insert into medico values
(null, '123456','Alessandra Martins Lopes',30,'Clinico Geral'),
(null, '123465','Adriana Seixas',40,'Clinico Geral'),
(null, '124356','Fernando Serqueira',38,'Cardiologista'),
(null, '123564','Rodrigo Carvalho',40,'Otorrino');

insert into PACIENTE values
(null,'Maria Aparecida da Silva','111.111.111-50'),
(null,'João Batista Rodrigues','222.222.222-30'),
(null,'Cláudia Maria Venâncio','333.333.333-10');

insert into CONSULTA values
(null,'2020-05-20','15:30:00',1,2,'Enxaqueca'),
(null,'2020-05-25','08:30:00',2,3,'Pressão alta'),
(null,'2020-05-29','17:50:00',3,1,'Colesterol alterado');

select nome,idade,especialidade from Medico;

SELECT nome,cpf FROM Paciente WHERE nome LIKE 'Maria%';

SELECT * FROM Consulta WHERE data_consulta='2020-05-25';

SELECT * FROM Consulta WHERE id_Medico=1;

select * from medico;

select count(*) from medico;