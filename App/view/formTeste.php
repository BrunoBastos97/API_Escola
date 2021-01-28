<form action="../../public_html/api/gabarito" method="post">
    ID da Pergunta 
    <input type="text" id="id" name="id">
    <br>
    Pergunta
    <input type="text" id="pergunta" name="pergunta">
    <br>
    Resposta Correta
    <input type="text" id="idRespostaCorreta" name="idRespostaCorreta">
    <br>
    <input type="submit" value="Teste cadastrar o Gabarito da prova">
</form>

<form action="../../public_html/api/alunoResposta" method="post">
    ID da Pergunta
    <input type="text" name="id" id="id">
    <br>
    ID Aluno
    <input type="text" name="id_aluno" id="id_aluno">
    <br>
    ID Gabarito
    <input type="text" name="id_gabarito" id="id_gabarito">
    <br>
    ID Resposta
    <input type="text" name="idResposta" id="idResposta">
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
