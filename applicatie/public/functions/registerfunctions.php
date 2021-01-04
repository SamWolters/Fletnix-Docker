<?php

    class UserProfile {
        private $dbContext;

        function __construct($dbContext) {
            $this->dbContext = $dbContext;
        }

        function RegisterUser() {
            $command = $this->dbContext->query('SELECT TOP 120 movie_id, title FROM Movie');
            $command->execute();

            $result = $command->fetchAll();
            return $result;
        }

        function GetUserProfile(){ 
            $command = $this->dbContext->query("SELECT [customer_mail_address] as Cmail, [subscription_end] as Csub_end, RIGHT(payment_card_number, 4) as Ccard, [user_name] as Cname, [password] as Cpass, [contract_type] as Ctype FROM Customer WHERE User_Name = ?");
            $query = $dbh->prepare($command);
            $query->execute(array(':user' => $userinfo));
            
            $result = $query->fetchAll();
            return $result;   
        }

        function GetCountry(){
            $command = $this->dbContext->query("SELECT country_name as Countryname from Country");
            $command->execute();
            
            $result = $command->fetchAll();
            return $result;  
        }

        function GetPayment(){
            $command = $this->dbContext->query("SELECT payment_method as Paymentname from Payment");
            $command->execute();
            
            $result = $command->fetchAll();
            return $result;  
        }
    }


?>