<?php
    // Constantes

    class Pessoa{
        const nome = "Eduardo";

        public function exibirNome(){
            echo self::nome;
        }
    }

    //$pessoa = new Pessoa();
    //$pessoa->exibirNome();

    // class Eduardo extends Pessoa{
    //     const nome = "Coelho";

    //     public function exibirNome(){
    //         echo self::nome;
    //     }
    // }

    class Eduardo extends Pessoa{
        const nome = "Coelho";

        public function exibirNome(){
            echo parent::nome;
        }
    }

    $eduardo = new Eduardo();
    $eduardo->exibirNome();
?>