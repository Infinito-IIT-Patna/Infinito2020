<?php
session_start();
include "connect.php";

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $infid=$_SESSION['infid'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>
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
                        <li class="active"><a href="./profile.php">Profile</a></li>
                        <li><a href="./logout.php">Logout</a></li>
                        
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <!-- /.theme-feature-menu -->
        </div>
    </div>

    <!-- Details -->
    <div class="profile_personal" style="min-height:100vh;">
      
        <!-- <div class="pro_btn">
            <a href="./profile.php">
                <button class="active_pro">Personal Details</button>
            </a>
            
            <a href=<?php echo"editProfile.php?infid=$infid" ?>>
                <button >Edit profile</button>
            </a>
        </div> -->

    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

        echo '<div class="pro_btn">
        <a href="./profile.php">
            <button class="active_pro">Personal Details</button>
        </a>
        
        <a href="editProfile.php?infid='. $infid .'">
            <button >Edit profile</button>
        </a>
    </div>';
       $sql="SELECT * FROM `infinito2021php` where `InfId`='$infid'";
       $result=mysqli_query($conn,$sql);

       $row=mysqli_fetch_assoc($result);

       if ($result) {
           echo '
              <div class="pro_details">
                  <div class="proHead">
                  <img src="images/profile/Profile.png">
                  <div class="proHeadDet">
                  <h2>'.$row['Name'].'</h2>
                  <p>'.$infid.'</p>
                  </div>
                  </div>
                  <hr class="conf_hr">
                  <div class="profile_details">
                  <strong><p>Email</p></strong>
                      <p>'.$row['Email'].'</p>
                  </div><div class="profile_details">
                  <strong><p>Phone Number</p></strong>
                      <p>'.$row['Phone Number'].'</p>
                  </div><div class="profile_details">
                  <strong><p>College Name</p></strong>
                      <p>'.$row['College'].'</p>
                  </div>
                  <div class="profile_details">
                  <strong><p>College ID / Roll no.</p></strong>
                      <p>'.$row['ID'].'</p>
                  </div>
                  <div class="profile_details">
                  <strong><p>Gender</p></strong>
                      <p>'.$row['Gender'].'</p>
                  </div>
              </div>
          </div>';
           
       }
    }
    else{
        echo '
        <div style="min-height:100vh; margin-top:100px;">
            <div class="icon">
            <img src="./images/error/profile_out.svg" alt="" srcset="" class="profile_out_icon">
            <p> It seems you have logged out!! Login to continue.</p>
            </div>
            <div class="btn_out">
                <div class="out_btn" >
                    <a class="tp-caption">
                        <a href="./registerPlayer.php" class="score-btn project-button hvr-bounce-to-right" style="padding:10px 30px;font-size:16px;border: #d8545d 2px solid;  width:100%; text-align:center;">Register Now!</a>
                    </a>
                </div>
                <div class="out_btn">
                    <a class="tp-caption">
                        <a href="./signIn.php" class="score-btn project-button hvr-bounce-to-right" style="padding:10px 30px;font-size:16px;border: #d8545d 2px solid; width:100%; text-align:center;" >Sign In</a>
                    </a>
                </div>
            </div>
            </div>
        </div>';
    }

    ?>
    </div>
    <!-- Footer -->
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
    


    <?php
    require('./templates/footer.php');
    ?>

</body>

</html>