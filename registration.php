<?php
ini_set('display_errors',1);
    $status['registerParticipant'] = "";
if(isset($_POST['subData'])){
    require('./connect.php');
    $stmt = $pdo->prepare('INSERT INTO Participants (`Name`,`Email`,`College`,`Sports`) VALUES (?,?,?,?)');
    $res = $stmt->execute([$name,$email,$college,$sports]);
    if($res){
        $status['registerParticipant'] = "Registration Done successfully";
    }
    else {
        $status['registerParticipant'] = 'Registration failed';
    }
    echo $name;
    echo $college;
    echo $sports;
}
?>


<?php
require('./templates/header.php');
?>
<meta name="viewport" content="width=device-width", initial-scale="1.0">

<body>
  <!--
			=============================================
				Theme Header
			==============================================
      -->
<div class="bac">
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
</div>

  <!-- /.theme-main-header -->

    <h1><?php echo $status['registerParticipant'] ?></h1>

    <div id="conta">  
        <h2 class="contactme">Register</h2>
        <div class="fom">            
        <form action="" method="post" >
        <label for="name">Name</label><br>
        <input type="text" name="Name"><br><br>
        <label for="email">Email</label><br>
        <input type="email" name="Email"><br><br>
        <label for="college">College</label><br>
        <input type="text" name="College"><br><br>
        <label for="Sports">Sports</label><br>
        <input type="text" name="Sports"><br><br>
        <input type="submit" name="subData" value="submit">
        </form>
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