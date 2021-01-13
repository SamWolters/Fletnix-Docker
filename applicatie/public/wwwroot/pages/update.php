<?php 
    require_once('../../data/Database.php');
    require_once('../../data/User.php');

    session_start(); 

    $db = new Database('host.docker.internal',"sa", "SuperSterkWacht2WoordVoorConnectie1", 'Applicatie');
    $conn = $db->connect();

    $users = new User($conn);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST) && !empty($_POST)) {
            $users->update($_SESSION['userId'], $_POST['mailing'], $_POST['passcode']);

            header("refresh:1; url=../pages/profile.php");
        }
    }
?>