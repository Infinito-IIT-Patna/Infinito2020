<?php 
ob_start(); // needs to be added here
?>
<?php
include "connect.php";
include "registerPlayerHandle.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up</title>
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
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        Menu
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse-1" >
                    <ul class="nav navbar-nav" style="margin-top:8px;">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="#">Events</a></li>
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
    <div class="container">

        <div id="register" style="padding:5%;padding-top:75px;">
            <div class="theme-title" style="margin-bottom:40px;margin-top:80px;">
                <h2 style="margin-top:0px;">Sign Up</h2>
            </div>

            <div class="signInForm reg_PlayerForm">
            <form method="post" action="">
                <div class="form-group row regPlayerForm">
                    <label for="name" class="col-sm-4 col-form-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-new" id="name" name="name" placeholder="Name *"  required>
                    </div>
                </div>
                
                <div class="form-group row regPlayerForm" >
                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control-new" id="email" name="email" placeholder="Email *" required>
                    </div>
                </div>

                <div class="form-group row regPlayerForm" >
                    <label for="clg" class="col-sm-4 col-form-label">College</label>
                    
                    <div class="col-sm-9">
                        <select name="clg" class="selectForm" id="clg">
                            <option value="other">Other</option>
                            <option value="IIT Patna">Indian Institute of Technology Patna</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row regPlayerForm" >
                    <label for="oth_clg_name" class="col-sm-4 col-form-label">College Name (Full)</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-new" id="oth_clg_name" name="oth_clg_name" placeholder="Enter College Name" >
                        <p>*If selected <strong>Other</strong></p>
                    </div>
                </div>
                
                <div class="form-group row regPlayerForm" >
                    <label for="clgid" class="col-sm-4 col-form-label">College ID / Roll no.</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-new" id="clgid" name="clgid" placeholder="College Id" >
                        <p>*College Id/ Roll No. compulsory if from IIT Patna</p>
                    </div>
                </div>
                
                
                <div class="form-group row regPlayerForm" >
                    <label for="phone" class="col-sm-4 col-form-label">Phone Number</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-new" id="phone" name="phone_no" placeholder="Enter Phone Number" required>
                    </div>
                </div>
                <div class="form-group row regPlayerForm" >
                    <label for="gender" class="col-sm-4 col-form-label">Gender</label>
                    <div class="col-sm-9">
                        <select name="gen" class="selectForm" id="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Rather Not say">Rather Not Say</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row regPlayerForm" >
                    <label for="create_pass" class="col-sm-4 col-form-label">Create Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control-new" id="create_pass" name="create_password" placeholder="Create Password *" required>
                    </div>
                </div>
                <div class="form-group row regPlayerForm" >
                    <label for="confirm_pass" class="col-sm-4 col-form-label">Confirm Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control-new" id="confirm_pass" name="confirm_password" placeholder="Enter Password Again *" required>
                    </div>
                </div>
                <div class="form-group row regPlayerForm" >
                    <div class="col-sm-9 regPlayerSubmit">
                        <button type="submit" class="btn btn-primary" name="teamReg">Register</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>

    <!--
    =====================================================
      Footer
    =====================================================
    -->
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
    require('./templates/footer.php')
    ?>

</body>
</html>