<?php 
    class Movies {
        private $dbContext;

        function __construct($dbContext) {
            $this->dbContext = $dbContext;
        }

        function getAll() {
            $command = $this->dbContext->query('SELECT TOP 120 movie_id, title FROM Movie');
            $command->execute();

            $result = $command->fetchAll();
            return $result;
        }
    }


?>