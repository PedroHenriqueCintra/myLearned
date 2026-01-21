<?php

    class funcionario{
        public string $nome;
        public string $funcao;
        
        public function __construct($pnome, $pfuncao) {
            $this->nome = $pnome;
            $this->funcao = $pfuncao;
        }
    }