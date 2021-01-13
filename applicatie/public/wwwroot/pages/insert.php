<?php 
    require_once('../../data/Database.php');
    require_once('../../data/User.php');

    $db = new Database('host.docker.internal',"sa", "SuperSterkWacht2WoordVoorConnectie1", 'Applicatie');
    $conn = $db->connect();

    $users = new User($conn);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST) && !empty($_POST)) {
            $users->insert($_POST['email'], $_POST['firstname'], $_POST['lastname'], $_POST['payment'], $_POST['card_number'], $_POST['subscription_type'], $_POST['subscription_start'], $_POST['username'], $_POST['password'], $_POST['country']);
            
            header('location: login.php');
        }
    }
?>