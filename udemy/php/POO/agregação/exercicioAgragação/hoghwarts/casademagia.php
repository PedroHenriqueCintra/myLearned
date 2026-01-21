<?php
    class casa{
        public $nomeCasa;
        public array $alunos = [];

        public function __construct($pnomeCasa){
            $this->nomeCasa = $pnomeCasa;
        }
        public function colocarAlunosCasa( aluno $nomeAluno){
            $this->alunos[] = $nomeAluno;
        }

    }