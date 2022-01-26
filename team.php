<?php
session_start();
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Team</title>
    <?php
    require('./templates/header.php');
    ?>
    
    <link rel="stylesheet" href="css/team.css">
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
                        <li class="active"><a href="./team.php">Team</a></li>
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

    <div id="content">
        <div class="theme-title">
            <h2>Meet Our Team</h2>
        </div>
        <section class="teams-section">
        <h4 class="group">Overall Head</h4>
        <hr class="teamHr">
        <div class="container_team">
            <div class="card">
                <div class="imgBx">
                    <img src="./images/team/shivanshu.jpg">
                </div>
                <div class="contentBx">
                    <h2>Shivanshu Sanjeev</h2>
                    <p>Fest Coordinator</p>
                    <div class="links">
                    <div class="socialLinks">
                        <a href="https://www.linkedin.com/in/shivanshu-sanjeev/" target="_blank"><i class="fa fa-linkedin social_icon"></i></a>
                        <a href="https://m.facebook.com/shivanshu.sanjeev.5?ref=bookmarks" target="_blank"><i class="fa fa-facebook social_icon"></i></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
            
        <h4 class="group">Coordinators</h4>
        <hr class="teamHr">
        <div class="techTeam">
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/sakshi.jpeg">
                    </div>
                    <div class="contentBx">
                        <h2>Sakshi Singh</h2>
                        <p>Marketing and Sponsorship</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/sakshi-singh-560895194" target="_blank"><i class="fa fa-linkedin social_icon"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100040510351336" target="_blank"><i class="fa fa-facebook social_icon"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Apoorva.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Apoorva Dwivedi</h2>
                        <p>Media and Public Relations</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/apoodwivedi/"target="_blank"><i class="fa fa-linkedin social_icon"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100015250869481"target="_blank"><i class="fa fa-facebook social_icon"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/SrajanKhandelwal.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Srajan Khandelwal</h2>
                        <p>Hospitality</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/srajan-khandelwal-b32893194/"target="_blank"><i class="fa fa-linkedin social_icon"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100009383554493"target="_blank"><i class="fa fa-facebook social_icon"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/yash.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Yash Sharma</h2>
                        <p>Web and App</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/yashsharma8415/" target="_blank"><i class="fa fa-linkedin social_icon"></i></a>
                            <a href="https://www.facebook.com/yashsharma8415/" target="_blank"><i class="fa fa-facebook social_icon"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/ShivamSahu.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Shivam Sahu</h2>
                        <p>Web and App</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/shivam-sahu-503/" target="_blank"><i class="fa fa-linkedin social_icon"></i></a>
                            <a href="https://www.facebook.com/shivam.sahu.33/" target="_blank"><i class="fa fa-facebook social_icon"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/RohitMeena.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Rohit Meena</h2>
                        <p>Events</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/rohit-meena-b406181b6"target="_blank"><i class="fa fa-linkedin social_icon"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100009587360008"target="_blank"><i class="fa fa-facebook social_icon"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Tanishq.jpeg">
                    </div>
                    <div class="contentBx">
                        <h2>Tanishq Malu</h2>
                        <p>Media and Public Relationship</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/tanishqmalu/"target="_blank"><i class="fa fa-linkedin social_icon"></i></a>
                            <a href="https://www.facebook.com/tanishq.malu.39/"target="_blank"><i class="fa fa-facebook social_icon"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/sajal.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Sajal Kumar</h2>
                        <p>Creatives & Design</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/sajalkumar247/" target="_blank"target="_blank"><i class="fa fa-linkedin social_icon"></i></a>
                            <a href="https://www.facebook.com/people/Sajal-Kumar/100039583697847/" target="_blank"target="_blank"><i class="fa fa-facebook social_icon"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/DivyanshBhardwaj.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Divyansh Bhardwaj</h2>
                        <p>Registration</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/divyansh-bhardwaj-016231194/" target="_blank"target="_blank"><i class="fa fa-linkedin social_icon"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100004218015015" target="_blank"target="_blank"><i class="fa fa-facebook social_icon"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div> 

        <div class="twoCards">
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/IshitaSingh.jpeg">
                    </div>
                    <div class="contentBx">
                        <h2>Ishita Singh</h2>
                        <p>Marketing and Sponsorship</p>
                        <div class="links">
                        
                            <div class="socialLinks">
                                <a href="https://www.linkedin.com/in/ishita-singh-0911971b4/"target="_blank"><i class="fa fa-linkedin social_icon"></i></a>
                                <a href="https://www.facebook.com/ishita.singh.39142072"target="_blank"><i class="fa fa-facebook social_icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Ritwick.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Ritwick Singh</h2>
                        <p>Events</p>
                        <div class="links">
                        
                            <div class="socialLinks">
                                <a href="https://www.linkedin.com/in/ritwick-singh-baghel-3823281b4/"target="_blank"><i class="fa fa-linkedin social_icon"></i></a>
                                <a href="https://www.facebook.com/ritwick.singh.73"target="_blank"><i class="fa fa-facebook social_icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
    require('./templates/footer.php');
    ?>
</body>

</html>