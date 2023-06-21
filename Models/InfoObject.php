<?php 

    class InfoObject extends products{
        public $materiale;
        public $dimensione;

        function __construct($_immagine, $_nome, $_prezzo, $_razza, $_materiale, $_dimensione)
        {
            parent::__construct($_immagine, $_nome, $_prezzo, $_razza);

            $this->materiale = $_materiale;
            $this->dimensione = $_dimensione;
        }
    }

?>    