<?php

    function connect_db() {
        $host = "localhost";
        $username = "sa";
        $password = "SuperSterkWacht2WoordVoorConnectie1";
        $database = "Applicatie";

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