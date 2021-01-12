<?php
    function connect_db()
    {
      $host = "localhost,1433";
      $username = "sa";
      $password = "SuperSterkWacht2WoordVoorConnectie1";
      $database = "Applicatie";
  
      $dbh = new PDO("sqlsrv:Server=host.docker.internal;Database=Applicatie", "sa", "SuperSterkWacht2WoordVoorConnectie1");
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
      return $dbh;
    }
    
    $dbh = connect_db();
      
   $command = $dbh->prepare( "INSERT INTO Customer
    VALUES (?,?,?,?,?,?,?, null, ?, ?, ?, null, null)");
   execute_query($command);  
    function execute_query($query)
    {
      $dbh = connect_db();
      $Email = $_POST['email'];
      $Lastname = $_POST['lastname'];
      $Firstname = $_POST['firstname'];
      $PaymentMethod = $_POST['payment'];
      $PaymentCard = $_POST['card_number'];
      $Contract = $_POST['subscription_type'];
      $Contract_start = $_POST['subscription_start'];
      $Username = $_POST['username'];
      $Password = $_POST['password'];
      $Country = $_POST['country'];
      
      $query->execute(array($Email, $Firstname, $Lastname, $PaymentMethod, $PaymentCard, $Contract, $Contract_start, $Username, $Password, $Country));
      
      echo "<script>alert('Changes has been saved')</script>";
      header("refresh:2; url=../pages/subscription.php");
    }
  
    
    // }
?>