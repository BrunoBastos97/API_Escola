<form action="../../public_html/api/gabarito" method="post">
    ID da Pergunta 
    <input type="text" id="id" name="id" value="10">
    <br>
    Pergunta
    <input type="text" id="pergunta" name="pergunta" value="sim">
    <br>
    Resposta Correta
    <input type="text" id="idRespostaCorreta" name="idRespostaCorreta" value="a">
    <br>
    <input type="submit" value="Teste cadastrar o Gabarito da prova">
</form>

<form action="../../public_html/api/alunoResposta" method="post">
    ID 
    <input type="text" name="id" id="id" value="20">
    <br>
    ID Aluno
    <input type="text" name="id_aluno" id="id_aluno" value="2">
    <br>
    ID Gabarito
    <input type="text" name="id_gabarito" id="id_gabarito" value="10">
    <br>
    ID Resposta
    <input type="text" name="idResposta" id="idResposta" value="a">
    <br>
    <input type="submit" value="Teste cadastrar as resposta de cada aluno para cada prova">
</form>

<form action="../../public_html/api/Aluno" method="get">
    <input type="submit" value="Teste listar todos os alunos">
</form>

<form action="../../public_html/api/Aluno/2" method="get">
    <input type="submit" value="Teste verificar nota final de cada aluno">
</form>

<form action="../../public_html/api/Aluno/aprovados" method="get">
    <input type="submit" value="Teste listar os alunos aprovados">
</form>
