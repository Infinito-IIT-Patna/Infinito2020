<!DOCTYPE html>
<html lang="en">
<?php
 session_start();
 $infid = $_SESSION['conf_infid'];
 $_SESSION['loggedin']=true;
 $_SESSION['infid']=$infid;
            
?>
<head>
    <title>Confirmation</title>
    <?php
    require('./templates/header.php');
    ?>
    <link rel="stylesheet" href="css/profile.css">
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
                        <li><a href="./events.php">Events</a></li>
                        <li><a href="./team.php">Team</a></li>
                        <li><a href="./gallery.php">Gallery</a></li>
                        
                        <?php
                            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                                echo '<li><a href="./profile.php">Profile</a></li>
                                        <li><a href="./logout.php">Logout</a></li>';
                            }
                            else{
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


    <!-- Confirmation Form -->
    <div class="container">
        <div id="register" style="height:70vh;padding:5%;display:flex; justify-content:center;">
            <div class="theme-title conf_box" style="margin-bottom:40px;margin-top:120px;">
                <p style="width:100%;">Congratulations !! You have been successfully registered.<br>
                <p>Your Infinito ID is <div id="myId" style="font-size:2rem; margin-top:10px;"><strong id="copyId"><?php echo $infid ?></strong> <button onclick="copyID('#copyId')"><img src="images/copy.svg" /></button>    <span id="custom-tooltip">copied!</sapn></div>
</p>
                <br><strong>Kindly take screenshot of your Infinito ID, it will be required to register for any event.
                        </strong><br>
                Your Infinito ID is your unique verification ID for the fest.
            </p>
            </div>

            <!-- <form method="post" action="">
                <div class="form-group row" style="width:300px; margin-left:auto; margin-right:auto;">
                    <div class="col-sm-10" style="width:100%;">
                        <input type="text" class="form-control" id="inputPassword3" name="infid" placeholder="Enter Your Infinito ID" style="width:100%;" required>
                    </div>
                </div>
                <div class="form-group row" style="margin-left:auto; margin-right:auto;">
                    <div class="col-sm-10" style="width:100%; display:flex; justify-content:center;">
                        <button type="submit" class="btn btn-primary" name="confirmation">Confirm Registration</button>
                    </div>
                </div>
            </form> -->
        </div>
    </div> 
    <div style="width:100%;display:flex;align-items:center;flex-direction:column; font-size:1.4rem;">
    <p>For any queries contact us at <a href="mailto:iitpsports@gmail.com" target="_blank">iitpsports@gmail.com</a>
    <!-- <p><a href="https://discord.gg/TrHygunc" target="_blank">Join</a> our Official Discord Server.
    <p><a href="./events.php">View</a> various events.</p> -->
    <div class="confButton">
    <div class="col-lg-3 col-md-6 col-sm-10 col-xs-10" style="width:200px;">
        <a class="tp-caption">
            <a href="./events.php" class="score-btn project-button hvr-bounce-to-right" style="padding:10px 15px;font-size:16px;border: #d8545d 2px solid;width:100%; text-align:center;">View Events</a>
        </a>
    </div>
    </div>
    </div>
    <?php
    require('./templates/footer.php');
    ?>

<script>
function copyID(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
  //alert("Copied");
  document.getElementById("custom-tooltip").style.display = "inline";
    document.execCommand("copy");
    setTimeout( function() {
        document.getElementById("custom-tooltip").style.display = "none";
    }, 1000);

}


</script>
</body>

</html>