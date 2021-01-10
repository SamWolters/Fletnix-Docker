<?php
if (!isset($_SESSION)) { session_start(); }
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
  
     // update function
    $Username = $_REQUEST['nameuser'];
    $Email = $_REQUEST['mailing'];
    $Contract = $_REQUEST['current_sub'];
    echo "<script>alert($Contract)</script>";
    $Contract_end = $_REQUEST['end_sub'];
    $Password = $_REQUEST['passcode'];
    
    // $query = "UPDATE Customer SET ([customer_mail_address] = '$Email',[contract_type] = '$Contract', [subscription_end] = '$Contract_end' [user_name] ='$Username', [password] = '$Password'
    // WHERE user_name = :userId";
    // $query->execute(array(':userId' => $_SESSION['userId']));

    //echo "<script>alert('Changes has been saved')</script>";
   // header("refresh:2; url=../pages/profile.php");

?>