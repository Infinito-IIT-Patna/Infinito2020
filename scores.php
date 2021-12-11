<!DOCTYPE html>
<html lang="en">

<?php
require('./templates/header.php');
?>

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
                        <li class="active"><a href="#home">Home</a></li>
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

    <!-- /.theme-main-header -->
    <div class="container">
        <div id="content">
            <div class="theme-title">
                <h2>Scores</h2>
            </div>
            <div class="score-container">
                <?php
                require('./pullScores.php');
                while ($data = $stmt->fetch()) { ?>
                    <div class="col-lg-4 offset-lg-2 col-md-4 col-sm-2 sol-xs-1">
                        <div class=" score-box">
                            <h4 ><?php echo  $data['Game'] ?></h4>
                            <div>
                                <span><?php echo   $data['Team_1'] ?> Vs <?php echo   $data['Team_2'] ?></span>
                            </div>
                            <div>
                                <span><?php echo   $data['Score'] ?></span>
                            </div>
                            <div>
                                <span><?php echo   $data['Winner'] ?></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div id="content">
            <div class="theme-title">
                <h2>Athletics</h2>
            </div>
            <div class="score-container">
                <?php
                $stmt = $pdo->query("SELECT * FROM athletics ORDER BY date");
                while ($data = $stmt->fetch()) { ?>
                    <div class="col-lg-4 offset-lg-2 col-md-4 col-sm-2 sol-xs-1">
                        <div class=" score-box">
                            <h4 >Race: <?php echo  $data['RaceName'] ?></h4>
                            <div>
                                <h4>Winners</h4>
                                <ul class="winnersList">
                                    <li> <span style="color:#d63e4d">1st Place:-</span>   <?php echo $data['Winner'] ?></li>
                                    <li> <span style="color:#d63e4d"> 2nd Place:-</span>  <?php echo $data['FirstRunnerUp'] ?></li>
                                    <li> <span style="color:#d63e4d"> 3rd Place:-</span> <?php echo $data['SecondRunnerUp'] ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php } ?>
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
    require('./templates/footer.php')
    ?>

</body>
</html>