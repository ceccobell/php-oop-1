<?php 
    class Movie {
        public $titolo;
        public $anno_uscita;
        public $genere;

        public function __construct($_titolo, $_anno_uscita, $_genere) {
            $this->titolo = $_titolo;
            $this->anno_uscita = $_anno_uscita;
            $this->genere = $_genere;
        }

        public function getMovieInfo() {
            return "Titolo: {$this->titolo}, Genere: {$this->genere}, Anno: {$this->anno_uscita}";
        }
    }
?>