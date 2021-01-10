<?php
if (!isset($_SESSION)) { session_start(); }
  $error = isset($_GET['error'])
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/buttons.css" />
    <link rel="stylesheet" href="../css/grid.css" />
    <link rel="stylesheet" href="../css/cards.css" />
    <link rel="stylesheet" href="../css/form.css" />
    <link rel="stylesheet" href="../css/flex.css" />
    <link rel="stylesheet" href="../css/modal.css" />

    <link rel="icon" type="image/png" href="../favicon.png" />

    <title>🎥 Fletnix</title>
</head>
<body>
    <main class="container">
        <div class="flex flex-center">
            <div class="col-2 col-md-3 col-sm-5">
                <div class="text-center">
                    <span class="logo">Fletnix</span>
                </div>

                <div class="card card-white" style="margin-top: 50px">
                    <form method="post" action="../functions/authLogin.php">
                        <label>
                            Email:
                            <input type="email" name="mail_address" required />
                        </label>
                        <?php if ($error && $error == "email") { echo "<p>Couldn't find a account</p>"; } ?>

                        <label>
                            Password:
                            <input type="password" name="password" required />
                        </label>
                        <?php if ($error && $error === 'password') { echo "<p>Wrong password</p>"; } ?>
                        <input type="submit" value="Sign in" />
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>