<?php
session_start();
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Schedule'21</title>
  <?php
    require('./templates/header.php');
  ?>
</head>


<body style="background: linear-gradient(lightblue,lightgreen);">
    <!-- Navigation bar -->
    <div class="bac" style="background: #172134; position:fixed; width:100%; top:0px; z-index:100; margin-bottom:100px;">
      <div class="container" style="padding:10px 0">
          <a href="index.php" class="logo float-left tran4s"><img src="images/logo/logo.png" alt="Logo" style="border-radius:100%; height:56px; width:56px;" /></a>

          <!-- ========================= Theme Feature Page Menu ======================= -->
          <nav class="navbar float-right theme-main-menu one-page-menu">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false" style="margin-top:8px;">
                      <span class="sr-only">Toggle navigation</span>
                      Menu
                      <i class="fa fa-bars" aria-hidden="true"></i>
                  </button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="navbar-collapse-1" style="margin-top:10px">
                  <ul class="nav navbar-nav">
                      <li><a href="./index.php">Home</a></li>
                      <li><a href="./events.php">Events</a></li>
                      <li><a href="./team.php">Team</a></li>
                      <li><a href="./gallery.php">Gallery</a></li>
                      <li><a href="./registration.php">Register</a></li>
                      <?php
                        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                            echo '<li><a href="./profile.php">Profile</a></li>
                                      <li><a href="./logout.php">Logout</a></li>';
                        } else {
                            echo '
                                <li><a href="./signIn.php">Sign In</a></li>';
                        }
                      ?>
                  </ul>
              </div>
              <!-- /.navbar-collapse -->
          </nav>
          <!-- /.theme-feature-menu -->
      </div>
  </div>

<div class="container" style="margin-top:130px;">
  <!-- <h2 style="left: 50%;">Schedule!</h2>             -->
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Event Name</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>CS-Go Pre Match</td>
        <td>8/1/2021</td>
      </tr>
      <tr>
        <td>Quiz Prelims</td>
        <td>9/1/2021</td>
      </tr>
      <tr>
        <td>Quiz Prelims</td>
        <td>10/1/2021</td>
      </tr>
      <tr>
        <td>Clash of Clans</td>
        <td>11/1/2021</td>
      </tr>
      <tr>
        <td>CS-Go Prelims</td>
        <td>12/1/2021</td>
      </tr>
      <tr>
        <td>COD Mobile</td>
        <td>12/1/2021</td>
      </tr>
      <tr>
        <td>Chess</td>
        <td>13/1/2021</td>
      </tr>
      <tr>
        <td>Free Fire Prelims</td>
        <td>13/1/2021</td>
      </tr>
      <tr>
        <td>Free Fire Final</td>
        <td>14/1/2021</td>
      </tr>
      <tr>
        <td>COD Mobile Final</td>
        <td>14/1/2021</td>
      </tr>
      <tr>
        <td>Quiz Final</td>
        <td>15/1/2021</td>
      </tr>
      <tr>
        <td>CS CS-Go Final</td>
        <td>15/1/2021</td>
      </tr>
    </tbody>
  </table>
</div>

  <?php
  require('./templates/footer.php');
  ?>
  
</body>
</html>
