<?php
    // Referência e clonagem de objetos

    class Pessoa{
        public $idade;

        public function __clone(){
            echo "Clonagem de objetos";
        }
    }

    $pessoa = new Pessoa();
    $pessoa->idade = 25;

    $pessoa2 = $pessoa;
    $pessoa2->idade = 35;

    echo $pessoa->idade;

    echo "<br>";

    $pessoa->idade = 25;

    $pessoa2 = clone $pessoa;
    echo $pessoa->idade;