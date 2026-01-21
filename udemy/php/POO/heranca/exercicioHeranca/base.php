<?php
    require_once "usuario.php";
    class Base extends Usuario{
        private string $planoAssinatura;
        private  $dataVencimento;

        public function __construct($planoAssinatura, $dataVencimento, $id, $nome, $email, $status,$dataCriar, $senha) {
            $this->planoAssinatura = $planoAssinatura;
            $this->dataVencimento = $dataVencimento;
            parent::__construct($id,$nome,$email,$status, $dataCriar,$senha);
        }

        public function planoAtivo(){
            if($this->dataVencimento > "2026"){
                return "Seu plano está ativo";
            }else{
                return "seu plano esta vencido";
            }
        }
    }