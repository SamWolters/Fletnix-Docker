<?php 
    require_once('../../data/Database.php');
    require_once('../../data/User.php');

    session_start(); 

    $db = new Database('host.docker.internal',"fletnix_admin", "welkom", 'FLETNIX_DOCENT');
    $conn = $db->connect();

    $users = new User($conn);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST) && !empty($_POST)) {
            $users->update($_SESSION['userId'], $_POST['mailing'], $_POST['passcode']);

            header('location: profile.php');
        }
    }
?>