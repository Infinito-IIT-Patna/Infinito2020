<?php
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    session_abort();
    header("Location: ./adminLogin.php");
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
                        <li><a href="./adminScore.php">Admin Score</a></li>
                        <li><a href="./adminPost.php">Admin Post</a></li>
                        <li><a href="./adminFee.php">Admin Fee</a></li>  
                        <li><a href="./adminData.php">Admin Data</a></li>   
                        <li><a href="./adminLogin.php">Admin Login</a></li>                                             
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <!-- /.theme-feature-menu -->
        </div>
    </div>
    <?php
    session_start();
    if (isset($_SESSION['isVerified'])) {
        require('../connect.php');
        $stmt = $pdo->prepare("SELECT * FROM participants a, registered b WHERE a.InfCode = b.InfCode");
        $stmt->execute();
        $search_result = $stmt->fetchAll();

        if(isset($_POST['gameSubmit'])){
            $stmt = $pdo->prepare("SELECT * FROM participants a , registered b WHERE Sport = ? AND a.InfCode = b.InfCode AND isCaptain IS NOT NULL");
            $stmt->execute([$_POST['game']]);
            $search_result = $stmt->fetchAll();
        }
        if(isset($_POST['collegeSubmit'])){
            $stmt = $pdo->prepare("SELECT * FROM participants as a, registered as b WHERE College = ? AND isCaptain IS NOT NULL AND a.InfCode = b.InfCode");
            $stmt->execute([$_POST['college']]);
            $search_result = $stmt->fetchAll();
        }
          if(isset($_POST['teamSubmit'])){
              $stmt = $pdo->prepare("SELECT College, Sport FROM participants a , registered b WHERE a.InfCode = ? AND a.InfCode = b.InfCode");
              $stmt->execute([$_POST['team']]);
              $data = $stmt->fetch();
              $college = $data['College'];
              $sport = $data['Sport'];
              $sql = $pdo->prepare("SELECT DISTINCT Name,College,isCaptain,Email, participants.InfCode ,isConfirmed,Phone,Gender,CollegeId FROM participants  JOIN registered  WHERE College = ? AND Sport = ?");
              $sql->execute([$college,$sport]);
              $search_result = $sql->fetchAll();
            }
        ?>
        <div class="container" style="height:100vh;">
            <div class="col-lg-3 col-md-3">
                <form action="" method="POST" style="margin-top:20px;">
                    <div class="form-group">
                        <label for="Search By College">College</label>
                        <input type="text" name="college" required class="form-control">
                        <br>
                        <input type="submit" name="collegeSubmit" value="Search" class="btn btn-primary" >
                    </div>
                </form>
                <form action="" method="POST" style="margin-top:20px;">
                    <div class="form-group">
                        <label for="GET BY GAME">Search Entries by Game</label>
                        <input type="text" name="game" required class="form-control">
                        <br>
                        <input type="submit" name="gameSubmit" value="Search" class="btn btn-primary" >
                    </div>
                </form>
                <form action="" method="POST" style="margin-top:20px;">
                    <div class="form-group">
                        <label for="GET team">Search For Team under captain Id</label>
                        <input type="text" name="team" required class="form-control">
                        <br>
                        <input type="submit" name="teamSubmit" value="Search" class="btn btn-primary" >
                    </div>
                </form>
            </div>
            <div class="col-lg-9 col-md-9">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">College</th>
                            <th scope="col">Sport</th>
                            <th scope="col">College ID</th>
                            <th scope="col">Infinito ID</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Gender</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $count =1;
                        foreach($search_result as $data) {
                        ?>
                        <tr>
                            <td><?php echo $count ?></td>
                            <td><?php echo $data['Name'] ?></td>
                            <td><?php echo $data['College'] ?></td>
                            <td><?php echo $data['Sport'] ?></td>
                            <td><?php echo $data['CollegeId']  ?></td>
                            <td><?php echo $data['InfCode']  ?></td>
                            <td><?php echo $data['Email']  ?></td>
                            <td><?php echo $data['Phone']  ?></td>
                            <td><?php echo $data['Gender'] ?></td>
                        </tr>
                        <?php $count++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <form action="" method="POST" style="margin-top:5%;">
                <input class="form-control" type="submit" name="logout" value="Logout">
        </form>
    <?php  }
     else {
        echo "Login as Admin";
    }
    ?>
    <!--
			=====================================================
				Footer
			=====================================================
			-->
    <!-- <footer style="margin-top: 100%;">
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
    </footer> -->


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
