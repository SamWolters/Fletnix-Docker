<?php
if (!isset($_SESSION)) { session_start(); }
    function connect_db()
    {
      $host = "host.docker.internal";
      $username = "sa";
      $password = "SuperSterkWacht2WoordVoorConnectie1";
      $database = "Applicatie";
  
      $dbh = new PDO("sqlsrv:Server=$host;Database=$database;ConnectionPooling=0", $username, $password);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
      return $dbh;
    }
  
    $dbh = connect_db();
    $command = $dbh->prepare("UPDATE Customer SET [customer_mail_address]=?, [password]=? WHERE [user_name]=?");
    execute_query($command);  
    
    function execute_query($query)
    {
      $dbh = connect_db();
      $Email = $_POST['mailing'];
      $Password = $_POST['passcode'];
      $UserId = $_SESSION['userId'];
      $query->execute(array($Email,$Password,$UserId));
      echo "<script>alert('Changes has been saved')</script>";
     header("refresh:1; url=../pages/profile.php");
    }
    

?>