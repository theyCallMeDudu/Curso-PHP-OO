<?php
    // Composição
    // Na composição, uma classe cria a instância de outra
    // dentro de si mesma. Sendo assim, quando ela for
    // destruída, a outra classe também o será.

    class Pessoa{
        public function atribuiNome($nome){
            return "O nome da pessoa é ".$nome.".";
        }
    }

    class Exibicao{
        public $pessoa;
        public $nome;

        
        function __construct($nome){
            // Instanciamos a classe Pessoa
            // dentro de Exibicao
            // Uma classe dentro da outra.
            // Diferente da Agregação, que é fora.
            $this->pessoa = new Pessoa();
            $this->nome = $nome;
        }

        public function exibeNome(){
            echo $this->pessoa->atribuiNome($this->nome);
        }
    }

    $exibe = new Exibicao("Eduardo");
    $exibe->exibeNome();