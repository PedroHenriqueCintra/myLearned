<?php
    class Produto{
        private string $descricao;
        private float $preco;

        public function apresentarProduto(){
            echo "O produto $this->descricao custa R$$this->preco";
        }

        public function getDescricao(){
            return $this->descricao;
        }
        public function setDescricao($parametro){
            $this->descricao = $parametro;
        }

        public function getPreco(){
            return $this->preco;
        }
        public function setPreco($parametro){
            $this->preco = $parametro;
        }

        //Sem o uso do contrutor para ver a importancia de usar

    }