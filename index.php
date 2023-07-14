<?php
    include_once __DIR__ . '/classes/Movie.php';

    $movies = [
        new Movie('Nuovo Cinema Paradiso', 'Giuseppe Tornatore', 'Il film racconta in flashback la vita di Salvatore, un regista di successo ma intimamente infelice, che non è mai ritornato al paese siciliano in cui è cresciuto ed ha vissuto l\'unica vera storia d\'amore della sua vita.', 1988, ['drama', 'cult', 'italian']),

        new Movie('Terminator', 'James Cameron', 'A Los Angeles giungono due figure dall\'anno 2029, un Terminator, cyborg assassino dalle fattezze umane, e un soldato umano chiamato Kyle Reese, entrambi alla ricerca di una mite ragazza chiamata Sarah Connor. ', 1988, ['action', 'cult'])
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Movie</title>
</head>
<body>
    <h1>
        PHP Movie
    </h1>
    <ul>
        <?php foreach ($movies as $movie) { ?>
            <li>
                <?php echo "$movie->title - $movie->year - $movie->director <br>";
                    foreach ($movie->genres as $genre) {
                        echo "$genre    ";
                    }
                echo "<br> $movie->synopsis" ;?>
            </li>
        <?php } ?>
    </ul>
</body>
</html>