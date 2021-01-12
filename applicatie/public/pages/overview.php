<?php
  if (!isset($_SESSION)) { session_start(); }


  require_once('../functions/dbFunctions.php');
  require_once('../functions/movieFunctions.php');

  $db = new Database('host.docker.internal',"fletnix_admin", "welkom", 'FLETNIX_DOCENT');
  $conn = $db->connect();

  $movies = new Movies($conn);

  $moviesData = $movies->getAll();

  if (isset($_GET['title'])) {
    $moviesData = $movies->getAllByFilter($_GET['title'], $_GET['year'], $_GET['person'], $_GET['genre']);
  }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="js/button.js"></script>

    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="js/button.js"></script>

    <script>
      feather.replace();
    </script>

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
    <header class="jumbotron">
      <nav>
        <?php include '../include/navigation.php'?>
      </nav>
      <section class="jumbotron-inner text-center">
        <h1>Watch thousands of movies and series</h1>
        <h3 style="color: var(--white)">
          Sign up now with the first 3 months for free
        </h3>
      </section>
      <div class="jumbotron-bg movie-banner">
        <div class="jumbotron-overlay"></div>
      </div>
    </header>
    <main class="container" style="margin-top: 75px">
      <form method="get" class="flex">
        <div class="col-1">
          <label>
            Title
            <input name="title" type="text" placeholder="Search for movie or serie" />
          </label>
        </div>
        <div class="col-1">
          <label>
            Year
            <input name="year" type="text" placeholder="Search for movie or serie" />
          </label>
        </div>
        <div class="col-1">
          <label>
            Director
            <input name="person" type="text" placeholder="Search for movie or serie" />
          </label>
        </div>
        <div class="col-1">
          <label>
            Genre
            <input name="genre" type="text" placeholder="Search for movie or serie" />
          </label>
        </div>  
        <div class="col-1">            
            <input type="submit" placeholder="Search for movie or serie" />
        </div> 
      </form>
        <div class="flex">
          <?php foreach ($moviesData as $movie) { ?>
            <div class="col-1 col-md-2 col-sm-3">
              <a href="movie.php?id=<?=$movie['movie_id'] ?>" class="card card-media">
                <img src="../assets/Posters/movie-poster.jpg" alt="" />
              </a>
              <div class="text-center">
                <h3 class="mt-1"><?=$movie['title'] ?></h3>
              </div>
            </div>
          <?php } ?>
        </div> 
    </main>
  </body>
</html>
