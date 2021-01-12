<?php 
    if (!isset($_SESSION)) { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="wwwroot/css/main.css" />
    <link rel="stylesheet" href="wwwroot/css/buttons.css" />
    <link rel="stylesheet" href="wwwroot/css/jumbotron.css" />
    <link rel="stylesheet" href="wwwroot/css/navigation.css" />
    <link rel="stylesheet" href="wwwroot/css/grid.css" />
    <link rel="stylesheet" href="wwwroot/css/cards.css" />
    <link rel="stylesheet" href="wwwroot/css/form.css" />
    <link rel="stylesheet" href="wwwroot/css/flex.css" />
    <link rel="stylesheet" href="wwwroot/css/modal.css" />

    <link rel="icon" type="image/png" href="./favicon.png" />
    <title>🎥 FLETNIX</title>
</head>

<body>
    <header class="jumbotron">
        <nav>
            <?php include 'wwwroot/components/navigation.php'?>
        </nav>
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
    <main class="container" style="margin-top: 80px">
        <section class="text-center">
            <h1>Why should you subscribe to Fletnix</h1>
        </section>
        <div class="flex flex-center">
            <?php 
                for($x =0; $x < 3; $x++){
                    include 'wwwroot/components/card-info.php';
                }
            ?>
        </div>
    </main>
    <?php include 'wwwroot/components/footer.php' ?>
</body>
</html>