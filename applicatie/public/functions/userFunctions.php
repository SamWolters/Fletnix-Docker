<?php 
    class Users {
        private $dbContext;

        function __construct($dbContext) {
            $this->dbContext = $dbContext;
        }

        function login($user_mail, $password) {
            $command = $this->dbContext->query('SELECT user_name, contract_type, subscription_end, password FROM Customer Where customer_mail_address = :mail_address LIMIT 1');
            
            
            $command->execute(array(':mail_address' => $user_mail));
            $result = $command->fetchAll();

            if ($result->rowCount() > 0) {
                if ($password == $result['password']) {
                    session_start();

                    $_SESSION["loggedIn"] = true;
                    $_SESSION["userId"] = $result['user_name'];
                    $_SESSION["contractType"] = $result['contract_type'];

                    if ($result['subscription_end'] != null) {
                        $_SESSION["validSubscription"] = true;
                    } else {
                        $_SESSION["validSubscription"] = false;
                    }

                    header("location: overview.php");
                }

                print_r($result);
            }
            
            $print("Coudn't find a user");
        }

        function logout() {
            session_start();
            
            $_SESSION = array();
            
            session_destroy();
            
            header("location: index.php");
            exit;
        }
    }


?>