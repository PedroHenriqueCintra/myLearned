<?php
    class escola{
        public string $nomeEscola;
        public array $alunos = [];

        public function __construct($p1) {
            $this->nomeEscola = $p1;
        }

        public function listarAlunos(aluno $nome){
            $this->alunos[] = $nome;
        }
    }