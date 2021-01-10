<?php 
    class Movies {
        private $dbContext;

        function __construct($dbContext) {
            $this->dbContext = $dbContext;
        }

        function getAll() {
            $command = $this->dbContext->prepare('SELECT TOP 120 movie_id, title FROM Movie');
            $command->execute();

            $result = $command->fetchAll();
            return $result;
        }

        function getById($id) {
            $command = $this->dbContext->prepare('SELECT * FROM Movie Where movie_id = ?');
            $command->execute(array($id));

            $result = $command->fetch();
            return $result;
        }

        function getCast($id) {
            $command = $this->dbContext->prepare('SELECT person.firstname, person.lastname FROM Movie_Cast
                                                  INNER JOIN Person on Movie_Cast.person_id = person.person_id
                                                  Where movie_id = ?');
            $command->execute(array($id));

            $result = $command->fetchAll();
            return $result;
        }

        function getDirectors($id) {
            $command = $this->dbContext->prepare('SELECT person.firstname, person.lastname FROM Movie_Director
                                                  INNER JOIN Person on Movie_Director.person_id = person.person_id
                                                  Where movie_id = ?');
            $command->execute(array($id));

            $result = $command->fetchAll();
            return $result;
        }
    }


?>