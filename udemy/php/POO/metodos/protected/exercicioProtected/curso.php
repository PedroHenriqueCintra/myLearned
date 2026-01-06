<?php
    class Curso{
        protected string $titulo;
        protected float $horasCurso;
        

        public function __construct($titulo, $horasCurso) {
            $this->titulo = $titulo;
            $this->horasCurso = $horasCurso;
        }
        protected function descricaoCurso(){
            return "O curso:
             $this->titulo <br> tem a duração de :
             $this->horasCurso horas <br>";
            
        }

        public function divulgaCurso(){
            return "compre o curso $this->titulo ele é muito bom e tem a carga horaria de $this->horasCurso";
        }
        
        protected function cursoLongo(){
            if($this->horasCurso > 20.00){
                return "Sim";
            }else{
                return "Nao";
            }
        }
    }
?>