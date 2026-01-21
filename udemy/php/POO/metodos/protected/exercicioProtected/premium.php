<?php  
    require_once "curso.php";

    class CursoPremium extends Curso{
        private bool $certificado;

        public function __construct(bool $certificado,string $titulo,float $horasCursos, ) {
            parent:: __construct($titulo, $horasCursos);
            $this->certificado = $certificado;
        }

        public function detalhesPremium(){
           if($this->certificado === true ){
                return $this->descricaoCurso() . "Certificado: Sim <br> Acesso antecipado: " . $this->cursoLongo() . "<br>";
            }else{
                return $this->descricaoCurso() .  "Certificado: Não <br> Acesso antecipado: " . $this->cursoLongo() . "<br>";;
            }

            
        }




    }