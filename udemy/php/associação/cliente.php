<?php
    class cliente{
        public string $nome;
        public string $email;

        public function __construct($pnome, $pemail) {
            $this->nome = $pnome;
            $this->email = $pemail;
        }
    }
?>