<?php
    class Login {
        private $email;
        private $senha;
        private $nome;

        // Construtor
        public function __construct($email, $senha, $nome){
            $this->nome = $nome;
            $this->setEmail($email);
            $this->setSenha($senha);
        }

        public function logar(){
            if($this->email == "teste@teste.com" and $this->senha == "123456"):
                echo "Usuário logado!";
            else:
                echo "Dados inválidos!";
            endif;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($e){
            $email = filter_var($e, FILTER_SANITIZE_EMAIL);
            $this->email = $e;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($s){
            $this->senha = $s;
        }

        public function getNome(){
            return $this->nome;
        }

    }

    // Instanciação já com construtor
    $logar = new Login("teste@teste.com", "123456", "Eduardo Coelho");

    $logar->logar();

    echo "<br>";

    echo $logar->getEmail();
    echo "<br>";
    echo $logar->getSenha();
    echo "<br>";
    echo $logar->getNome();
    
?>