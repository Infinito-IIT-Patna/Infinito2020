<?php
include "signinHandle.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="images/logo/logo.png" />

    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css?version=51" />
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous" />
    <link rel="stylesheet" href="../vendor/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl.theme.css">
    <link rel="stylesheet" href="css/registerPlayer.css">
    <?php
    require('./templates/header.php');
    ?>
</head>

<body>
    <!-- Navigation bar -->
    <div class="bac" style="background: #172134; position:fixed; width:100%; top:0px; z-index:100; margin-bottom:100px;">
        <div class="container" style="padding:10px 0">
            <a href="index.php" class="logo float-left tran4s"><img src="images/logo/logo.png" alt="Logo" style="border-radius:100%; height:56px; width:56px;" /></a>

            <!-- ========================= Theme Feature Page Menu ======================= -->
            <nav class="navbar float-right theme-main-menu one-page-menu">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false" style="margin-top:8px;">
                        <span class="sr-only">Toggle navigation</span>
                        Menu
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse-1" style="margin-top:10px">
                    <ul class="nav navbar-nav">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="./team.php">Team</a></li>
                        <li><a href="./gallery.php">Gallery</a></li>
                        <li><a href="./registration.php">Register</a></li>
                        <li class="active"><a href="./signIn.php">Sign In</a></li>
                        
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <!-- /.theme-feature-menu -->
        </div>
    </div>

    

        <?php

        if ( $showerror==true) {
            echo '<div class="container">
            <div class="alert alert-success alert-dismissible show" role="alert" style="position:relative; top:75px; width:100%; color:red; background: #ff000020;" >
        <strong> '.$showerror.' </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        </div>
        </div>';
         }

        ?>
   

    <!-- Confirmation Form -->
    <div class="container" style="min-height:70vh;">
        <div id="register" style="padding:5%;">
            <div class="theme-title" style="margin-bottom:40px;margin-top:90px;">
                <h2 style="margin-top:0px;">Sign In</h2>
                <!-- <p style="width:100%;">An email has been sent on your registered email containing your <strong>Infinito ID</strong>. Please enter it here.</p> -->
            </div>
            <div class="signInForm">
                <form method="POST" action="signIn.php">
                    <div class="form-group row" style="width:80%; margin-left:auto; margin-right:auto;">
                        <label for="infid" class="col-sm-10 col-form-label" style="font-size:1.5rem;">Infinito ID</label>
                        <div class="col-sm-10" style="width:100%;">
                            <input type="text" class="form-control-new" id="infid" name="infid" placeholder="Enter Your Infinito ID *" style="width:100%;" required>
                        </div>
                    </div>
                    <div class="form-group row" style="width:80%; margin-left:auto; margin-right:auto;">
                        <label for="pass" class="col-sm-10 col-form-label" style="font-size:1.5rem;">Password</label>
                        <div class="col-sm-10" style="width:100%;">
                            <input type="password" class="form-control-new" id="pass" name="password" placeholder="Enter Your Password *" style="width:100%;" required>
                        </div>
                    </div>

                    <div class="form-group row" style="width:80%; margin-left:auto; margin-right:auto;">
                        <div class="col-sm-10 signInBtn">
                            <button type="submit" class="btn btn-primary" name="confirmation" style="width:100px; margin-top:10px;">Sign In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <a href="./registration.php" style="width:100%; text-align:center;">Create a New Account</a>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <a href="index.php" class="logo"><img src="images/logo/logo.png" alt="Logo" style="border-radius:100%; height:56px; width:56px;" /></a>

            <ul>
                <li>
                    <a href="https://www.facebook.com/InfinitoIITPatna/" target="_blank" class="tran3s round-border"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/company/infinito-iit-patna" target="_blank" class="tran3s round-border"><i class="fab fa-linkedin"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/infinito_iitp/" target="_blank" class="tran3s round-border"><i class="fab fa-instagram"></i></a>
                </li>

            </ul>
        </div>
    </footer>


    <!--
    =============================================
		Loading Transition
    ==============================================
    -->
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
    require('./templates/footer.php');
    ?>


    <script>
        var slideIndex = 0;
        showSlides();



        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>

</body>

</html>