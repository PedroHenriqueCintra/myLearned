<?php  
    class Usuario{
        protected int $id;
        protected string $nome;
        protected string $email;
        protected string $status;
        protected string $dataCriar;
        protected string $senha;

        public function __construct(int $id, string $nome, string $email, string $status, string $dataCriar, string $senha){
            $this->id = $id;
            $this->nome = $nome;
            $this->email = $email;
            $this->status = $status;
            $this->dataCriar = $dataCriar;
            $this->senha = $senha;
        }

        public function usuarioValido(){
            if($this->status !== "invalidada" && $this->status !== "bloqueada"){
                return true;
        }else{
            return false;
        }
    }

        public function autenticarUsuario($pemail, $senha){
            if($this->email === $pemail && $this->senha === $senha){
                if($this->usuarioValido() ==  true){
                return "usuario autenticado";
            }}else{
                return "nao foi possivel autenticar o usuario";
            }
    }

   


    
        public function getId(){
            return $this->id;
        }

        public function setId(int $id){
            $this->id = $id;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome(string $nome){
            $this->nome = $nome;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail(string $email){
            $this->email = $email;
        }

        public function getStatus(){
            return $this->status;
        }

        public function setStatus(string $status){
            $this->status = $status;
        }
        public function getDataCriar(){
            return $this->dataCriar;
        }

        public function setDataCriar(string $dataCriar){
            $this->dataCriar = $dataCriar;
        }
    }