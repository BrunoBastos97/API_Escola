<?php
    namespace App\Models;

    use App\Models\AlunoResposta;

     class AlunoResposta{
         private static $table = 'alunoResposta';

          public static function post(){
           // var_dump($table);
             $connPdo = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
             $sql = 'INSERT INTO '.self::$table.'(id, id_aluno, id_gabarito, idResposta) VALUES(:id, :id_aluno, :id_gabarito, :idResposta)';
             $stmt = $connPdo->prepare($sql);
             $stmt->bindValue(':id', $_POST['id']);
             $stmt->bindValue(':id_aluno', $_POST['id_aluno']);
             $stmt->bindValue(':id_gabarito', $_POST['id_gabarito']);
             $stmt->bindValue(':idResposta', $_POST['idResposta']);
             return  $stmt->execute();

          }
     }
?>