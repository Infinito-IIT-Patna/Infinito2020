<?php
require('./templates/header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Infinito 2k20</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="images/logo/logo.png" />

    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css?version=51" />
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css?version=51" />
    <link rel="stylesheet" type="text/css" href="css/countdown.css?version=51" />



    <link type="text/css" rel="stylesheet" href="css/error.css" />


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="../vendor/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl.theme.css"> -->

    <!-- Fix Internet Explorer ______________________________________-->

    <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script src="vendor/html5shiv.js"></script>
            <script src="vendor/respond.js"></script>
        <![endif]-->
</head>

<body style="overflow-x: hidden; max-width:100%">

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
                        <li><a href="./index.php">Home</a></li>
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


    <div id="cover">

        <div class="col-lg12 col-md-12 col-sm-12 col-xs-12" id="main">
            <div class="notfound-404">
                <h1>4<span></span>4</h1>
            </div>
            <h2>Oops! Page Not Found</h2>
            <p>
                Sorry, but the page you are looking for does not exist,
                has been removed or temporarily unavailable.
            </p>
            <div id="home-button">
                <a href="./index.php" id="hero" style="color: white">
                    <i style="padding-right: 10px;" class="fa fa-home"></i>
                    Home
                </a>
            </div>

        </div>

    </div>


    <!-- Scroll Top Button -->
    <button class="scroll-top tran3s p-color-bg">
        <i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i>
    </button>
    <!-- j Query -->
    <script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>

    <!-- Theme js -->
    <script type="text/javascript" src="js/theme.js"></script>
    <!-- /.main-page-wrapper -->
</body>

</html>