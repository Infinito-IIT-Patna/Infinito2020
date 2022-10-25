<?php
include "signinHandle.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign In</title>
    <?php
    require('./templates/header.php');
    ?>
    <link rel="stylesheet" href="css/registerPlayer.css">
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
                        <li class="active"><a href="./signIn.php">Sign In</a></li>
                        
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <!-- /.theme-feature-menu -->
        </div>
    </div>

    

        <?php

        if ( $showerror==true) {
            echo '<div class="container">
            <div class="alert alert-success alert-dismissible show" role="alert" style="position:relative; top:75px; width:100%; color:red; background: #ff000020;" >
        <strong> '.$showerror.' </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        </div>
        </div>';
         }

        ?>
   

    <!-- Sign In Form -->
    <div class="container" style="min-height:70vh;">
        <div id="register" style="padding:5%;">
            <div class="theme-title" style="margin-bottom:40px;margin-top:90px;">
                <h2 style="margin-top:0px;">Sign In</h2>
                <!-- <p style="width:100%;">An email has been sent on your registered email containing your <strong>Infinito ID</strong>. Please enter it here.</p> -->
            </div>
            <div class="signInForm">
                <form method="POST" action="signIn.php">
                    <div class="form-group row" style="width:80%; margin-left:auto; margin-right:auto;">
                        <label for="infid" class="col-sm-10 col-form-label" style="font-size:1.5rem;">Infinito ID / Email</label>
                        <div class="col-sm-10" style="width:100%;">
                            <input type="text" class="form-control-new" id="infid/email" name="infid/email" placeholder="Enter Your Infinito ID / Email *" style="width:100%;" required>
                        </div>
                    </div>
                    <div class="form-group row" style="width:80%; margin-left:auto; margin-right:auto;">
                        <label for="pass" class="col-sm-10 col-form-label" style="font-size:1.5rem;">Password</label>
                        <div class="col-sm-10" style="width:100%;">
                            <input type="password" class="form-control-new" id="pass" name="password" placeholder="Enter Your Password *" style="width:100%;" required>
                            <div style="margin-top:2px;">
                                <input type="checkbox" name="showPass" id="showPass" onclick="showPassword()">
                                <label for="showPass">Show Password</label><br>  
                            </div>
                        </div>
                    </div>

                    <div class="form-group row" style="width:80%; margin-left:auto; margin-right:auto;">
                        <div class="col-sm-10 signInBtn">
                            <button type="submit" class="btn btn-primary" name="confirmation" style="width:100px; margin-top:10px;">Sign In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- <a href="./forgotPassword.php" style="width:100%; text-align:center;">Forgot Password!!</a> -->
        <a href="./registerPlayer.php" style="width:100%; text-align:center;">Create a New Account</a>
    </div>

    <?php
    require('./templates/footer.php');
    ?>

    <script>
        function showPassword(){
            if(document.getElementById("showPass").checked == true){
                document.getElementById("pass").setAttribute('type','text');
            }
            else{
                document.getElementById("pass").setAttribute('type','password');
            }
        }
    </script>
</body>

</html>