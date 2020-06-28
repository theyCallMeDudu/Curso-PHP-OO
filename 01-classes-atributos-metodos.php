<?php
    class Pessoa {
        public $nome;
        public $idade;

        public function falar(){
            echo $this->nome.", tem ". $this->idade." anos e acabou de falar.";
        }
    }

    $dudu = new Pessoa();
    $dudu->nome = "Eduardo Coelho e Silva";
    $dudu->idade = 23;
    $dudu->falar();

?>