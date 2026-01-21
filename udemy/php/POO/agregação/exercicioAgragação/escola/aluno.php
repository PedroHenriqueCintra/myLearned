<?php
    class aluno{
        public string $nome;
        public int $matricula;

        public function __construct($p1, $p2) {
            $this->nome = $p1;
            $this->matricula = $p2;
        }

        public function apresentar(){
            return "Meu nome é $this->nome e minha matricula é $this->matricula";
        }
    }