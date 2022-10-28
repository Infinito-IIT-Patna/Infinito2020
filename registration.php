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
    <link rel="stylesheet" href="css/registerPlayer.css">
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
    <!-- <div class="container">
        <div id="register" style="min-height:100vh">
            <div class="theme-title">
                <h2>Register</h2>
            </div>
            <div class="list-group" style="margin-top:40px">
                <a href="#" class="list-group-item list-group-item-action active">
                    Steps For Registration
                </a>
                <a href="./registerPlayer.php" class="list-group-item list-group-item-action" style="color: #d8545d;">
                    Step 1: First register yourself by clicking the register button below. Make a note of Infinito ID displayed on the screen.
                </a>
                <a href="./gameReg.php" class="list-group-item list-group-item-action" style="color: #d8545d;">
                    Step 2: For registering in any event, go to the event section, Select your game and register using Infinito ID provided
                 </a>
                <a href="#" class="list-group-item list-group-item-action ">
                    The Event Registration Fee is free for all.
                </a>
                <a href="mailto:iitpsports@gmail.com" class="list-group-item list-group-item-action ">
                    For any queries mail to iitpsports@gmail.com
                </a>
                
                

            </div> -->
            <div id="steps">
                <div class="container" style="background:none;">
                    <div class="wrapper" style="background:#feefed;margin-top:75px;box-shadow:0 10px 15px rgb(66 66 66 / 19%); ">
                        <h1 style="font-size:1.6rem;">Steps to Register</h1>
                        <ul class="sessions">
                        <li>
                            <p><h1>Step 1: Sign Up and generate a unique Infinito ID. <a href="./registerPlayer.php">Click here</a> to Register.</h1></p>
                            <div class="time">Kindly note your Infinito ID, it will be required to register for any events.
                            <br> Your Infinito ID is your unique verification ID for the fest.</div>
                        </li>
                        <li>
                            <p><h1>Step 2: Register for various events using the Infinito ID. <a href="./events.php">Click here</a> to view events.</h1></p>
                            <div class="time">For registering in any event, go to the <a href="./events.php">event section</a>. Select your game and register using Infinito ID.</div>
                        </li>
                        <li>
                            <p><h1>Have fun!! , play games and win exciting prizes.</h1></p>
                            <div class="time">For any queries mail to <a href="mailto:iitpsports@gmail.com">iitpsports@gmail.com</a></div>
                        </li>
                        </ul>
                    </div>
                </div> 
            </div>

            <div class="col registerButton" >
                <div class="col-lg-3 col-md-6 col-sm-10 col-xs-10" style="width:200px;">
                    <a class="tp-caption">
                        <a href="./registerPlayer.php" class="score-btn project-button hvr-bounce-to-right" style="padding:10px 15px;font-size:16px;border: #d8545d 2px solid;width:100%; text-align:center;">Register Now!</a>
                    </a>
                </div>
                
                <?php
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                        echo '  <div class="col-lg-3 col-md-6 col-sm-10 col-xs-10" style="width:200px;">
                                    <a class="tp-caption">
                                        <a href="./events.php" class="score-btn project-button hvr-bounce-to-right" style="padding:10px 15px;font-size:16px;border: #d8545d 2px solid;width:100%; text-align:center;">Events</a>
                                    </a>
                                </div>';
                    }
                    else{
                        echo '
                        <div class="col-lg-3 col-md-6 col-sm-10 col-xs-10" style="width:200px;">
                        <a class="tp-caption">
                            <a href="./signIn.php" class="score-btn project-button hvr-bounce-to-right" style="padding:10px 15px;font-size:16px;border: #d8545d 2px solid; width:100%; text-align:center;" >Sign In</a>
                        </a>
                        </div>';
                    }
                    // if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                    //   echo '  <div class="col-lg-3 col-md-6 col-sm-10 col-xs-10" style="width:200px;">
                    //         <a class="tp-caption">
                    //             <a href="./gameReg.php" class="score-btn project-button hvr-bounce-to-right" style="padding:10px 15px;font-size:16px;border: #d8545d 2px solid;width:100%; text-align:center;">Game Registration</a>
                    //         </a>
                    //     </div>
                        
                    
                    
                    //      ';}
                            ?>
            </div>
        </div>

    </div>

    
    
    <?php
    require('./templates/footer.php');
    ?>
</body>
</html>
