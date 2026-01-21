<?php
    class torneio{
        public $nomeTorneio;
        public array $casas =  [];

        public function __construct($p) {
            $this->nomeTorneio = $p;
        }

        public function adicionarCasas(casa $nomeCasa){
            $this->casas [] = $nomeCasa;
        }
        
        public function listarTorneios(){
            echo "Nome torneio: $this->nomeTorneio <br>";
            foreach($this->casas as $casa){
                echo "Casa participante : $casa->nomeCasa  <br>";
                    foreach($casa->alunos as $aluno){
                        echo "O aluno participante: $aluno->nomeAluno <br>";
            }
            }
            
        }
    }