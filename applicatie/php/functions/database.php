<?php

    function connect_db() {
        $host = "localhost";
        $username = "fletnix_admin";
        $password = "admin!123";
        $database = "FLETNIX_DOCENT";

        $dbh = new PDO("sqlsrv:Server=$host;Database=$database;ConnectionPooling=0", "$username", "$password");
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $dbh;
    }

    function execute_query($query) {
        $dbh = connect_db();

        $result = $dbh->query($query);
        return $result;
    }

?>  