<?php
require('./templates/header.php');
?>

<body>
  <!--
			=============================================
				Theme Header
			==============================================
			-->
  <div class="container">
    <a href="index.html" class="logo float-left tran4s"><img src="images/logo/logo.png" alt="Logo" /></a>

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
          <li class="active"><a href="#home">HOME</a></li>
          <li><a href="#about-us">ABOUT</a></li>
          <li><a href="#events-section">Events</a></li>
          <li><a href="team/test.html">TEAM</a></li>
          <li class="dropdown-holder">
            <a href="#blog-section">Updates</a>
            <ul class="sub-menu">
              <li>
                <a href="blog-details.html" class="tran3s">Blog Details</a>
              </li>
            </ul>
          </li>
          <li><a href="#contact-section">CONTACT</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </nav>
    <!-- /.theme-feature-menu -->

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
          $const++;
          if ($const >= 6)
            break;
        }
        ?>
      </div>
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