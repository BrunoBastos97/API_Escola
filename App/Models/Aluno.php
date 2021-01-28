<?php
    namespace App\Models;

    use App\Models\Aluno;

    class Aluno{
        private static $table = 'alunoResposta';

        public static function get($id){
            //$conPdo = new \PDO('mysq: host= localhost; dbname= escola, root, ');
            $connPdo = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
            
            $sql = 'SELECT a.nomeAluno, CAST(SUM(IF(ar.idResposta = g.idRespostaCorreta, true, false) / 2) AS DECIMAL(2,0)) AS nota FROM alunoResposta ar
                        inner join gabarito g on ar.id_gabarito = g.id  
                        inner join resposta r on r.id_gabarito = g.id  
                        inner join aluno a on ar.id_aluno = a.id
                                WHERE a.id = :id GROUP BY id_Aluno';

            $stmt = $connPdo->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                return $stmt->fetch(\PDO::FETCH_ASSOC);
            }else {
                throw new \Exception("Nenhum Usuário a ".$id);
            }
        }

        public static function getAll(){
            $connPdo = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);

            $sql = 'SELECT a.nomeAluno, CAST(SUM(IF(ar.idResposta = g.idRespostaCorreta, true, false) / 2) AS DECIMAL(2,0)) AS nota FROM '.self::$table.' ar
                        inner join gabarito g on ar.id_gabarito = g.id  
                        inner join resposta r on r.id_gabarito = g.id  
                        inner join aluno a on ar.id_aluno = a.id
                            GROUP BY id_Aluno';
            $stmt = $connPdo->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                return $stmt->fetchAll(\PDO::FETCH_ASSOC);
            }else {
                throw new \Exception("Nenhum Usuári all");
            }
        }

        public static function getAprovados(){
            $connPdo = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);

            $sql = 'SELECT a.nomeAluno, CAST(SUM(IF(ar.idResposta = g.idRespostaCorreta, true, false) / 2) AS DECIMAL(2,0)) AS nota FROM '.self::$table.' ar  
                        inner join gabarito g on ar.id_gabarito = g.id  
                        inner join resposta r on r.id_gabarito = g.id  
                        inner join aluno a on ar.id_aluno = a.id
                              group by ar.id_aluno HAVING nota > 8 order by ar.id_aluno';

            $stmt = $connPdo->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                return $stmt->fetchAll(\PDO::FETCH_ASSOC);
            }else {
                throw new \Exception("Nenhum Aluno aprovado, foi encontrado.");
            } 
        }

       /* public static function getNotaFinal(){
            $connPdo = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);

            $sql = 'SELECT a.nomeAluno, CAST(SUM(IF(ar.idResposta = g.idRespostaCorreta, true, false) / 2) AS DECIMAL(2,0)) AS nota FROM '.self::$table.' ar  
                        inner join gabarito g on ar.id_gabarito = g.id  
                        inner join resposta r on r.id_gabarito = g.id  
                        inner join aluno a on ar.id_aluno = a.id
                              group by a.nomeAluno order by a.nomeAluno';

            $stmt = $connPdo->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                return $stmt->fetchAll(\PDO::FETCH_ASSOC);
            }else {
                throw new \Exception("Nenhum Aluno aprovado, foi encontrado.");
            } 

        }*/

    }
?>