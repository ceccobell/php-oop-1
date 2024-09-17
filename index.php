<?php 
    class Movie {
        public $titolo;
        public $anno_uscita;
        public $genere;

        public function __construct($_titolo, $_anno_uscita, $_genere = []) {
            $this->titolo = $_titolo;
            $this->anno_uscita = $_anno_uscita;
            $this->genere = $_genere;
        }

        public function getMovieInfo() {
            $lista_generi = implode(", ", $this->genere);
            return "Titolo: {$this->titolo}, Generi: {$lista_generi}, Anno: {$this->anno_uscita}";
        }
    }

    $movie1 = new Movie("Inception", 2010, ["Science fiction", "Action", "Adventure", "Drama", "Supernatural", "Thriller", "Romance", "Suspense"]);
    $movie2 = new Movie("The Matrix", 1999, ["Action", "Adventure", "Science fiction", "Fantasy", "Cyberpunk", "Noir", "Drama"]);

    echo $movie1->getMovieInfo();
    echo "<br>";
    echo $movie2->getMovieInfo();
?>