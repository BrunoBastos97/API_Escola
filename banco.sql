create database escola;

use escola;

create table gabarito(
	id integer primary key not null auto_increment,
	pergunta varchar(100) not null,
    idRespostaCorreta char(1) not null
);

create table resposta(
	id integer primary key not null auto_increment,
    idAlternativa char(1) not null,
    alternativa varchar(100) not null,
    id_gabarito integer not null
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
	id integer primary key not null auto_increment,
	nomeAluno varchar(50) not null
);

/*Aluno*/
insert into aluno(nomeAluno) values('Bruno');
insert into aluno(nomeAluno) values('Matheus');

/*Gabarito*/
insert into gabarito(pergunta, idRespostaCorreta) values('Em que ano foi descoberto o Brasil?','a');
insert into gabarito(pergunta, idRespostaCorreta) values('Em que ano se deu inicio a quarentena, por conta do COVID-19?','a');
insert into gabarito(pergunta, idRespostaCorreta) values('Em que mês se inicia o verão no hemisfério sul?','b');
insert into gabarito(pergunta, idRespostaCorreta) values('Em que mês se inicia o inverno no hemisfério sul?','a');
insert into gabarito(pergunta, idRespostaCorreta) values('Em que mês se inicia o primavera no hemisfério sul?','a');

insert into gabarito(pergunta, idRespostaCorreta) values('Em que mês se inicia o outono no hemisfério sul?','a');
insert into gabarito(pergunta, idRespostaCorreta) values('Qual a maior cidade do Brasil?','a'); 
insert into gabarito(pergunta, idRespostaCorreta) values('Em que estado do pais se localiza Blumenau?','b');
insert into gabarito(pergunta, idRespostaCorreta) values('Responda sim','a');
insert into gabarito(pergunta, idRespostaCorreta) values('Responda não','a');


/*Resposta*/
insert into resposta(idAlternativa, alternativa, id_gabarito) values('a', '1500', '1');
insert into resposta(idAlternativa, alternativa, id_gabarito) values('b', '1600', '1');
insert into resposta(idAlternativa, alternativa, id_gabarito) values('a', '2019', '2');
insert into resposta(idAlternativa, alternativa, id_gabarito) values('b', '2020', '2');
insert into resposta(idAlternativa, alternativa, id_gabarito) values('a', 'Janeiro', '3');
insert into resposta(idAlternativa, alternativa, id_gabarito) values('b', 'Dezembro', '3');
insert into resposta(idAlternativa, alternativa, id_gabarito) values('a', 'Junho', '4');
insert into resposta(idAlternativa, alternativa, id_gabarito) values('b', 'Março', '4');
insert into resposta(idAlternativa, alternativa, id_gabarito) values('a', 'Setembro', '5');
insert into resposta(idAlternativa, alternativa, id_gabarito) values('b', 'Novembro', '5');

insert into resposta(idAlternativa, alternativa, id_gabarito) values('a', 'Março', '6');
insert into resposta(idAlternativa, alternativa, id_gabarito) values('b', 'Abril', '6');
insert into resposta(idAlternativa, alternativa, id_gabarito) values('a', 'São Paulo', '7');
insert into resposta(idAlternativa, alternativa, id_gabarito) values('b', 'Salvador', '7');
insert into resposta(idAlternativa, alternativa, id_gabarito) values('a', 'Rio Grando do sul', '8');
insert into resposta(idAlternativa, alternativa, id_gabarito) values('b', 'Santa catarina', '8');
insert into resposta(idAlternativa, alternativa, id_gabarito) values('a', 'sim', '9');
insert into resposta(idAlternativa, alternativa, id_gabarito) values('b', 'não', '9');
insert into resposta(idAlternativa, alternativa, id_gabarito) values('a', 'não', '10');
insert into resposta(idAlternativa, alternativa, id_gabarito) values('b', 'sim', '10');


/*Aluno*/
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values('2', '1', 'a');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values('2', '2', 'a');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values('2', '3', 'b');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values('2', '4', 'b');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values('2', '5', 'a');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values('2', '6', 'a');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values('2', '7', 'b');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values('2', '8', 'b');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values('2', '9', 'a');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values('2', '10', 'a');


insert into alunoResposta(id_aluno, id_gabarito, idResposta) values('1', '1', 'a');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values('1', '2', 'a');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values('1', '3', 'b');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values('1', '4', 'a');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values('1', '5', 'a');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values('1', '6', 'a');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values('1', '7', 'b');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values('1', '8', 'b');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values('1', '9', 'a');
insert into alunoResposta(id_aluno, id_gabarito, idResposta) values('1', '10', 'a');

select * from alunoResposta ar inner join gabarito g on ar.id_gabarito = g.id 
							  inner join resposta r on r.id_gabarito = g.id 
                              inner join aluno a on ar.id_aluno = a.id
							        group by ar.id_aluno order by ar.id_aluno; 

/*Passou*/
select cast(SUM(if(ar.idResposta = g.idRespostaCorreta, true, false) / 2) as DECIMAL(2,0)) as acerto, ar.id_aluno
	     from alunoResposta ar inner join gabarito g on ar.id_gabarito = g.id 
							  inner join resposta r on r.id_gabarito = g.id 
                              inner join aluno a on ar.id_aluno = a.id
							        group by ar.id_aluno HAVING acerto > 4 order by ar.id_aluno; 
                                                                                  
/*Notas*/
select a.nomeAluno, cast(SUM(if(ar.idResposta = g.idRespostaCorreta, true, false) / 2) as DECIMAL (2,0)) as nota from alunoResposta ar 
					inner join gabarito g on ar.id_gabarito = g.id 
                    inner join resposta r on r.id_gabarito = g.id 
                    inner join aluno a on ar.id_aluno = a.id
                    group by a.nomeAluno order by a.nomeAluno;
                    
SELECT a.nomeAluno, CAST(SUM(IF(ar.idResposta = g.idRespostaCorreta, true, false) / 2) AS DECIMAL(2,0)) AS nota FROM alunoResposta ar
                        inner join gabarito g on ar.id_gabarito = g.id  
                        inner join resposta r on r.id_gabarito = g.id  
                        inner join aluno a on ar.id_aluno = a.id
                                 WHERE a.id = 1 GROUP BY id_Aluno;
                                 
INSERT INTO gabarito (pergunta, idRespostaCorreta) VALUES(':pergunta', )

select * from gabarito;
select * from aluno where nomeAluno = 'Bruno' order by nomeAluno 

