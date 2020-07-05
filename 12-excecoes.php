<?php
    // Tratamento de exceções
    // É uma ocorrência anormal que afeta o funcionamento
    // da aplicação.
    // EXCEPTION é a classe base para todas as exceções
    // message, code, file, line


    class NewsLetter{
        
        public function cadastrarEmail($email){

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
                throw new Exception("E-mail inválido", 1);
            else:
                echo "E-mail cadastrado com sucesso!";
            endif;

        }
    }

    $newsletter = new NewsLetter();

    try{
        $newsletter->cadastrarEmail("contato@");
    } catch(Exception $e){
        echo "Mensagem: ".$e->getMessage()."<br>";
        echo "Código: ".$e->getCode()."<br>";
        echo "Linha: ".$e->getLine()."<br>";
        echo "Arquivo: ".$e->getFile()."<br>";
    }
    
?>