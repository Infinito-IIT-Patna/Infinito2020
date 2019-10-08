<?php
$alert = "";
if(isset($_POST['submit'])){
$username = $_POST['name'];
$password = $_POST['password'];
require('../details.php');
if($username == $USERNAME && $password == $PASSWORD)
{
    session_start();
    $_SESSION['isVerified'] = 'yes';
    header("Location: ./adminPage.php");

}
else
{
    $alert = "Wrong password or username";
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
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Infinito 2k19</title>

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="56x56" href="../images/logo/logo.png" />

  <!-- Main style sheet -->
  <link rel="stylesheet" type="text/css" href="../css/style.css?version=51" />
  <!-- responsive style sheet -->
  <link rel="stylesheet" type="text/css" href="../css/responsive.css?version=51" />
  <link rel="stylesheet" type="text/css" href="../css/countdown.css?version=51" />

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous" />

  <!-- Fix Internet Explorer ______________________________________-->

  <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script src="vendor/html5shiv.js"></script>
      <script src="vendor/respond.js"></script>
    <![endif]-->
</head>
<body>
<div class="bac">
    <div class="container" style="padding:10px 0">
      <a href="../index.php" class="logo float-left tran4s"><img src="../images/logo/logo.png" alt="Logo" style="border-radius:100%" /></a>

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
            <li class="active"><a href="../index.php">Home</a></li>
            <li><a href="../team.php">Team</a></li>
            <li><a href="../gallery.php">Gallery</a></li>
            <li><a href="../registration.php">Register</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </nav>
      <!-- /.theme-feature-menu -->
    </div>
  </div>


<div class="container" style="padding:40px 0 0 0;height:100vh">
<?php if($alert != ""){?>
<div class="alert alert-warning">
   <?php echo $alert ?>
</div>
<?php }?>

<form action="" method="POST">
  <div class="form-group">
    <label for="email">Username:</label>
    <input type="username" class="form-control" id="username" name="name">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="password">
  </div>
  <input type="submit" class="btn btn-primary" name="submit">
</form>
</div>

<div class="alert alert-warning">
    <?php echo $alert ?>
</div>



      <!--
			=====================================================
				Footer
			=====================================================
			-->
  <footer>
    <div class="container">
      <a href="index.php" class="logo"><img src="../images/logo/logo.png" alt="Logo" style="border-radius:100%" /></a>

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
  <!-- Js File_________________________________ -->

  <!-- j Query -->
  <script type="text/javascript" src="../vendor/jquery.2.2.3.min.js"></script>
  <!-- Bootstrap JS -->
  <script type="text/javascript" src="../vendor/bootstrap/bootstrap.min.js"></script>

  <!-- Theme js -->
  <script type="text/javascript" src="../js/theme.js"></script>

  </div>
  <!-- /.main-page-wrapper -->
</body>

</html>
