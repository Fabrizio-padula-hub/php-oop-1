<?php
class Movie{
    public $title;
    public $director;
    public $genre;
    public $year;

    // Costruttore
    public function __construct($_title, $_director, $_genre) {
        $this->title = $_title;
        $this->director = $_director;
        $this->genre = $_genre;
    }

    public function getNameMovie(){
        return 'Film: ' . $this->title . ' ' .'Genere: ' . $this->genre;
    }



}

$independenceDay = new Movie('Independence Day', 'Roland Emmerich', 'fantascienza');
$independenceDay->year = '1996';
echo $independenceDay->getNameMovie();

$interstellar = new Movie('interstellar', 'Christopher Nolan', 'fantascienza');
$interstellar->year = '2014';




var_dump($independenceDay);
var_dump($interstellar);


?>