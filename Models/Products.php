<?php

    class Products{
        public $immagine;
        public $nome;
        public $prezzo;
        public$razza;

        function __construct($_immagine, $_nome, $_prezzo, $_razza){

        $this->immagine = $_immagine;
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->razza = $_razza;
            }
        }
?>        