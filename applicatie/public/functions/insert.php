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
  
    function execute_query($query)
    {
      $dbh = connect_db();
  
      $result = $dbh->query($query);
      var_dump($result);
      var_dump($query);
   // header("refresh:2; url=../pages/subscription.php");
    }

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


        $command = "INSERT INTO Customer ([customer_mail_address], [lastname], [firstname], [payment_method], [payment_card_number], [contract_type], [subscription_start], [user_name], [password], [country_name])
        VALUES ('$Email','$Lastname','$Firstname','$PaymentMethod','$PaymentCard','$Contract','$Contract_start', '$Username', '$Password', '$Country')";
        execute_query($command);  
?>