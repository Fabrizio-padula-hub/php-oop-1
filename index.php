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
        return $this->title;
    }

}

$independenceDay = new Movie('Independence Day', 'Roland Emmerich', 'fantascienza');
$independenceDay->year = '1996';
// echo $independenceDay->getNameMovie() . '<br>';

$interstellar = new Movie('Interstellar', 'Christopher Nolan', 'fantascienza');
$interstellar->year = '2014';
// echo $interstellar->getNameMovie();

$movies = [
    $independenceDay,
    $interstellar
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
    <?php foreach($movies as $film) { ?>
        <div>
            <div>Film: <?php echo $film->getNameMovie()?></div>
            <div>Genere: <?php echo $film->genre?></div>
            <div>Anno: <?php echo $film->year ?></div>
            <hr>
        </div>
    <?php } ?>
        
    

</body>
</html>