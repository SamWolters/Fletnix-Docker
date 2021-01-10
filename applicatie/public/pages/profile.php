<?php
if (!isset($_SESSION)) { session_start(); }
  require_once('../functions/dbFunctions.php');
  require_once('../functions/registerfunctions.php');

  $db = new Database('host.docker.internal',"sa", "SuperSterkWacht2WoordVoorConnectie1",'Applicatie');
  $conn = $db->connect();

  $Users = new UserProfile($conn);
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

    <link rel="icon" type="image/png" href="../favicon.png" />

    <title>🎥 Fletnix</title>
  </head>

  <body>
  <nav><?php include '../include/navigation.php'?></nav>
    <section>
    <?php 
    
    foreach ($Users ->GetUserProfile($_SESSION["userId"]) as $User) { ?>
    <form action="../functions/updateUser.php" method="post">
    <div class="container">
        <h2>Account</h2>
        <hr />
        <table>
          <tr class="tr-first">
            <td>Billing</td>
          </tr>
          <tr class="tr-second">
            <td>
            Username: <strong><input name="nameuser" class="medium-input" readonly="readonly" type="text"  value="<?=$User['Cname']?>"/></strong>
            </td>
            <td>Password: <input name="passcode" class="large-input" readonly="readonly" type="password"  value="<?=$User['Cpass']?>"></td>
            <td>Email: <input name="mailing" class="large-input" readonly="readonly" type="text"  value="<?=$User['Cmail']?>"/></td>
             <td>The subscription ends on: <input name="end_sub" class="merdium-input" readonly="readonly" type="date"  value="<?php echo empty($User['Csub_end'])? '00-00-0000' :$User['Csub_end']; ?>"/></td>
            <td>Card: •••• •••• •••• <?=$User['Ccard']?></td>
          </tr>
          <tr class="tr-third">
            <td>
              <a href="#" name="nameuser" onclick="toggle('nameuser')"> Change Username</a></td>

            <td><a href="#" name="passcode" onclick="toggle('passcode')">Change password</a></td>

            <td><a href="#" name="mailing" onclick="toggle('mailing')">Change Email</a></td>

            <td><a href="#" name="end_sub" onclick="toggle('end_sub')">cancel subscription plan</a></td>
          </tr>
        </table>
        <hr />
        <table>
          <tr class="tr-first">
            <td>Plan Detail</td>
          </tr>
          <tr class="tr-second">
            <td>

            <select name="current_sub" class="medium-input" readonly="readonly" disabled>
              <?php
              $plans = new UserProfile($conn);
              foreach ($plans ->GetPlans() as $Plan) { 
                if($Plan['Plans'] == $User['Ctype']){
                  echo "<option selected>{$User['Ctype']}</option>";
                }else
               echo "<option>{$Plan['Plans']}</option>";
               } ?>
            </select>

            </td>
          </tr>
          <tr class="tr-third">
            <td><a href="#" name="current_sub" onclick="toggle('current_sub')">Change subscription</a></td>
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
        <?php }?>
      </div>
    </section>
  </body>
</html>
