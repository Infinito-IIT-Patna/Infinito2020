<?php
session_start();
include "connect.php";
$TotalPlayers = $_SESSION['TotalPlayers'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Payment</title>
    <?php
    require('./templates/header.php');
    ?>
    
    <link rel="stylesheet" href="css/payment.css">
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
                        <li><a href="./events.php">Events</a></li>
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

    <div class="theme-title">
        <h2>Payment</h2>
    </div>
    
    <div class="payBox">
        <div class="payQr">
            <img src="./images/payment/QR.png" alt="" srcset="">
        </div>
        <div class="payDet">
            <div class="col-lg-3 col-md-6 col-sm-10 col-xs-10 payDetIn" style="width:330px;">
                <strong><p>Total Payable Amount : Rs.<?php echo $TotalPlayers*20;
                ?> 
                </p></strong>
                <br>
                <p>Infinito 2k21</p>
                <p>7007234123</p>
                <p>email@username.com</p>
                <p><strong>Scan QR code to pay</strong></p>
                    <a class="tp-caption">
                        <a href="payment.php" class="score-btn project-button hvr-bounce-to-right" style="padding:10px 15px;font-size:16px;border: #d8545d 2px solid;width:80%; text-align:center;">
                        Confirm Payment
                        </a>
                    </a>
            </div>
        </div>
    </div>
    
  <?php
  require('./templates/footer.php');
  ?>
  
</body>

</html>