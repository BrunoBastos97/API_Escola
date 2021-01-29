<?php
    namespace App\Models;

    use App\Models\Aluno;

    class Aluno{
        private static $table = 'alunoResposta';

        public static function get($id){
            $connPdo = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
            
            $sql = 'SELECT a.nomeAluno, CAST(SUM(IF(ar.idResposta = g.idRespostaCorreta, true, false)) AS DECIMAL(2,0)) AS nota FROM '.self::$table.' ar
                        inner join gabarito g on ar.id_gabarito = g.id  
                        inner join aluno a on ar.id_aluno = a.id
                                WHERE a.id = :id GROUP BY id_Aluno';

            $stmt = $connPdo->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                return $stmt->fetch(\PDO::FETCH_ASSOC);
            }else {
                throw new \Exception("Nenhum Aluno com o id ".$id);
            }
        }

        public static function getAll(){
            $connPdo = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);

            $sql = 'SELECT a.nomeAluno, CAST(SUM(IF(ar.idResposta = g.idRespostaCorreta, true, false)) AS DECIMAL(2,0)) AS nota FROM '.self::$table.' ar
                        inner join gabarito g on ar.id_gabarito = g.id   
                        inner join aluno a on ar.id_aluno = a.id
                            GROUP BY id_Aluno';
            $stmt = $connPdo->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                return $stmt->fetchAll(\PDO::FETCH_ASSOC);
            }else {
                throw new \Exception("Nenhum Aluno foi encontrado");
            }
        }

        public static function getAprovados(){
            $connPdo = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
            
            $sql = 'SELECT a.nomeAluno, CAST(SUM(IF(ar.idResposta = g.idRespostaCorreta, true, false)) AS DECIMAL(2,0)) AS nota FROM '.self::$table.' ar  
                        inner join gabarito g on ar.id_gabarito = g.id  
                        inner join aluno a on ar.id_aluno = a.id
                              group by ar.id_aluno HAVING nota > 7 order by ar.id_aluno';
            $stmt = $connPdo->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                return $stmt->fetchAll(\PDO::FETCH_ASSOC);
            }else {
                throw new \Exception("Nenhum Aluno aprovado, foi encontrado.");
            } 
        }

    }
?>