<?php 
    require_once('../../data/Database.php');
    require_once('../../data/User.php');

    $db = new Database('host.docker.internal',"sa", "SuperSterkWacht2WoordVoorConnectie1", 'Applicatie');
    $conn = $db->connect();

    $users = new User($conn);

    $users->logout();
?>