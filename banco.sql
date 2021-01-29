create database escola;

use escola;

create table gabarito(
	id integer primary key not null,
	pergunta varchar(100) not null,
    idRespostaCorreta char(1) not null,
    CHECK (id <= 10)
);

create table resposta(
	id integer primary key not null,
    idAlternativa char(1) not null,
    alternativa varchar(100) not null,
    id_gabarito integer not null,
    CHECK (id <= 20)
);

ALTER TABLE resposta ADD CONSTRAINT fk_id_gabarito FOREIGN KEY ( id_gabarito ) REFERENCES gabarito ( id );

create table alunoResposta(
	id integer primary key not null auto_increment,
    id_Aluno integer not null,
    id_gabarito integer not null,
    idResposta char(1) not null
);

ALTER TABLE alunoResposta ADD CONSTRAINT fk_id_aluno FOREIGN KEY ( id_aluno ) REFERENCES aluno ( id );
ALTER TABLE alunoResposta ADD CONSTRAINT fk_id_gabarito FOREIGN KEY ( id_gabarito ) REFERENCES gabarito ( id );

create table aluno(
	id integer primary key not null,
	nomeAluno varchar(50) not null,
    CHECK (id <= 100)
);

/*Aluno*/
insert into aluno(id, nomeAluno) values(1,'Bruno');
insert into aluno(id, nomeAluno) values(2,'Matheus');

/*Gabarito*/
insert into gabarito(id, pergunta, idRespostaCorreta) values(1, 'Em que ano foi descoberto o Brasil?','a');
insert into gabarito(id, pergunta, idRespostaCorreta) values(2, 'Em que ano se deu inicio a quarentena, por conta do COVID-19?','a');
insert into gabarito(id, pergunta, idRespostaCorreta) values(3, 'Em que mês se inicia o verão no hemisfério sul?','b');
insert into gabarito(id, pergunta, idRespostaCorreta) values(4, 'Em que mês se inicia o inverno no hemisfério sul?','a');
insert into gabarito(id, pergunta, idRespostaCorreta) values(5, 'Em que mês se inicia o primavera no hemisfério sul?','a');

insert into gabarito(id, pergunta, idRespostaCorreta) values(6, 'Em que mês se inicia o outono no hemisfério sul?','a');
insert into gabarito(id, pergunta, idRespostaCorreta) values(7, 'Qual a maior cidade do Brasil?','a'); 
insert into gabarito(id, pergunta, idRespostaCorreta) values(8, 'Em que estado do pais se localiza Blumenau?','b');
##insert into gabarito(id, pergunta, idRespostaCorreta) values(9, 'Responda sim','a');
##insert into gabarito(id, pergunta, idRespostaCorreta) values(10, 'Responda não','a');

/*Resposta*/
insert into resposta(id, idAlternativa, alternativa, id_gabarito) values('1', 'a', '1500', '1');
insert into resposta(id, idAlternativa, alternativa, id_gabarito) values('2', 'b', '1600', '1');
insert into resposta(id, idAlternativa, alternativa, id_gabarito) values('3', 'a', '2019', '2');
insert into resposta(id, idAlternativa, alternativa, id_gabarito) values('4', 'b', '2020', '2');
insert into resposta(id, idAlternativa, alternativa, id_gabarito) values('5', 'a', 'Janeiro', '3');
insert into resposta(id, idAlternativa, alternativa, id_gabarito) values('6', 'b', 'Dezembro', '3');
insert into resposta(id, idAlternativa, alternativa, id_gabarito) values('7', 'a', 'Junho', '4');
insert into resposta(id, idAlternativa, alternativa, id_gabarito) values('8', 'b', 'Março', '4');
insert into resposta(id, idAlternativa, alternativa, id_gabarito) values('9', 'a', 'Setembro', '5');
insert into resposta(id, idAlternativa, alternativa, id_gabarito) values('10', 'b', 'Novembro', '5');
 
insert into resposta(id, idAlternativa, alternativa, id_gabarito) values('11', 'a', 'Março', '6');
insert into resposta(id, idAlternativa, alternativa, id_gabarito) values('12', 'b', 'Abril', '6');
insert into resposta(id, idAlternativa, alternativa, id_gabarito) values('13', 'a', 'São Paulo', '7');
insert into resposta(id, idAlternativa, alternativa, id_gabarito) values('14', 'b', 'Salvador', '7');
insert into resposta(id, idAlternativa, alternativa, id_gabarito) values('15', 'a', 'Rio Grando do sul', '8');
insert into resposta(id, idAlternativa, alternativa, id_gabarito) values('16', 'b', 'Santa catarina', '8');
##insert into resposta(id, idAlternativa, alternativa, id_gabarito) values('17', 'a', 'sim', '9');
##insert into resposta(id, idAlternativa, alternativa, id_gabarito) values('18', 'b', 'não', '9');
##insert into resposta(id, idAlternativa, alternativa, id_gabarito) values('19', 'a', 'não', '10');
##insert into resposta(id, idAlternativa, alternativa, id_gabarito) values('20', 'b', 'sim', '10');


/*Resposta Aluno*/

## 1°ALUNO
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values(1, 1, 'a');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values(1, 2, 'a');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values(1, 3, 'b');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values(1, 4, 'b');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values(1, 5, 'a');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values(1, 6, 'a');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values(1, 7, 'b');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values(1, 8, 'b');
##insert into alunoResposta(id_aluno, id_gabarito, idResposta) values(1, 9, 'a');
##insert into alunoResposta(id_aluno, id_gabarito, idResposta) values(1, 10, 'a');

## 2°ALUNO
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values(2, 1, 'a');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values(2, 2, 'a');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values(2, 3, 'b');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values(2, 4, 'a');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values(2, 5, 'a');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values(2, 6, 'a');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values(2, 7, 'a');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values(2, 8, 'b');
##insert into alunoResposta(id_aluno, id_gabarito, idResposta) values(2, 9, 'a');
##insert into alunoResposta(id_aluno, id_gabarito, idResposta) values(2, 10, 'a');