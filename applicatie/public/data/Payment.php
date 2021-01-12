<?php 
    class Payment {
        private $dbContext;

        function __construct($dbContext) {
            $this->dbContext = $dbContext;
        }

        function getAll() {
            $command = $this->dbContext->prepare('SELECT * FROM Payment');
            $command->execute();

            $result = $command->fetchAll();
            return $result;
        }

        
    }
?>