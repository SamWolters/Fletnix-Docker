<?php 
    require_once('../../data/Database.php');
    require_once('../../data/User.php');

    $db = new Database('host.docker.internal',"fletnix_admin", "welkom", 'FLETNIX_DOCENT');
    $conn = $db->connect();

    $users = new User($conn);

    $users->logout();
?>