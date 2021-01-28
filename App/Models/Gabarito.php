<?php
    namespace App\Models;

    use App\Models\Gabarito;

     class Gabarito{
         private static $table = 'gabarito';

          public static function post(){
            $connPdo = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
            $sql = 'INSERT INTO gabarito (id ,pergunta, idRespostaCorreta) VALUES(:id, :pergunta, :idRespostaCorreta)';
            $stmt = $connPdo->prepare($sql);
            $stmt->bindValue(':id',  $_POST['id']);
            $stmt->bindValue(':pergunta',  $_POST['pergunta']);
            $stmt->bindValue(':idRespostaCorreta', $_POST['idRespostaCorreta']);
            return  $stmt->execute();

            if($stmt->rowCount() > 0){
              return $stmt->fetchAll(\PDO::FETCH_ASSOC);
            }else {
              throw new \Exception("Pergunta não pode ser inserida.");
            }
          }
     }
?>