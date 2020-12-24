<?php
$title = "PHP doet het";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello World</title>
  <?php
    print_r(PDO::getAvailableDrivers());
  ?>
  <?php
  function connect_db()
  {
    $host = "localhost";
    $username = "fletnix_admin";
    $password = "admin!123";
    $database = "FLETNIX_DOCENT";

    $dbh = new PDO("sqlsrv:Server=host.docker.internal;Database=FLETNIX_DOCENT", "fletnix_admin", "welkom");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbh;
  }

  function execute_query($query)
  {
    $dbh = connect_db();

    $result = $dbh->query($query);
    return $result;
  }
  ?>

  <?php
  $query = "SELECT * FROM Movie";
  $result = execute_query($query);
    var_dump($result);

  $users = execute_query('SELECT * from Customer');

  // Resultaten per rij printen.
  foreach($users as $row) {
    print_r($row);
  }

  ?>
</head>
<body>  
  <h1><?=$title?></h1>
</body>
</html>
