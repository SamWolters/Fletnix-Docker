<?php
if (!isset($_SESSION)) { session_start(); }
    function connect_db()
    {
      $host = "localhost,1433";
      $username = "sa";
      $password = "SuperSterkWacht2WoordVoorConnectie1";
      $database = "Applicatie";
  
      $dbh = new PDO("sqlsrv:Server=$host;Database=$database;ConnectionPooling=0", "$username", "$password");
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
      return $dbh;
    }
  
     // update function
    $Email = $_POST['mailing'];
    $Password = $_POST['passcode'];
    
    $Command = "UPDATE Customer SET ([customer_mail_address] = '$Email'[password] = '$Password' WHERE user_name = $_SESSION[userId]";
    echo "<script>alert('{$Command}')</script>";
    execute_query($Command);  
    
    function execute_query($query)
    {
      $dbh = connect_db();
  
      $result = $dbh->query($query);
      
      echo "<script>alert('Changes has been saved')</script>";
      header("refresh:2; url=../pages/profile.php");
    }
    

?>