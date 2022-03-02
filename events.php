<?php
session_start();
include "connect.php";
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $infid = $_SESSION['infid'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Infinito 2k21</title>
    <?php
    require('./templates/header.php');
    ?>
</head>

<body>
    <div class="main-page-wrapper">
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
                        <li class="active"><a href="./events.php">Events</a></li>
                        <li><a href="./team.php">Team</a></li>
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
        
        

        <!--
		=====================================================
			events Section
		=====================================================
		-->
        <div id="events-section" style="background:rgb(243, 243, 243)">
            <div class="container">
                <div class="theme-title">
                    <h2>EVENTS</h2>
                    
                </div>
                <!-- /.theme-title -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-events-content chess">
                            <div class="icon-heading tran3s event-heading">
                                <div class="icon tran3s">
                                    <i class="fas fa-chess-knight" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">Chess Tournament</a></h6>
                            </div>
                            <p>
                                “Play the opening like a book, the middlegame like a magician, and the endgame like a machine.” <br>– Rudolph Spielmann
                            </p>
                            <p>&nbsp;</p>
                            <div class="events-tp-caption">
                                <a href="gameReg.php" class="project-button hvr-bounce-to-right">Register</a>
                                <!-- <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" class="project-button hvr-bounce-to-right" target="blank">Payment</a> -->
                            </div>
                        </div>
                        <!-- /.single-events-content -->
                    </div>
                    <!-- /.col-lg -->

                    <div class="col-lg-4">
                        <div class="single-events-content bgmi">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s">
                                    <i class="fas fa-gamepad" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">BGMI Tournament</a></h6>
                            </div>
                            <p>
                                "Watch out. These boys have got a bit of an arsenal and they don't mind using it!"
                            </p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <div class="events-tp-caption">
                                <a href="gameReg.php" class="project-button hvr-bounce-to-right">Register</a>
                                <!-- <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" target="blank" class="project-button hvr-bounce-to-right">Payment</a> -->
                            </div>
                        </div>
                        <!-- /.single-events-content -->
                    </div>
                    <!-- /.col-lg -->

                    <div class="col-lg-4">
                        <div class="single-events-content cod">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s">
                                    <i class="fas fa-gamepad" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">COD MOBILE Tournament</a></h6>
                            </div>
                            <p>
                                "We must be prepared to make heroic sacrifices for the cause of peace that we make ungrudgingly for the cause of war. There is no task that is more important or closer to my heart."
                                — Albert Einstein
                            </p>
                            <div class="events-tp-caption">
                                <a href="gameReg.php" class="project-button hvr-bounce-to-right">Register</a>
                                <!-- <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" class="project-button hvr-bounce-to-right" target="blank">Payment</a> -->
                            </div>
                        </div>
                        <!-- /.single-events-content -->
                    </div>
                    <!-- /.col-lg -->
                    <div class="col-lg-4">
                        <div class="single-events-content valorant">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s">
                                    <i class="fas fa-gamepad" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">Valorant</a></h6>
                            </div>
                            <p>"New fight, new tactics, keep it fresh yeah?"</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <div class="events-tp-caption">
                                <a href="gameReg.php" class="project-button hvr-bounce-to-right">Register</a>
                                <!-- <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" target="blank" class="project-button hvr-bounce-to-right">Payment</a> -->
                            </div>
                        </div>
                        <!-- /.single-events-content -->
                    </div>
                    <!-- /.col-lg -->

                    <div class="col-lg-4">
                        <div class="single-events-content auction">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s">
                                    <i class="fas fa-gavel" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">IPL Auction</a></h6>
                            </div>
                            <p>"Bidding wars! Let the fun begin!"</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <div class="events-tp-caption">
                                <a href="gameReg.php" class="project-button hvr-bounce-to-right">Register</a>
                                <!-- <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" target="blank" class="project-button hvr-bounce-to-right">Payment</a> -->

                            </div>
                        </div>
                        <!-- /.single-events-content -->
                    </div>
                    <!-- /.col-lg -->

                    <div class="col-lg-4">
                        <div class="single-events-content quiz">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s">
                                    <i class="fas fa-question" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">Sports Quiz</a></h6>
                            </div>
                            <p>Progress takes place outside comfort zone</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <div class="events-tp-caption">
                                <a href="gameReg.php" class="project-button hvr-bounce-to-right">Register</a>
                                <!-- <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" target="blank" class="project-button hvr-bounce-to-right">Payment</a> -->

                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg -->
                    <div class="col-lg-4"> 
                    </div>
                    <!-- /.col-lg -->
                    <!-- <div class="col-lg-4"> 
                        <div class="single-events-content meme">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s">
                                    <i class="fas fa-laugh-squint" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">MEME Battle</a></h6>
                            </div>
                            <p>If you have the power to make someone happy, do that. The world needs more of that.</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <div class="events-tp-caption">
                                <a href="gameReg.php" class="project-button hvr-bounce-to-right">Register</a> -->
                                <!-- <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" target="blank" class="project-button hvr-bounce-to-right">Payment</a> -->

                            <!-- </div>
                        </div>
                    </div> -->
                    <!-- /.col-lg -->
                    <div class="col-lg-4"> 
                    </div>
                    <!-- /.col-lg -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
                          
        </div>
        <!-- /#events-section -->

        
        <?php
        require('./templates/footer.php');
        ?>


       



</body>

</html>