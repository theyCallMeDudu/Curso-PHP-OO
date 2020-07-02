<?php
    // Polimorfismo
    // Substituir ou reescrever um método herdado

    class Animal{
        public function andar(){
            echo "O animal andou."; 
        }

        public function correr(){
            echo "O animal correu.";
        }
    } 

    class Cavalo extends Animal{

        // Método reescrito adaptado para seu contexto
        // public function andar(){
        //     echo "O cavalo andou.";
        // }

        // Método reescrito chamando outro método herdado
        public function andar(){
            $this->correr();
        }
    }

    $animal = new Cavalo();
    $animal->andar();
?>