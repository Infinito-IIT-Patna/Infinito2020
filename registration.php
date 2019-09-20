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
  $teamcode='';
  $captaincode='';
  while (isset($_POST["team$i"])&&strlen($_POST["team$i"]) !== 0) {
    try{
      $stmt = $pdo->prepare('INSERT INTO Participants (`Name`,`College`,`Sports`,`isCaptain`,`InfCode`) VALUES (?,?,?,?,?);');
      $result =  $stmt->execute([$_POST["team$i"], $collegeName,$sports,0,0]);
      $stmt2 = $pdo->prepare('SELECT * FROM Participants WHERE Name = ? AND College = ? AND Sports = ?');
      $result =  $stmt2->execute([$_POST["team$i"], $collegeName,$sports]);
      $data = $stmt2->fetch();
      $id = 3000 + $data['Id'];
      $id = "INFN_$id";
      $partname=$data['Name'];
      $teamcode.='Team Member '.$i.'\n Name : '.$partname.'   InfinitoId : '.$id.'\n\n';
      $stmt3 = $pdo->prepare('UPDATE Participants SET InfCode = ? WHERE Name = ? AND College = ? AND Sports = ?');
      $result =  $stmt3->execute([$id,$_POST["team$i"], $collegeName,$sports]);
      echo "runs     ".$result."\n";
    }catch(PDOException $e){
      echo $e;
    }

    $i = $i +1 ;
  }

  $stmt = $pdo->prepare('INSERT INTO Participants (`Name`,`College`,`Sports`,`isCaptain`,`InfCode`) VALUES (?,?,?,?,?);');
  $result =  $stmt->execute([$captain, $collegeName,$sports,1,0]);
  $stmt2 = $pdo->prepare("SELECT * FROM Participants WHERE Name = ? AND isCaptain = 1 AND Sports = ?");
  $result = $stmt2->execute([$captain,$sports]);
  $data = $stmt2->fetch();
  $id = 3000 + $data['Id'];
  $id = "INFN_$id";
  $message='Captain '.$i.'\n Name : '.$captain.'   InfinitoId : '.$id.'   Sport : '.$sports.'\n\n\n'.$teamcode;
  $stmt3 = $pdo->prepare('INSERT INTO Captains (`Id`,`Name`,`Email`,`College`) VALUES (?,?,?,?)');
  $result2 = $stmt3->execute([$id,$captain,$captainsEmail,$collegeName]);
  if($result && $result2){
    require('./mail.php');
  }
  else{
    $status["registerparticipant"] = "Please register again";
  }
}
?>


<?php
require('./templates/header.php');
?>
<meta name="viewport" content="width=device-width" , initial-scale="1.0">

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
  <div id="register">
    <!-- <form action="" method="post">
      <label for="College"> College Name</label>
      <input type="text" placeholder="Enter College Name" name="collegeName">
      <br>
      <label for="Sports">Select your sport</label>
      <select name="sports" class="form-control">
        <option value="basketball">Basketball</option>
        <option value="football">Football</option>
        <option value="tabletennis">Table Tennis</option>
        <option value="volleyball">Volleyball</option>
        <option value="volleyball">Volleyball</option>
        <option value="cricket">Cricket</option>
      </select>
      <br>
      <label for="captainName">Enter Captains Name</label>
      <input type="text" name="captainsName"><br>
      <label for="emailId">Enter Captains Email</label>
      <input type="text" name="captainsEmail"><br>
      <label for="addMoreMembers">Add total members</label>
      <input type="button" onclick="addInput()" value=" + " style="font-size:20px">
      <div id="members">

      </div>
      <input type="submit" value="Register" name="teamReg">
    </form> -->

    <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="captainName">Enter Captains Name</label>
      <input type="text" class="form-control" name="captainName" placeholder="Name">
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
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
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