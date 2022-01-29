<?php
include "updatePasswordHandle.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Password</title>
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
   

    <!-- Update Password Form -->
    <div class="container" style="min-height:70vh;">
        <div id="register" style="padding:5%;">
            <div class="theme-title" style="margin-bottom:40px;margin-top:120px;">
                <!-- <h2 style="margin-top:0px;">Update Password</h2> -->
            </div>
            <div class="signInForm">
                <form method="POST" action="">
                    <div class="form-group row" style="width:80%; margin-left:auto; margin-right:auto;">
                        <label for="infid" class="col-sm-10 col-form-label" style="font-size:1.5rem;">New Password</label>
                        <div class="col-sm-10" style="width:100%;">
                            <input type="password" class="form-control-new" id="newPass" name="newPass" placeholder="Enter New Password *" style="width:100%;" required>
                        </div>
                    </div>
                    <div class="form-group row" style="width:80%; margin-left:auto; margin-right:auto;">
                        <label for="pass" class="col-sm-10 col-form-label" style="font-size:1.5rem;">Confirm Password</label>
                        <div class="col-sm-10" style="width:100%;">
                            <input type="password" class="form-control-new" id="confNewPass" name="confNewPass" placeholder="Enter Password Again*" style="width:100%;" required>
                            <div id="passError"></div>
                        </div>
                    </div>

                    <div class="form-group row" style="width:80%; margin-left:auto; margin-right:auto;">
                        <div class="col-sm-10 signInBtn">
                            <button type="button" class="btn btn-primary" name="updatePass" style="width:100px; margin-top:10px;" onclick="checkPassword()" id="updatePass">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    require('./templates/footer.php');
    ?>

    <script>
        function checkPassword(){
            if(document.getElementById("newPass").value == document.getElementById("confNewPass").value){
                var updatePass = document.getElementById("updatePass");
                updatePass.setAttribute('type', 'submit');
            }
            else{
                document.getElementById("confNewPass").style.color = "red";
                document.getElementById("passError").innerHTML = '<p style="color:red;">Passwords do not match.<p>';
            }
        }
    </script>

</body>

</html>