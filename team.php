<?php
require('./templates/header.php');
?>

<body>
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
            <li class="dropdown-holder"><a>Register</a>
                <ul class="sub-menu">
                  <li><a href="./registration.php">Register Team</a></li>
                  <li><a href="./registerplayer.php">Register Player</a></li>
                </ul>
              </li>

          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </nav>
      <!-- /.theme-feature-menu -->
    </div>
  </div>

  <div id="content">
    <div class="theme-title">
      <h2>Our Team</h2>
    </div>
    <div id="team-part">
      <div class="box">
        <div class="card">
          <div class="imgBx">
            <img src="team/Coordinator.jpg" alt="">
          </div>
          <div class="details">
            <h2>Overall Coordinator<br><span>Rahul Pandey</span></h2>
          </div>
        </div>
        <div class="card">
          <div class="imgBx">
            <img src="team/FestConvener.jpg" alt="">
          </div>
          <div class="details">
            <h2>Fest Convener<br><span>Akshay Rajput</span></h2>
          </div>
        </div>
        <div class="card">
          <div class="imgBx">
            <img src="team/MarketingNSponsorship.jpeg" alt="">
          </div>
          <div class="details">
          <h2>Marketing and Sponsorship<br><span>Deep Roshan</span></h2>
          </div>
        </div>
        <div class="card">
          <div class="imgBx">
            <img src="team/Mpr.jpg" alt="">
          </div>
          <div class="details">
          <h2>Media and Public Relations<br><span>Rupesh Neekhra</span></h2>

          </div>
        </div>
        <div class="card">
          <div class="imgBx">
            <img src="team/RegistrationNSecurity.jpg" alt="">
          </div>
          <div class="details">
          <h2>Registration and Security<br><span>Neeraj Paraliya</span></h2>

          </div>
        </div>
        <div class="card">
          <div class="imgBx">
            <img src="team/CreativeNDesign.jpg" alt="">
          </div>
          <div class="details">
          <h2>Creatives  and Design<br><span>Nayan Thulkar</span></h2>

          </div>
        </div>
        <div class="card">
          <div class="imgBx">
            <img src="team/Organizing.jpg" alt="">
          </div>
          <div class="details">
          <h2>Organizing<br><span>Vikram Patel</span></h2>
          </div>
        </div>
        <div class="card">
          <div class="imgBx">
            <img src="team/Organizing2.jpg" alt="">
          </div>
          <div class="details">
          <h2>Organizing<br><span>Amar Raj</span></h2>
          </div>
        </div>
        <div class="card">
          <div class="imgBx">
            <img src="team/WebNApp.jpeg" alt="">
          </div>
          <div class="details">
          <h2>Website Developer<br><span>Amit Priyankar</span></h2>
          </div>
        </div>
        <div class="card">
          <div class="imgBx">
            <img src="team/Hospitality.png" alt="">
          </div>
          <div class="details">
          <h2>Hospitality<br><span>Neeraj Meena</span></h2>
          </div>
        </div>
      </div>
    </div>
  </div>






  <!--
			=====================================================
				Footer
			=====================================================
      -->
      

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