<?php 
    class User {
        private $dbContext;

        function __construct($dbContext) {
            $this->dbContext = $dbContext;
        }

        function searchForUser($mail) {
            $command = $this->dbContext->prepare('SELECT user_name, contract_type, subscription_end, password FROM Customer Where customer_mail_address = ?');
            $command->execute(array($mail));

            return $command->fetch();
            return $result;
        }

        function getById($id) {
            $command = $this->dbContext->prepare('SELECT user_name, password, customer_mail_address, subscription_end, RIGHT(payment_card_number,4) as payment_card_number, contract_type FROM Customer Where user_name = ?');
            $command->execute(array($id));

            return $command->fetch();
        }

        function insert($mail, $firstname, $lastname, $payment_method, $payment_card, $contract_type, $subscription_start, $user_name, $password, $country) {
            $command = $this->dbContext->prepare('INSERT INTO Customer
                                                  VALUES (?,?,?,?,?,?,?, null, ?, ?, ?, ?, ?)');
            
            $command->execute(array($mail, $firstname, $lastname, $payment_method, $payment_card, $contract_type, $subscription_start, $user_name, $password, $country, null, null));
        }

        function update($mail, $password, $user_name) {
            $command = $this->dbContext->prepare("UPDATE Customer SET [customer_mail_address] = ?, [password] = ? WHERE [user_name] = ?");
            $command->execute(array($mail, $password, $user_name));
        }

        function logout() {
            session_start();
            
            $_SESSION = array();
            
            session_destroy();
            
            header("location: ../../index.php");
            exit;
        }
    }
?>