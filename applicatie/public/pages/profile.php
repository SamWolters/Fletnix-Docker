<?php
  require_once('../functions/dbFunctions.php');
  require_once('../functions/registerfunctions.php');

  $db = new Database('host.docker.internal', 'sa', 'SuperSterkWacht2WoordVoorConnectie1', 'Applicatie');
  $conn = $db->connect();

  $User = new UserProfile($conn);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/navigation.css" />
    <link rel="stylesheet" href="../css/profile.css" />
    <link rel="stylesheet" href="../css/buttons.css" />

    <link rel="icon" type="image/png" href="../favicon.png" />

    <title>🎥 Fletnix</title>
  </head>

  <body>
    <nav>
      <?php include '../include/navigation.php' ?>
    </nav>
    <section>
    <?php foreach ($User ->GetUserProfile() as $User) { ?>
      <div class="container">
        <h2>Account</h2>
        <hr />
        <table>
          <tr class="tr-first">
            <td>Billing</td>
          </tr>
          <tr class="tr-second">
            <td>
            Username: <strong><input class="medium-input" type="text" readonly value="<?=$User['Cname']?>"/></strong>
            </td>
            <td>Password: <input class="medium-input" type="password" readonly value="<?php echo $star = str_repeat("*", strlen($User['Cpass']) + rand(3,33));?>"></td>
            <td>Email: <input class="large-input" type="text" readonly value="<?=$User['Cmail']?>"/></td>
             <td>The subscription ends on: <input class="medium-input" type="text" readonly value="<?php echo empty($User['Csub_end'])? 'No date set' : $User['Csub_end']; ?>"/></td>
            <td>Card: •••• •••• •••• <input type="text" class="small-input" readonly value="<?=$User['Ccard']?>"/></td>
          </tr>
          <tr class="tr-third">
            <td class="correction">
              <a href="#"></a>
            </td>
            <td><a href="#">Change password</a></td>

            <td><a href="#">Change Email</a></td>

            <td><a href="#">cancel subscription plan</a></td>

            <td><a href="#">Edit card information</a></td>
          </tr>
        </table>
        <hr />
        <table>
          <tr class="tr-first">
            <td>Plan Detail</td>
          </tr>
          <tr class="tr-second">
            <td><strong> <?=$User['Ctype']?> </strong></td>
          </tr>
          <tr class="tr-third">
            <td><a href="#">Change subscription</a></td>
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
        <input class="btn-submit" type="submit" value="Save Changes" />
        <?php }?>
      </div>
    </section>
    <footer>
      <div class="text-center medium pt-3 pb-1">Fletnix &copy; 2020</div>
    </footer>
  </body>
</html>
