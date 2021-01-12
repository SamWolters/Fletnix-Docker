<?php 
    class Contract {
        private $dbContext;

        function __construct($dbContext) {
            $this->dbContext = $dbContext;
        }

        function getAll() {
            $command = $this->dbContext->prepare('SELECT * FROM Contract');
            $command->execute();

            $result = $command->fetchAll();
            return $result;
        }

        
    }
?>