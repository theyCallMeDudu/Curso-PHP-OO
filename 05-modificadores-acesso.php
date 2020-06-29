<?php
    // Modificadores de acesso
    /*
    *   public - não há ocultação. Toda propriedade ou método
    *            declarados como public são acessíveis por todos
                 que quiserem acessá-los.
    *   protected - apenas os herdeiros vejam as propriedades ou
                    métodos protegidos como se fossem públicos.
    *   private - qualquer método ou propriedade é visível apenas
                  pela classe que o declarou.
    */


    class Veiculo {
        protected $modelo;
        private $cor;
        public $ano;

        public function andar(){
            echo "Vruuum";
        }

        public function parar(){
            echo "Iiiich";
        }

        public function setModelo($m){
            $this->modelo = $m;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function setCor($c){
            $this->cor = $c;
        }

        public function getCor(){
            return $this->cor;
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


    $veiculo = new Veiculo();
    
    $veiculo->setModelo("Fusca");
    echo $veiculo->getModelo();

    echo "<br>";

    $veiculo->setCor("Vermelho");
    echo $veiculo->getCor();

    var_dump($veiculo);