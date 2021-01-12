<?php 
    class Country {
        private $dbContext;

        function __construct($dbContext) {
            $this->dbContext = $dbContext;
        }

        function getAll() {
            $command = $this->dbContext->prepare('SELECT * FROM Country');
            $command->execute();

            $result = $command->fetchAll();
            return $result;
        }

        
    }
?>