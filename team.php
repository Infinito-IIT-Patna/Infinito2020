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
    <?php
    require('./templates/header.php');
    ?>
</head>

<head>
    <meta charset="UTF-8" />
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Team</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="images/logo/logo.png" />

    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/countdown.css" />
    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
        crossorigin="anonymous"
    />
    
    <link rel="stylesheet" href="css/team.css">
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
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false" >
                        <span class="sr-only">Toggle navigation</span>
                        Menu
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse-1" style="margin-top:8px;">
                    <ul class="nav navbar-nav">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="#">Events</a></li>
                        <li class="active"><a href="./team.php">Team</a></li>
                        <li><a href="./gallery.php">Gallery</a></li>
                        <li><a href="./registration.php">Register</a></li>
                        <?php
                                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                                    echo '<li><a href="./profile.php">Profile</a></li>
                                          <li><a href="./logout.php">Logout</a></li>';
                                }
                                else{
                                    echo '
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
            <h2>Meet Our Team</h2>
        </div>
        <section class="teams-section">
        <h4 class="group">Overall Head</h4>
        <hr class="teamHr">
        <div class="container_team">
            <div class="card">
                <div class="imgBx">
                    <img src="./images/team/shivanshu.jpg">
                </div>
                <div class="contentBx">
                    <h2>Shivanshu Sanjeev</h2>
                    <p>Fest Coordinator</p>
                    <div class="links">
                    <div class="socialLinks">
                        <a href="https://www.linkedin.com/in/shivanshu-sanjeev/"target="_blank"><i class="fa fa-linkedin social_icon"></i></a>
                        <a href="https://m.facebook.com/shivanshu.sanjeev.5?ref=bookmarks"target="_blank"><i class="fa fa-facebook social_icon"></i></a>
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
                        <img src="./images/team/sakshi.jpeg">
                    </div>
                    <div class="contentBx">
                        <h2>Sakshi Singh</h2>
                        <p>Marketing and Sponsorship</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/sakshi-singh-560895194"target="_blank"><i class="fa fa-linkedin social_icon"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100040510351336"target="_blank"><i class="fa fa-facebook social_icon"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Apoorva.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Apoorva Dwivedi</h2>
                        <p>Media and Public Relations</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/apoodwivedi/"target="_blank"><i class="fa fa-linkedin social_icon"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100015250869481"target="_blank"><i class="fa fa-facebook social_icon"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/SrajanKhandelwal.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Srajan Khandelwal</h2>
                        <p>Hospitality</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/srajan-khandelwal-b32893194/"target="_blank"><i class="fa fa-linkedin social_icon"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100009383554493"target="_blank"><i class="fa fa-facebook social_icon"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/yash.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Yash Sharma</h2>
                        <p>Web and App</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/yashsharma8415/" target="_blank"><i class="fa fa-linkedin social_icon"></i></a>
                            <a href="https://www.facebook.com/yashsharma8415/" target="_blank"><i class="fa fa-facebook social_icon"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/ShivamSahu.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Shivam Sahu</h2>
                        <p>Web and App</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/shivam-sahu-503/" target="_blank"><i class="fa fa-linkedin social_icon"></i></a>
                            <a href="https://www.facebook.com/shivam.sahu.33/" target="_blank"><i class="fa fa-facebook social_icon"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/RohitMeena.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Rohit Meena</h2>
                        <p>Events</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/rohit-meena-b406181b6"target="_blank"><i class="fa fa-linkedin social_icon"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100009587360008"target="_blank"><i class="fa fa-facebook social_icon"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Tanishq.jpeg">
                    </div>
                    <div class="contentBx">
                        <h2>Tanishq Malu</h2>
                        <p>Media and Public Relationship</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/tanishqmalu/"target="_blank"><i class="fa fa-linkedin social_icon"></i></a>
                            <a href="https://www.facebook.com/tanishq.malu.39/"target="_blank"><i class="fa fa-facebook social_icon"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/sajal.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Sajal Kumar</h2>
                        <p>Creatives & Design</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/sajalkumar247/" target="_blank"target="_blank"><i class="fa fa-linkedin social_icon"></i></a>
                            <a href="https://www.facebook.com/people/Sajal-Kumar/100039583697847/" target="_blank"target="_blank"><i class="fa fa-facebook social_icon"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/DivyanshBhardwaj.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Divyansh Bhardwaj</h2>
                        <p>Registration</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/divyansh-bhardwaj-016231194/" target="_blank"target="_blank"><i class="fa fa-linkedin social_icon"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100004218015015" target="_blank"target="_blank"><i class="fa fa-facebook social_icon"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div> 

        <div class="twoCards">
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/IshitaSingh.jpeg">
                    </div>
                    <div class="contentBx">
                        <h2>Ishita Singh</h2>
                        <p>Marketing and Sponsorship</p>
                        <div class="links">
                        
                            <div class="socialLinks">
                                <a href="https://www.linkedin.com/in/ishita-singh-0911971b4/"target="_blank"><i class="fa fa-linkedin social_icon"></i></a>
                                <a href="https://www.facebook.com/ishita.singh.39142072"target="_blank"><i class="fa fa-facebook social_icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Ritwick.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Ritwick Singh</h2>
                        <p>Events</p>
                        <div class="links">
                        
                            <div class="socialLinks">
                                <a href="https://www.linkedin.com/in/ritwick-singh-baghel-3823281b4/"target="_blank"><i class="fa fa-linkedin social_icon"></i></a>
                                <a href="https://www.facebook.com/ritwick.singh.73"target="_blank"><i class="fa fa-facebook social_icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

            

        <!--
	=====================================================
		Footer
	=====================================================
    -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 col-first">
                    <a href="index.php" class="logo"><img src="images/logo/logo.png" alt="Logo" class="footer-logo"/></a>
                    <div class="footer-about">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                    </div>
                    <div class="section-heading">
                        <h3>Follow us</h3>
                    </div>
    
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/InfinitoIITPatna/">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/infinito_iitp">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/infinito-iit-patna">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/infinito_iitp/">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-4 col-second">
                    <div class="contact-us">
                        <div class="contact-icon">
                            <i class="fa fa-map-o" aria-hidden="true"></i>
                        </div>
                        <div class="contact-info">
                            <h3>Bihta, Patna, Bihar</h3>
                            <p>IIT Patna</p>
                        </div>
                    </div>
                    <div class="contact-us">
                        <div class="contact-icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="contact-info">
                            <h3>+91 98018 84535</h3>
                            <p>Give us a call</p>
                        </div>
                    </div>
                    <div class="contact-us">
                        <div class="contact-icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="contact-info">
                            <h3>iitpsports@gmail.com</h3>
                            <p>Mail us here</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 col-last">
                
                    <div class="section-heading">
                        <h3>Useful Links</h3>
                    </div>
                    <ul>
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">Events</a>
                        </li>
                        <li>
                            <a href="#">Sponsors</a>
                        </li>
                        <li>
                            <a href="#">Our Team</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright &copy; 2021 Infinito</p>
        </div>
    </footer>
    <!-- <footer style="background-color: #232a34; border-top: 1px solid rgb(40,40,40)">
        <div class="container">
            <a href="index.php" class="logo"><img src="images/logo/logo.png" alt="Logo" style="border-radius:100%; height:56px; width:56px;"/></a>

            <ul>
                <li>
                    <a href="https://www.facebook.com/InfinitoIITPatna/" target="_blank" class="tran3s round-border"target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/company/infinito-iit-patna" target="_blank" class="tran3s round-border"target="_blank"><i class="fab fa-linkedin"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/infinito_iitp/" target="_blank" class="tran3s round-border"target="_blank"><i class="fab fa-instagram"></i></a>
                </li>

            </ul>
        </div>
    </footer> -->

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