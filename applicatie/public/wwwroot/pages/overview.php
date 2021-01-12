<?php
  if (!isset($_SESSION)) { 
    session_start(); 
  } 

  require_once('../../data/Database.php');
  require_once('../../data/Movie.php');

  $db = new Database('host.docker.internal',"sa", "SuperSterkWacht2WoordVoorConnectie1", 'Applicatie');
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

    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/buttons.css" />
    <link rel="stylesheet" href="../css/jumbotron.css" />
    <link rel="stylesheet" href="../css/navigation.css" />
    <link rel="stylesheet" href="../css/grid.css" />
    <link rel="stylesheet" href="../css/cards.css" />
    <link rel="stylesheet" href="../css/form.css" />
    <link rel="stylesheet" href="../css/flex.css" />
    <link rel="stylesheet" href="../css/modal.css" />

    <link rel="icon" type="image/png" href="../../favicon.png" />

    <title>🎥 Fletnix</title>
  </head>

  <body>
    <header class="jumbotron">
      <nav>
        <?php include '../components/navigation.php'?>
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
              <img src="../assets/Posters/BlackPanther.jpg" alt="" />
            </a>
            <div class="text-center">
              <h3 class="mt-1"><?=$movie['title'] ?></h3>
            </div>
          </div>
        <?php } ?>
      </div> 
    </main>
    <?php include '../components/footer.php' ?>
  </body>
</html>
