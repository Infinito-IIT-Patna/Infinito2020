<?php
ini_set('display_errors', 1);
require('./connect.php');
$status['registerParticipant'] = "";
if (isset($_POST['teamReg'])) {
  $collegeName = $_POST['collegeName'];
  $sports = $_POST['sports'];
  $captain = $_POST['captainsName'];
  $captainsEmail = $_POST['captainsEmail'];
  $team = array();
  $Id = array();
  $i = 1;
  $teamcode = '';
  $captaincode = '';
  while (isset($_POST["team$i"]) && strlen($_POST["team$i"]) !== 0) {
    try {
      $stmt = $pdo->prepare('INSERT INTO Participants (`Name`,`College`,`Sports`,`isCaptain`,`InfCode`) VALUES (?,?,?,?,?);');
      $result =  $stmt->execute([$_POST["team$i"], $collegeName, $sports, 0, 0]);
      $stmt2 = $pdo->prepare('SELECT * FROM Participants WHERE Name = ? AND College = ? AND Sports = ?');
      $result =  $stmt2->execute([$_POST["team$i"], $collegeName, $sports]);
      $data = $stmt2->fetch();
      $id = 3000 + $data['Id'];
      $id = "INFN_$id";
      $partname = $data['Name'];
      $teamcode .= 'Team Member ' . $i . '\n Name : ' . $partname . '   InfinitoId : ' . $id . '\n\n';
      $stmt3 = $pdo->prepare('UPDATE Participants SET InfCode = ? WHERE Name = ? AND College = ? AND Sports = ?');
      $result =  $stmt3->execute([$id, $_POST["team$i"], $collegeName, $sports]);
      echo "runs     " . $result . "\n";
    } catch (PDOException $e) {
      echo $e;
    }

    $i = $i + 1;
  }

  $stmt = $pdo->prepare('INSERT INTO Participants (`Name`,`College`,`Sports`,`isCaptain`,`InfCode`) VALUES (?,?,?,?,?);');
  $result =  $stmt->execute([$captain, $collegeName, $sports, 1, 0]);
  $stmt2 = $pdo->prepare("SELECT * FROM Participants WHERE Name = ? AND isCaptain = 1 AND Sports = ?");
  $result = $stmt2->execute([$captain, $sports]);
  $data = $stmt2->fetch();
  $id = 3000 + $data['Id'];
  $id = "INFN_$id";
  $message = 'Captain ' . $i . '\n Name : ' . $captain . '   InfinitoId : ' . $id . '   Sport : ' . $sports . '\n\n\n' . $teamcode;
  $stmt3 = $pdo->prepare('INSERT INTO Captains (`Id`,`Name`,`Email`,`College`) VALUES (?,?,?,?)');
  $result2 = $stmt3->execute([$id, $captain, $captainsEmail, $collegeName]);
  if ($result && $result2) {
    require('./mail.php');
  } else {
    $status["registerparticipant"] = "Please register again";
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
            <li class="active"><a href="./index.php">Home</a></li>
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


      <form action="" method="POST">
        <div class="form-row" style="padding-top:40px">
          <div class="form-group col-md-6">
            <label for="captainName">Enter Captains Name</label>
            <input type="text" class="form-control" name="captainsName" placeholder="Name">
          </div>
          <div class="form-group col-md-6">
            <label for="emailId">Enter Captains Email</label>
            <input type="email" class="form-control" name="captainsEmail" placeholder="Email">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="College">Enter Your College Name</label>
            <input type="text" class="form-control" name="collegeName">
          </div>
          <div class="form-group col-md-6">
            <label for="Sports">Select your sport</label>
            <select name="sports" class="form-control">
              <option value="basketball">Basketball</option>
              <option value="football">Football</option>
              <option value="tabletennis">Table Tennis</option>
              <option value="volleyball">Volleyball</option>
              <option value="cricket">Cricket</option>
            </select>
          </div>
          <div class="form-group col-md-2">
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <label for="addMoreMembers">Add total members</label>
            <input type="button" onclick="addInput()" value=" + " style="font-size:20px">
            <div id="members">

            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name="teamReg">Register</button>
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