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
      <div class="container">
        <h2>Account</h2>
        <hr />
        <table>
          <tr class="tr-first">
            <td>Billing</td>
          </tr>
          <tr class="tr-second">
            <td>
              <strong> John.Dapper@Yahoo.nl</strong>
            </td>
            <td>Password: *******</td>
            <td>Phone: 06 12 34 56 78</td>
            <td>Your next billing is <strong>21-12-2020</strong></td>
            <td>Card: •••• •••• •••• 1234</td>
          </tr>
          <tr class="tr-third">
            <td class="correction">
              <a href="#">Change E-mail address</a>
            </td>
            <td><a href="#">Change password</a></td>

            <td><a href="#">Change phonenumber</a></td>

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
            <td><strong> Premium </strong></td>
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
      </div>
    </section>
    <footer>
      <div class="text-center medium pt-3 pb-1">Fletnix &copy; 2020</div>
    </footer>
  </body>
</html>
