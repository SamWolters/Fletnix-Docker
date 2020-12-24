<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/button.js"></script>

    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/buttons.css" />
    <link rel="stylesheet" href="css/jumbotron.css" />
    <link rel="stylesheet" href="css/navigation.css" />
    <link rel="stylesheet" href="css/grid.css" />
    <link rel="stylesheet" href="css/cards.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/flex.css" />
    <link rel="stylesheet" href="css/modal.css" />

    <link rel="icon" type="image/png" href="./favicon.png" />
    <title>🎥 Fletnix</title>
</head>

<body>
    <header class="jumbotron">
        <nav><?php include 'include/navigation.php'?></nav>
        <section class="jumbotron-inner text-center">
            <h1>Sign up for <span class="logo">Fletnix</span></h1>
            <p>Enjoy 3 months of free movies and series</p>
            <form class="subscribe" action="#" style="max-width: 350px; display: inline-flex">
                <input type="text" placeholder="Email" />
                <button class="btn-submit" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </section>
        <div class="jumbotron-bg">
            <div class="jumbotron-overlay"></div>
        </div>
    </header>
    <main class="container" style="margin-top: 75px">
        <section class="text-center">
            <h1>Why should you subscribe to Fletnix</h1>
        </section>
        <div class="flex flex-center">
            <?php 
            for($x =0; $x < 3; $x++){
            include 'include/indexcard.php';
            }
            ?>
        </div>
    </main>
    <?php include 'include/loginmodal.php' ?>
    <?php include 'include/footer.php' ?>
</body>

</html>