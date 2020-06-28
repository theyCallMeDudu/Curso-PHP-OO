<?php
    // Herança
    // É um recurso que permite que classes compartilhem atributos
    // e métodos ou comportamentos generalizados.

    class Veiculo {
        public $modelo;
        public $cor;
        public $ano;

        public function andar(){
            echo "Vruuum";
        }

        public function parar(){
            echo "Iiiich";
        }
    }
    

    class Carro extends Veiculo{
        
        public function ligarLimpador(){
            echo "Limpando em... 3, 2, 1";
        }

    }

    class Moto extends Veiculo{
        
        public function empinar(){
            echo "Empinando em... 3, 2, 1";
        }

    }

    $carro = new Carro();
    $carro->modelo = "Fusca";
    $carro->cor = "Verde";
    $carro->ano = 87;

    $carro->andar();
    echo "<br>";
    $carro->ligarLimpador();
    var_dump($carro);

    $moto = new Moto();
    $moto->modelo = "Honda Biz";
    $moto->cor = "Azul";
    $moto->ano = 2017;

    $moto->parar();
    echo "<br>";
    $moto->empinar();
    var_dump($moto);