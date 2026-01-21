<?php
    class departamento{
        public string $nomeDepartamento;
        public array $funcionarios = [];

        public function __construct($nomeDepartamento) {
            $this->nomeDepartamento = $nomeDepartamento;
        }

        public function inserirFuncionarios(funcionario $funcionario){
            $this->funcionarios [] = $funcionario;

        }

        public function listarFuncionarios(){
            echo "funcionarios do departamento :" . $this->nomeDepartamento . "<br>";
            foreach($this->funcionarios as $funcionario){
                echo "Nome $funcionario->nome função $funcionario->funcao <br>";
            }
        }
    }