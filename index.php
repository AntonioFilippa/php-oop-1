<?php

class Movie {
    // Dichiarazione delle variabili d'istanza
    public $title;
    public $director;
    public $year;

    // Definizione del costruttore
    public function __construct($title, $director, $year) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
    }

    // Definizione di almeno un metodo
    public function getMovieInfo() {
        return "{$this->title} directed by {$this->director}, released in {$this->year}.";
    }

    // Metodo che gestisce una Exception
    public function setYear($year) {
        if($year < 1900 || $year > date("Y")) {
            throw new Exception("Year must be between 1900 and the current year.");
        }
        $this->year = $year;
    }
}

try {
    // Istanziamento di almeno due oggetti ‘Movie’
    $movie1 = new Movie("The Shawshank Redemption", "Frank Darabont", 1994);
    $movie2 = new Movie("The Godfather", "Francis Ford Coppola", 1972);

    // Stampa a schermo i valori delle relative proprietà
    echo $movie1->getMovieInfo() . "\n";
    echo $movie2->getMovieInfo() . "\n";

    // Esempio di gestione di una Exception
    $movie1->setYear(1800); // Questo causerà un'Exception
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}