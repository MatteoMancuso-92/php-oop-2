<?php

    class InfoFood extends products{
        public $peso;
        public $ingredienti;

        function __construct($_immagine, $_nome, $_prezzo, $_razza, $_peso, $_ingredienti)
        {
            parent::__construct($_immagine, $_nome, $_prezzo, $_razza);

            $this->peso = $_peso;
            $this->ingredienti = $_ingredienti;
        }
    }
?>    