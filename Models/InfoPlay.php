<?php

    class InfoPlay extends products{
        public $caratteristiche;
        public $dimensione;

        function __construct($_immagine, $_nome, $_prezzo, $_razza, $_caratteristiche, $_dimensione)
        {
            parent::__construct($_immagine, $_nome, $_prezzo, $_razza);

            $this->caratteristiche = $_caratteristiche;
            $this->dimensione = $_dimensione;
        }
    }
?>    