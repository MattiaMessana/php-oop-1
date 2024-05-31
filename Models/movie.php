<?php

class Movie
{
    private string $title;
    private string $description;
    private string $release_year;
    private string $movie_director;
    private int    $rating;
    private int    $duration;
    public  Genre  $genre;
    public  Actor  $actor;   
    private array  $cast;

    // public function setTitle($title)
    // {
    //     $this->title = $title;
    // }

    public function __construct(string $title, string $description, string $release_year, string $movie_director, Genre $genre)
    {
        $this->title = $title;
        $this->description = $description;
        $this->release_year = $release_year;
        $this->movie_director = $movie_director;
        $this->genre = $genre;
    }

    public function setDuration( int $duration) {
        $this->duration = $duration;
    }
     
    public function getDuration() {
        return $this->duration . ' MINUTI';
    }

    public function setRating($star) {
        //se la valutazione non è compresa fra 0 e 5 allora restutuisce errore
        if ($star < 0 || $star > 5 ) {
            throw new Exception("valore non consentito utilizzare valori compresi fra 0 e 5");
        }
        $this->rating = $star;
    }

    public function setCast() {
        
    }

}
