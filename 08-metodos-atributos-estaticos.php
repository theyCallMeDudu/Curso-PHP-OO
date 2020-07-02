<?php
    // Métodos e atributos estáticos
    
    class Login{
        public static $user;

        public static function verificaLogin(){
            echo "Usuário ".self::$user." logado!";
        } 

        public function sairSistema(){
            echo "Usuário deslogado!";
        }
    }

    Login::$user = "admin";
    Login::verificaLogin();

    // $login = new Login();
    // $login->sairSistema();
?>