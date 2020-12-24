<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="../js/button.js"></script>

    <link rel="stylesheet" href="../css/about.css" />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/buttons.css" />
    <link rel="stylesheet" href="../css/jumbotron.css" />
    <link rel="stylesheet" href="../css/navigation.css" />
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
        <div class="jumbotron-bg">
            <div class="jumbotron-overlay"></div>
        </div>
    </header>
    <main class="container">
        <div class="flex">
            <div class="col-3">
                <p class="timeline-item">
                    <strong>May 2020</strong> We launched the first edition of the
                    website. FlexNix was born. We started out with a couple movies to
                    see. Quickly came to the conclusion we wannted to provied more
                    movies and maybe even some series in the future.
                </p>
                <p class="timeline-item">
                    <strong>June 2020</strong> We signed a deal with some production
                    studios to get acces to there films as soon as they published them
                    It was a small step for us but we knew it could be the break thru we
                    hoped for.
                </p>
                <p class="timeline-item">
                    <strong>August 2020</strong>After our last deal we signed contracts
                    with a hand full of other production studios. we have gone from 2
                    deals to 15 in less than a month. It sure is a big step in the right
                    direction.
                </p>
                <p class="timeline-item">
                    <strong>September 2020</strong> We did it! the first 100 movies on
                    our platform. the site has gone from a few low offer productions to
                    a well known streaming service. We are looking to extent the deal
                    even further. At the end of 2020 we are hoping to have a least a
                    thousand movies avalable to stream at our platform.
                </p>
                <p class="timeline-item">
                    <strong>November 2020</strong> We launched our redesigned version of
                    the website. With over 500 movies are currently avalable it was time
                    to remodel the looks of the site. With the help of our teams we were
                    able to remodel the intire website in just a few months. And since
                    the colder days are comming up we hope to bring a little bit of
                    warmness to every home.
                </p>
            </div>
            <div class="col-3">
                <div class="text-center">
                    <img src="../assets/Cyan_icon.png" alt="" />
                    <img src="../assets/Orange_icon.png" alt="" />
                    <h2>Who are we</h2>
                </div>
                <p style="padding: 0px 50px">
                    Well hello here and thanks for taking the time to visit our beloved
                    website. Our names are Sam And Martijn and we are the founders of
                    FleNix We came up with the idea for this site when we where both
                    still in college. In the last semester we wanted to build something
                    just for fun. That is the moment the idea for FleNix was born.
                    during our summer break we worked on designing and developing the
                    website. Until the day finally came, in May that we launched our
                    work. At first we thought that the site would run for a few weeks
                    but the reality was all so different. In the first 48 hours we
                    already had 50 people that registered for our service. After a week
                    that number rose to almost 100 registrations. We knew this was
                    something we both wanted to do full time. We droped out of college
                    to set our focus towards the streaming service instead of school.
                    Our parents thought we were crazy but when they saw the passion we
                    had they understood why we took this risk. Luckily that risk quickly
                    became a reality. Now we can provide ourselfs with food and a house
                    from the money this website made us. Until this day our teams work
                    around the clock to come up with new and improved software to make
                    the user experince even better.
                </p>
                <br />
                <br />
                <p class="text-center">Sam & Martijn</p>
            </div>
        </div>
    </main>
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
    <footer class="mt-3">
        <div class="text-center medium pt-3 pb-1">Fletnix &copy; 2020</div>
    </footer>
</body>

</html>