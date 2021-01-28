<?php
    namespace App\Models;

    use App\Models\Gabarito;

     class Gabarito{
         private static $table = 'gabarito';

          public static function post(){
             //$conPdo = new \PDO('mysq: host= localhost; dbname= escola, root, ');
             $connPdo = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
             $sql = 'INSERT INTO gabarito (id ,pergunta, idRespostaCorreta) VALUES(:id, :pergunta, :idRespostaCorreta)';
             //insert into gabarito(pergunta, idRespostaCorreta) values('Em que ano foi descoberto o Brasil?','a');
             $stmt = $connPdo->prepare($sql);
             $stmt->bindValue(':id',  $_POST['id']);
             $stmt->bindValue(':pergunta',  $_POST['pergunta']);
             $stmt->bindValue(':idRespostaCorreta', $_POST['idRespostaCorreta']);
             return  $stmt->execute();
            //var_dump($obj);
          }
     }
?>