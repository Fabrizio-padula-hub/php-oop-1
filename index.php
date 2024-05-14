<?php
class Movie{
    public $title;
    public $director;
    public $genre;
    public $year;

}

$independenceDay = new Movie();
$independenceDay->title = 'Independence Day';
$independenceDay->director = 'Roland Emmerich';
$independenceDay->genre = 'fantascienza';
$independenceDay->year = '1996';

$interstellar = new Movie();
$interstellar->title = 'interstellar';
$interstellar->director = 'Christopher Nolan';
$interstellar->genre = 'fantascienza';
$interstellar->year = '2014';




var_dump($independenceDay);
var_dump($interstellar);


?>