<?php
ob_start(); // needs to be added here
?>
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
    <meta charset="UTF-8" />
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Sign Up</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="images/logo/logo.png" />

    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css?version=51" />
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css?version=51" />
    <link rel="stylesheet" type="text/css" href="css/countdown.css?version=51" />
    <link rel="stylesheet" href="css/registerPlayer.css">
    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../vendor/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl.theme.css">

    <!-- Fix Internet Explorer ______________________________________-->

    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="vendor/html5shiv.js"></script>
        <script src="vendor/respond.js"></script>
        <![endif]-->
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

    <!-- Backend to store entries -->
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $clg = $_POST['clg'];
            $oth_clg_name = $_POST['oth_clg_name'];
            $gen = $_POST['gen'];
            $phno = $_POST['phone_no'];
            $clgid = $_POST['clgid'];
            $pass = $_POST['create_password'];
            $conf_pass = $_POST['confirm_password'];

            //Connecting to database
            // require('./connect.php');
            include "connect.php";

            // Create a connection
            // $conn = mysqli_connect($servername, $username, $password, $database);
            // Die if connection was not successful
            if (!$conn){
                die("Sorry we failed to connect: ". mysqli_connect_error());
            }
            else{ 
                // Submit record to a database
                // Sql query to be executed 
                $sql = "SELECT * FROM `infinito2021php`";
                $result = mysqli_query($conn, $sql);
                $unique = "true";
                //To check if the email is unique
                //fetching the rows from the begining and checking if same email exists
                while($check = mysqli_fetch_assoc($result))
                {
                    //$cur_email -> email of current row
                    $cur_email = $check['Email'];
                    //checking
                    if($email == $cur_email)
                    {
                        //if same email exists already then display a message
                        echo '<div class="alert alert-success alert-dismissible show" role="alert" style="position:absolute; top:75px; width:100%; color:red; background: #ff000020;" >
                            <strong> This Email Id is already Registered. Please use another email.</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">x</span>
                            </button>
                            </div>';
                        $unique = "false";
                        break;
                    }
                }
                //Add the details to database if the email is unique
                if(($clg == "other" && $oth_clg_name != null) || ($clg == "IIT Patna" && $clgid != null)){
                if($pass == $conf_pass){
                if($unique == "true"){
                    
                    //query to select the last element of table so as to generate the Infinito ID
                    //$sql = "SELECT * FROM `infinito2021php` ORDER BY `Serial Number` DESC LIMIT 1";
                    //$result = mysqli_query($conn, $sql);
                    //$row = mysqli_fetch_assoc($result);
                    while(true){
                        //Generating Infinito ID
                        $infno = rand(10000,99999);
                        //Infinito ID
                        $infid = "INF". $infno;
                        $sql = "SELECT * FROM `infinito2021php`";
                        $result = mysqli_query($conn, $sql);
                        $unique = "true";
                        //To check if the email is unique
                        //fetching the rows from the begining and checking if same email exists
                        while($check = mysqli_fetch_assoc($result))
                        {
                            //$cur_infid -> email of current row
                            $cur_infid = $check['InfId'];
                            //checking
                            if($infid == $cur_infid)
                            {
                                $unique = "false";
                                break;
                            }
                        }
                        if($unique == "true")
                        {
                            break;
                        }
                    }
                    //Inserting into the table
                    //$sql = "INSERT INTO `infinito2021php` (`Serial Number`,`InfId`, `Name`, `Email`,`Password`, `College`, `ID`, `Phone Number`, `Gender`, `dt`) VALUES (NULL, '$infid' , '$name', '$email', '$pass', '$clg', '$clgid', '$phno', '$gen', current_timestamp())";
                    //$result = mysqli_query($conn, $sql);
                    //Send a mail
                    
                        //Fetching the Last Record
                        //$sql = "SELECT * FROM `infinito2021php` ORDER BY `Serial Number` DESC LIMIT 1";
                        //$result = mysqli_query($conn, $sql);
                        
                            //$row = mysqli_fetch_assoc($result);
                            $to = $email;
                            $subject = "Infinito 2021 Registration Complete.";
                            $message = "Hello ".$name.",<br>Thank you for registering.<br>You have successfully completed the registration process.<br>".
                                       "Your Infinito 2021 ID is <strong>".$infid."</strong>".
                                       "<br>Kindly note your Infinito ID, it will be required to register for any events.".
                                        "Your Infinito ID is your unique verification ID for the fest.<br>".
                                        "Wish you a great time ahead.".
                                        "<br><br>".
                                        "Regards,<br>".
                                        "Team Infinito";
                            //$headers = 'From: testmailinfinito@gmail.com' . "\r\n" .
                                        //'MIME-Version:1.0'. "\r\n" .
                                        //'Content-Type: text/html; charset=utf-8';
                            require 'PHPMailerAutoload.php';

                            $mail = new PHPMailer;

                            //$mail->SMTPDebug = 4;                               // Enable verbose debug output

                            $mail->isSMTP();                                      // Set mailer to use SMTP
                            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                            $mail->SMTPAuth = true;                               // Enable SMTP authentication
                            $mail->Username = 'testmailinfinito@gmail.com';                 // SMTP username
                            $mail->Password = 'Infinito2k21';                           // SMTP password
                            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                            $mail->Port = 587;                                    // TCP port to connect to

                            $mail->setFrom('testmailinfinito@gmail.com', 'Infinito');
                            $mail->addAddress($email, $name );     // Add a recipient
                            //$mail->addAddress('ellen@example.com');               // Name is optional
                            $mail->addReplyTo('testmailinfinito@gmail.com', 'Information');
                            //$mail->addCC('cc@example.com');
                            //$mail->addBCC('bcc@example.com');

                            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                            $mail->isHTML(true);                                  // Set email format to HTML

                            $mail->Subject = $subject;
                            $mail->Body    = $message;
                            $mail->AltBody = 'You have been successfully registered.';

                            if(!$mail->send()) {
                                echo '<div class="alert alert-success alert-dismissible show" role="alert" style="position:absolute; top:75px; width:100%; color:red; background: #ff000020; " >
                                    <strong>Failed! </strong>'.'Try Again.<br>'.
                                    'Mailer Error: ' . $mail->ErrorInfo.
                                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">x</span>
                                    </button>
                                    </div>';
                                    //$sql = "DELETE FROM `infinito2021php` WHERE `InfId` = '$infid'";
                                   // $result = mysqli_query($conn, $sql);
                                    
                                
                            } else {
                                echo '<div class="alert alert-success alert-dismissible show" role="alert" style="position:absolute; top:75px; width:100%;" >
                                    <strong>Success!</strong> You have been registered successfully!<br>'
                                    .'An email has been sent to <strong>' . $to . '</strong>' .
                                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">x</span>
                                    </button>
                                    </div>';

                                    //**************Redirecting to the confirmation page and inserting there********//


                                //Inserting into the table
                                // $sql = "INSERT INTO `infinito2021php` (`Serial Number`,`InfId`, `Name`, `Email`,`Password`, `College`, `ID`, `Phone Number`, `Gender`, `dt`) VALUES (NULL, '$infid' , '$name', '$email', '$pass', '$clg', '$clgid', '$phno', '$gen', current_timestamp())";
                                // $result = mysqli_query($conn, $sql);
                                
          
                                session_start();
                                $_SESSION['name']=$name;
                                $_SESSION['email']=$email;
                                $_SESSION['infid']=$infid;
                                $_SESSION['clg']=$clg;
                                $_SESSION['oth_clg_name']=$oth_clg_name;
                                $_SESSION['gen']=$gen;
                                $_SESSION['phone']=$phno;
                                $_SESSION['password']=$pass;
                                $_SESSION['clgid']=$clgid;

                                header('location:confirmation.php');
                                exit;
                                
                            }
                        
                        
                        
                }
            }
            else{
                //Passwords do not match
                echo '<div class="alert alert-success alert-dismissible show" role="alert" style="position:absolute; top:75px; width:100%; color:red; background: #ff000020; " >
                                    <strong>Failed! Passwords do not match.</strong>'.'Try Again.'.
                                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">x</span>
                                    </button>
                                    </div>';
            }
        }
        else{
            //College Name not entered
            if($clg == "other")
            {
            echo '<div class="alert alert-success alert-dismissible show" role="alert" style="position:absolute; top:75px; width:100%; color:red; background: #ff000020; " >
                                    <strong>College name not entered.</strong>'.'Try Again.'.
                                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">x</span>
                                    </button>
                                    </div>';
            }
            else
            {
                echo '<div class="alert alert-success alert-dismissible show" role="alert" style="position:absolute; top:75px; width:100%; color:red; background: #ff000020; " >
                                    <strong>College Id/ Roll No. not entered.</strong>'.'Try Again.'.
                                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">x</span>
                                    </button>
                                    </div>';
            }
        }
        }
        }
          

    ?>
    <!-- /.theme-main-header -->
    <div class="container">

        <div id="register" style="padding:5%;padding-top:75px;">
            <div class="theme-title" style="margin-bottom:40px;margin-top:80px;">
                <h2 style="margin-top:0px;">Sign Up</h2>
            </div>

            <div class="signInForm reg_PlayerForm">
            <form method="post" action="/Infinito2020/registerPlayer.php">
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
                    <label for="clgid" class="col-sm-4 col-form-label">College Id / Roll no.</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-new" id="clgid" name="clgid" placeholder="College Id" >
                        <p>*College Id/ Roll No. compulsary if from IIT Patna</p>
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
                        <button type="submit" class="btn btn-primary" name="teamReg">Confirm Registration</button>
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
    <!-- <footer>
        <div class="container">
            <a href="index.php" class="logo"><img src="images/logo/logo.png" alt="Logo" style="border-radius:100%; height:56px; width:56px;" /></a>

            <ul>
                <li>
                    <a href="https://www.facebook.com/InfinitoIITPatna/" target="_blank" class="tran3s round-border"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/company/infinito-iit-patna" target="_blank" class="tran3s round-border"><i class="fab fa-linkedin"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/infinito_iitp/" target="_blank" class="tran3s round-border"><i class="fab fa-instagram"></i></a>
                </li>

            </ul>
        </div>
    </footer> -->


    <!--
    =============================================
        Loading Transition
    =============================================
    -->
    <div id="loader-wrapper">
        <div id="preloader_1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <!-- Scroll Top Button -->
    <button class="scroll-top tran3s p-color-bg">
        <i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i>
    </button>

    <?php
    require('./templates/footer.php')
    ?>

</body>
</html>