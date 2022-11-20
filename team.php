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
                    <img src="./images/team/Kaushlendra Singh Rathore_.jpg">
                </div>
                <div class="contentBx">
                    <h2>Kaushlendra Singh Rathore</h2>
                    <p>Fest Coordinator</p>
                    <div class="links">
                    <div class="socialLinks">
                        <a href="https://www.linkedin.com/in/kaushlendra-singh-42960419a/" target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                        <a href="mailto: kaushlendra_2001ee90@iitp.ac.in"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
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
                        <img src="./images/team/Arushi Thakur_ Sponsorship and Marketing_.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Arushi Thakur</h2>
                        <p>Sponsorship and Marketing</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://in.linkedin.com/in/arushi-thakur-b861a6199" target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: arushi2705@gmail.com"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Kishlay Raj_Spons.jpeg">
                    </div>
                    <div class="contentBx">
                        <h2>Kishlay Raj</h2>
                        <p>Sponsorship and Marketing</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/kishlayraj09/" target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: rajkishlay0902@gmail.com " target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Rohit Sinha - Rohit Sinha.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Rohit Sinha</h2>
                        <p>Sponsorship and Marketing</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/rohit-sinha-1282a821b/" target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: rohit_2001mm26@iitp.ac.in" target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Aryan Chanda_Spons.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Aryan Chanda</h2>
                        <p>Sponsorship and Marketing</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/aryan-chanda-6985b7209" target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: aryan_2001CE13@iitp.ac.in" target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Sahil Joshi _ Spons.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Sahil Joshi</h2>
                        <p>Sponsorship and Marketing</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/sahilmjoshi" target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: sahil_2001EE59@iitp.ac.in" target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Shubham Raj_MPR.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Shubham Raj</h2>
                        <p>Media and Public Relations</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/shubhamraj2002"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: shubham_2001EE92@iitp.ac.in"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Priyanka_MPR.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Priyanka Kumari</h2>
                        <p>Media and Public Relations</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/priyanka-kumari-421016219"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: priyanka_2001mm23@iitp.ac.in"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/YashRaj_MPR.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Yash Raj</h2>
                        <p>Media and Public Relations</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/yash-raj-95a989204"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: yash_2001ee83@iitp.ac.in"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Shristi_MPR.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Shristi Agrawal</h2>
                        <p>Media and Public Relations</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/shristi-agrawal-a64431201/?originalSubdomain=in"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: shristi_2001cs87@iitp.ac.in"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Ashish_mpr.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Ashish S Murty</h2>
                        <p>Media and Public Relations</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/ashish-murthy/?originalSubdomain=in"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: "target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/VaniGrover - Vani Grover.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Vani Grover</h2>
                        <p>Media and Public Relations</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/vani-grover-77078a207/"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: vanigrover2407@gmail.com"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Atul Kumar_Hosp.jpeg">
                    </div>
                    <div class="contentBx">
                        <h2>Atul Kumar</h2>
                        <p>Hospitality</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/atulkhatri23/"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: atulkumar94746@gmail.com"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Himanshi _Hospi - Himanshi Mishra.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Himanshi Mishra</h2>
                        <p>Hospitality</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/himanshi-mishra-a65224217/"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: mhimanshi2002@gmail.com"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/saurav_hospi.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Saurav Dudhate</h2>
                        <p>Hospitality</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/saurav-dudhate-142679218/"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: "target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/shivam krishna_hospi.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Shivam Krishna</h2>
                        <p>Hospitality</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/shivam-krishna-8551551bb"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: shivam_2001ee66@iitp.ac.in"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Kartikay Gupta.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Kartikay Gupta</h2>
                        <p>Web and App</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/kartikay-gupta/?originalSubdomain=in" target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: kartikay.gupta2002@gmail.com" target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Ankur Singh_web.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Ankur Singh</h2>
                        <p>Web and App</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/ankur-singh-1882a6219" target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: ankurrblsingh@gmail.com" target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/vishal_web.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Vishal Yadav</h2>
                        <p>Web and App</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/vishal-yadav-71a514208/?originalSubdomain=in" target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: " target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Anurag_events.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Anurag Deshmane</h2>
                        <p>Events, Planning & Management</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/anurag-deshmane-b76963202/"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: anuragd3118@gmail.com"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Rajan_Events Rajan.jpeg">
                    </div>
                    <div class="contentBx">
                        <h2>Rajan Kumar</h2>
                        <p>Events, Planning & Management</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/rajan-kumar-1296b9212"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: rajan4705kr@gmail.com"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Ashok_Events - Ashok Meena.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Ashok Kumar Meena</h2>
                        <p>Events, Planning & Management</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/ashok-kumar-meena-8592ba205/"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: akmeena0420@gmail.com"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Gopesh Rawat_events.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Gopesh Rawat</h2>
                        <p>Events, Planning & Management</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/gopesh-rawat-247a4a253"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: gopeshrawat09112002@gmail.com"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/download.png">
                    </div>
                    <div class="contentBx">
                        <h2>Rajat Jaiswal</h2>
                        <p>Events, Planning & Management</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href=""target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: "target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/YashChoudhary_events - Yash Choudhary.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Yash Chaudhary</h2>
                        <p>Events, Planning & Management</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/yash-choudhary-8339ab20b/"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: yashc331@gmail.com"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Abhishek Saini_events.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Abhishek</h2>
                        <p>Events, Planning & Management</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/abhishek-saini-821a9b208"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: abhi9813293405@gmail.com"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Abhinav_Reg - Abhinav Mishra (1).jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Abhinav Mishra</h2>
                        <p>Registration & Security</p>
                        <div class="links">
                        
                            <div class="socialLinks">
                                <a href="https://www.linkedin.com/in/abhinav2901/"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                                <a href="mailto: abhinavmishra2901@gmail.com"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/ruchir_rsp.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Ruchir Porwal</h2>
                        <p>Registration & Security</p>
                        <div class="links">
                        
                            <div class="socialLinks">
                                <a href="https://www.linkedin.com/in/ruchir-porwal-9b5766220"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                                <a href="mailto: ruchirporwal04@gmail.com"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div> 

        <!-- <div class="twoCards">
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Abhinav_Reg - Abhinav Mishra.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Abhinav Mishra</h2>
                        <p>Registration & Security</p>
                        <div class="links">
                        
                            <div class="socialLinks">
                                <a href="https://www.linkedin.com/in/abhinav2901/"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                                <a href="mailto: abhinavmishra2901@gmail.com"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/download.png">
                    </div>
                    <div class="contentBx">
                        <h2>Ruchir Porwal</h2>
                        <p>Registration & Security</p>
                        <div class="links">
                        
                            <div class="socialLinks">
                                <a href=""target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                                <a href="mailto: "target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <div class="twoCards">
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Rajneesh Kumar_CnD.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Rajneesh Kumar</h2>
                        <p>Creatives & Design</p>
                        <div class="links">
                        
                            <div class="socialLinks">
                                <a href="https://www.linkedin.com/in/rajneesh-kumar-5raj"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                                <a href="mailto: rajneesh_2001cs53@iitp.ac.in"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Priyanshu Patra_CnD - Priyanshu Patra.png">
                    </div>
                    <div class="contentBx">
                        <h2>Priyanshu Patra</h2>
                        <p>Creatives & Design</p>
                        <div class="links">
                        
                            <div class="socialLinks">
                                <a href="https://www.linkedin.com/in/pripat2002/"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                                <a href="mailto: priyanshu_2001me55@iitp.ac.in"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
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