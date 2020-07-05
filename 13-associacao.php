<?php
    // Associação
    // Acontece quando um objeto "utiliza" outro,
    // porém, sem que eles dependam um do outro.

    class Pedido{
        public $numero;
        public $cliente;
    }

    class Cliente{
        public $nome;
        public $endereco;
    }

    $cliente = new Cliente();
    $cliente->nome = "Eduardo Coelho";
    $cliente->endereco = "Rua XYZ, 123";

    $pedido = new Pedido();
    $pedido->numero = "001";
    $pedido->cliente = $cliente;

    $dados = array(

        'numero' => $pedido->numero,
        'nome_cliente' => $pedido->cliente->nome,
        'endereco' => $pedido->cliente->endereco

    );

    var_dump($dados);

?>