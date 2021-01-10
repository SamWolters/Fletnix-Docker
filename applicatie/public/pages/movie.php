<?php
    require_once('../functions/dbFunctions.php');
    require_once('../functions/movieFunctions.php');

    $db = new Database('host.docker.internal', 'fletnix_admin', 'welkom', 'FLETNIX_DOCENT');
    $conn = $db->connect();

    $movies = new Movies($conn);
    $movie = $movies->getById($_GET['id']);
    $cast = $movies->getCast($_GET['id']);
    $directors = $movies->getDirectors($_GET['id']);

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/buttons.css" />
    <link rel="stylesheet" href="../css/jumbotron.css" />
    <link rel="stylesheet" href="../css/navigation.css" />
    <link rel="stylesheet" href="../css/grid.css" />
    <link rel="stylesheet" href="../css/cards.css" />
    <link rel="stylesheet" href="../css/form.css" />
    <link rel="stylesheet" href="../css/flex.css" />
    <link rel="stylesheet" href="../css/modal.css" />

    <link rel="icon" type="image/png" href="favicon.png" />

    <title>🎥 Fletnix</title>
</head>
<body>
    <header>
        <nav>
            <?php include '../include/navigation.php'?>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="flex flex-center">
                <div class="col-3 col-md-4 col-sm-6">
                    <div style="margin-top: 50px">
                    <div class="flex">
                        <div class="col-5 col-md-5 col-sm-4">
                            <h1><?=$movie['title'] ?></h1>
                        </div>
                        <div class="col-1 col-md-1 col-sm-1">
                            <div class="text-right">
                                    <a class="btn btn-red">Play</a>
                            </div>
                        </div>
                    </div>
                        <img src="../assets/horizontal-banner.jpg" alt="" class="image-banner">
                        <p><?=$movie['description'] ?></p>
                        <p>Duration: <?=$movie['duration'] ?> minuten</p>
                        <p>Publication year: <?=$movie['publication_year'] ?></p>
                        <p>Directors:</p>
                        <ul>
                            <?php 
                                foreach($directors as $key => $user) { 
                                    echo "<li>" . $user['firstname'] . ' ' . $user['lastname'] . "</li>";
                                }    
                            ?>
                        </ul>
                        <p>Cast:</p>
                        <ul>
                            <?php 
                                foreach($cast as $key => $user) { 
                                    echo "<li>" . $user['firstname'] . ' ' . $user['lastname'] . "</li>";
                                }    
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>