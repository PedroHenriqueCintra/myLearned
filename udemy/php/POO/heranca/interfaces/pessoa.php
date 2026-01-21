<?php   
    class Pessoa implements InterfaceBase{
        public $nome;
        public $idade;

        public function __construct($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function apresentarPessoa(){
            return "Ola me chamo $this->nome tenho $this->idade anos de idade";
        }

        public function exbirNomeClasse()
        {
            return "Olá eu sou a classe ".  __CLASS__ .  "<br>";
        }

        function exibirPropriedades(){
            $propriedade = get_object_vars($this);
            foreach ($propriedade as $key => $value) {
                echo "Essa é a propridade $key <br>";
            }
        }

        function tipoPropriedade(){
            $propriedade = get_object_vars($this);
            foreach ($propriedade as $key => $value) {
                echo "A propriedade $key é do tipo: ". gettype($value);
        }
        }
    }