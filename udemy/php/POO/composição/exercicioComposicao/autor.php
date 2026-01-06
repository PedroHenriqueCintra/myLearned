<?php
    class Autor{
        private string $nomeAutor;
        private string $email;

        public function __construct(string $nomeAutor, string $email) {
            $this->nomeAutor = $nomeAutor;
            $this->email = $email;
        }

        function getNomeAutor(){
            return $this->nomeAutor;
        }

        function setEmail(string $email){
            $this->email =  $email;
        }

        function getEmail(){
            return $this->email;
        }

    
    }