<?php  


    require_once "usuario.php";
    class Administrador extends Usuario{
    
        public function __construct($id, $nome, $email, $status, $dataCriar, $senha ) {
            parent::__construct($id, $nome, $email, $status,$dataCriar,$senha);
        }
        
        public function desativarConta($pstatus, string $motivo){
            $statusAntigo = $this->status;
            $this->status = $pstatus;
        return "O status do usuario do nome $this->nome foi alterado de $statusAntigo para $this->status pelo motivo de: $motivo";
    }

     public function updateDados($email,$nome, $senha){
        if($this->usuarioValido() ==  true){
            if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                $this->email = $email;
                $this->senha =$senha;
                $this->nome = $nome;
                return "dados atualizados com sucesso";
        }       else{
            return "Nao é possivel atualizar dados";
        }
        }
        
    }
    }