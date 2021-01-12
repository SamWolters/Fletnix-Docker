<?php 
    require_once('dbFunctions.php');

    $db = new Database('host.docker.internal',"sa", "SuperSterkWacht2WoordVoorConnectie1",'Applicatie');
    $conn = $db->connect();

    $username = "";
    $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty(trim($_POST['mail_address']))) {
            $username = $_POST['mail_address'];
        }

        if (!empty(trim($_POST["password"]))) {
            $password = $_POST["password"];
        }

        $command = $conn->prepare('SELECT user_name, contract_type, subscription_end, password FROM Customer Where customer_mail_address = ? AND password = ?');   
        
        // $command->bindValue('')
        $command->execute(array($username, $password));
        $result = $command->fetchAll();
    
        if ($result[0] != null) {
            if ($password == isset($result[0]['password'])) {
                session_start();
    
                $_SESSION["loggedIn"] = true;
                $_SESSION["userId"] = $result[0]['user_name'];
                $_SESSION["contractType"] = $result[0]['contract_type'];
    
                if ($result[0]['subscription_end'] != null) {
                    $_SESSION["validSubscription"] = true;
                } else {
                    $_SESSION["validSubscription"] = false;
                }
                header("location: ../pages/overview.php");
            } else {
                header("location: ../pages/login.php?error=password");
            }
    
        } else {
            header("location: ../pages/login.php?error=email");
        }
        

   
    }
?>