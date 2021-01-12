<?php 
    require_once('../data/Database.php');
    require_once('../data/User.php');

    $db = new Database('host.docker.internal',"fletnix_admin", "welkom", 'FLETNIX_DOCENT');
    $conn = $db->connect();

    $users = new User($conn);

    $username = "";
    $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty(trim($_POST['mail_address']))) {
            $username = $_POST['mail_address'];
        }

        if (!empty(trim($_POST["password"]))) {
            $password = $_POST["password"];
        }

        $user = $users->searchForUser($username);
    
        if ($user != null) {
            if ($password == $user['password']) {
                session_start();
    
                $_SESSION["loggedIn"] = true;
                $_SESSION["userId"] = $user['user_name'];
                $_SESSION["contractType"] = $user['contract_type'];
    
                if ($user['subscription_end'] != null) {
                    $_SESSION["validSubscription"] = true;
                } else {
                    $_SESSION["validSubscription"] = false;
                }
                header("location: ../wwwroot/pages/overview.php");
            } else {
                header("location: ../wwwroot/pages/login.php?error=password");
            }
        } else {
            header("location: ../wwwroot/pages/login.php?error=email");
        }
    }
?>