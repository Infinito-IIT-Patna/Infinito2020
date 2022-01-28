<?php 
ob_start(); // needs to be added here
?>
<?php
include 'forgotPasswordHandle.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forgot Password</title>
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
                        <li><a href="./registration.php">Register</a></li>
                        <li><a href="./signIn.php">Sign In</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <!-- /.theme-feature-menu -->
        </div>
    </div>

    <!-- Forgot password Form -->
    <div class="container">
        <div id="register" style="height:70vh;padding:5%;">
            <div class="theme-title" style="margin-bottom:40px;margin-top:120px;">
                <p style="width:100%;">Enter your Infinito ID to receive an OTP on your registered email.</p>
            </div>

            <form method="post" action="">
                <div class="form-group row" style="width:300px; margin-left:auto; margin-right:auto;">
                    <!-- <label for="inputPassword3" class="col-sm-2 col-form-label" style="font-size:1.5rem;">Infinito ID</label> -->
                    <div class="col-sm-10" style="width:100%;">
                        <input type="text" class="form-control" id="inputPassword3" name="infid" placeholder="Enter Your Infinito ID" style="width:100%;" required>
                    </div>
                </div>
                <div class="form-group row" style="margin-left:auto; margin-right:auto;">
                    <div class="col-sm-10" style="width:100%; display:flex; justify-content:center;">
                        <button type="submit" class="btn btn-primary" name="otp">Send OTP</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php
    require('./templates/footer.php');
    ?>

</body>

</html>