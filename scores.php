<?php
require('./templates/header.php');
?>

<body>
  <!--
			=============================================
				Theme Header
			==============================================
      -->
      <div class="bac">
    <div class="container" style="padding:10px 0">
      <a href="index.php" class="logo float-left tran4s"><img src="images/logo/logo.png" alt="Logo" style="border-radius:100%" /></a>

      <!-- ========================= Theme Feature Page Menu ======================= -->
      <nav class="navbar float-right theme-main-menu one-page-menu">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            Menu
            <i class="fa fa-bars" aria-hidden="true"></i>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#home">Home</a></li>
            <li><a href="./team.php">Team</a></li>
            <li><a href="./gallery.php">Gallery</a></li>
            <li><a href="./registration.php">Register</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </nav>
      <!-- /.theme-feature-menu -->
    </div>
  </div>

  <!-- /.theme-main-header -->
  <div class="container">
    <div id="content">
      <div class="theme-title">
        <h2>Scores</h2>
      </div>
      <div class="score-container">
        <?php require('./pullScores.php');
        while ($data = $stmt->fetch()) {
          ?>
          <div class="col-lg-4 offset-lg-2 col-md-4 col-sm-2 sol-xs-1">
            <div class=" score-box">
              <h4 ><?php echo  $data['Game'] ?></h4>
              <div>
                <span><?php echo   $data['Team_1'] ?> &dash; <?php echo   $data['Team_2'] ?></span>
              </div>
              <div>
                <span><?php echo   $data['Score'] ?></span>
              </div>
            </div>
          </div>
          <?php
        }
        ?>
      </div>
    </div>
    <div id="content">
      <div class="theme-title">
        <h2>Athletics</h2>
      </div>
      <div class="score-container">
        <?php $stmt = $pdo->query("SELECT * FROM Athletics ORDER BY date");
        while ($data = $stmt->fetch()) {
          ?>
          <div class="col-lg-4 offset-lg-2 col-md-4 col-sm-2 sol-xs-1">
            <div class=" score-box">
              <h4 >Race: <?php echo  $data['RaceName'] ?></h4>
              <div>
                <h4>Winners</h4>
                <ul class="winnersList">
                  <li> <span style="color:#d63e4d">1st Place:-</span>   <?php echo $data['Winner'] ?></li>
                  <li> <span style="color:#d63e4d"> 2nd Place:-</span>  <?php echo $data['FirstRunnerUp'] ?></li>
                  <li> <span style="color:#d63e4d"> 3rd Place:-</span> <?php echo $data['SecondRunnerUp'] ?></li>
                </ul>
              </div>
            </div>
          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </div>
  




  <!--
			=====================================================
				Footer
			=====================================================
			-->
  <footer>
    <div class="container">
      <a href="index.html" class="logo"><img src="images/logo/logo.png" alt="Logo" /></a>

      <ul>
        <li>
          <a href="#" target="_blank" class="tran3s round-border"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
        </li>
        <li>
          <a href="#" target="_blank" class="tran3s round-border"><i class="fab fa-twitter" aria-hidden="true"></i></a>
        </li>
        <li>
          <a href="#" target="_blank" class="tran3s round-border"><i class="fab fa-instagram"></i></a>
        </li>
        <li>
          <a href="#" target="_blank" class="tran3s round-border"><i class="fab fa-pinterest" aria-hidden="true"></i></a>
        </li>
        <li>
          <a href="#" target="_blank" class="tran3s round-border"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
        </li>
        <li>
          <a href="#" target="_blank" class="tran3s round-border"><i class="fab fa-skype" aria-hidden="true"></i></a>
        </li>
        <li>
          <a href="#" target="_blank" class="tran3s round-border"><i class="fab fa-flickr" aria-hidden="true"></i></a>
        </li>
        <li>
          <a href="#" target="_blank" class="tran3s round-border"><i class="fab fa-dribbble" aria-hidden="true"></i></a>
        </li>
      </ul>
    </div>
  </footer>

  <!-- =============================================
				Loading Transition
			============================================== -->
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
  require('./templates/footer.php')
  ?>