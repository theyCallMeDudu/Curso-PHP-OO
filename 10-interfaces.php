<?php
    // Interfaces
    // Modelos a serem usados por outras classes.
    // Define os métodos que deverão ser implementados
    // pelas classes que implementarem essa interface.
    // Os métodos da interface devem ser públicos.  
    
    interface Crud {

        public function create($data);
        public function read();
        public function update($data);
        public function delete();
    }

    // Aqui a classe é obrigada a ter os métodos
    // da interface que ela implementa.
    class Noticias implements Crud{

        public function create($data){
            // Lógica para criar uma notícia.
        }
        
        public function read(){
            // Lógica para ler uma notícia.
        }

        public function update($data){
            // Lógica para atualizar uma notícia.
        }

        public function delete(){
            // Lógica para deletar uma notícia.
        }
    }
?>