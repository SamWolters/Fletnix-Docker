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
    <script src="../js/button.js"></script>

    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="../js/button.js"></script>

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

    <link rel="icon" type="image/png" href="../favicon.png" />

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
      <div class="flex">
        <div class="col-1">
          <label>
            Search
            <input type="text" placeholder="Search for movie or serie" />
          </label>
        </div>
        <div class="col-1">
          <label>
            Genre
            <select name="genre">
              <option value="Action">Action</option>
            </select>
          </label>
        </div>
        <div class="col-1">
          <label>
            Director
            <input type="text" placeholder="Director name" />
          </label>
        </div>
        <div class="col-1">
          <label>
            Release year
            <select name="date">
              <option value="2012">2012</option>
            </select>
          </label>
        </div>

        <div class="flex">
          <div class="col-1 col-md-2 col-sm-3">
            <div
              class="card card-white card-media no-padding"
              id="Black_Panther"
            >
              <img src="../assets/movie-poster.jpg" alt="" />
            </div>
          </div>
          <div class="col-1 col-md-2 col-sm-3">
            <div class="card card-white card-media no-padding">
              <img src="../assets/movie-poster.jpg" alt="" />
            </div>
          </div>
          <div class="col-1 col-md-2 col-sm-3">
            <div class="card card-white card-media no-padding">
              <img src="../assets/movie-poster.jpg" alt="" />
            </div>
          </div>
          <div class="col-1 col-md-2 col-sm-3">
            <div class="card card-white card-media no-padding">
              <img src="../assets/movie-poster.jpg" alt="" />
            </div>
          </div>
          <div class="col-1 col-md-2 col-sm-3">
            <div class="card card-white card-media no-padding">
              <img src="../assets/movie-poster.jpg" alt="" />
            </div>
          </div>
          <div class="col-1 col-md-2 col-sm-3">
            <div class="card card-white card-media no-padding">
              <img src="../assets/movie-poster.jpg" alt="" />
            </div>
          </div>
          <div class="col-1 col-md-2 col-sm-3">
            <div class="card card-white card-media no-padding">
              <img src="../assets/movie-poster.jpg" alt="" />
            </div>
          </div>
          <div class="col-1 col-md-2 col-sm-3">
            <div class="card card-white card-media no-padding">
              <img src="../assets/movie-poster.jpg" alt="" />
            </div>
          </div>
        </div>

        <div id="modal-film" class="modal">
          <div class="modal-inner">
            <div class="modal-header">
              <div class="flex centered">
                <div class="col-4">
                  <h2>The Black Panther</h2>
                </div>
                <div class="col-2">
                  <div class="text-right">
                    <button id="btnCloseMovie">&times;</button>
                  </div>
                </div>
              </div>
              <hr />
            </div>
            <div class="flex">
              <div class="modal-overlay">
                <img
                  src="../assets/Black_Panther.jpg"
                  alt=""
                  style="width: 100%"
                />
                <a class="btn btn-red" href="../html/player.html">Play</a>
              </div>
              <div class="col-3" style="display: contents">
                <p>
                  Thousands of years ago, five African tribes war over a
                  meteorite containing the metal vibranium. One warrior ingests
                  a "heart-shaped herb" affected by the metal and gains
                  superhuman abilities, becoming the first "Black Panther". He
                  unites all but the Jabari Tribe to form the nation of Wakanda.
                </p>
                <div>
                  <p>Directed by: Ryan Coogler, Wesley Snipes</p>
                  <p>
                    cast: Lupita Nyong'o, Michael B. Jordan, Danai Gurira, and
                    Chadwick Boseman
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="modal-signIn" class="modal">
          <div class="modal-inner" style="max-width: 500px">
            <div class="modal-header">
              <section class="flex centered">
                <div class="col-4 col-md-4 col-sm-4">
                  <h2>Login</h2>
                </div>
                <div class="col-2">
                  <div class="text-right">
                    <button id="btnClose" class="btn btn-red btn-icon">
                      &times;
                    </button>
                  </div>
                </div>
              </section>
              <hr />
            </div>
            <div class="modal-body">
              <div class="flex flex-center">
                <div class="col-5 col-md-5 col-sm-5">
                  <form action="profile.html">
                    <label>
                      Email:
                      <input type="email" />
                    </label>

                    <label>
                      Password:
                      <input type="password" />
                    </label>
                    <input type="submit" value="Sign in" />
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
