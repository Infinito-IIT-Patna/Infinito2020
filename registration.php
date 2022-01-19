<?php
session_start();
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <?php 
    require('./templates/header.php');
    ?>
</head>

<body>
    <!--
	=============================================
		Theme Header
	==============================================
    -->
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
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav" style="margin-top:8px;">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./events.php">Events</a></li>
                        <li><a href="./team.php">Team</a></li>
                        <li><a href="./gallery.php">Gallery</a></li>
                        <li class="active"><a href="./registration.php">Register</a></li>
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

    <!-- /.theme-main-header -->
    <div class="container">
        <div id="register" style="min-height:100vh">
            <div class="theme-title">
                <h2>Register</h2>
            </div>
            <div class="list-group" style="margin-top:40px">
                <a href="#" class="list-group-item list-group-item-action active">
                    Steps For Registration
                </a>
                <a href="#" class="list-group-item list-group-item-action" style="color: #d8545d;">
                    Step 1: First register yourself by clicking the register button below. Make a note of Infinito ID displayed on the page after registration.
                </a>
                <a href="#" class="list-group-item list-group-item-action" style="color: #d8545d;">
                    Step 2: For registering in any event, go to the event section, Select the appropriate link and register using Infinito ID provided
                 </a>
                <a href="#" class="list-group-item list-group-item-action">
                    You will also receive a registration successful confirmation in the email ID provided. Your Infinito ID will also attached to the mail for future reference. 
                </a>
                <a href="#" class="list-group-item list-group-item-action ">
                    The Event Registration Fee is Rs. 20 per person and prices may vary.
                </a>
                <a href="#" class="list-group-item list-group-item-action ">
                    For any queries mail to it_support@infinito.org.in
                </a>
                
                <a href="#" class="list-group-item list-group-item-action ">
                    In order to participate in more than one event, you should register for all those events separately. 
                </a>
                <a href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" style="color: #d8545d;" class="list-group-item list-group-item-action" >
                   Pay the registration fees through QR code or UPI ID. Click here for Payment
                </a>

            </div>
            <div class="col" style="margin-top:3%; display:flex; flex-direction:column;" >
                <div class="col-lg-3 col-md-6 col-sm-10 col-xs-10" style="width:185px;">
                    <a class="tp-caption">
                        <a href="./registerPlayer.php" class="score-btn project-button hvr-bounce-to-right" style="padding:10px 15px;font-size:16px;border: #d8545d 2px solid;width:100%; text-align:center;">Sign Up Now!</a>
                    </a>
                </div>
                <?php
                                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                                    
                                }
                                else{
                                    echo '
                                    <div class="col-lg-3 col-md-6 col-sm-10 col-xs-10" style="width:185px;">
                                    <a class="tp-caption">
                                        <a href="./signIn.php" class="score-btn project-button hvr-bounce-to-right" style="padding:10px 15px;font-size:16px;border: #d8545d 2px solid; width:100%; text-align:center;" >Sign In</a>
                                    </a>
                                    </div>';
                                }
                            ?>
                
            </div>
        </div>

    </div>

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
    <!-- <footer>
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
    </footer> -->


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
    <!-- Js File_________________________________ -->

    <!-- j Query -->
    <script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>

    <!-- Theme js -->
    <script type="text/javascript" src="js/theme.js"></script>

    </div>
    <!-- /.main-page-wrapper -->

</body>
</html>