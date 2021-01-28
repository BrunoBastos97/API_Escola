<?php
    namespace App\Controller;

    use App\Models\AlunoResposta;
   
    class AlunoRespostaController{
        public function get(){
        
        }
        public function getAprovados(){
            
        }

        public function post(){
               return AlunoResposta::post($_POST['id_aluno'], $_POST['id_gabarito'],  $_POST['idResposta']);
               
        }

        public function update(){

        }

        public function delete(){

        }
    
    }

?>