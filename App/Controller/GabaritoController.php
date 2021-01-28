<?php
    namespace App\Controller;

    use App\Models\Gabarito;
   
    class GabaritoController{
        public function get(){
        
        }
        public function getAprovados(){
            
        }

        public function post(){
               return Gabarito::post($_POST['id'], $_POST['pergunta'], $_POST['idRespostaCorreta']);

        }

        public function update(){

        }

        public function delete(){

        }
    
    }

?>