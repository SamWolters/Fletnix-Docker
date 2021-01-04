<!DOCTYPE html>
<html lang="en">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="../js/subscription.js"></script>
<script src="../js/button.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../js/subscription.js"></script>
<script type="text/javascript" src="../js/button.js"></script>

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

<body>
    <div class="jumbotron">
        <nav>
            <?php include '../include/navigation.php'?>
        </nav>
        <section class="jumbotron-inner text-center">
            <h2>Watch thousands of movies and series</h2>
            <h3 style="color: var(--white)">
                Sign up now with the first 3 months for free
            </h3>
        </section>
        <div class="jumbotron-bg">
            <div class="jumbotron-overlay"></div>
        </div>
    </div>
    <main class="container" style="margin-top: 75px; margin-bottom: 300px">
        <section class="text-center">
            <h2>Subscriptions</h2>
        </section>

        <div class="flex flex-center">
        <?php include '../include/subscriptioncards.php'?>
        </div>
    </main>
    <?php include '../include/submodal.php' ?>
    <?php include '../include/loginmodal.php' ?>

</body>

</html>