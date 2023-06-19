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
    <title>Events</title>
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
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
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

                            <?php
                            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                                echo '<li><a href="./profile.php">Profile</a></li>
                                          <li><a href="./logout.php">Logout</a></li>';
                            } else {
                                echo '
                                    <li><a href="./registration.php">Register</a></li>
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




        <!-- OFFLINE EVENTS********************************************* -->
        <!--============= -->


        <div id="events-section" style="background:rgb(243, 243, 243)">
            <div class="container">
                <div class="theme-title">
                    <h2>OFFLINE EVENTS</h2>


                </div>
                <div class="confButton" style="display:flex; justify-content:center;">
                    <div class="col-lg-3 col-md-6 col-sm-10 col-xs-10" style="width:200px;">
                        <a class="tp-caption">
                            <a href="https://linktr.ee/infinito2k22" class="score-btn project-button hvr-bounce-to-right" style="padding:10px 15px;font-size:16px;border: #d8545d 2px solid;width:100%; text-align:center;" target="_blank">Register</a>

                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-10 col-xs-10" style="width:200px;">
                        <a class="tp-caption">
                            <a href="https://drive.google.com/drive/folders/1vztaZoEEOI1qitcUYxvw4w3gFEFzvd5u" class="score-btn project-button hvr-bounce-to-right" style="padding:10px 15px;font-size:16px;border: #d8545d 2px solid;width:100%; text-align:center;" target="_blank">Rulebook</a>

                        </a>
                    </div>
                </div>
                <!-- <div class="register"> 
                <div class="events-tp-caption">
                                <a href="https://linktr.ee/infinito2k22" target="blank" class="project-button hvr-bounce-to-right">Register</a>
                                <!-- <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" target="blank" class="project-button hvr-bounce-to-right">Payment</a> -->
                <!-- </div> -->
                <!-- </div> -->
                <!-- /.theme-title -->

                <!-- CRICKET------------- -->


                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-events-content cricket">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s">
                                    <i class="fas fa-gamepad" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">Cricket</a></h6>
                            </div>
                            <p>
                                “When people throw stones at you, you turn them into milestones.” – Sourav Ganguly
                            </p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <!-- <p>&nbsp;</p> -->
                            <div class="events-tp-caption">
                                <!-- <a href="" class="project-button hvr-bounce-to-right">Register</a> -->
                                <!-- <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" target="blank" class="project-button hvr-bounce-to-right">Payment</a> -->
                            </div>
                        </div>
                        <!-- /.single-events-content -->
                    </div>
                    <!-- /.col-lg -->



                    <!-- FOOTBALL================================== -->


                    <div class="col-lg-4">
                        <div class="single-events-content football">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s">
                                    <i class="fas fa-gamepad" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">Football</a></h6>
                            </div>
                            <p>
                                “You have to fight to reach your dream. You have to sacrifice and work hard for it.” – Lionel Messi
                            </p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <div class="events-tp-caption">
                                <!-- <a href="" class="project-button hvr-bounce-to-right">Register</a> -->
                                <!-- <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" class="project-button hvr-bounce-to-right" target="blank">Payment</a> -->
                            </div>
                        </div>
                        <!-- /.single-events-content -->
                    </div>
                    <!-- /.col-lg -->




                    <!-- VOLLEY BALL*********************** -->


                    <div class="col-lg-4">
                        <div class="single-events-content volleyball">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s">
                                    <i class="fas fa-gamepad" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">Volleyball</a></h6>
                            </div>
                            <p>
                                "Effective blockers are unquestionably the keystone of a successful defense." -- Don Shondell
                            </p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <!-- <p>&nbsp;</p> -->
                            <div class="events-tp-caption">
                                <!-- <a href="" class="project-button hvr-bounce-to-right">Register</a> -->
                                <!-- <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" target="blank" class="project-button hvr-bounce-to-right">Payment</a> -->
                            </div>
                        </div>
                        <!-- /.single-events-content -->
                    </div>
                    <!-- /.col-lg -->





                    <!-- SQUASH================================== -->

                    <div class="col-lg-4">
                        <div class="single-events-content squash">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s">
                                    <i class="fas fa-gamepad" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">Squash</a></h6>
                            </div>
                            <p>Do not be too hard, lest you be broken; do not be too soft, lest you be squeezed. – Ali ibn Abi Talib</p>
                            <p>&nbsp;</p>
                            <!-- <p>&nbsp;</p> -->
                            <!-- <p>&nbsp;</p> -->
                            <div class="events-tp-caption">
                                <!-- <a href="https://linktr.ee/infinito2k22" class="project-button hvr-bounce-to-right">Register</a> -->
                                <!-- <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" target="blank" class="project-button hvr-bounce-to-right">Payment</a> -->

                            </div>
                        </div>
                    </div>



                    <!-- athletics----------------- -->
                    <div class="col-lg-4">
                        <div class="single-events-content athletics">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s">
                                    <i class="fas fa-gamepad" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">Athletics</a></h6>
                            </div>
                            <p>The man who has no imagination has no wings.” – Muhammad Ali</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <!-- <p>&nbsp;</p> -->
                            <div class="events-tp-caption">
                                <!-- <a href="https://linktr.ee/infinito2k22" class="project-button hvr-bounce-to-right">Register</a> -->
                                <!-- <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" target="blank" class="project-button hvr-bounce-to-right">Payment</a> -->
                            </div>
                        </div>
                        <!-- /.single-events-content -->
                    </div>







                    <!-- BASKETBALL========================================= -->


                    <div class="col-lg-4">
                        <div class="single-events-content basketball">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s">
                                    <i class="fas fa-gamepad" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">Basketball</a></h6>
                            </div>
                            <p>Your limits are somewhere up there, waiting for you to reach beyond infinity.― Arnold Henry</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <!-- <p>&nbsp;</p> -->
                            <div class="events-tp-caption">
                                <!-- <a href="https://linktr.ee/infinito2k22" class="project-button hvr-bounce-to-right">Register</a> -->
                                <!-- <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" target="blank" class="project-button hvr-bounce-to-right">Payment</a> -->

                            </div>
                        </div>
                    </div>



                    <!-- BADMINTON======================================================== -->

                    <div class="col-lg-4">
                        <div class="single-events-content badminton">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s">
                                    <i class="fas fa-gamepad" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">Badminton</a></h6>
                            </div>
                            <p>Only a shuttler knows how demanding the fastest sport in the world is. ~ Tiyasha</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <!-- <p>&nbsp;</p> -->
                            <div class="events-tp-caption">
                                <!-- <a href="https://linktr.ee/infinito2k22" class="project-button hvr-bounce-to-right">Register</a> -->
                                <!-- <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" target="blank" class="project-button hvr-bounce-to-right">Payment</a> -->

                            </div>
                        </div>
                    </div>




                    <!-- TABLE TENNIS========================================== -->
                    <div class="col-lg-4">
                        <div class="single-events-content table_tennis">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s">
                                    <i class="fas fa-gamepad" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">Table Tennis</a></h6>
                            </div>
                            <p>"A champion is afraid of losing. Everyone else is afraid of winning." Billie Jean King</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <!-- <p>&nbsp;</p> -->
                            <div class="events-tp-caption">
                                <!-- <a href="https://linktr.ee/infinito2k22" class="project-button hvr-bounce-to-right">Register</a> -->
                                <!-- <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" target="blank" class="project-button hvr-bounce-to-right">Payment</a> -->

                            </div>
                        </div>
                    </div>



                    <!-- LAWN TENNIS================================================== -->
                    <div class="col-lg-4">
                        <div class="single-events-content lawn_tennis">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s">
                                    <i class="fas fa-gamepad" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">Lawn Tennis</a></h6>
                            </div>
                            <p>"Tennis is, more than most sports, a sport of the mind." - Rafael Nadal.</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <!-- <p>&nbsp;</p> -->
                            <div class="events-tp-caption">
                                <!-- <a href="https://linktr.ee/infinito2k22" class="project-button hvr-bounce-to-right">Register</a> -->
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


                <!-- offline events  ******************************** -->

                <!-- /.row -->
            </div>
            <!-- /.container -->

        </div>
        <!-- ONLINE----------------------------------------------------------------------- -->










        <!-- ONLINE EVENTS ***************************************************************
**********************************************************************************-->

        <div id="events-section" style="background:rgb(243, 243, 243)">
            <div class="container">
                <div class="theme-title">
                    <h2>ONLINE EVENTS</h2>

                </div>
                <div class="confButton" style="display:flex; justify-content:center;">
            <div class="col-lg-3 col-md-6 col-sm-10 col-xs-10" style="width:200px;">
            <a class="tp-caption">
                <a href="https://linktr.ee/e_infinito2k22" class="score-btn project-button hvr-bounce-to-right" style="padding:10px 15px;font-size:16px;border: #d8545d 2px solid;width:100%; text-align:center;" target="_blank">Register</a>
                
            </a>
            </div>
        
        <div class="col-lg-3 col-md-6 col-sm-10 col-xs-10" style="width:200px;">
            <a class="tp-caption">
                <a href="https://drive.google.com/drive/folders/1vztaZoEEOI1qitcUYxvw4w3gFEFzvd5u" class="score-btn project-button hvr-bounce-to-right" style="padding:10px 15px;font-size:16px;border: #d8545d 2px solid;width:100%; text-align:center;" target="_blank">Rulebook</a>
                
            </a>
            </div>
             </div>
                <!-- /.theme-title -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-events-content chess">
                            <div class="icon-heading tran3s event-heading">
                                <div class="icon tran3s">
                                    <i class="fas fa-chess-knight" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">Chess</a></h6>
                            </div>
                            <p>
                                “Play the opening like a book, the middlegame like a magician, and the endgame like a machine.” <br>– Rudolph Spielmann
                            </p>
                            <p>&nbsp;</p>
                            <div class="events-tp-caption">
                                <!-- <a href="https://linktr.ee/infinito2k22" class="project-button hvr-bounce-to-right">Register</a> -->
                                <!-- <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" class="project-button hvr-bounce-to-right" target="blank">Payment</a> -->
                            </div>
                        </div>
                        <!-- /.single-events-content -->
                    </div>
                    <!-- /.col-lg -->


                      <!-- SPORTS QUIZ************************************ -->

                      <div class="col-lg-4">
                        <div class="single-events-content quiz">
                            <div class="icon-heading tran3s event-heading">
                                <div class="icon tran3s">
                                    <i class="fas fa-question" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">Sports Quiz</a></h6>
                            </div>
                            <p>
                            “It’s not the will to win that matters—everyone has that. It’s the will to prepare to win that matters.”
                            </p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <div class="events-tp-caption">
                                <!-- <a href="https://linktr.ee/infinito2k22" class="project-button hvr-bounce-to-right">Register</a> -->
                                <!-- <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" class="project-button hvr-bounce-to-right" target="blank">Payment</a> -->
                            </div>
                        </div>
                        <!-- /.single-events-content -->
                    </div>




                    <!-- COD************************************ -->

                    <div class="col-lg-4">
                        <div class="single-events-content cod">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s">
                                    <i class="fas fa-gamepad" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">COD Moblie</a></h6>
                            </div>
                            <p>
                                “ In war, there is no prize for the runner-up.”
                            </p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <!-- <p>&nbsp;</p> -->
                            <div class="events-tp-caption">
                                <!-- <a href="https://linktr.ee/infinito2k22" class="project-button hvr-bounce-to-right">Register</a> -->
                                <!-- <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" class="project-button hvr-bounce-to-right" target="blank">Payment</a> -->
                            </div>
                        </div>
                        <!-- /.single-events-content -->
                    </div>
                    <!-- /.col-lg -->





                    <!-- VALORANT************************************ -->

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
                            <p>&nbsp;</p>
                            <div class="events-tp-caption">
                                <!-- <a href="https://linktr.ee/infinito2k22" class="project-button hvr-bounce-to-right">Register</a> -->
                                <!-- <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" target="blank" class="project-button hvr-bounce-to-right">Payment</a> -->
                            </div>
                        </div>
                        <!-- /.single-events-content -->
                    </div>
                    <!-- /.col-lg -->



                    <!-- free fire ****************-->
                    <div class="col-lg-4">
                        <div class="single-events-content freefire">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s">
                                    <i class="fas fa-gamepad" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">Free Fire</a></h6>
                            </div>
                            <p>“Legends never die, they respawn & get Booyah…!”</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <!-- <p>&nbsp;</p> -->
                            <p>&nbsp;</p>
                            <div class="events-tp-caption">
                                <!-- <a href="https://linktr.ee/infinito2k22" class="project-button hvr-bounce-to-right">Register</a> -->
                                <!-- <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" target="blank" class="project-button hvr-bounce-to-right">Payment</a> -->
                            </div>
                        </div>
                        <!-- /.single-events-content -->
                    </div>




                    <!-- <div class="col-lg-4">
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

                            </div>
                        </div>
                    </div> -->
                    <!-- /.col-lg -->







                    <!-- <div class="col-lg-4">
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
        <!-- <div class="col-lg-4">
        </div> -->
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
        <!-- <div class="col-lg-4"> 
                    </div> -->
        <!-- /.col-lg -->
    <!-- </div> -->


    <!-- offline events  ******************************** -->

    <!-- /.row -->
    <!-- </div> -->
    <!-- /.container -->
    <!-- </div> -->
    <!-- /#events-section -->


    <?php
    require('./templates/footer.php');
    ?>

</body>

</html>