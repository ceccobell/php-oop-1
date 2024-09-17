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

    $movie1 = new Movie("Inception", 2010, "Science fiction");
    $movie2 = new Movie("The Matrix", 1999, "Action");

    echo $movie1->getMovieInfo();
    echo "<br>";
    echo $movie2->getMovieInfo();
?>