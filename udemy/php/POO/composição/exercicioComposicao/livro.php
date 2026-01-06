<?php
    require_once "autor.php";    
    class Livro{
        private  string $tituloLivro;
        private $nomeAutor;

        public function __construct($tituloLivro, $nomeAutor, $emailAutor) {
            $this->tituloLivro = $tituloLivro;
            $this->nomeAutor = new Autor($nomeAutor, $emailAutor);
        }

        function apresentarLivro(){
            return "O nome do livro é: $this->tituloLivro e o autor é " . $this->nomeAutor->getNomeAutor(). " caso queira entrar em contato com o autor do livro acesse ". $this->nomeAutor->getEmail();
        }
        function setEmailAutor(string $novoEmail){
            $this->nomeAutor->setEmail($novoEmail);
        }
    }