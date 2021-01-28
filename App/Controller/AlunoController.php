<?php
    namespace App\Controller;

    use App\Models\Aluno;

    class AlunoController{
        public function get($id = null){
            //return Aluno::get($id);
            var_dump($id);
            if($id == 'aprovados'){
                return Aluno::getAprovados();
            }else{
                if($id){
                    return Aluno::get($id);
                }else{
                    return Aluno::getAll();
                }
            }
            /*
            if($id = 'aprovados'){
                return Aluno::getAprovados();
            }else if($id = 'notaFinal'){
                return Aluno::get($id);
            }else{
                return Aluno::getAll();  
            }*/
        }

        public function post(){

        }

        public function update(){

        }

        public function delete(){

        }
    
    }
?>