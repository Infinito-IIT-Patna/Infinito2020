<?php
session_start();
include "connect.php";

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $infid=$_SESSION['infid'];
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

    <title>Infinito 2k20</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="images/logo/logo.png" />

    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css?version=51" />
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css?version=51" />
    <link rel="stylesheet" type="text/css" href="css/countdown.css?version=51" />
    <link rel="stylesheet" type="text/css" href="css/team.css">

    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/team.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="../vendor/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl.theme.css"> -->

    <!-- Fix Internet Explorer ______________________________________-->

    <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script src="vendor/html5shiv.js"></script>
            <script src="vendor/respond.js"></script>
        <![endif]-->
</head>

<body style="overflow-x: hidden;max-width:100% ; background:#f3f3f3;">
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
                <div class="collapse navbar-collapse" id="navbar-collapse-1" style="background-color:#172134; margin-top:8px;">
                    <ul class="nav navbar-nav">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="#">Events</a></li>
                        <li class="active"><a href="./team.php">Team</a></li>
                        <li><a href="./gallery.php">Gallery</a></li>
                        <?php
                                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                                    echo '<li><a href="./profile.php">Profile</a></li>
                                          <li><a href="./logout.php">Logout</a></li>';
                                }
                                else{
                                    echo ' <li><a href="./registration.php">Register</a></li>
                                    <li><a href="./signIn.php">Sign In</a></li>';
                                }
                            ?>
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
        <section class="teams-section">
        <h4 class="group">Fest Coordinator</h4>
        <hr class="teamHr">
        <div class="container_team">
            <div class="card">
                <div class="imgBx">
                    <img src="team/rahul.jpeg">
                </div>
                <div class="contentBx">
                    <h2>Rahul Kumar</h2>
                    <div class="links">
                    <a href="tel:+91999999999">9999999999</a>
                    <div class="socialLinks">
                        <a href="#"><img src="images/social/linkedin-logo.png" alt="LinkedIn" srcset="" class="socialImg"></a>
                        <a href="#"><img src="images/social/linkedin-logo.png" alt="LinkedIn" srcset="" class="socialImg"></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="group">Fest Convenor</h4>
        <hr class="teamHr">
        <div class="container_team">
            <div class="card">
                <div class="imgBx">
                    <img src="team/rahul.jpeg">
                </div>
                <div class="contentBx">
                    <h2>Rahul Kumar</h2>
                    <div class="links">
                    <a href="tel:+91999999999">999999999</a>
                    <div class="socialLinks">
                        <a href="#"><img src="images/social/linkedin-logo.png" alt="LinkedIn" srcset="" class="socialImg"></a>
                        <a href="#"><img src="images/social/linkedin-logo.png" alt="LinkedIn" srcset="" class="socialImg"></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
            
        <h4 class="group">Coordinators</h4>
        <hr class="teamHr">
        <div class="techTeam">
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="team/rahul.jpeg">
                    </div>
                    <div class="contentBx">
                        <h2>Rahul Kumar</h2>
                        <div class="links">
                        <a href="tel:+91999999999">999999999</a>
                        <div class="socialLinks">
                            <a href="#"><img src="images/social/linkedin-logo.png" alt="LinkedIn" srcset="" class="socialImg"></a>
                            <a href="#"><img src="images/social/linkedin-logo.png" alt="LinkedIn" srcset="" class="socialImg"></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="team/rahul.jpeg">
                    </div>
                    <div class="contentBx">
                        <h2>Rahul Kumar</h2>
                        <div class="links">
                        <a href="tel:+91999999999">999999999</a>
                        <div class="socialLinks">
                            <a href="#"><img src="images/social/linkedin-logo.png" alt="LinkedIn" srcset="" class="socialImg"></a>
                            <a href="#"><img src="images/social/linkedin-logo.png" alt="LinkedIn" srcset="" class="socialImg"></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="team/rahul.jpeg">
                    </div>
                    <div class="contentBx">
                        <h2>Rahul Kumar</h2>
                        <div class="links">
                        <a href="tel:+91999999999">999999999</a>
                        <div class="socialLinks">
                            <a href="#"><img src="images/social/linkedin-logo.png" alt="LinkedIn" srcset="" class="socialImg"></a>
                            <a href="#"><img src="images/social/linkedin-logo.png" alt="LinkedIn" srcset="" class="socialImg"></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>    
    </section>

    <script>
        //formats the phone numbers in the format --> +91 xxx xxx xxxx
        let els = document.getElementsByClassName('phone');

        for (let i = 0; i < els.length; i++) {
            let el = els.item(i);
            let phone = el.innerHTML;
            
            if(phone.length != 0){
                phone = phone.substr(0, 3) + " " + phone.substr(3, 3) + " " + phone.substr(6);
                el.innerHTML = '<span class="bopn">( </span><a href="tel:'+ phone + '">' + '+91 ' + phone + '</a><span class="bcls"> )</span>';
            }
        }
    </script>

    <!--
	=====================================================
		Footer
	=====================================================
    -->

    <footer style="background-color: #232a34; border-top: 1px solid rgb(40,40,40)">
        <div class="container">
            <a href="index.php" class="logo"><img src="images/logo/logo.png" alt="Logo" style="border-radius:100%; height:56px; width:56px;"/></a>

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
    <!-- j Query -->
    <script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>

    <!-- Theme js -->
    <script type="text/javascript" src="js/theme.js"></script>
    <!-- /.main-page-wrapper -->
</body>

</html>
