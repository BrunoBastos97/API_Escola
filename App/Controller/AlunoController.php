<?php
    namespace App\Controller;

    use App\Models\Aluno;

    class AlunoController{
        public function get($id = null){

            if($id == 'aprovados'){ 
                return Aluno::getAprovados();
            }else{
                if($id){
                    return Aluno::get($id);
                }else{
                    return Aluno::getAll();
                }
            }
            
        }

        public function post(){

        }

        public function update(){

        }

        public function delete(){

        }
    
    }
?>