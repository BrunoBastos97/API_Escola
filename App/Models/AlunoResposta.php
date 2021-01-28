<?php
    namespace App\Models;

    use App\Models\AlunoResposta;

     class AlunoResposta{
         private static $table = 'alunoResposta';

          public static function post($obj){
             //$conPdo = new \PDO('mysq: host= localhost; dbname= escola, root, ');
             $connPdo = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
             $sql = 'INSERT INTO '.self::$table.'(id_aluno, id_gabarito, idResposta) VALUES(:id_aluno, :id_gabarito, :idResposta)';
             //insert into gabarito(pergunta, idRespostaCorreta) values('Em que ano foi descoberto o Brasil?','a');
             $stmt = $connPdo->prepare($sql);
             $stmt->bindValue(':id_aluno', $_POST['id_aluno']);
             $stmt->bindValue(':id_gabarito', $_POST['id_gabarito']);
             $stmt->bindValue(':idResposta', $_POST['idResposta']);
             return  $stmt->execute();
            var_dump($_POST);
          }
     }
?>