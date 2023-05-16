<?php

class Movie {
    public $title;
    public $subtitle;
    public $duration;
    public $country;
    public $genre;

    function __construct($_title, $_duration, $_country) {
        $this->title = $_title;
        $this->duration = $_duration;
        $this->country = $_country;
    }
    
    public function trailer(){
        echo 'taa daaaa';
    }
    public function details(){
        return "Titolo: {$this->title} Original Country: {$this->country}; ";
    }
    public function genres($_genre1,$_genre2) {
        $this->genre = [$_genre1, $_genre2];
        // return "Genres: {$this->genre}; {$this->genre}";
    }
}

$first_movie = new Movie('The last of us', '6 episode', 'USA');
$first_movie->genre = ['horror', 'dystopian'];
$second_movie = new Movie('The walking dead', '12 seasons','USA');
var_dump( $first_movie);
echo $first_movie->details();
echo $second_movie->details();
echo $first_movie->genres('Dystopian', 'horror');