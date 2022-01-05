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
                      <li><a href="#">Events</a></li>
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
<footer id="footer" class="footer">
  <div class="container">
      <div class="row">
          <div class="col-md-12 col-lg-4 col-first">
              <a href="index.php" class="logo"><img src="images/logo/logo.png" alt="Logo" class="footer-logo"/></a>
              <div class="footer-about">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
              </div>
              <div class="section-heading">
                  <h3>Follow us</h3>
              </div>

              <ul>
                  <li>
                      <a href="https://www.facebook.com/InfinitoIITPatna/">
                          <i class="fa fa-facebook"></i>
                      </a>
                  </li>
                  <li>
                      <a href="https://twitter.com/infinito_iitp">
                          <i class="fa fa-twitter"></i>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.linkedin.com/company/infinito-iit-patna">
                          <i class="fa fa-linkedin"></i>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.instagram.com/infinito_iitp/">
                          <i class="fa fa-instagram"></i>
                      </a>
                  </li>
              </ul>
          </div>
          <div class="col-md-12 col-lg-4 col-second">
              <div class="contact-us">
                  <div class="contact-icon">
                      <i class="fa fa-map-o" aria-hidden="true"></i>
                  </div>
                  <div class="contact-info">
                      <h3>Bihta, Patna, Bihar</h3>
                      <p>IIT Patna</p>
                  </div>
              </div>
              <div class="contact-us">
                  <div class="contact-icon">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                  </div>
                  <div class="contact-info">
                      <h3>+91 98018 84535</h3>
                      <p>Give us a call</p>
                  </div>
              </div>
              <div class="contact-us">
                  <div class="contact-icon">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                  </div>
                  <div class="contact-info">
                      <h3>iitpsports@gmail.com</h3>
                      <p>Mail us here</p>
                  </div>
              </div>
          </div>
          <div class="col-md-12 col-lg-4 col-last">
          
              <div class="section-heading">
                  <h3>Useful Links</h3>
              </div>
              <ul>
                  <li>
                      <a href="#">About us</a>
                  </li>
                  <li>
                      <a href="#">Events</a>
                  </li>
                  <li>
                      <a href="#">Sponsors</a>
                  </li>
                  <li>
                      <a href="#">Our Team</a>
                  </li>
              </ul>
          </div>
      </div>
  </div>
  <div class="copyright">
      <p>Copyright &copy; 2021 Infinito</p>
  </div>
</footer>

 <!--
    =============================================
		Loading Transition
    ==============================================
    -->
    <div id="loader-wrapper">
            <div id="preloader_1">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <!-- Scroll Top Button -->
        <button class="scroll-top tran3s p-color-bg">
            <i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i>
        </button>

        <?php
        require('./templates/footer.php');
        ?>
</body>
</html>
