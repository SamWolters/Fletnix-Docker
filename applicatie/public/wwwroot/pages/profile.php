<?php
  if (!isset($_SESSION)) { 
    session_start(); 
  } 

  if (!$_SESSION['userId']) {
    header('location: login.php');
  }

  require_once('../../data/Database.php');
  require_once('../../data/User.php');

  $db = new Database('host.docker.internal',"fletnix_admin", "welkom", 'FLETNIX_DOCENT');
  $conn = $db->connect();

  $users = new User($conn);
  $user = $users->getById($_SESSION["userId"]);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="text/javascript" src="../js/profile.js"></script>
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/navigation.css" />
    <link rel="stylesheet" href="../css/profile.css" />
    <link rel="stylesheet" href="../css/buttons.css" />

    <link rel="icon" type="image/png" href="../../favicon.png" />

    <title>🎥 Fletnix</title>
  </head>

  <body>
    <nav>
      <?php include '../components/navigation.php'?>
    </nav>
    <section>    
    <form action="update.php" method="post">
      <div class="container">
          <h2>Account</h2>
          <hr />
          <table>
            <tr class="tr-first">
              <td>Billing</td>
            </tr>
            <tr class="tr-second">
              <td>
              Username: <strong><input name="nameuser" class="medium-input" readonly="readonly" type="text"  value="<?=$user['user_name']?>"/></strong>
              </td>
              <td>Password: <input name="passcode" class="large-input" readonly="readonly" type="password"  value="<?=$user['password']?>"></td>
              <td>Email: <input name="mailing" class="large-input" readonly="readonly" type="text"  value="<?=$user['customer_mail_address']?>"/></td>
              <td>The subscription ends on: <input name="end_sub" class="merdium-input" readonly="readonly" type="text"  value="<?php echo empty($user['subscription_end'])? 'No Date set' :$user['subscription_end']; ?>"/></td>
              <td>Card: •••• •••• •••• <?=$user['payment_card_number']?></td>
            </tr>
            <tr class="tr-third">
              <td class="correction"> <a href=""></a> </td>
              

              <td><a href="#" name="passcode" onclick="toggle('passcode')">Change password</a></td>

              <td><a href="#" name="mailing" onclick="toggle('mailing')">Change Email</a></td>

              <td class="correction"> <a href=""></a> </td>
            </tr>
          </table>
          <hr />
          <table>
            <tr class="tr-first">
              <td>Plan Detail</td>
            </tr>
            <tr class="tr-second">
              <td>
                    <input type="text" readonly="readonly" style="font-weight:bold;" value="<?=$user['contract_type']?>">
              </td>
            </tr>
            <tr class="tr-third">
            <td class="correction"> <a href=""></a> </td>
            </tr>
          </table>
          <hr />
          <table>
            <tr class="tr-first">
              <td>Profiles</td>
            </tr>
            <tr class="tr-second table-profile">
              <td>
                <img src="../assets/Cyan_icon.png" alt="" />
                <p>John Dapper</p>
              </td>
              <td>
                <img src="../assets/Orange_icon.png" alt="" />
                <p>Tess Dapper</p>
              </td>
              <td>
                <img src="../assets/Yellow_icon.png" alt="" />
                <p>Jackson Dapper</p>
              </td>
            </tr>
          </table>
          <hr />
          <input class="btn-submit" type="submit" name="save" value="Save Changes" />
        </form>
      </div>
    </section>
    <?php include '../components/footer.php' ?>
  </body>
</html>
