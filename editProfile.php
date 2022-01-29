<?php
include "connect.php";
$infid = $_GET['infid'];
include "editProfileHandle.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Profile</title>
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
                        <li class="active"><a href="./profile.php">Profile</a>
                        <li>
                        <li><a href="./logout.php">Logout</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <!-- /.theme-feature-menu -->
        </div>
    </div>

    <?php

    if ($showerror == true) {
        echo '<div class="container">
    <div class="alert alert-success alert-dismissible show" role="alert" style="position:relative; top:75px; width:100%; color:red; background: #ff000020;" >
<strong> ' . $showerror . ' </strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
</div>';
    }

    ?>

    <!-- Details -->
    <div class="profile_personal">
        <div class="pro_btn">
            <a href="./profile.php">
                <button>Personal Details</button>
            </a>
            <a href="./editProfile.php">
                <button class="active_pro">Edit profile</button>
            </a>

        </div>
        <div class="pro_details edit_details">
            <h2>Edit Details</h2>
            <hr class="conf_hr">

            <div class="profile_details">
                <strong>
                    <p>Infinito ID</p>
                </strong>
                <p><?php
                    echo $infid;
                    ?></p>
            </div>
            <div class="profile_details">
                <strong>
                    <p>Email</p>
                </strong>
                <p><?php
                    $sql="SELECT * FROM `infinito2021php` where `InfId`='$infid'";
                    $result=mysqli_query($conn,$sql);
                  if ($result) {
                      
                    $row=mysqli_fetch_assoc($result);
                    echo $row['Email'];
                  }
                    ?></p>
            </div>
            <div class="profile_details">
                <strong>
                    <p>College ID/ Roll No.</p>
                </strong>
                <p><?php
                    $sql="SELECT * FROM `infinito2021php` where `InfId`='$infid'";
                    $result=mysqli_query($conn,$sql);
                  if ($result) {
                      
                    $row=mysqli_fetch_assoc($result);
                    echo $row['ID'];
                  }
                    ?></p>
            </div>
            <div class="profile_details">
                <strong>
                    <p>Gender</p>
                </strong>
                <p><?php
                    $sql="SELECT * FROM `infinito2021php` where `InfId`='$infid'";
                    $result=mysqli_query($conn,$sql);
                  if ($result) {
                      
                    $row=mysqli_fetch_assoc($result);
                    echo $row['Gender'];
                  }
                    ?></p>
            </div>
            <form method="post" action=<?php echo $_SERVER['REQUEST_URI'];?>>

            <?php
            $sql="SELECT * FROM `infinito2021php` where `InfId`='$infid'";
            $result=mysqli_query($conn,$sql);
          if ($result) {
              
            $row=mysqli_fetch_assoc($result);
            echo '
                <div class="profile_details">
                    <p><label for="inputPassword3" class="col-form-label">Name</label></p>
                    <div class="edit_fill">
                        <input class="edit-fill-form" type="text" class="form-control" id="inputPassword3" name="name" value="'.$row['Name'].'" required>
                    </div>
                </div>

                
                <div class="profile_details">
                    <p><label for="inputPassword3" class="col-form-label">College Name (FULL)</label></p>
                    <div class="edit_fill">
                        <input class="edit-fill-form" type="text" class="form-control" id="inputPassword3" name="clg" value="'.$row['College'].'" required>
                    </div>
                </div>

                <div class="profile_details">
                    <p><label for="phone" class=" col-form-label">Phone Number</label></p>
                    <div class="edit_fill">
                        <input class="edit-fill-form" type="text" class="form-control" id="inputPassword3" name="phno" value="'.$row['Phone Number'].'" required>
                    </div>
                </div>
                
                <div>
                    <input type="checkbox" name="changePass" id="changePass" value="1" onclick="displayPass()">
                    <label for="changePass">Change Password</label><br>  
                </div>

                <div id="change_password"></div>
                <div class="profile_details">
                    <div>
                        <button type="button" class="btn btn-primary" name="update" onclick="checkPass()" id="updateProfile" >Update</button>
                    </div>
                </div>';
          }
                ?>
            </form>
        </div>
    </div>

    <?php
    require('./templates/footer.php');
    ?>
    <script>
        function displayPass(){
            var display = "";
            if(document.getElementById("changePass").checked == true){
                console.log("checked");
                display = '<div class="profile_details"><p><label for="newPass" class="col-form-label">Password</label></p><div class="edit_fill"><input class="edit-fill-form" type="password" class="form-control" id="newPass" name="password" value="" required></div></div>';
                display += '<div class="profile_details"><p><label for="ConfNewPass" class="col-form-label">Confirm Password</label></p><div class="edit_fill"><input class="edit-fill-form" type="password" class="form-control" id="confNewPass" name="confPassword" value="" required><div id="passError"></div></div></div>';
            }
            document.getElementById("change_password").innerHTML = display;
        }
        function checkPass(){
            if(document.getElementById("changePass").checked == true){
                if(document.getElementById("newPass").value == document.getElementById("confNewPass").value){
                    var updateProfile = document.getElementById("updateProfile");
                    updateProfile.setAttribute('type', 'submit');
                }
                else{
                    document.getElementById("confNewPass").style.color = "red";
                    document.getElementById("passError").innerHTML = '<p style="color:red;">Passwords do not match.<p>';
                }
            }
            else{
                var updateProfile = document.getElementById("updateProfile");
                updateProfile.setAttribute('type', 'submit');
            }
        }
    </script>
    </body>

</html>