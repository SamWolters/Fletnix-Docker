<?php 
    class Movies {
        private $dbContext;

        function __construct($dbContext) {
            $this->dbContext = $dbContext;
        }

        public function getAll() {
            $command = $this->dbContext->prepare('SELECT TOP 120 movie_id, title FROM Movie');
            $command->execute();

            $result = $command->fetchAll();
            return $result;
        }

        public function getAllByFilter($title, $year, $person, $genre) {
            $command = $this->dbContext->prepare('SELECT TOP 120 m.movie_id, m.title FROM Movie m
                                                    INNER JOIN Movie_Genre mg on m.movie_id = mg.movie_id
                                                    INNER JOIN Genre g on mg.genre_name = g.genre_name
                                                    INNER JOIN Movie_Director md on m.movie_id = md.movie_id
                                                    INNER JOIN Person p on md.person_id = p.person_id
                                                    WHERE m.title LIKE ? OR m.publication_year = ? OR p.firstname LIKE ? OR g.genre_name LIKE ?');
            $command->execute(array($title, $year, $person, $genre));

            $result = $command->fetchAll();
            return $result;
        }

        public function getById($id) {
            $command = $this->dbContext->prepare('SELECT * FROM Movie Where movie_id = ?');
            $command->execute(array($id));

            $result = $command->fetch();
            return $result;
        }

        public function getCast($id) {
            $command = $this->dbContext->prepare('SELECT person.firstname, person.lastname FROM Movie_Cast
                                                  INNER JOIN Person on Movie_Cast.person_id = person.person_id
                                                  Where movie_id = ?');
            $command->execute(array($id));

            $result = $command->fetchAll();
            return $result;
        }

        public function getDirectors($id) {
            $command = $this->dbContext->prepare('SELECT person.firstname, person.lastname FROM Movie_Director
                                                  INNER JOIN Person on Movie_Director.person_id = person.person_id
                                                  Where movie_id = ?');
            $command->execute(array($id));

            $result = $command->fetchAll();
            return $result;
        }
    }
?>