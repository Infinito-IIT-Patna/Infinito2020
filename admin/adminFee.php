<?php
require('../connect.php');
ini_set('display_errors', 1);
// For Posting Updates
$state['updatePost'] = "";
$state['athleticsPost'] = "";
session_start();
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    session_abort();
    header("Location: ./adminLogin.php");
}

//For Updating Fees

$state['feeSubmit'] = "";
if (isset($_POST['feeSubmit'])) {
    $stmt = $pdo->prepare("UPDATE participants SET isConfirmed = 1 WHERE InfCode = ?");
    $res =  $stmt->execute([$_POST['infinitoID']]);
    if ($res) {
        $state['feeSubmit'] = "DATA UPDATED IN TABLE";
    } else
        $state['feeSubmit'] = "DATA NOT SUBMITTED";
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
    <!--
			=============================================
				Theme Header
			==============================================
      -->
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
                        <li><a href="adminData.php">Admin Data</a></li>
                        <li><a href="./collegeData.php">College Data</a></li>
                        <li><a href="./adminScore.php">Admin Score</a></li>
                        <li><a href="./adminPost.php">Admin Post</a></li>
                        <!-- <li><a href="./adminLogin.php">Admin Login</a></li>                         -->
                        <li><a href="../registration.php">Register</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <!-- /.theme-feature-menu -->
        </div>
    </div>


    <?php
    if (isset($_SESSION['isVerified'])) { ?>
        <div class="container" style="padding:40px 0  0 0">
            <h6 style="padding:10px 0 10px 0;"><?php echo $state['feeSubmit'] ?></h6>
            <h6 style="padding:10px 0 10px 0;">Fee Update</h6>
            <form action="" method="POST">
                <label for="InfintoId">Infinito Id</label>
                <br>
                <input class="form-control" type="text" name="infinitoID" placeholder="Infinito Id">
                <input class="form-control" type="submit" name="feeSubmit" value="Submit">
            </form>

            <form action="" method="POST" style="margin-top:5%;">
                <input class="form-control" type="submit" name="logout" value="Logout">
            </form>
        </div>
    <?php
        session_abort();
        session_unset();
    } else {

        echo "Login first";
    }
    ?>
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
