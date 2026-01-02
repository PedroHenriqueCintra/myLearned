<?php
    class aluno{
        public $nomeAluno;
        public $especialidade;

        public function __construct($nome,$espe) {
            $this->nomeAluno = $nome;
            $this->especialidade = $espe;
        }
        
        
    }