<?php
ini_set('display_errors', 1);
require('./connect.php');
$status['registerParticipant'] = "";
if (isset($_POST['teamReg'])) {
  $name=$_POST['playername'];
  $id=$_POST['playerid'];
  $email=$_POST['playeremail'];
  $college=$_POST['playercollege'];
  $stmt2 = $pdo->prepare('SELECT * FROM Participants WHERE Name = ? AND College = ? AND InfCode = ?');
  $result =  $stmt2->execute([$name, $college, $id]);
  if ($result) {
    $stmt3 = $pdo->prepare('UPDATE Participants SET isConfirmed = ? AND Email = ? WHERE Name = ? AND College = ? AND InfCode = ?');
    $result2 =  $stmt3->execute([1,$email,$name, $college,$id]);    
  } else {
    $status["registerparticipant"] = "Please ask your captain to register themselves and the team";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <!-- For IE -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- For Resposive Device -->
  <meta name="viewport" content="width=device-width, initial-scale=0.5" />

  <title>Infinito 2k19</title>

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png" />

  <!-- Main style sheet -->
  <link rel="stylesheet" type="text/css" href="css/style.css?version=51" />
  <!-- responsive style sheet -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css?version=51" />
  <link rel="stylesheet" type="text/css" href="css/countdown.css?version=51" />

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous" />
  <link rel="stylesheet" href="../vendor/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="owl.theme.css">

  <!-- Fix Internet Explorer ______________________________________-->

  <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script src="vendor/html5shiv.js"></script>
      <script src="vendor/respond.js"></script>
    <![endif]-->
</head>

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

  <!-- /.theme-main-header -->
  <div class="container">
    <h1><?php echo $status['registerParticipant'] ?></h1>
    <div id="register" style="height:100vh">
      <div class="theme-title">
        <h2>Register</h2>
      </div>

    <form>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" name ="playername" placeholder="Name">
            </div>
        </div>    
            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" name ="playeremail" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Infinito ID</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" name ="playerid" placeholder="INF****">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">College Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" name ="playercollege" placeholder="College Name">
            </div>
        </div> 
        <div class="form-group row">
            <div class="col-sm-10">
            <button type="submit" class="btn btn-primary" name="teamReg">Confirm Registration</button>
            </div>
        </div>
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
      <a href="index.php" class="logo"><img src="images/logo/logo.png" alt="Logo" style="border-radius:100%" /></a>

      <ul>
        <li>
          <a href="https://www.facebook.com/InfinitoIITPatna/" target="_blank" class="tran3s round-border"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
        </li>
        <li>
          <a href="https://www.instagram.com/infinito_iitp/" target="_blank" class="tran3s round-border"><i class="fab fa-instagram"></i></a>
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