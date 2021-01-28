<form action="../../public_html/api/gabarito" method="post">
   ID da Pergunta              Pergunta           Resposta Correta
    <br>
    <input type="text" id="id" name="id">
    <input type="text" id="pergunta" name="pergunta">
    <input type="text" id="idRespostaCorreta" name="idRespostaCorreta">
    <br>
    <input type="submit" value="Teste cadastrar o Gabarito da prova">
</form>

<form action="../../public_html/api/alunoResposta" method="post">
    <input type="submit" value="Teste cadastrar as resposta de cada aluno para cada prova">
    <input type="text" name="id" id="id">
    <input type="text" name="id_aluno" id="id_aluno">
    <input type="text" name="id_gabarito" id="id_gabarito">
    <input type="text" name="idResposta" id="idResposta">
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
