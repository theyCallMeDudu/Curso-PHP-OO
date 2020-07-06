<?php
    // Agregação
    // Na agregação, uma classe precisa da outra para
    // executar sua ação, ou seja, uma classe utiliza
    // a outra como parte de si própria.

    class Produto{
        public $nome;
        public $valor;

        function __construct($nome, $valor){
            $this->nome = $nome;
            $this->valor = $valor;
        }
    }

    class Carrinho{
        public $produtos;
        
        // Passando um objeto do tipo da outra classe
        // Um objeto do tipo Produto
        public function adiciona(Produto $produto){
            $this->produtos[] = $produto;
        }

        public function exibe(){
            foreach($this->produtos as $produto){
                echo $produto->nome.'<br>';
                echo $produto->valor.'<hr>';
            }
        }
    }

    $produto1 = new Produto("Notebook DELL", "3000");
    $produto2 = new Produto("Mouse Microsoft", "100");

    $carrinho = new Carrinho();

    $carrinho->adiciona($produto1);
    $carrinho->adiciona($produto2);

    $carrinho->exibe();