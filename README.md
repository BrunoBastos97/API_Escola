<h1 style = "text-align: center; font-weight: bold;"> API  Gabarito de Prova </h1>

##  Sobre o Projeto

Esta aplicação oferece uma API onde poderar estar cadastrando o gabarito das provas, e os gabaritos dos alunos.


O Gabarito tanto da prova quanto do aluno, poderam ser cadastrados nos forms. 

- [ <a herf="http://localhost/API_Escola/App/view/formCadastraGabarito">Cadastrar Gabarito</a> ] 
- [ <a herf="http://localhost/API_Escola/App/view/formCadastraRespostasAluno">Cadastrar Respostas do Aluno</a> ] 

### 🛠 Ferramentas Utilizadas

- [Composer](https://getcomposer.org/doc/)
- [ <a herf="https://dev.mysql.com/doc/"> Mysql</a> ]
- [ <a herf="https://www.php.net/docs.php">PHP</a> ]  
- [ <a herf="https://www.wampserver.com/en/">WampServer</a> ]


### 🤔 Como Utilizar a API

- Faça o clone da pasta [ <a herf="https://github.com/BrunoBastos97/API_Escola">API_Escola</a> ] no github.
- Para Utilizar a API, é preciso ter um server, para isso obitenha o WampServer ou um outro da sua preferencia.
- Caso queira importe para o banco de dados Mysql o [<a herf="https://github.com/BrunoBastos97/API_Escola/blob/main/banco.sql">banco.sql</a>], ou copie e cole em seguida aplique o mesmo.
- Para verificar a nota de todos os alunos [<a herf="http://localhost/API_escola/public_html/api/aluno">Verificar notas</a>], utilize o link.
- Para verificar a nota de um determinado aluno exemplo aluno com o id 1 [ <a herf="http://localhost/API_Escola/public_html/api/aluno/1">Verificar nota do aluno</a> ], utilize o link.
- Para verificar a nota dos alunos que foram aprovados [ <a herf="http://localhost/API_Escola/public_html/api/aluno/aprovados">Verificar alunos aprovados</a> ] ,utilize o link.

### ❌ Restrições da API/Bando de dados

- Não podera cadastrar mais de 10 questões na prova.
- Não podera cadastrar mais de 100 alunos.

### 🕵️‍♂️ Testes Unitários 

- Para fazer os testes unitários acesse <a herf="http://localhost/API_Escola/App/view/formTeste.php">Testes</a>  
- As informações já vão está preenchidas

<div align="center">
    <img src="github/TesteUnitario.gif"
    alt="Teste Unitario" height="425">    
    <img src="github/TesteUnitarioFalha.gif"
    alt="Teste Unitario Falha" height="425">
</div>


