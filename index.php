<?php
    require 'classes/produto.php';
    require 'models/produto.php';

    // use classes\Produto;
    // use models\Produto;

    use classes\Produto as productClass;
    use models\Produto as productModel;

    // $produto = new \classes\Produto();
    // $produto = new \models\Produto();
    $produto = new productModel();
    $produto->mostrarDetalhes();

    echo "<hr>";

    $produto2 = new productClass();
    $produto2->mostrarDetalhes();