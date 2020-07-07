<?php
    // Métodos mágicos

    // clone* - já visto
    // construct* - já visto
    // invoke
    // tostring
    // __get
    // __set

    class Pessoa{
        private $dados = array();

        public function __set($nome, $valor){
            $this->dados[$nome] = $valor;
        }
        
        public function __get($nome){
            return $this->dados[$nome];
        }

        public function __tostring(){
            return "Tentei imprimir um objeto.";
        }

        public function __invoke(){
            return "Objeto como função.";
            // exemplo: echo $pessoa();
        }
    }

    $pessoa = new Pessoa();
    $pessoa->nome = "Eduardo";
    $pessoa->idade = "23";
    $pessoa->sexo = "M";

    echo $pessoa->nome;
    echo "<br>";
    echo $pessoa->idade;
    echo "<br>";
    echo $pessoa->sexo;
    echo "<br>";
    echo $pessoa;
    echo "<br>";
    echo $pessoa();

?>